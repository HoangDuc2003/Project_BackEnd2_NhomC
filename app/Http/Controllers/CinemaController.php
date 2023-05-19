<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cinemas;
use Illuminate\View\View;

class CinemaController extends Controller
{

    public function index()
    {
        $cinemas = Cinemas::all();
        return view('cinemas.index')->with('cinemas', $cinemas);
    }

    public function create(): View
    {
        return view('cinemas.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $file = $request->file;
        $filename = $file->getClientoriginalName();
        $file->move(public_path('upload'), $filename);
        Cinemas::create([
            "cinema_name" => $request->cinema_name,
            "cinema_image" => $filename,
            "cinema_address" => $request->cinema_address
        ]);
        return redirect('cinemas')->with('flash_message', 'cinemas Addedd!');
    }

    public function edit(string $id): View
    {
        $cinemas = Cinemas::find($id);
        return view('cinemas.edit')->with('cinemas', $cinemas);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $cinemas = Cinemas::find($id);
        $file = $request->file;
        $filename = $file->getClientoriginalName();
        $file->move(public_path('upload'), $filename);
        $cinemas->update([
            "cinema_name" => $request->cinema_name,
            "cinema_image" => $filename,
            "cinema_address" => $request->cinema_address
        ]);
        return redirect('cinemas')->with('flash_message', 'cinemas Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Cinemas::destroy($id);
        return redirect('cinemas')->with('flash_message', 'Cinemas deleted!');
    }
}
