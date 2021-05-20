<?php
use App\Contact;
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
Route::post('/Contact','Contactcontroller@store');

Route::get('/read',function()
{
	$contact=Contact::all();
	// $result=DB::select('select * from contacts where id=?',[1]);
	foreach ($contact as $contact) {
		echo $contact->name."<br>";
	}
});

Route::get('/update',function()
{
	$update=DB::update('update contacts set name="Sonyratt" where id=?',[1]);
	return $update;
});
