<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/today-sales', [App\Http\Controllers\HomeController::class, 'TodaySales'])->name('TodaySales');

/// Employee Route Are Here..........
Route::get('/add-employee', [App\Http\Controllers\EmployeeController::class, 'AddEmployee'])->name('AddEmployee');
Route::post('/post-employee', [App\Http\Controllers\EmployeeController::class, 'PostEmployee'])->name('PostEmployee');
Route::get('/all-employee', [App\Http\Controllers\EmployeeController::class, 'AllEmployee'])->name('AllEmployee');
Route::get('/edit-employee/{empo_id}', [App\Http\Controllers\EmployeeController::class, 'EditEmployee'])->name('EditEmployee');
Route::post('/update-employee', [App\Http\Controllers\EmployeeController::class, 'UpdateEmployee'])->name('UpdateEmployee');
Route::get('/delete-employee/{emp_id}', [App\Http\Controllers\EmployeeController::class, 'DeleteEmployee'])->name('DeleteEmployee');
Route::get('/view-employee/{emp_id}', [App\Http\Controllers\EmployeeController::class, 'ViewEmployee'])->name('ViewEmployee');

// Coustomer Route Are Here.....

Route::get('/add_coustomer', [App\Http\Controllers\CoustomerController::class, 'AddCoustomer'])->name('AddCoustomer');
Route::post('/post_coustomer', [App\Http\Controllers\CoustomerController::class, 'PostCoustomer'])->name('PostCoustomer');
Route::get('/all_coustomer', [App\Http\Controllers\CoustomerController::class, 'AllCoustomer'])->name('AllCoustomer');
Route::get('/edit-coustomer/{empo_id}', [App\Http\Controllers\CoustomerController::class, 'EditCoustomer'])->name('EditCoustomer');
Route::post('/update-coustomer', [App\Http\Controllers\CoustomerController::class, 'UpdateCoustomer'])->name('UpdateCoustomer');
Route::get('/delete-coustomer/{cous_id}', [App\Http\Controllers\CoustomerController::class, 'DeleteCoustomer'])->name('DeleteCoustomer');
Route::get('/view-coustomer/{cou_id}', [App\Http\Controllers\CoustomerController::class, 'ViewCoustomer'])->name('ViewCoustomer');

// Supliers route are here......
Route::get('/add_suplier', [App\Http\Controllers\SupliersController::class, 'AddSuplier'])->name('AddSuplier');
Route::get('/all_suplier', [App\Http\Controllers\SupliersController::class, 'AllSuplier'])->name('AllSuplier');
Route::post('/post_suplier', [App\Http\Controllers\SupliersController::class, 'PostSuplier'])->name('PostSuplier');
Route::get('/all_suplier', [App\Http\Controllers\SupliersController::class, 'AllSuplier'])->name('AllSuplier');
Route::get('/delete_suplier/{sup_id}', [App\Http\Controllers\SupliersController::class, 'DeleteSuplier'])->name('DeleteSuplier');
Route::get('/edit_suplier/{sup_id}', [App\Http\Controllers\SupliersController::class, 'EditSuplier'])->name('EditSuplier');
Route::post('/update_suplier', [App\Http\Controllers\SupliersController::class, 'UpdateSuplier'])->name('UpdateSuplier');
Route::get('/view_suplier/{sp_id}', [App\Http\Controllers\SupliersController::class, 'ViewSuplier'])->name('ViewSuplier');


// Advanced Salary route are here................
Route::get('/add_advancedsalary', [App\Http\Controllers\SalaryController::class, 'AddAdvancedSalary'])->name('AddAdvancedSalary');
Route::post('/post_advancedsalary', [App\Http\Controllers\SalaryController::class, 'PostAdvacedSalary'])->name('PostAdvacedSalary');
Route::get('/all_advancedsalary', [App\Http\Controllers\SalaryController::class, 'AllAdvancedsalary'])->name('AllAdvancedsalary');
Route::get('/edit_advancedsalary/{ad_id}', [App\Http\Controllers\SalaryController::class, 'EditAdvancedsalary'])->name('EditAdvancedsalary');
Route::post('/update_advancedsalary', [App\Http\Controllers\SalaryController::class, 'UpdateAdvancedsalary'])->name('UpdateAdvancedsalary');
Route::get('/delete_advancedsalary/{ad_id}', [App\Http\Controllers\SalaryController::class, 'DeleteAdvancedsalary'])->name('DeleteAdvancedsalary');
Route::get('/view_advancedsalary/{view_id}', [App\Http\Controllers\SalaryController::class, 'ViewAdvancedsalary'])->name('ViewAdvancedsalary');

// Pay Salary route are here................
Route::get('/pay_salary', [App\Http\Controllers\SalaryController::class, 'PaySalary'])->name('PaySalary');
// Route::post('/post_salary', [App\Http\Controllers\SalaryController::class, 'PostSalary'])->name('PostSalary');
// Route::get('/all_salary', [App\Http\Controllers\SalaryController::class, 'AllSalary'])->name('AllSalary');

// Category route are here........... 
Route::get('/add-categroy', [App\Http\Controllers\CategoryController::class, 'AddCategory'])->name('AddCategory');
Route::get('/all-categroy', [App\Http\Controllers\CategoryController::class, 'AllCategory'])->name('AllCategory');
Route::post('/post-categroy', [App\Http\Controllers\CategoryController::class, 'PostCategory'])->name('PostCategory');
Route::get('/delete-categroy/{d_id}', [App\Http\Controllers\CategoryController::class, 'DeleteCategory'])->name('DeleteCategory');
Route::get('/edit-categroy/{d_id}', [App\Http\Controllers\CategoryController::class, 'EditCategory'])->name('EditCategory');
Route::post('/update-categroy', [App\Http\Controllers\CategoryController::class, 'UpdateCategory'])->name('UpdateCategory');


// Product route are here............... 
Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'AddProduct'])->name('AddProduct');
Route::post('/post-prodcut', [App\Http\Controllers\ProductController::class, 'PostProduct'])->name('PostProduct');
Route::get('/all-product', [App\Http\Controllers\ProductController::class, 'AllProduct'])->name('AllProduct');
Route::get('/delete-product/{d_id}', [App\Http\Controllers\ProductController::class, 'DeleteProduct'])->name('DeleteProduct');
Route::get('/edit-product/{d_id}', [App\Http\Controllers\ProductController::class, 'EditProduct'])->name('EditProduct');
Route::post('/update-product', [App\Http\Controllers\ProductController::class, 'UpdateProduct'])->name('UpdateProduct');
Route::get('/view-product/{v_id}', [App\Http\Controllers\ProductController::class, 'ViewProduct'])->name('ViewProduct');

// import and export product route are here.......... 
Route::get('/import-product', [App\Http\Controllers\ProductController::class, 'ImportProduct'])->name('ImportProduct');
Route::get('/export', [App\Http\Controllers\ProductController::class, 'export'])->name('export');
Route::post('/import', [App\Http\Controllers\ProductController::class, 'import'])->name('import');



// Expenses route are here...............
Route::get('/add-expenses', [App\Http\Controllers\ExpensesController::class, 'AddExpenses'])->name('AddExpenses');
Route::post('/post-expenses', [App\Http\Controllers\ExpensesController::class, 'PostExpenses'])->name('PostExpenses');
Route::get('/today-expenses', [App\Http\Controllers\ExpensesController::class, 'TodayExpenses'])->name('TodayExpenses');
Route::get('/edit-expenses/{id}', [App\Http\Controllers\ExpensesController::class, 'EditExpenses'])->name('EditExpenses');
Route::post('/update-expenses/{id}', [App\Http\Controllers\ExpensesController::class, 'UpdateExpenses'])->name('UpdateExpenses');
Route::get('/delete-expenses/{id}', [App\Http\Controllers\ExpensesController::class, 'DeleteExpenses'])->name('DeleteExpenses');
Route::get('/monthly-expenses', [App\Http\Controllers\ExpensesController::class, 'MonthlyExpenses'])->name('MonthlyExpenses');
Route::get('/yearly-expenses', [App\Http\Controllers\ExpensesController::class, 'YearlyExpenses'])->name('YearlyExpenses');

// monthly more expenses route................ 
Route::get('/january-expenses', [App\Http\Controllers\ExpensesController::class, 'JanuaryExpenses'])->name('JanuaryExpenses');
Route::get('/february-expenses', [App\Http\Controllers\ExpensesController::class, 'FebruaryExpenses'])->name('FebruaryExpenses');
Route::get('/march-expenses', [App\Http\Controllers\ExpensesController::class, 'MarchExpenses'])->name('MarchExpenses');
Route::get('/april-expenses', [App\Http\Controllers\ExpensesController::class, 'AprilExpenses'])->name('AprilExpenses');
Route::get('/may-expenses', [App\Http\Controllers\ExpensesController::class, 'MayExpenses'])->name('MayExpenses');
Route::get('/jun-expenses', [App\Http\Controllers\ExpensesController::class, 'JunExpenses'])->name('JunExpenses');
Route::get('/july-expenses', [App\Http\Controllers\ExpensesController::class, 'JulyExpenses'])->name('JulyExpenses');
Route::get('/august-expenses', [App\Http\Controllers\ExpensesController::class, 'AugustExpenses'])->name('AugustExpenses');
Route::get('/september-expenses', [App\Http\Controllers\ExpensesController::class, 'SeptemberExpenses'])->name('SeptemberExpenses');
Route::get('/october-expenses', [App\Http\Controllers\ExpensesController::class, 'OctoberExpenses'])->name('OctoberExpenses');
Route::get('/november-expenses', [App\Http\Controllers\ExpensesController::class, 'NovemberExpenses'])->name('NovemberExpenses');
Route::get('/december-expenses', [App\Http\Controllers\ExpensesController::class, 'DecemberExpenses'])->name('DecemberExpenses');

// Attendness route are here................ 

Route::get('/take-attendness', [App\Http\Controllers\AttandenceController::class, 'TakeAttandence'])->name('TakeAttandence');
Route::post('/post-attendness', [App\Http\Controllers\AttandenceController::class, 'PostAttandence'])->name('PostAttandence');

// Settings route are here................ 


Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'Settings'])->name('Settings');
Route::post('/update-settings', [App\Http\Controllers\SettingsController::class, 'UpdateSettings'])->name('UpdateSettings');


//Pos route are here......................... 

Route::get('/pos', [App\Http\Controllers\POSController::class, 'POS'])->name('POS');

Route::get('/order/pending', [App\Http\Controllers\POSController::class, 'PendingOrder'])->name('PendingOrder');
Route::get('/view-order/{o__id}', [App\Http\Controllers\POSController::class, 'ViewOrder'])->name('ViewOrder');
Route::get('/pos-done/{o__id}', [App\Http\Controllers\POSController::class, 'PosDone'])->name('PosDone');
Route::get('/order/succsess', [App\Http\Controllers\POSController::class, 'SuccessOrder'])->name('SuccessOrder');

//Card route are here......................... 
//Route::get('/cart', [App\Http\Controllers\POSController::class, 'Cart'])->name('Cart');
Route::get('/product/add/busket/{id}', [App\Http\Controllers\POSController::class, 'SingelCart'])->name('SingelCart');
Route::get('/singel/cart/delete/{id}', [App\Http\Controllers\POSController::class, 'SingelCartDelete'])->name('SingelCartDelete');
Route::post('/cart/product/update', [App\Http\Controllers\POSController::class, 'CartUpdate'])->name('CartUpdate');
Route::post('/create-invoice', [App\Http\Controllers\POSController::class, 'CreateInvoice'])->name('CreateInvoice');
Route::post('/final-invoice/', [App\Http\Controllers\POSController::class, 'FinalInvoice'])->name('FinalInvoice');

//Sales ...................... 
Route::get('/today-sales', [App\Http\Controllers\POSController::class, 'TodaySales'])->name('TodaySales');
Route::get('/monthly-sales', [App\Http\Controllers\POSController::class, 'MonthlySales'])->name('MonthlySales');
Route::get('/january-sales', [App\Http\Controllers\POSController::class, 'JanuarySales'])->name('JanuarySales');
Route::get('/february-sales', [App\Http\Controllers\POSController::class, 'FebruarySales'])->name('FebruarySales');
Route::get('/march-sales', [App\Http\Controllers\POSController::class, 'MarchSales'])->name('MarchSales');
Route::get('/april-sales', [App\Http\Controllers\POSController::class, 'AprilSales'])->name('AprilSales');
Route::get('/may-sales', [App\Http\Controllers\POSController::class, 'MaySales'])->name('MaySales');
Route::get('/jun-sales', [App\Http\Controllers\POSController::class, 'JunSales'])->name('JunSales');
Route::get('/july-sales', [App\Http\Controllers\POSController::class, 'JulySales'])->name('JulySales');
Route::get('/august-sales', [App\Http\Controllers\POSController::class, 'AugustSales'])->name('AugustSales');
Route::get('/september-sales', [App\Http\Controllers\POSController::class, 'SeptemberSales'])->name('SeptemberSales');
Route::get('/october-sales', [App\Http\Controllers\POSController::class, 'OctoberSales'])->name('OctoberSales');
Route::get('/november-sales', [App\Http\Controllers\POSController::class, 'NovemberSales'])->name('NovemberSales');
Route::get('/december-sales', [App\Http\Controllers\POSController::class, 'DecemberSales'])->name('DecemberSales');

Route::get('/yearly-sales', [App\Http\Controllers\POSController::class, 'YearlySales'])->name('YearlySales');


