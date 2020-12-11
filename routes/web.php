<?php

use Illuminate\Support\Facades\Route;



//       *************** Start Group Route Admin ******************           //

Route::group(['prefix'=>'admin'],function() {

    // manage users
    Route::get('users',[
        'as'=>'nguoidung',
        'uses'=>'Admin\UserController@getUser'
    ]);
    Route::delete('/user/{id}',"Admin\UserController@deleteUser");

    // manage rooms
    Route::get('room',[
        'as'=>'room',
        'uses'=>'Admin\RoomController@GetRoom'
    ]);
    Route::get('addRoom',[
        'as'=>'addRoom',
        'uses'=>'Admin\RoomController@roomType'
    ]);
    Route::post('addroom','Admin\RoomController@addRoom');
    Route::get('room/{id}/edit','Admin\RoomController@editRoom');
    Route::patch('room/{id}','Admin\RoomController@updateRoom');
    Route::delete('/room/{id}',"Admin\RoomController@deleteRoom");
    Route::post('room/search',"Admin\RoomController@searchRoom");

    // manage services
    Route::get('service',[
        'as'=>'service',
        'uses'=>'Admin\ServiceController@getServices'
    ]);
    Route::get('addService',[
        'as'=>'addService',
        'uses'=>'Admin\ServiceController@create'
    ]);
    Route::post('addservice','Admin\ServiceController@addService');
    Route::delete('/service/{id}',"Admin\ServiceController@deleteService");
    Route::get('service/{id}/edit','Admin\ServiceController@editService');
    Route::patch('service/{id}','Admin\ServiceController@updateService');

    // manage booking rooms
    Route::get('booking',[
        'as'=>'bookRoom',
        'uses'=>'Admin\BookingController@show_roomBooked'
    ]);

    // show ra thoi gian de chon phong
    Route::get('choose-time-booking',[
        'as'=>'chooseTime',
        'uses'=>'Admin\BookingController@chooseTimeBooking'
    ]); 
    
    Route::post('chooseTime','Admin\BookingController@chooseRoom');
    Route::get('datphong/{id}',[
        'as'=>'datphong',
        'uses'=>'Admin\BookingController@bookRoom'
    ]);

    Route::post('saveInfor','Admin\BookingController@saveInfor');
    Route::post('saveBookRoom','Admin\BookingController@saveBookRoom');

    // manage amount
    Route::get('amount',[
        'as'=>'amount',
        'uses'=>'PageController@GetAmount'
    ]);

    // dashboard
    // Route::get('',[
    //     'as'=>'dieukhien',
    //     'uses'=>'PageController@GetTrangChuAdmin'
    // ]);
    Route::get('/',[
        'as'=>'dieukhien',
        'uses'=>'Admin\DashboardController@GetTrangChuAdmin'
    ]);

});


//              ************* End Group Route Admin **************                //







//            ***************** Start Route User ********************         //


Route::get('',[
    'as'=>'homePage',
    'uses'=>'PageController@getHomePage'
]);

route::post('check-free-rooms',[
    'as'=>'checkFreeRoom',
    'uses'=>'User\BookingController@getRoom'
]);

Route::get('our-room',[
    'as'=>'ourRoom',
    'uses'=>'PageController@getOurRoom'
]);



// user ***********
//
Route::get('sign-in',[
    'as'=>'signIn',
    'uses'=>'Auth\LoginController@getSignIn'
]);
//
Route::post('sign-in',[
    'as'=>'signIn',
    'uses'=>'Auth\LoginController@signIn'
]);

//
Route::get('sign-up',[
    'as'=>'signUp',
    'uses'=>'Auth\SignUpController@getSignUp'
]);
//
Route::post('sign-up',[
    'as'=>'signUp',
    'uses'=>'Auth\SignUpController@signUp'
]);
//
Route::get('signOut',[
    'as'=>'signOut',
    'uses'=>'Auth\LoginController@signOut'
]);

Route::get('verify',[
    'as'=>'nhapma',
    'uses'=>'Auth\SignUpController@getVerify'
]);
Route::post('verify',[
    'as'=>'nhapma',
    'uses'=>'Auth\SignUpController@checkVerify'
]);
/************************************* */
Route::get('forgotPass',[
    'as'=>'quenmatkhau',
    'uses'=>'Auth\ForgotPassController@GetForgotPass'
]);
Route::post('forgotPass','Auth\ForgotPassController@ForgotPass');

Route::get('verifychangepass',[
    'as'=>'nhapma',
    'uses'=>'Auth\ForgotPassController@getVerify'
]);

Route::post('verifychangepass','Auth\ForgotPassController@checkVerify');

Route::get('changPass',[
    'as'=>'doimatkhau',
    'uses'=>'Auth\ForgotPassController@getChangPass'
]);
Route::post('changePass','Auth\ForgotPassController@ChangPass');




/********************************** */
// form dat phong cua user


Route::post('form-book-room',[
    'as'=>'formBookRoom',
    'uses'=>'User\BookingController@getRoom'
]);

// đây là route về phần sau khi hiển thị ra hết rooms trống thì bắt đầu chọn phòng và gửi request.
Route::get('choose-room/{room_id}',[
    'as'=>'chooseRoom',
    'uses'=>'User\BookingController@saveBooking'
]);




// Route about main services
    Route::get('view-profile',[
        'as'=>'viewprofile',
        'uses'=>'User\ProfileController@GetViewProfile'
    ]);
    Route::patch('view-profile/{id}','User\ProfileController@UpdateProfile');
//          ***************** End Group Route User *******************

Route::post('/feedback','User\FeedbackMailController@send');
Route::get('/admin/feedbacks','Admin\FeedbackController@index');
Route::post('/admin/feedbacks/rep','Admin\FeedbackController@reply');
Route::post('/admin/feedbacks/delete','Admin\FeedbackController@delete' );

