<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->guard('pengguna')->user();
        return view('pages/AccountView', compact('user'));
    }

    
}
