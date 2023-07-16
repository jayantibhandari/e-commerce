<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index(Request $request) {
        $getcategory_id = $request->category_id;
        $categories = DB::table('catagories')->get();
    
        if ($getcategory_id == null) {
            $product = Product::paginate(10);
        } else {
            $product = Product::where('catagory_id', $getcategory_id)->paginate(10);
        }
    
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'products' => $product->toArray()['data'], // Convert the products to an array
            ]);
        } else {
            return view('home.userpage', compact('product', 'categories'));
        }
    }
    public function redirect(){
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else{
            $product=product::paginate(12);
        return view('home.userpage',compact('product'));
        }
    }


    public function details($id){

        $product=product::find($id);
        return view('home.details',compact('product'));
    }
}
