<?php


//use Illuminate\Http\Request;
Route::group(['namespace'=>'Fzdn\Contact\Http\Controllers'],function (){


Route::get('contact','ContactController@index')->name('contact');

Route::post('contact','ContactController@send');


});






/*Route::get('contact',function (){
    return view('contact::contact');
})->name('contact');*/


/*Route::post('contact',function(Request $request){
    return $request->all();
});*/



