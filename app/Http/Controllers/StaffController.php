<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\RedirectResponse;
 use Illuminate\Http\Request;
 use App\Models\Staffs;
 use Illuminate\View\View;
 use DB;
  
 class StaffController extends Controller
 {
  
     public function index()
     {
         $staffs = DB::table('staffs')->get();
         return view('staffs.index',compact('staffs'));
     }
  
     public function create():View
     {
         return view('staffs.create');
     }
  
   
     public function store(Request $request): RedirectResponse
     {
        // $file = $request -> film_file;
        // $filename = $file->getClientoriginalName();
        // $file -> move(public_path('upload'),$filename);
        Staffs::create([
            "staff_name"=> $request->name, 
            "staff_phone"=>$request->staff_phone, 
            "staff_email"=>$request->staff_email, 
            "password"=>$request->password, 
        ]);
        return redirect('staffs')->with('flash_message', 'staffs Addedd!');
     }
  
     public function show(string $id): View
     {
        $staffs = Staffs::find($id);
        return view('staffs.show')->with('staffs', $staffs);
     }
  
     public function edit(string $id): View
     {
         $staff = Staffs::find($id);
         return view('staffs.edit')->with('staff', $staff);
     }
  
     public function update(Request $request, string $id): RedirectResponse
     {
        // $file = $request -> film_file;
        // $filename = $file->getClientoriginalName();
        // $file -> move(public_path('upload'),$filename);
         $staff = Staffs::find($id);
         $staff->update([
            "staff_name"=> $request->name, 
            "staff_phone"=>$request->staff_phone, 
            "staff_email"=>$request->staff_email, 
            "password"=>$request->password, 
         ]);
         return redirect('staffs')->with('flash_message', 'Staffs Updated!');  
     }
  
     
    public function destroy(string $id): RedirectResponse
    {
        Staffs::destroy($id);
        return redirect('staffs')->with('flash_message', 'Staffs deleted!');
    }
 
 }