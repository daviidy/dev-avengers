<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Project;
use App\Meetup;

class HomeController extends Controller
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
        return view('home');
    }

    public function bienvenue()
    {
        $posts = Post::orderby('id', 'asc')->paginate(30);
        $meetups = Meetup::orderby('id', 'asc')->paginate(30);
        $projects = Project::orderby('id', 'asc')->paginate(30);
        return view('bienvenue', ['posts' => $posts, 'meetups' => $meetups, 'projects' => $projects]);
    }
}
