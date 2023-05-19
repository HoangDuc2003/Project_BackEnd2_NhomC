<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\RedirectResponse;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Seat;
 use Illuminate\View\View;
//  use Hash;
//  use Session;
//  use DB;
  
 class SeatController extends Controller
 {
  
     public function index()
     {
        $seat = Seat::all();
        return view ('seat.index')->with('seat', $seat);
     }
  
    //  public function create(Request $request)
    //  {
    //      Categories::create([
    //         'cate_name' => $request->name
    //      ]);
    //      return redirect('categories')->with('flash_message', 'Categories Addedd!');
    //  }

    public function create(Request $request)
    {
        Seat::create([
            "status" => "21"
         ]);
         $seat = Seat::all();
        return view('seat.index')->with('seat', $seat);
    }
 
  
    // public function store(Request $request): RedirectResponse
    // {
    //     $input = $request->all();
    //     Categories::create([
    //        "cate_name"=> "asas"
    //     ]);
    //     return redirect('categories')->with('flash_message', 'Student Addedd!');
    // }
  
  
     public function show(string $id): View
     {
         $categories = Categories::find($id);
         return view('categories.show')->with('categories', $categories);
     }
  
     public function edit(string $id): View
     {
         $categories = Categories::find($id);
         return view('categories.edit')->with('categories', $categories);
     }
  
     public function update(Request $request, string $id): RedirectResponse
     {
         $categories = Categories::find($id);
         $input = $request->all();
         $categories->update($input);
         return redirect('categories')->with('flash_message', 'categories Updated!');  
     }
  
     
     public function destroy(string $id): RedirectResponse
     {
         Categories::destroy($id);
         return redirect('categories')->with('flash_message', 'categories deleted!');
     }
 }