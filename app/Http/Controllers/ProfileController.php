<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function getUser()
    {
    	$userId = Auth::user()->id;
    	$user = User::findOrFail($userId);

    	return ['data' => $user];
    }
}
