<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Models\Question;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('category')->latest()->paginate(10);
        return view('support.support', compact('questions'));
    }


    public function postcreate($id = null)
    {
        $categories = Support::all();
        $question = $id ? Question::findOrFail($id) : null;

        return view('support.postcreate', compact('categories', 'question'));
    }


    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'support_category' => 'required|exists:supports,id',
            'description' => 'required|string',
        ]);

        if ($id) {

            $question = Question::findOrFail($id);
            $question->update([
                'support_category' => $request->support_category,
                'description' => $request->description,
            ]);
            return redirect()->route('support.index')->with('success', 'Question updated successfully!');
        } else {

            Question::create([
                'support_category' => $request->support_category,
                'description' => $request->description,
            ]);
            return redirect()->route('support.index')->with('success', 'Question added successfully!');
        }
    }


    public function category()
    {
        $categories = Support::all();
        return view('support.categorylist', compact('categories'));
    }

    public function createcategory($id = null)
    {
        $category = null;

        if ($id) {
            $category = Support::findOrFail($id);
        }

        return view('support.createcategory', compact('category'));
    }


    public function storecategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Support::create([
            'title' => $request->title,
        ]);

        return redirect()->route('support.category')->with('success', 'Category added successfully!');
    }

    public function edit($id)
    {
        $category = Support::findOrFail($id);
        return view('support.createcategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $category = Support::findOrFail($id);
        $category->title = $request->title;
        $category->save();

        return redirect()->route('support.category')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = Support::findOrFail($id);
        $category->delete();

        return redirect()->route('support.category')->with('success', 'Category deleted successfully!');
    }


    public function questiondestroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('support.index')->with('success', 'Question deleted successfully!');
    }
}
