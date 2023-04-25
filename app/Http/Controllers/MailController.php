<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $mailData = [
            'title' => $request->input('title'),
            'body' => $request->input('message')
        ];
    
        Mail::to($request->input('email'))->send(new DemoMail($mailData));
           
        dd("Email is sent successfully --");
    }
    
}