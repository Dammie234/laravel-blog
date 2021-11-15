<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = DB::table('posts')
                    ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->select('posts.*', 'categories.name', 'users.name as user_name')
                    ->get();
        return view('pages.home', compact('posts'));
    }
    public function users()
    {
        $users  = User::where('role', 2)->get();
        return view('pages.users', compact('users'));
    }
}
