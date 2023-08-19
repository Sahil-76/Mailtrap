<?php

use App\Mail\SendEmail;
use App\Jobs\SendTestMailJob;
use App\Mail\SendMarkdownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $data = ['name' => "The test Coder"];

    // // Using Laravel Mail Facade
    // Mail::raw("hii, this is working fine", function ($msg) {
    //     $msg->to("boyd62364@gmail.com", "Advance Laravel User")
    //         ->subject("Advance Laravel Series");
    // });  

    // echo('mail send success');

/* this is use for mailable  whith view file */
/* Mail::to('test1@test.com', 'New User Test')->send(new SendEmail());

 echo('mailSend sucessfully'); */


//markdown email sent
/* Mail::to(users:'test1@test.com')
->send(new SendMarkdownMail());

echo("mailSend sucessfully"); */

//queue and jobs

dispatch(function () {
    Mail::to('test101@test.com')
        ->send(new SendMarkdownMail());
})->delay(now()->addSeconds( value:5));

// dispatch(new SendTestMailJob())
// ->delay(now()->addSeconds(value:5));

 echo("Email sent successfully with a delay of 10 seconds");
});



