<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\test;
use Mail;
class contactUsController extends Controller
{
    //

// public function mailTest(){
//    $m1="test";
//    $m2="123";
// 	$message='msg';
	
// 	  $done=Mail::send('email.mailView', ['data' => $message,'m1'=>$m1], function ($m) {
//             $m->from('rasad6649@gmail.com', 'Your Application');

//             $m->to('rasad6649@gmail.com')->subject('Your Reminder!');
//         });
//   if($done){
//   	dd('send');
//   }else{dd('not');}
// }

public function contactUs(){
	return view('Pages.contactUs');
}
//contact Us Form
public function contactUsForm(Request $r){

$name=$r->name;
$email=$r->email;
$phone=$r->phone;
$subject=$r->subject;
$message=$r->message;
$emailFromEnvFile= env("MAIL_USERNAME", "email Not Found");
//dd($emailFromEnvFile);
//dd($name,$email,$phone,$subject,$msg);
try{
	  $done=Mail::send('email.contactUsData', ['msg' => $message,'name'=>$name,'phone'=>$phone,'email'=>$email], function ($m) use ($subject,$email,$emailFromEnvFile) {
            $m->from($email, 'Edenfort Contact');

            $m->to($emailFromEnvFile)->subject($subject);
        });
 return back()->with('msg','<div class="alert alert-success"><b>Email Sended Successfully!</b></div>');

 }
 catch(\Exception $e){
               return back()->with('msg','<div class="alert  
             alert-danger"><b>Email not send!</b></div>');
            }
}

//contactAgent  From Search Page. client send mail to particular agent
public function	contactAgent(){

$name=input::get('name');
$email=input::get('email');
$phone=input::get('phone');
$type=input::get('type');
$message=input::get('message');
$agentEmail=input::get('agentEmail');
//test::create(['category'=>$name,'agentName'=>$email,'type'=>$phone,'beds'=>$type,'referenceNo'=>$message,'agentEmail'=>$agentEmail]);

//sending Mail
//$all=$message;
	  $done=Mail::send('email.mailView', ['msg' => $message,'name'=>$name,'phone'=>$phone,'type'=>$type,'email'=>$email], function ($m) use ($email,$name,$agentEmail) {
            $m->from($email, $name);

            $m->to('rasad6649@gmail.com')->subject('Edenfort Client!');
        });
 
	return 'true';
}

}
