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
            'subcategory_name'=> 'required | unique:subcategories,subcategory_name',
        ],[
            'category_id.required'=>'Category Id is required',
            'subcategory_name.required'=>'Sub Category name is required',
            'subcategory_name.unique'=>'Sub Category name is exist',
        ]);
        // print_r($request->all());
        subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'created_at' => Carbon::now(),
        ]);
        // echo "done";
        // return view('subcategory.insert');
        return back()->with('status', 'Sub category Added successfully');
    }
    function delete($subcategory_id){
        // echo $subcategory_id;
        subcategory::find($subcategory_id)->delete();
        return back();
    }
}
