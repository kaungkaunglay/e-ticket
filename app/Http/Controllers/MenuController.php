<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.show', compact('menus'));
    }

    public function manage(Request $request, $id = null)
    {
        $menu = $id ? Menu::findOrFail($id) : null;
        return view('menu.create', compact('menu'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'menu' => 'required|string|max:255',
        ]);

        if ($id) {
            $menu = Menu::findOrFail($id);
            $menu->update([
                'menu' => $request->menu,
            ]);
            return redirect()->route('menu.index')->with('success', 'Menu updated successfully!');
        } else {
            Menu::create([
                'menu' => $request->menu,
            ]);
            return redirect()->route('menu.index')->with('success', 'Menu created successfully!');
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
