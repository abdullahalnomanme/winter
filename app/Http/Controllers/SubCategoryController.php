<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        // $categories = Category::latest()->get();
          return view('subcategory.index',[
            // 'categories' => $categories,
           'categories' => Category::latest()->get(),
        //    'subcategories' => subcategory::latest()->get(),
           'subcategories' => subcategory::paginate(5),
        ]);
    }
    function insert(Request $request){
        $request->validate([
            'category_id'=> 'required',
            'subcategory_name'=> 'required',
        ],[
            'category_id.required'=>'Category Id is required',
            'subcategory_name.required'=>'Sub Category name is required',
        ]);
        // print_r($request->all());
        if(subcategory::where('category_id', $request->category_id)->where('subcategory_name', $request->subcategory_name)->exists()){
            return back()->with('error_status', 'Sub Category is already Exists');
        }
        echo "Hello";
        else{
            subcategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'created_at' => Carbon::now(),
            ]);
            return back()->with('status', 'Sub category Added successfully');
        }

    }
    function delete($subcategory_id){
        // echo $subcategory_id;
        subcategory::find($subcategory_id)->delete();
        return back();
    }
}
