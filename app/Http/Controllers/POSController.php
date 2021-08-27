<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Coustomer;
use App\Models\Order;
use App\Models\OrderDitails;
use App\Models\Pos;
use App\Models\Product;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class POSController extends Controller
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





    public function Pos()
    {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $carts = Cart::with('product')->where('user_ip', $user_ip)->get();
        $subtotal = 0;
        $qty = 0;
        $va = 15;


        

        foreach ($carts as $value) {

            $subtotal += $value->product->selling_price * $value->product_quntity;
        }

        foreach ($carts as $value) {

            $qty += $value->product_quntity;
        }

        $vat = $subtotal * $va / 100;

        $total = $subtotal + $vat;



        $products = DB::table('products')
        ->join('categories', 'products.cat_id', 'categories.id')
        ->select('categories.cat_name', 'products.*')
        ->get();
        $coustomers = Coustomer::all();
        $categories = Category::all();

       
        return view('backend.pos.pos', [
           'products' => $products,
            'coustomers' => $coustomers,
            'categories' => $categories,
            'carts' => $carts,
            'subtotal' => $subtotal,
            'total' => $total,
            'qty' => $qty,
            'vat' => $vat,
        ]);
    }

    //view product............ 

   

    //Add Cart are here



    public function SingelCart($id)
    {

        $user_ip = $_SERVER['REMOTE_ADDR'];

        if (Cart::where('product_id', $id)->where('user_ip', $user_ip)->exists()) {
            Cart::where('product_id', $id)->where('user_ip', $user_ip)->increment('product_quntity');
        } else {
            Cart::insert([
                'product_id' => $id,
                'user_ip' => $user_ip,
                'created_at' => Carbon::now(),

            ]);
        }

        return back();
    }

    //Delete Cart are here........ 
    public function SingelCartDelete($id)
    {

        $user_ip = $_SERVER['REMOTE_ADDR'];

        Cart::where('user_ip', $user_ip)->where('id', $id)->delete();

        return back();
    }

    //Cart Update.............. 






    function CartUpdate(Request $request)
    {

        foreach ($request->cart_id as $key => $item) {

            Cart::findOrfail($item)->update([
                'product_quntity' => $request->product_quntity[$key],
                'updated_at' => Carbon::now(),
            ]);


            return back();
        }
    }


    //Create invoice

    public function CreateInvoice(Request $request)
    {


        $request->validate(
            [
                'cus_id' => 'required',

            ],

            [
                'cus_id.required' => 'Select A Coustomer First !',
            ]
        );



        //  $user_ip = $_SERVER['REMOTE_ADDR'];
        $contents = Cart::all();

        $cus_id = $request->cus_id;
        $coustomers = Coustomer::where('id', $cus_id)->first();
        $products = Product::orderBy('id', 'asc')->first();





        return view('backend.pos.invoice', compact('contents', 'coustomers', 'products'));
    }

    //fianl invoice

    public function FinalInvoice(Request $request)
    {

        $request->validate([
            'pay' => 'required',
    
        ]);


        $data = array();
        $data['coustomer_id'] = $request->coustomer_id;
        $data['order_status'] = $request->order_status;
        $data['order_date'] = $request->order_date;
        $data['month'] = $request->month;
        $data['year'] = $request->year;
        $data['total_products'] = $request->total_products;
        $data['sub_total'] = $request->sub_total;
        $data['vat'] = $request->vat;
        $data['total'] = $request->total;
        $data['payment_status'] = $request->payment_status;
        $data['pay'] = $request->pay;
        $data['due'] = $request->due;

        $order_id = DB::table('orders')->insert($data);
        $contents = Cart::all();

        $subtotal = 0;
        $va = 15;
        $total = 0;
        $qty = 0;



        foreach ($contents as $key => $con) {
            $subtotal += $con->product->selling_price * $con->product_quntity;
        }


        foreach ($contents as $con) {
            $vat = 15 / $subtotal;
        }
        foreach ($contents as $con) {
            $qty += $con->product_quntity;
        }



        $vat = $subtotal * $va / 100;

        $total = $subtotal + $vat;

        $odata = array();
        foreach ($contents as $content) {

            $odata['order_id'] = $order_id;
            $odata['product_id'] = $content->id;
            $odata['total_products'] = $qty;
            $odata['sub_total'] = $subtotal;
            $odata['total'] = $total;

            DB::table('order_ditails')->insert($odata);
        }


        return Redirect()->route('PendingOrder');
    }

    public function PendingOrder()
    {

        //  Order::where('order_status', 'pending')->get();
        $orders =  Order::where('order_status', 'pending')->get();
        $coustomers = Coustomer::all();


        return view('backend.pos.all_pendingorder', [
            'orders' => $orders,
            'coustomers' => $coustomers,

        ]);
    }

    //view panding orders

    public function ViewOrder($id)
    {

        //  $cus_id = $request->cus_id;
        $coustomers = Coustomer::orderBy('name', 'asc')->first();
        $products = Product::orderBy('product_name', 'asc')->first();
        $orders = Order::where('id', $id)->first();
        $contents = Cart::all();
        $oder_ditails = OrderDitails::where('id', $id)->first();

        return view('backend.pos.view_order', [
            'orders' => $orders,
            'oder_ditails' => $oder_ditails,
            'coustomers' => $coustomers,
            'products' => $products,
            'contents' => $contents,
        ]);
    }

    // Order success

    public function PosDone($id)
    {

        $succ = "success";

        Order::where('id', $id)->update([
            'order_status' => $succ,
        ]);



        return Redirect()->route('PendingOrder');
        //  return Redirect()->route('backend.pos.all_pendingorder');
    }

    // Success Orders............................ 

    public function SuccessOrder()
    {

        $orders =  Order::where('order_status', 'success')->get();
        $coustomers = Coustomer::all();


        return view('backend.pos.success_order', [
            'orders' => $orders,
            'coustomers' => $coustomers,

        ]);
    }

    //Today Sales.............. 
    public function TodaySales(){

        $date = date('d/m/y');

        $coustomers = Coustomer::all();
        $today = Order::where('order_date', $date )->get();

        $sum = Order::where('order_date', $date )->sum('total');

        return view('backend.pos.today_sales', compact('coustomers','today', 'sum' ));
    }

  
    //Monthly Sales.............. 

    public function MonthlySales(){
        
        $month = date("F");
        $coustomers = Coustomer::all();

        $thismonth = Order::where('month', $month)->get();
        $sum = Order::where('month', $month)->sum('total');


        return view('backend.pos.monthly_sales', compact('coustomers','thismonth', 'sum' ));
       
        
        
    }

    //More monthly Sales are here................ 


     public function JanuarySales()
     {
 
         $month = "January";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);

     }

     public function FebruarySales()
     {
 
         $month = "February";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function MarchSales()
     {
 
         $month = "March";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function AprilSales()
     {
 
         $month = "April";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('order_date', $month)->get();
 
         $sum = Order::where('order_date', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function MaySales()
     {
 
         $month = "May";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function JunSales()
     {
 
         $month = "June";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function JulySales()
     {
 
         $month = "July";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function AugustSales()
     {
 
         $month = "August";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function SeptemberSales()
     {
 
         $month = "September";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function OctoberSales()
     {
 
         $month = "October";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function NovemberSales()
     {
 
         $month = "November";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }

     public function DecemberSales()
     {
 
         $month = "December";
         $coustomers = Coustomer::all();

         $thismonth = Order::where('month', $month)->get();
 
         $sum = Order::where('month', $month)->sum('total');
 
         return view('backend.pos.monthly_sales', [
             'thismonth' => $thismonth,
             'sum' => $sum,
             'coustomers' => $coustomers,
         ]);
         
     }



     // Yearly Sales................ 

     public function YearlySales(){

        $year = date('Y');

        $coustomers = Coustomer::all();
        $yearly = Order::where('year', $year )->get();

        
        $sum = Order::where('year', $year )->sum('total');

        return view('backend.pos.yearly_sales', compact('yearly','coustomers', 'sum' ));
       
      
     }








}
