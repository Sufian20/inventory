<?php

namespace App\Http\Controllers;

use App\Models\Attandence;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AttandenceController extends Controller
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

    // Take Attandence are here........... 

    public function TakeAttandence()
    {

        $employee = Employee::orderBy('id', 'asc')->get();


        return view('backend.attandence.take_attandence', compact('employee'));
    }

    public function PostAttandence(Request $request)
    {

        // $ea = $request->user_id;

        for ($id = 1; $id < count($request->user_id); $id++) {

            $data[] = [
                "user_id" => $id,
                "attendence" => $request->attendence[$id],
                "att_date" => $request->att_date,
                "att_year" => $request->att_year,
                "edit_date" => date("d_m_y"),
                "created_at" => Carbon::now(),

            ];
        }




        /* foreach ( $request->user_id as $id ){

            $data[] =[

                "user_id" => $id,
                "attendence" => $request->attendence[$id],
                "att_date" => $request->att_date ,
                "att_year" => $request->att_year,
                "edit_date" => date("d_m_y"),
                "created_at" => Carbon::now(),

            ];

        }*/

        // Attandence::insert($data);

        return $request->all();

        // return back();



    }
}
