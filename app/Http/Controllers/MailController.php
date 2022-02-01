<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\Mens;

class MailController extends Controller
{

    public function sendEmail()
    {
        $topPost = Mens::orderBy('id', 'desc')->first();
        $valueTop = $topPost->id;

        $details = [
            'title' => 'TestMail Sending',
            'topPost' => asset('/mensCollection/'.$valueTop.'')
        ];

        Mail::to(request('email'))->send(new TestMail($details));
        return redirect('/')->with('sended', 'NewestPost Sended!');
    }
}
