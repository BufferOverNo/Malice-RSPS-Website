<?php

namespace App\Http\Controllers;

use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $data = [
            'user_id'   => $user_id,
            'user'      => $user,
            'title'     => $title = 'Welcome to the OutLawz Dashboard',
            'posts'     => $user->posts
        ];
        return view('dashboard')->with('data', $data);
    }
}
