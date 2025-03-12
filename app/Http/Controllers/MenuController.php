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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Unique name
            $destinationPath = public_path('assets/category'); // Destination path
    
            $image->move($destinationPath, $imageName); // Move file to public/assets/category
            $imagePath = 'assets/category/' . $imageName; // Save relative path in DB
        }
    
        if ($id) {
            // Update existing menu
            $menu = Menu::findOrFail($id);
            $menu->update([
                'menu' => $request->menu,
                'image' => $imagePath ?? $menu->image, // Keep old image if none uploaded
            ]);
            return redirect()->route('menu.index')->with('success', 'Menu updated successfully!');
        } else {
            // Create new menu
            Menu::create([
                'menu' => $request->menu,
                'image' => $imagePath, // Save new image path
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
