<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supliers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Image;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
//use Maatwebsite\Excel\Excel;
//use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

//use Maatwebsite\Excel\Facades\Excel;


class ProductController extends Controller
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

    // Add product are here.............. 

    public function AddProduct()
    {

        $categoris = Category::orderBy('cat_name', 'asc')->get();
        $supplires = Supliers::orderBy('name', 'asc')->get();
        $products = Product::orderBy('id', 'asc')->get();

        return view('backend.product.add_product', [
            'categoris' => $categoris,
            'supplires' => $supplires,
            'products' => $products,
        ]);
    }

    public function PostProduct(Request $request)
    {

        $request->validate([
            'product_name' => ['required', 'min:3', 'max:255'],
            'product_route' => ['required'],
            'product_code' => ['required'],
            'product_img' => ['required', 'image'],
            'buy_date' => ['required'],
            'expire_date' => ['required'],
            'buying_price' => ['required'],
            'selling_price' => ['required'],
            'product_garage' => ['required'],
        ]);


        if ($request->hasFile('product_img')) {

            $image = $request->file('product_img');

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 364)->save(public_path('ProductPhoto/' . $ext));

            Product::insert([

                'product_name' => $request->product_name,
                'cat_id' => $request->cat_id,
                'sup_id' => $request->sup_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_route' => $request->product_route,
                'product_img' => $ext,
                'buy_date' => $request->buy_date,
                'expire_date' => $request->expire_date,
                'buying_price' => $request->buying_price,
                'selling_price'  => $request->selling_price,
                'created_at' => Carbon::now(),

            ]);
        }

        return Redirect()->route('AllProduct');
    }

    // All products are here....................... 

    public function AllProduct()
    {

        $products = Product::all();

        return view('backend.product.all_product', compact('products'));
    }

    /// Delete product.................. 


    public function DeleteProduct($id)
    {
        Product::findOrfail($id)->delete();
        return back();
    }

    // Update Product........................ 

    public function EditProduct($id)
    {

        $products = Product::findOrfail($id)->first();
        $categoris = Category::orderBy('cat_name', 'asc')->get();
        $supplires = Supliers::orderBy('name', 'asc')->get();

        return view('backend.product.edit_product', [
            'products' => $products,
            'categoris' => $categoris,
            'supplires' => $supplires,
        ]);
    }

    public function UpdateProduct(Request $request)
    {

        $id = $request->id;

        if ($request->hasFile('product_img')) {

            $image = $request->file('product_img');

            $old_img = Product::findOrfail($request->id)->product_img;

            if (file_exists(public_path('ProductPhoto/' . $old_img))) {
                unlink(public_path('ProductPhoto/' . $old_img));
            }


            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 364)->save(public_path('ProductPhoto/' . $ext));


            Product::findOrfail($request->id)->update([
                'product_name' => $request->product_name,
                'cat_id' => $request->cat_id,
                'sup_id' => $request->sup_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_route' => $request->product_route,
                'product_img' => $ext,
                'buy_date' => $request->buy_date,
                'expire_date' => $request->expire_date,
                'buying_price' => $request->buying_price,
                'selling_price'  => $request->selling_price,
                'updated_at' => Carbon::now(),

            ]);
        } else {
            Product::findOrfail($request->id)->update([
                'product_name' => $request->product_name,
                'cat_id' => $request->cat_id,
                'sup_id' => $request->sup_id,
                'product_code' => $request->product_code,
                'product_garage' => $request->product_garage,
                'product_route' => $request->product_route,
                'buy_date' => $request->buy_date,
                'expire_date' => $request->expire_date,
                'buying_price' => $request->buying_price,
                'selling_price'  => $request->selling_price,
                'updated_at' => Carbon::now(),

            ]);
        }


        return Redirect()->route('AllProduct');
    }

    // View singel product............... 

    public function ViewProduct($id)
    {

        $products = Product::findOrfail($id)->first();
        // $categoris = Category::orderBy('id', 'asc')->first();
        //$supplires = Supliers::orderBy('name', 'asc')->first();


        return view('backend.product.view_product', [
            'products' => $products,
            //'supplires' => $supplires,
            //'categoris' => $categoris,

        ]);
    }

    // Excel file export and import are here............ 

    public function ImportProduct()
    {

        return view('backend.product.import_product');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new ProductsImport, $request->file('import_file'));

        return back();
    }
}
