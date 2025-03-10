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
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
    ]);

    // Handle image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('menus', 'public'); // Save image to storage
    }

    if ($id) {
        // Update existing menu
        $menu = Menu::findOrFail($id);
        $menu->update([
            'menu' => $request->menu,
            'image' => $imagePath ?? $menu->image, // Keep existing image if no new image is uploaded
        ]);
        return redirect()->route('menu.index')->with('success', 'Menu updated successfully!');
    } else {
        // Create new menu
        Menu::create([
            'menu' => $request->menu,
            'image' => $imagePath, // Save image path
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
