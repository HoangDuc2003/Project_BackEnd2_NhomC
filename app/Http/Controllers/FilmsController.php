<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\RedirectResponse;
 use Illuminate\Http\Request;
 use App\Models\films;
 use Illuminate\View\View;
 use DB;
  
 class FilmsController extends Controller
 {
  
     public function index()
     {
         $films = DB::table('films')->get();
         return view('films.index',compact('films'));
     }
  
     public function create():View
     {
         return view('films.create');
     }
  
   
     public function store(Request $request): RedirectResponse
     {
        $file = $request -> film_file;
        $filename = $file->getClientoriginalName();
        $file -> move(public_path('upload'),$filename);
        Films::create([
            "film_name"=> $request->name, 
            "film_image"=> $filename, 
            "film_author"=>$request->film_author, 
            "film_type"=>$request->film_type, 
            "film_description"=>$request->film_description, 
            "film_date"=>$request->film_date
        ]);
        return redirect('films')->with('flash_message', 'films Addedd!');
     }

    public function seach_films():View
    {
         return view('films.index');
    }

    public function seach(Request $request,string $key): RedirectResponse
    {
        $key = $request->key;
        $listfilms = Films::where("film_name", "%$key%");
        return redirect('films.seach_films')->with('listfilms',$listfilms);  
    }
  
     public function show(string $id): View
     {
        $films = Films::find($id);
        return view('films.show')->with('films', $films);
     }
  
     public function edit(string $id): View
     {
         $films = Films::find($id);
         return view('films.edit')->with('films', $films);
     }
  
     public function update(Request $request, string $id): RedirectResponse
     {
        $file = $request -> film_file;
        $filename = $file->getClientoriginalName();
        $file -> move(public_path('upload'),$filename);
         $films = Films::find($id);
         $films->update([
            "film_name"=> $request->name, 
            "film_image"=> $filename, 
            "film_author"=>$request->film_author, 
            "film_type"=>$request->film_type, 
            "film_description"=>$request->film_description, 
            "film_date"=>$request->film_date
         ]);
         return redirect('films')->with('flash_message', 'Films Updated!');  
     }
  
     
    public function destroy(string $id): RedirectResponse
    {
        Films::destroy($id);
        return redirect('films')->with('flash_message', 'Films deleted!');
    }

    //public function 
 }