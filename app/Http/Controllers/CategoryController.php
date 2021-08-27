<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Add Pay salary are here........... 

    public function AddCategory(){
        
        $categoris = Category::orderBy('cat_name', 'asc')->get();

        return view('backend.category.add_category', compact('categoris'));
    }

    public function PostCategory(Request $request){

        $request->validate([
            'cat_name' => ['required', 'min:3', 'max:255'],
        ]);

        Category::insert([
           
            'cat_name' => $request->cat_name,
            'created_at' => Carbon::now(),
        ]);

       

        return Redirect()->route('AllCategory');

    }

    // all categor are hete................ 

    public function AllCategory(){
           $categoris = Category::all();
       
        return view('backend.category.all_category', compact('categoris'));
    }

    // delete category are here............... 

    public function DeleteCategory($id){

        Category::findOrfail($id)->delete();

        return Redirect()->route('AllCategory');
    }

    // update category are here.......... 

    public function EditCategory(){

        $categoris = Category::orderBy('cat_name', 'asc')->first();

        return view('backend.category.edit_category', compact('categoris'));
    }

    public function UpdateCategory(Request $request){

        Category::findOrfail($request->id)->update([
            
            'cat_name' => $request->cat_name,
            'updated_at' => Carbon::now(),
        ]);
         
        return Redirect()->route('AllCategory');
    }

   



}
