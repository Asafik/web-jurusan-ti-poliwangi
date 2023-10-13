<?php

namespace App\Http\Controllers\Web\Backend\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Backend\Employee\EmployeeRequest;
use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Yajra\DataTables\DataTables;
use File;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Staff',
            'mods' => 'employee',
            'employeeTypes' => EmployeeType::all()
        ];

        return customView('employee.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Employee::with(['employeeType'])->get())->addColumn('employee_type', function ($data) {
            return $data->employeeType->name;
        })->addColumn('hashid', function ($data) {
            return Hashids::encode($data->id);
        })->make(true);
    }

    public function show(Employee $employee)
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $employee,
                'employee_type' => Hashids::encode($employee->employee_type_id)
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ]);
        }
    }

    public function store(EmployeeRequest $request)
    {
        try {
            $check = Employee::where('identity_number', $request->identity_number)->get();

            if ($check->count() > 0) {
                return response()->json([
                    'message' => 'Nomor identitas sudah digunakan',
                ], 500);
            }
            if ($request->hasFile('file')) {
                $picName = $this->uploadImage($request);
            } else {
                $picName = null;
            }
            Employee::create([
                'employee_type_id' => Hashids::decode($request->employee_type)[0],
                'user_id' => getInfoLogin()->id,
                'identity_number' => $request->identity_number,
                'name' => $request->name,
                'gender' => $request->gender,
                'image' => $picName
            ]);
            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        try {
            if ($request->identity_number != $employee->identity_number) {
                $check = Employee::where('identity_number', $request->identity_number)->get();
                if ($check->count() > 0) {
                    return response()->json([
                        'message' => 'Nomor identitas sudah digunakan',
                    ], 500);
                }
            }
            if ($request->hasFile('file')) {
                File::delete(public_path('storage/images/employees/' . $employee->image));
                $picName = $this->uploadImage($request);
            } else {
                $picName = $employee->image;
            }

            $employee->update([
                'identity_number' => $request->identity_number,
                'name' => $request->name,
                'gender' => $request->gender,
                'employee_type_id' => Hashids::decode($request->employee_type)[0],
                'image' => $picName
            ]);
            return response()->json([
                'message' => 'Data telah diubah'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    public function destroy(Employee $employee)
    {
        try {
            if ($employee->image != null && file_exists(public_path('storage/images/employees/' . $employee->image))) {
                File::delete(public_path('storage/images/employees/' . $employee->image));
            }
            $employee->delete();
            return response()->json([
                'message' => 'Data telah dihapus',
            ]);
        } catch (QueryException $e) {
            if ($e->getCode() == '23000') {
                return response()->json([
                    'message' => 'Data tidak dapat dihapus karena sudah digunakan',
                ], 500);
            } else {
                return response()->json([
                    'message' => $e->getMessage(),
                    'trace' => $e->getTrace()
                ], 500);
            }
        }
    }

    private function uploadImage(Request $request)
    {
        $path = public_path('storage/images/employees');
        $file = $request->file('file');
        $filename = 'Employees_' . rand(0, 9999999999) . '_' . rand(0, 9999999999) . '.';
        $filename .= $file->getClientOriginalExtension();
        $file->move($path, $filename);
        return $filename;
    }
}
