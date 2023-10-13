<?php

namespace App\Http\Controllers\Web\Backend\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Backend\Event\EventRequest;
use Illuminate\Http\Request;
use App\Models\Event;
use Exception;
use Illuminate\Database\QueryException;
use Vinkla\Hashids\Facades\Hasids;
use Yajra\DataTables\DataTables;
use File;
use Vinkla\Hashids\Facades\Hashids;

class EventController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Event dan Berita',
            'mods' => 'event',
        ];
        return customView('event.index', $data, 'backend');
    }
    public function getData()
    {
        return DataTables::of(Event::query())->addColumn('hashid',function($data){
            return Hashids::encode($data->id);
        })->make(true);
    }
    public function show(Event $event)
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $event,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ]);
        }
    }
    public function store(EventRequest $request)
    {
        try {
            if ($request->hasFile('file')) {
                $image = $this->uploadImage($request);
            } else {
                $image = '-';
            }
            Event::create([
                'user_id' => getInfoLogin()->id,
                'title' => $request->title,
                'thumbnail' => $image,
                'summary' => $request->summary,
                'content' => $request->content,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'slug' => $request->slug,
                'attachment' => $request->attachment
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

    public function update(EventRequest $request, Event $event)
    {
        try {
            if ($request->hasFile('thumbnail')) {
                File::delete(public_path('storage/events/' . $event->thumbnail));
                $attachment = $this->uploadImage($request);
               
            } else {
                $attachment = $event->thumbnail;

                
            }
            $event->update([
                'user_id' => getInfoLogin()->id,
                'title' => $request->title,
                'thumbnail' => $attachment,
                'summary' => $request->summary,
                'content' => $request->content,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'slug' => $request->slug,
                'attachment' => $request->attachment,
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

    public function destroy(Event $event)
    {
        try {
            if ($event->file != null && file_exists(public_path('storage/events/' . $event->file))) {
                File::delete(public_path('storage/events/' . $event->file));
            }
            $event->delete();
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

    public function updateStatus(Event $event)
    {
        if (Request::ajax()) {
            try {
                $event->update(['is_publish' => $event->is_publish == true ? false : true, 'published_at' => Carbon::now()]);

                return response()->json([
                    'message' => 'Data telah diperbarui'
                ]);
            } catch (Exception $e) {
                return response()->json([
                    'message' => $e->getMessage(),
                    'trace' => $e->getTrace()
                ], 500);
            }
        } else {
            abort(403);
        }
    }
    private function uploadImage(Request $request)
    {
        $path = public_path('storage/events/');
        $thumbnail = $request->file('thumbnail');
        $filename = 'Event_' . rand(0, 9999999999) . '_' . rand(0, 9999999999) . '.';
        $filename .= $thumbnail->getClientOriginalExtension();
        $thumbnail->move($path, $filename);
        return $filename;
    }
}
