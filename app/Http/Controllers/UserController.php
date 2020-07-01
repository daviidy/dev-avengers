<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Meetup;
use App\Project;
use Auth;
use Image;
use PDF;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function bienvenue()
    {
        $posts = Post::orderby('id', 'asc')->paginate(30);
        $meetups = Meetup::orderby('id', 'asc')->paginate(30);
        $projects = Project::orderby('id', 'asc')->paginate(30);
        return view('maintenance', ['posts' => $posts, 'meetups' => $meetups, 'projects' => $projects]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * When user wants to see jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function seeJobs()
    {
        if (Auth::check()) {
            return view('jobs.default.index');
        }
        else {
            return redirect('home');
        }
    }


    /**
     * When user wants to see jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobs($job)
    {
        if (Auth::check()) {
            $job_db = str_replace("+", " ", $job);
            $users = User::where('job', $job_db)->get();
            return view('jobs.default.users', ['users' => $users, 'job' => $job_db]);
        }
        else {
            return redirect('home');
        }
    }


    /**
     * When user wants to see countries.
     *
     * @return \Illuminate\Http\Response
     */
    public function seeCountries()
    {
        if (Auth::check()) {
            /*
            $users1 = DB::table('users')
              ->where('living_country', 'like', '%'.Auth::user()->living_country.'%')
              ->orderBy('id', 'asc')
              ->get();
              $users2 = DB::table('users')
                ->where('birth_country', 'like', '%'.Auth::user()->birth_country.'%')
                ->orderBy('id', 'asc')
                ->get();
                */
            return view('countries.default.index');
        }
        else {
            return redirect('home');
        }
    }


    public function countries($country)
    {
        if (Auth::check()) {
            $country_db = str_replace("+", " ", $country);
            $users = DB::table('users')
              ->where('living_country', 'like', '%'.$country_db.'%')
              ->orderBy('id', 'asc')
              ->get();
            //$users = User::where('living_country', $country_db)->get();
            return view('countries.default.users', ['users' => $users, 'country' => $country_db]);
        }
        else {
            return redirect('home');
        }
    }


    /**
     * When user wants to see villages.
     *
     * @return \Illuminate\Http\Response
     */
    public function seeVillages()
    {
        if (Auth::check()) {
            if (Auth::user()->father_birth_country == 'CIV') {
                return view('villages.default.ivory_coast');
            }
            else {
                /*
                $users = DB::table('users')
                  ->where('father_town', 'like', '%'.Auth::user()->father_town.'%')
                  ->orderBy('id', 'asc')
                  ->get();
                  */
                 $users = User::orderby('id', 'asc')->get();

                return view('villages.default.index', ['users' => $users,]);
            }
        }
        else {
            return redirect('home');
        }
    }


    /**
     * When user wants to see village users.
     *
     * @return \Illuminate\Http\Response
     */
    public function villages($village)
    {
        if (Auth::check()) {
            $region = str_replace("+", " ", $village);
            $users = User::where('town', $region)->get();
            return view('villages.default.users', ['users' => $users, 'region' => $region]);

        }
        else {
            return redirect('home');
        }
    }

    /**
     * When user wants to download his informations.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadInfos()
    {
        if (Auth::check()) {
            $data = [
                'username' => Auth::user()->name,
                'image' => Auth::user()->image,
                'birth_city' => Auth::user()->birth_city,
                'birth_country'=>Auth::user()->birth_country,
                'birth_state'=>Auth::user()->birth_state,
                'birth_city'=>Auth::user()->birth_city,
                'living_country'=>Auth::user()->living_country,
                'living_city'=>Auth::user()->living_city,
                'living_state'=>Auth::user()->living_state,
                'zip_code'=>Auth::user()->zip_code,
                'marital_status'=>Auth::user()->marital_status,
                'children_number'=>Auth::user()->children_number,
                'mobile_tel'=>Auth::user()->mobile_tel,
                'father_last_name'=>Auth::user()->father_last_name,
                'father_traditional_first_name'=>Auth::user()->father_traditional_first_name,
                'father_other_name'=>Auth::user()->father_other_name,
                'father_birth_country'=>Auth::user()->father_birth_country,
                'father_birth_state'=>Auth::user()->father_birth_state,
                'father_birth_city'=>Auth::user()->father_birth_city,
                'father_town'=>Auth::user()->father_town,
                'father_children_number'=>Auth::user()->father_children_number,
                'mother_last_name'=>Auth::user()->mother_last_name,
                'mother_traditional_first_name'=>Auth::user()->mother_traditional_first_name,
                'mother_other_name'=>Auth::user()->mother_other_name,
                'mother_birth_country'=>Auth::user()->mother_birth_country,
                'mother_birth_state'=>Auth::user()->mother_birth_state,
                'mother_birth_city'=>Auth::user()->mother_birth_city,
                'mother_town'=>Auth::user()->mother_town,
                'mother_children_number'=>Auth::user()->mother_children_number,
                'mother_other_name'=>Auth::user()->mother_other_name,
                'type'=>Auth::user()->type,
                'job'=>Auth::user()->job,
            ];

            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'helvetica']);
            $pdf = PDF::loadView('pdf.certificate', $data);
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download('extrait_de_naissance.pdf');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::check()) {
            return view('users.default.show', ['user' => $user,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
            return view('users.default.edit', ['user' => $user,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (Auth::check()) {
            $user->update($request->all());
            if ($request->hasFile('cover_image') ) {
                $image = $request->file('cover_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/covers/'.$filename));
                $user->cover_image = $filename;
                $user->save();
            }
            return redirect('/users/'.$user->id.'/edit')->with('status', 'Votre profil a été modifié avec succès');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * add countries.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCountries(Request $request)
    {
        if (Auth::check()) {
            $user = User::find($request->user_id);
            $user->update($request->all());

            return redirect('/seeCountries');
        }
        else {
            return redirect('home');
        }
    }


    /**
     * add countries.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addVillage(Request $request)
    {
        if (Auth::check()) {
            $user = User::find($request->user_id);
            $user->update($request->all());

            return redirect('/seeVillages');
        }
        else {
            return redirect('home');
        }
    }

    //upload avatar with ajax
    public function uploadAvatar(Request $req)
    {
              $user = User::find($req->id_user);
              $user->update($req->all());

                $image = $req->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/'.$filename));
                $user->image = $filename;
                $user->save();


          return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
