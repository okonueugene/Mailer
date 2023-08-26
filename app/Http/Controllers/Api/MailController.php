<?php

namespace App\Http\Controllers\Api;

use App\Mail\CampaignMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmails()
    {
        $data = [
            'name' => 'Your Company',
            'location' => 'New York',
            'revenue' => '$10.38M',
        ];

        Mail::to('versionaskari19@gmail.com')->queue(new CampaignMailer($data));
        //return mail parameters
        return response()->json([
            'message' => 'Emails sent successfully',
            'data' => $data,
            'status' => 'success'

        ], 200);

    }
}
