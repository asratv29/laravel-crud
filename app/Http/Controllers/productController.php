<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productController extends Controller
{
 public function index(){
    return view('product.index');
    }



 public function create(){
    return view('product.create');
 }
 public function store(Request $request ){
    $request->validate([
        'name' => 'required',
        'descroption' => 'required',
        'image' => 'required|mimes:jpg,jpeg,png,gif|max:1000'
    ]);


    $imageName = time().'_'. $request->image->extension();
    $request->image->move(public_path('product'), $imageName);

   $product =new product;
   $product->image = $imageName;
   $product->name = $request->name;
   $product->descroption = $request->descroption;

   $product-> save();

   return back()->withsuccess('Create succesfuly !!!!!');
 }


 public function edit( $id ){
        $product = product::where('id',$id)->first();
        return view('product.edit',['product' => $product]);
 }


 public function update(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'descroption' => 'required',
        'image' => 'nullable|mimes:jpg,jpeg,png,gif|max:1000'
    ]);

    $product = product::where('id',$id)->first();
if(isset($request->image)){

    $imageName = time().'_'. $request->image->extension();
    $request->image->move(public_path('product'), $imageName);
    $product->image = $imageName;
}



   $product->name = $request->name;
   $product->descroption = $request->descroption;

   $product-> save();

   return back()->withsuccess('Update succefully!!!!!');

 }
 public function destroy($id){
    $product = product::where('id',$id)->first();
    $product->delete();

    return back()->withSuccess(' Delete Successfuly !!!!!!');
 }

 public function show($id){
    $product = product::where('id',$id)->first();

    return view('product.show',['product'=>$product]);
 }

 public function home(){
    return view('product.home',[
        'product' => product::latest()->paginate(5)
    ]);
}

public function catagories(product $product)
    {
       return view('product.catagories');
    }

    public function history(product $product)
    {
       return view('product.history');
    }

    public function login(){
        return view('product.login');
     }

}
