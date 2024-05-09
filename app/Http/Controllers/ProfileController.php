<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use PDOException;

class ProfileController extends Controller
{
    public function show(User $user)
    {
      
        if (!auth()->check()) {
            return redirect()->route('login'); 
        }
    
        $user = auth()->user();
    
        if (!$user) {
            abort(404);
        }
    
        $user->user_fullname = $user->user_firstname . ' ' . $user->user_lastname;
    
        return view('pages.user_data', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
{
    try {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'User not found');
        }
        
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found');
        }

        $user->user_lastname = $request->input('last_name');
        $user->user_firstname = $request->input('first_name');
        $user->user_username = $request->input('username');

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    } catch (\Exception $e) {
        return back()->withInput()->withErrors(['error' => 'Error updating profile: ' . $e->getMessage()]);
    }
}

public function delete(Request $request)
{
    try {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'User not found');
        }

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found');
        }

        $messages = $user->messages;

        foreach ($messages as $message) {
            $message->delete();
        }
        $user->delete();

        Auth::logout();
        return redirect()->route('login')->with('success', 'Profile deleted successfully');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Error deleting profile: ' . $e->getMessage()]);
    }
}


}
