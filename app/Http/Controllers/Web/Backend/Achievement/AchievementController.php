<?php

namespace App\Http\Controllers\Web\Backend\Achievement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Backend\Achievement\AchievementRequest;
use App\Models\Achievement;
use App\Models\AchievementType;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Yajra\DataTables\DataTables;
use File;
use \Illuminate\Support\Carbon;

class AchievementController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Prestasi Mahasiswa',
            'mods' => 'achievement',
            'achievementTypes' => AchievementType::all()
        ];

        return customView('achievement.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Achievement::with(['achievementType'])->get())->addColumn('achievement_type', function ($data) {
            return $data->achievementType->name;
        })->addColumn('hashid', function ($data) {
            return Hashids::encode($data->id);
        })->make(true);
    }

    public function show(Achievement $achievement)
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $achievement,
                'achievement_type' => Hashids::encode($achievement->achievement_type)
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ]);
        }
    }

    public function store(AchievementRequest $request)
    {
        try {
            if ($request->hasFile('file')) {
                $image = $this->uploadImage($request);
            } else {
                $image = null;
            }
            // dd(Hashids::decode($request->achievement_type_id));
            $id = Hashids::decode($request->achievement_type_id);
            $tanggal = Carbon::parse($request->date)->translatedFormat('Y-m-d');
            // dd($tanggal);
            Achievement::create([
                'achievement_type_id' => $id [0],
                'achievement_level_id' => 1,
                'user_id' => getInfoLogin()->id,
                'title' => $request->title,
                'location' => $request->location,
                'date' => $tanggal,
                'image' => $image,
                'description' => $request->description,
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

    public function update(AchievementRequest $request, Achievement $achievement)
    {
        try {
            if ($request->hasFile('file')) {
                File::delete(public_path('storage/images/prestasi/achievement/' . $achievement->image));
                $image = $this->uploadImage($request);
            } else {
                $image = $achievement->image;
            }
            $id = Hashids::decode($request->achievement_type_id);
            $tanggal = Carbon::parse($request->date)->translatedFormat('Y-m-d');
            $achievement->update([
                'title' => $request->title,
                'location' => $request->location,
                'achievement_level_id' => 1,
                'achievement_type_id' => $id [0],
                'date' => $tanggal,
                'image' => $image,
                'description' => $request->description,
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

    public function destroy(Achievement $achievement)
    {
        try {
            if ($achievement->image != null && file_exists(public_path('storage/images/prestasi/achievement/' . $achievement->image))) {
                File::delete(public_path('storage/images/prestasi/achievement/' . $achievement->image));
            }
            $achievement->delete();
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
        $path = public_path('storage/images/prestasi/achievement');
        $image = $request->file('file');
        $filename = 'Achievements_' . rand(0, 9999999999) . '_' . rand(0, 9999999999) . '.';
        $filename .= $image->getClientOriginalExtension();
        $image->move($path, $filename);
        return $filename;
    }
}
