<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\PromotionCode;
use Illuminate\Support\Facades\Auth;
use App\Mail\VendorConfirmationMail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.dashboard');
    }
    
    public function show()
    {
        
        $user = Auth::user();
        return view('user.dashboard', compact('user'));
    } 
    
    public function profileupdate(Request $request)
{
   
    $validator = Validator::make($request->all(), [
        'id' => 'required|exists:users,id', 
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255|unique:users,email,' . $request->id, 
        'postal_code' => 'nullable|string|max:20',  
        'address' => 'nullable|string|max:255',     
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'errors' => $validator->errors()
        ], 422);
    }


    $user = User::find($request->id);

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'User not found',
        ], 404);
    }


    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    

    if ($request->has('postal_code')) {
        $user->postal_code = $request->postal_code;
    }

    if ($request->has('address')) {
        $user->address = $request->address;
    }
    
    $user->save(); 

    return response()->json([
        'success' => true,
        'message' => 'Profile updated successfully',
        'user' => $user
    ], 200);
}


public function userpassword(Request $request) {
    $request->validate([
        'id' => 'required|exists:users,id',  
        'old_password' => 'required|string', 
        'new_password' => 'required|string|min:8|confirmed', 
    ]);
    $user = User::find($request->id);
    if (!\Hash::check($request->old_password, $user->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'The provided old password is incorrect.'
        ], 400);
    }
    $user->password = \Hash::make($request->new_password);
    $user->save(); 

    return response()->json([
        'status' => 'success',
        'message' => 'Password updated successfully!'
    ], 200); 

}

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   
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
