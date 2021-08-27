<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Image;
use Symfony\Component\CssSelector\Node\FunctionNode;

class EmployeeController extends Controller
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
    // Add Employee funtion here.....

    public function AddEmployee()
    {
        $employees = Employee::orderBy('name', 'asc')->get();
        return view('backend.employee.add_employee', [
            'employees' => $employees,
        ]);
    }

    // Add Employee funtion here.....

    public function PostEmployee(Request $request)
    {

        $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'photo' => ['required', 'image'],
            'phone' => ['required', 'min:5', 'max:255'],
            'nid_no' => ['required', 'min:5', 'max:255'],
            'salary' => ['required', 'min:5', 'max:255'],

        ]);

        if ($request->hasFile('photo')) {
            $image =  $request->file('photo');

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(500, 364)->save(public_path('photo/' . $ext));

            Employee::insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'experience' => $request->experience,
                'photo' => $ext,
                'nid_no' => $request->nid_no,
                'salary' => $request->salary,
                'vacation' => $request->vacation,
                'city' => $request->city,
                'created_at' => Carbon::now(),
            ]);
        }


        return back()->with('success', 'Employee Added Successfully');
    }

    // View Employee funtion here.....

    public function AllEmployee()
    {

        $employees = Employee::all();
        return view('backend.employee.all_employee', compact('employees'));
    }

    // Edit Employee funtion here.............

    public function EditEmployee($id)
    {
        $employees =  Employee::findOrfail($id);
        return view('backend.employee.edit_employees', [
            'employees' => $employees,
        ]);
    }

    public function UpdateEmployee(Request $request)
    {

        $id = $request->id;

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');

            $old_img = Employee::findOrfail($request->id)->photo;

            if (file_exists(public_path('photo/' . $old_img))) {
                unlink(public_path('photo/' . $old_img));
            }
            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 364)->save(public_path('photo/' . $ext));


            Employee::findOrfail($request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'experience' => $request->experience,
                'photo' => $ext,
                'nid_no' => $request->nid_no,
                'salary' => $request->salary,
                'vacation' => $request->vacation,
                'city' => $request->city,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            Employee::findOrfail($request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'experience' => $request->experience,
                'nid_no' => $request->nid_no,
                'salary' => $request->salary,
                'vacation' => $request->vacation,
                'city' => $request->city,
                'updated_at' => Carbon::now(),
            ]);
        }

        return back()->with('success', 'Employee Updated Successfuly');
    }

    public function DeleteEmployee($id)
    {
        Employee::findOrfail($id)->delete();

        return back()->with('success', 'Product Deleted Successfully');
    }

    // View a singel employee

    public function ViewEmployee($id)
    {
        $singel_data =  Employee::findOrfail($id)->first();

        return view('backend.employee.view_employee', compact('singel_data'));
    }
}
