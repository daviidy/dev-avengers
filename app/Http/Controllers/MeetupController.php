<?php

namespace App\Http\Controllers;

use App\Meetup;
use Auth;
use App\User;
use Image;
use Illuminate\Http\Request;

class MeetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $meetups = Meetup::orderby('begin_date', 'asc')->paginate(30);
            return view('meetups.default.index', ['meetups' => $meetups]);
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
        if (Auth::check()) {
            return view('meetups.default.create');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meetup = Meetup::create($request->all());
        if ($request->hasFile('image') ) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(storage_path('app/public/images/meetups/'.$filename));
            $meetup->image = $filename;
            $meetup->save();
        }
        $meetup->users()->attach(Auth::user());
        return redirect('meetups')->with('status', 'Votre événement a été crée avec succès');
    }


    /**
     * register to an event.
     *
     * @param  \App\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function registerEvent(Meetup $meetup)
    {
        if (Auth::check() && !Auth::user()->meetups->contains($meetup->id)) {
            $meetup->users()->attach(Auth::user());
            return redirect('meetups')->with('status', 'Votre participation à l\'événement '.$meetup->name.' a bien été pris en compte.');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function show(Meetup $meetup)
    {
        return view('meetups.default.show', ['meetup' => $meetup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function edit(Meetup $meetup)
    {
        return view('meetups.default.edit', ['meetup' => $meetup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meetup $meetup)
    {
        $meetup->update($request->all());
        if ($request->hasFile('image') ) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(storage_path('app/public/images/meetups/'.$filename));
            $meetup->image = $filename;
            $meetup->save();
        }
        return redirect()->back()->with('status', 'Votre événement a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meetup  $meetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetup $meetup)
    {
        $meetup->delete();
        return redirect('meetups')->with('status', 'Votre événement a été supprimé avec succès');
    }
}
