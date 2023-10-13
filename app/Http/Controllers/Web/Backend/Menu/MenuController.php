<?php

namespace App\Http\Controllers\Web\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Menu',
            'mods' => 'menu',
            'menus' => Menu::whereIn('level', ['1', '2'])->get()
        ];

        return customView('menu.index', $data, 'backend');
    }

    public function store(AchievementLevelRequest $request)
    {
        try {
            // Menu::create([
            //     'name' => $request->name,
            //     'link' => $request->link,
            //     'order' => 0,
            //     'is_parent' => '',
            //     'parent' => '',
            //     'level' => '',
            //     'link_target' => '',
            //     'is_footer' => false,
            //     'is_active' => false,
            //     'is_external_link' => false
            // ]);
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
    public function updateStatus(Menu $menu)
    {
        if (\Request::ajax()) {
            try {
                $menu->update(['is_active' => $menu->is_active == true ? false : true]);

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
}
