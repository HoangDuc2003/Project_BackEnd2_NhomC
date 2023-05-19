<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\RedirectResponse;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Room;
 use Illuminate\View\View;
 use Hash;
 use Session;
 use DB;
  
 class RoomController extends Controller
 {
  
     public function index()
     {
         $room = DB::table('room')->get();
         return view('room.index',compact('room'));
     }
  
     public function create(): View
    {
        return view('room.create');
    }
  
   
     public function store(Request $request): RedirectResponse
     {
         Room::create([
            "room_name" => $request->name,
            "room_quantity" => $request->quantity
         ]);
         return redirect('room')->with('flash_message', 'Room Addedd!');
     }
  
     public function edit(string $id): View
     {
         $room = Room::find($id);
         return view('room.edit')->with('room', $room);
     }
  
     public function update(Request $request, string $id): RedirectResponse
     {
         $room = Room::find($id);
         $room->update([
            "room_name" => $request->name,
            "room_quantity" => $request->quantity
         ]);
         return redirect('room')->with('flash_message', 'Room Updated!');  
     }
  
     
     public function destroy(string $id): RedirectResponse
     {
         Room::destroy($id);
         return redirect('room')->with('flash_message', 'room deleted!');
     }
 }