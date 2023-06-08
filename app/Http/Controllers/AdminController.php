<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory(){
        $data=catagory::all();
        return view('admin.catagory',compact('data'));
    }

    public function add_catagory(Request $request){
        $data=new catagory;
        $data->catagory_name= $request->catagory;
        $data->save();
        return redirect()->back()->with('message','Catagory added sucessfully');
    }

    public function delete_catagory($id){
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Catagory deleted sucessfully');
    }

    public function view_product(){
        $catagory = catagory::all();
        return view('admin.product',compact('catagory'));
    }

    public function add_product(Request $request){
        $product = new product;
        $product-> title=$request->title;
        $product-> description=$request->description;
        $product-> price=$request->price;
        $product-> quantity=$request->quantity;
        $product-> discount_price=$request->discount_price;
        $product-> catagory=$request->catagory;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product-> image=$imagename;


        $product-> save();

        return redirect()->back()->with('message','Product Added sucessfully');
    }

    public function show_product(){
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','product deleted sucessfully');
    }

    public function update($id){
        $product=product::find($id);
        $catagory=catagory::all();
        return view('admin.update',compact('product','catagory'));
    }

    public function update_confirm(Request $request,$id){
        $product=product::find($id);
        $product-> title=$request->title;
        $product-> description=$request->description;
        $product-> price=$request->price;
        $product-> quantity=$request->quantity;
        $product-> discount_price=$request->discount_price;
        $product-> catagory=$request->catagory;

        $image=$request->image;
       if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product-> image=$imagename;

       }

        $product-> save();

        return redirect()->back()->with('message','Product Added sucessfully');
    }
}
