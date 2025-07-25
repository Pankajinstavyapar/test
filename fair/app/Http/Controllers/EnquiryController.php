<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\contact;
use App\Mail\ContactFormSubmitted;
use Mail;


class EnquiryController extends Controller
{
    public function ContactForm(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'phone' => 'string|required',
            'g-recaptcha-response' => 'string|required',
            'lead_for' => 'string|required',
            'address' => 'string|nullable',
            'message' => 'string|nullable',
        ]);
         $pageUrl = $request->input('pageUrl');
       
        $ip = $request->ip();
        $secret = "6LcR5Q0rAAAAAAIIvULKxKBJK0UR5po0udOJajmw";
        $response = $validatedData['g-recaptcha-response'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}&remoteip={$ip}";

        $response = Http::post($url);

        if ($response->object()->success) {
            $lead = new contact();

            $lead->name = $validatedData['name'];
            $lead->email = $validatedData['email'];
            $lead->phone = $validatedData['phone'];
            $lead->query = $validatedData['lead_for'];
            $lead->message = $validatedData['message'];
            $lead->ip_address = $ip;
            $lead->address = $validatedData['address'] ?? NULL;

           
            Mail::to('vrajhandi@gmail.com')
        
          ->bcc('enquiry.instavyapar@gmail.com')
            ->send(new ContactFormSubmitted($lead, $pageUrl));

            $lead->save();
            return json_encode(['status' => true, 'message' => "Thank you for reaching us. Our team member will contact you ASAP"]);
        } else {
            return json_encode(['status' => false, 'message' => "Please try after some time."]);
        }
    }
}
