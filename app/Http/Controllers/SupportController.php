<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\PromotionCode;
use App\Models\User;
use App\Models\Content;
use Illuminate\Support\Facades\Http;


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

    public function contents(Request $request)
{

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string',
        'content_message' => 'required|string',
        'g-recaptcha-response' => 'required'
    ]);

   
    $recaptchaSecret = env('GOOGLE_RECAPTCHA_SECRET');
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => $recaptchaSecret,
        'response' => $request->input('g-recaptcha-response')
    ]);

    $responseData = $response->json();

    if (!$responseData['success']) {
        return response()->json([
            'status' => 'error',
            'message' => 'reCAPTCHA verification failed. Please try again.'
        ], 422);
    }

    
    $content = Content::create($validatedData);

    return response()->json([
        'status' => 'success',
        'message' => 'Your message has been successfully submitted.',
        'data' => $content,
    ], 201);
}
    

    public function supportPage()
    {
        $supports = Support::with(['questions' => function ($query) {
            $query->whereNotNull('description')->where('description', '!=', '');
        }])->get()->filter(function ($support) {
            return $support->questions->isNotEmpty();
        });

        return view('contact', compact('supports'));
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

    
    public function promoshow(){
      return view('resturant.promotion');
    }
     
    public function search(Request $request)
{
    $request->validate([
        'code' => 'required|string',
    ]);

    // Retrieve the promotion code from the request body
    $promoCode = $request->input('code');

    $promotion = PromotionCode::where('code', $promoCode)
        ->with('user') // Load the user relationship
        ->first();

    if (!$promotion) {
        return response()->json([
            'success' => false,
            'message' => 'Promotion code not found',
        ], 404);
    }

    return response()->json([
        'success' => true,
        'data' => [
            'promotion_code' => $promotion->code,
            'expires_at' => $promotion->expires_at,
            'status' => $promotion->status,
            'user' => [
                'id' => $promotion->user->id,
                'first_name' => $promotion->user->first_name,
                'last_name' => $promotion->user->last_name,
                'email' => $promotion->user->email,
                'address' => $promotion->user->address,
                'postal_code' => $promotion->user->postal_code,
                'phone' => $promotion->user->phone,
            ],
        ],
    ]);
}




    public function updatePromo(Request $request)
    {
      
        $request->validate([
            'code' => 'required|string|exists:promotion_codes,code',
        ]);


        $promotion = PromotionCode::where('code', $request->code)->first();

        if (!$promotion) {
            return response()->json([
                'success' => false,
                'message' => 'Promotion code not found',
            ], 404);
        }

      
        $promotion->update(['status' => 1]);

        return response()->json([
            'success' => true,
            'message' => 'Promotion status updated successfully',
            'data' => [
                'code' => $promotion->code,
                'status' => $promotion->status,
            ]
        ]);
    }
}
