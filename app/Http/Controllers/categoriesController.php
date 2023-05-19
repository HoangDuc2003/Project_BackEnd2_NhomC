<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\RedirectResponse;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Categories;
 use Illuminate\View\View;
//  use Hash;
//  use Session;
//  use DB;
  
 class CategoriesController extends Controller
 {
  
     public function index()
     {
        $categories = Categories::all();
        return view ('categories.index')->with('categories', $categories);
     }

    public function create():View
    {
        return view('categories.create');
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        Categories::create([
           "cate_name"=> $request->name
        ]);
        return redirect('categories')->with('flash_message', 'Student Addedd!');
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
         $categories->update([
            "cate_name"=> $request->name
         ]);
         return redirect('categories')->with('flash_message', 'categories Updated!');  
     }
  
     
     public function destroy(string $id): RedirectResponse
     {
         Categories::destroy($id);
         return redirect('categories')->with('flash_message', 'categories deleted!');
     }
 }