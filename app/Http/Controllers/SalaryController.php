<?php

namespace App\Http\Controllers;

use App\Models\AdvancedSalary;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class SalaryController extends Controller
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

    // add advanced salary are here.............. 

    public function AddAdvancedSalary()
    {

        $emploeeis =   Employee::orderBy('name', 'asc')->get();
        $salaris = AdvancedSalary::orderBy('id', 'asc')->get();

        return view('backend.salary.add_advancedSalary', [
            'emploeeis' => $emploeeis,
            'salaris' => $salaris,
        ]);
    }

    public function PostAdvacedSalary(Request $request)
    {
        $request->validate([
            'emp_id' => ['required'],
            'month' => ['required'],
            'year' => ['required', 'min:2', 'max:5'],
            'advanced_salary' => ['required', 'min:3', 'max:250'],


        ]);

        $month = $request->month;
        $emp_id = $request->emp_id;

        $advanced =  AdvancedSalary::where('month', $month)->where('emp_id', $emp_id)->first();

        if ($advanced === NULL) {
            AdvancedSalary::insert([
                'emp_id' => $request->emp_id,
                'month' => $request->month,
                'year' => $request->year,
                'advanced_salary' =>  $request->advanced_salary,
                'created_at' => Carbon::now(),

            ]);

            if ($advanced) {
                $notification = array(
                    'messege' => 'Successfully Advanced Paid',
                    'alert-type' => 'success',
                );

                return Redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Successfully Advanced Paid',
                    'alert-type' => 'success',
                );

                return Redirect()->back()->with($notification);
            }

            // return back()->with('success', 'Advanced salary added successfully');
        } else {
            $notification = array(
                'messege' => 'Oops !! Allreay Advanced Paid In This Month',
                'alert-type' => 'error',
            );

            return Redirect()->back()->with($notification);
        }
    }

    /// All advaced salary are here................

    public function AllAdvancedsalary()
    {
        $advanced = AdvancedSalary::with('employee')->paginate();

        return view('backend.salary.all_advancedsalary', [
            'advanced' => $advanced,
        ]);
    }

    // update advanced salary are here............ 

    public function EditAdvancedsalary($id)
    {

        $advanced = AdvancedSalary::where('id', $id)->first();
        $emploeeis = Employee::orderBy('name', 'asc')->get();


        return view('backend.salary.edit_advacedsalary', [
            'advanced' => $advanced,
            'emploeeis' => $emploeeis,
        ]);
    }

    public function UpdateAdvancedsalary(Request $request)
    {

        AdvancedSalary::findOrfail($request->id)->update([
            'emp_id' => $request->emp_id,
            'month' => $request->month,
            'year' => $request->year,
            'advanced_salary' =>  $request->advanced_salary,
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->route('AllAdvancedsalary');
    }

    //delete advaced salary................... 
    public function DeleteAdvancedsalary($id)
    {

        AdvancedSalary::findOrfail($id)->delete();

        return Redirect()->route('AllAdvancedsalary');
    }

    // singel advaced data....................... 

    public function ViewAdvancedsalary($id)
    {

        $ad = AdvancedSalary::findOrfail($id)->first();

        return view('backend.salary.view_advancedsalary', compact('ad'));
    }


    // all salary are here.................. 

    public function PaySalary()
    {
        $paysalary = AdvancedSalary::with('employee')->paginate();

        return view('backend.salary.pay_salary', [
            'paysalary' => $paysalary,
        ]);


        //return view('backend.salary.pay_salary');
    }
}
