<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller {
    public function index() {
        $categories = Category::latest()->paginate(10);
        return view('resturant.categories', compact('categories'));
    }

    public function create() {
        return view('resturant.category');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $destinationPath = public_path('assets/category');
            
            // Create directory if not exists
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // Store image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);

            $imagePath = 'assets/category/' . $imageName;
        }

        Category::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    public function edit(Category $category) {
        return view('resturant.category', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $imagePath = $category->image;
        if ($request->hasFile('image')) {
            $destinationPath = public_path('assets/category');
            
            // Create directory if not exists
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // Delete old image if exists
            if ($category->image && File::exists(public_path($category->image))) {
                File::delete(public_path($category->image));
            }

            // Store new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);

            $imagePath = 'assets/category/' . $imageName;
        }

        $category->update([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category) {
        if ($category->image && File::exists(public_path($category->image))) {
            File::delete(public_path($category->image));
        }
        
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
