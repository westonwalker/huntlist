<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\PlaceFilter;
use App\Models\Subscriber;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $places = Place::orderByDesc('overall_score')->get();
        $filters = PlaceFilter::all()->toArray();
        foreach ($places as $place) {
            $filters[] = [
                'id' => $place->id,
                'name' => $place->name,
                'type' => 'place',
                'slug' => $place->slug,
                'emoji' => '',
            ];
        }
        return view('pages.home', ['places' => $places, 'filters' => $filters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contribute()
    {
        return view('pages.contribute');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {
        return view('pages.subscribe');
    }

    public function storeSubscriber(Request $request)
    {
        $request->validate(
            ['email' => 'required|unique:subscribers'],
            ['email.unique' => 'This email is already subscribed']
        );
        Subscriber::create([
            'email' => $request['email'],
        ]);
        return redirect(route('pages.subscribe'))->with('success', 'Thank you for subscribing 😄');
    }
}