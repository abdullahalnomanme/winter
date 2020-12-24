<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        // $categories = Category::latest()->simplePaginate(5);
        $categories = Category::latest()->get();
        return view('category.index', compact('categories'));
    }
    function insert(Request $request){
        $request->validate([
            'category_name'=> 'required | unique:categories,category_name',
        ],[
            'category_name.required'=>'Category name is required',
            'category_name.unique'=>'Category name is exist',
        ]);
        Category::insert([
            'category_name' => $request->category_name,
            'added_by' => Auth::id(),
            'created_at' => Carbon::now()
        ]);
        return back()->with('status', 'Category Added successfully!');


        // if($request->category_name){
        //      return view('category.insert');
        //          echo $request->category_name;
        //          echo "<br/>";
        //          echo Auth::id();
        //          echo "<br/>";
        //         echo Carbon::now();
        //     Category::insert([
        //         'category_name' => $request->category_name,
        //         'added_by' => Auth::id(),
        //         'created_at' => Carbon::now()
        //     ]);
        //     return back()->with('status', 'Category Added successfully!');

        // }
        // else{
        //     echo "nai";
        //     return back()->with('category_error', 'please add Category Name');
        // }




    }
    function delete($category_id){
        // echo $category_id;
        Category::find($category_id)->delete();
       return back();
    //    return back()->with('category_delete_status', 'Category item deleted successfully!');
    }
}
