<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Image;

class SettingsController extends Controller
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

    //Settings are here............... 

    public function Settings()
    {

        $settings = Settings::orderBy('company_name', 'asc')->first();

        return view('backend.settings.view_settings', compact('settings'));
    }

    public function UpdateSettings(Request $request)
    {

        $id = $request->id;

        if ($request->hasFile('company_logo')) {

            $image = $request->file('company_logo');

            $old_img = Settings::findOrfail($request->id)->company_logo;

            if (file_exists(public_path('SettingsPhoto/' . $old_img))) {
                unlink(public_path('SettingsPhoto/' . $old_img));
            }

            $ext = $request->company_name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            image::make($image)->resize(500, 364)->save(public_path('SettingsPhoto/' . $ext));



            Settings::findOrfail($request->id)->update([

                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
                'company_email' => $request->company_email,
                'company_phone' => $request->company_phone,
                'company_logo' => $ext,
                'company_mobile' => $request->company_mobile,
                'company_city' => $request->company_city,
                'company_country' => $request->company_country,
                'company_zipecode' => $request->company_zipecode,
                'updated_at' => Carbon::now(),


            ]);
        } else {
            Settings::findOrfail($request->id)->update([

                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
                'company_email' => $request->company_email,
                'company_phone' => $request->company_phone,
                'company_mobile' => $request->company_mobile,
                'company_city' => $request->company_city,
                'company_country' => $request->company_country,
                'company_zipecode' => $request->company_zipecode,
                'updated_at' => Carbon::now(),


            ]);
        }

        return back();
    }
}
