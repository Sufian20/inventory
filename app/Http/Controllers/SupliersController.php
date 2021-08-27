<?php

namespace App\Http\Controllers;

use App\Models\Supliers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;

class SupliersController extends Controller
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

    // Add new supliers here.....
    public function AddSuplier()
    {
        $supliers = Supliers::orderBy('name', 'asc')->get();

        return view('backend.suplier.add_suplier', compact('supliers'));
    }

    public function PostSuplier(Request $request)
    {

        $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'photo' => ['required', 'image'],

        ]);
        if ($request->hasFile('photo')) {

            $image =  $request->file('photo');

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 364)->save(public_path('PhotoSuplir/' . $ext));

            $sup = Supliers::insert([
                'name' => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'address'  => $request->address,
                'shop_name'  => $request->shop_name,
                'type' => $request->type,
                'photo' => $ext,
                'account_holder' => $request->account_holder,
                'account_no'  => $request->account_no,
                'bank_name'  => $request->bank_name,
                'bank_branch'  => $request->bank_branch,
                'city'  => $request->city,
                'created_at' => Carbon::now(),
            ]);

            if ($sup) {
                $notification = array(
                    'messege' => 'Suplir insert Successfully',
                    'alert-type' => 'success'
                );
                return Redirect()->route('AllSuplier')->with($notification);
            } else {
                return Redirect()->back();
            }
        }

        // return back()->with('success', 'Suplier Added Successfully');
    }

    // View Suplier are here........

    public function AllSuplier()
    {

        $supliers = Supliers::orderBy('name', 'asc')->get();

        return view('backend.suplier.all_suplier', compact('supliers'));
    }

    // Delete supliere are here......

    public function DeleteSuplier($id)
    {

        Supliers::findOrfail($id)->delete();

        return back();
    }

    // Edit suplier are here.......

    public function EditSuplier($id)
    {

        $supliers = Supliers::findOrfail($id);

        return view('backend.suplier.edit_suplier', compact('supliers'));
    }

    public function UpdateSuplier(Request $request)
    {

        $id = $request->id;

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');

            $old_img = Supliers::findOrfail($request->id)->photo;

            if (file_exists(public_path('PhotoSuplir/' . $old_img))) {
                unlink(public_path('PhotoSuplir/' . $old_img));
            }

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 364)->save(public_path('PhotoSuplir/' . $ext));

            Supliers::findOrfail($request->id)->update([
                'name' => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'address'  => $request->address,
                'shop_name'  => $request->shop_name,
                'type' => $request->type,
                'photo' => $ext,
                'account_holder' => $request->account_holder,
                'account_no'  => $request->account_no,
                'bank_name'  => $request->bank_name,
                'bank_branch'  => $request->bank_branch,
                'city'  => $request->city,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            Supliers::findOrfail($request->id)->update([
                'name' => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'address'  => $request->address,
                'shop_name'  => $request->shop_name,
                'type' => $request->type,

                'account_holder' => $request->account_holder,
                'account_no'  => $request->account_no,
                'bank_name'  => $request->bank_name,
                'bank_branch'  => $request->bank_branch,
                'city'  => $request->city,
                'updated_at' => Carbon::now(),
            ]);
        }


        return Redirect()->route('AllSuplier');
        // return back()->with('success', 'Suplier Updated Successfuly');


    }

    // View singel datea here.....................

    public function ViewSuplier($id)
    {



        $supliers = Supliers::findOrfail($id)->first();

        return view('backend.suplier.view_suplier', compact('supliers'));
    }
}
