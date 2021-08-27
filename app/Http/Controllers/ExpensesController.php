<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class ExpensesController extends Controller
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


    // Add expenses............... 

    public function AddExpenses()
    {

        $expenses = Expenses::orderBy('id', 'asc')->get();

        return view('backend.expenses.add_expenses', compact('expenses'));
    }


    public function PostExpenses(Request $request)
    {

        Expenses::insert([

            'details'  => $request->details,
            'amount' => $request->amount,
            'month' => $request->month,
            'date' => $request->date,
            'created_at' => Carbon::now(),

        ]);


        return back();
    }


    //Today expenses are here............... 

    public function TodayExpenses()
    {

        $date = date('d/m/y');

        $today = Expenses::where('date', $date)->get();

        $sum = Expenses::where('date', $date)->sum('amount');

        return view('backend.expenses.today_expenses', [
            'today' => $today,
            'sum' => $sum,
        ]);
    }


    // Update are here................ 

    public function EditExpenses($id)
    {

        $expenses = Expenses::where('id', $id)->first();
        return view('backend.expenses.edit_expenses', compact('expenses'));
    }

    public function UpdateExpenses(Request $request)
    {

        Expenses::findOrfial($request->id)->update([

            'details'  => $request->details,
            'amount' => $request->amount,
            'month' => $request->month,
            'date' => $request->date,
            'updated_at' => Carbon::now(),

        ]);

        return Redirect()->route('TodayExpenses');
    }

    // Delete expenses.............. 

    public function DeleteExpenses($id)
    {

        Expenses::findOrfail($id)->delete();

        return Redirect()->route('TodayExpenses');
    }

    // Monthly expenses view............... 

    public function MonthlyExpenses()
    {

        $month = date("F");

        $thismonth = Expenses::where('month', $month)->get();

        $sum = Expenses::where('month', $month)->sum('amount');

        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    // Monthly more expenses are here............ 

    public function JanuaryExpenses()
    {

        $month = "January";
        $sum = Expenses::where('month', $month)->sum('amount');
        $thismonth = Expenses::where('month', $month)->get();
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function FebruaryExpenses()
    {

        $month = "February";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function MarchExpenses()
    {

        $month = "March";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function AprilExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function MayExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function JunExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function JulyExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function AugustExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function SeptemberExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function OctoberExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function NovemberExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }

    public function DecemberExpenses()
    {

        $month = "April";
        $thismonth = Expenses::where('month', $month)->get();
        $sum = Expenses::where('month', $month)->sum('amount');
        return view('backend.expenses.monthly_expenses', [
            'thismonth' => $thismonth,
            'sum' => $sum,
        ]);
    }



    // Yearly Expenses view............... 

    public function YearlyExpenses()
    {

        $year = date("Y");

        $yearly = Expenses::where('year', $year)->get();

        $sum = Expenses::where('year', $year)->sum('amount');

        return view('backend.expenses.yearly_expenses', [
            'yearly' => $yearly,
            'sum' => $sum,
        ]);
    }
}
