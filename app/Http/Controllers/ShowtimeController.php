<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Showtimes;
use Illuminate\View\View;
//  use Hash;
//  use Session;
//  use DB;

class ShowtimeController extends Controller
{

    public function index()
    {
        $showtimes = Showtimes::all();
        return view('showtimes.index')->with('showtimes', $showtimes);
    }

    public function create(): View
    {
        return view('showtimes.create');
    }


    public function store(Request $request): RedirectResponse
    {
        Showtimes::create([
            "showtime_room" => $request->room,
            "showtime_film" => $request->film,
            "showtime_time" => $request->time
        ]);
        return redirect('showtimes')->with('flash_message', 'showtimes Addedd!');
    }

    public function edit(string $id): View
    {
        $showtimes = Showtimes::find($id);
        return view('showtimes.edit')->with('showtimes', $showtimes);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $showtimes = Showtimes::find($id);
        $showtimes->update([
            "showtime_room" => $request->room,
            "showtime_film" => $request->film,
            "showtime_time" => $request->time
        ]);
        return redirect('showtimes')->with('flash_message', 'showtimes Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Showtimes::destroy($id);
        return redirect('showtimes')->with('flash_message', 'showtimes deleted!');
    }
}
