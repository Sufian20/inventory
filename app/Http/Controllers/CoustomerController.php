<?php

namespace App\Http\Controllers;

use App\Models\Coustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
use SebastianBergmann\CodeUnit\FunctionUnit;

class CoustomerController extends Controller
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

    // Add new coustomer here....

    public function AddCoustomer()
    {
        $coustomers = Coustomer::orderBy('name', 'asc')->get();
        return view('backend.coustomer.add_coustomer', compact('coustomers'));
    }


    public function PostCoustomer(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'photo' => ['required', 'image'],

        ]);

        if ($request->hasFile('photo')) {

            $image =  $request->file('photo');

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 364)->save(public_path('photo/' . $ext));

            $cous =  Coustomer::insert([
                'name' => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'address'  => $request->address,
                'shop_name'  => $request->shop_name,
                'photo' => $ext,
                'account_holder' => $request->account_holder,
                'account_no'  => $request->account_no,
                'bank_name'  => $request->bank_name,
                'bank_branch'  => $request->bank_branch,
                'city'  => $request->city,
                'created_at' => Carbon::now(),
            ]);

            return back();
        }



        //  return back()->with('success', 'Employee Added Successfully');

    }

    /// View All coustomers...

    public function AllCoustomer()
    {

        $coustomers = Coustomer::all();
        return view('backend.coustomer.all_costomer', compact('coustomers'));
    }


    // Edit customer are here.....

    public function EditCoustomer($id)
    {
        $coustomers = Coustomer::findOrfail($id);

        return view('backend.coustomer.edit_coustomer', compact('coustomers'));
    }


    public function UpdateCoustomer(Request $request)
    {

        $id = $request->id;

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');

            $old_img = Coustomer::findOrfail($request->id)->photo;

            if (file_exists(public_path('photo/' . $old_img))) {
                unlink(public_path('photo/' . $old_img));
            }

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(500, 364)->save(public_path('photo/' . $ext));

            Coustomer::findOrfail($request->id)->update([

                'name' => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'address'  => $request->address,
                'shop_name'  => $request->shop_name,
                'photo' => $ext,
                'account_holder' => $request->account_holder,
                'account_no'  => $request->account_no,
                'bank_name'  => $request->bank_name,
                'bank_branch'  => $request->bank_branch,
                'city'  => $request->city,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );

            return Redirect()->route('AllCoustomer')->with($notification);
        } else {

            Coustomer::findOrfail($request->id)->update([

                'name' => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'address'  => $request->address,
                'shop_name'  => $request->shop_name,
                'account_holder' => $request->account_holder,
                'account_no'  => $request->account_no,
                'bank_name'  => $request->bank_name,
                'bank_branch'  => $request->bank_branch,
                'city'  => $request->city,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );

            return Redirect()->route('AllCoustomer')->with($notification);
        }

        // return back()->with('success', 'Coustomer Updated Successfuly');

    }

    // Delete coustomer are here....
    public function DeleteCoustomer($id)
    {

        Coustomer::findOrfail($id)->delete();


        return back()->with('success', 'Product Deleted Successfully');
    }

    // View a sigel Data here....


    function ViewCoustomer($id)
    {
        $singel = Coustomer::findOrfail($id)->first();
        return view('backend.coustomer.view_coustomer', compact('singel'));
    }
}
