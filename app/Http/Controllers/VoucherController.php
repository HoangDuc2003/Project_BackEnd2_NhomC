<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\RedirectResponse;
 use Illuminate\Http\Request;
 use Illuminate\Http\Response;
 use App\Models\Voucher;
 use Illuminate\View\View;
  
 class VoucherController extends Controller
 {
  
     public function index()
     {
        $voucher = Voucher::all();
        return view ('voucher.index')->with('voucher', $voucher);
     }

    public function create():View
    {
        return view('voucher.create');
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        Voucher::create([
           "voucher_value"=> $request->voucher_value,
           "voucher_detail"=> $request->voucher_detail
        ]);
        return redirect('voucher')->with('flash_message', 'voucher Addedd!');
    }
  
    //  public function edit(string $id): View
    //  {
    //      $categories = Categories::find($id);
    //      return view('categories.edit')->with('categories', $categories);
    //  }
  
    //  public function update(Request $request, string $id): RedirectResponse
    //  {
    //      $categories = Categories::find($id);
    //      $input = $request->all();
    //      $categories->update([
    //         "cate_name"=> $request->name
    //      ]);
    //      return redirect('categories')->with('flash_message', 'categories Updated!');  
    //  }
  
     
     public function destroy(string $id): RedirectResponse
     {
         Voucher::destroy($id);
         return redirect('categories')->with('flash_message', 'categories deleted!');
     }
 }