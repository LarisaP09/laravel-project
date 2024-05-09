<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 

class UserDataController extends Controller
{
    public function __invoke()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('pages.user_data', ['user' => $user]);
        } else {
            return redirect()->route('login');
        }
    }
}
