<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    protected $SMS_SENDERID = 'HOTOTT';
    protected $SMS_API_KEY = 'aG90b3R0OlptdjJJT3R5';
    

    public function index(){
        return view('send_sms');
    }

    public function sendOtp(Request $request)
    {
        $SMS_BASE_URL = "https://webpostservice.com/sendsms_v2.0/sendsms.php?apikey=".$this->SMS_API_KEY."&type=TEXT&sender=".$this->SMS_SENDERID;
        $mobileNumber = $request->input('mobile_number');
        $otp = rand(1000, 9999); // Generate a random 4-digit OTP
        
        $name = "Pradeep Yadav";
        $message ="Dear ".$name." Your OTP Code is: ".$otp.". please do not share with anyone.
        Thank You HOTOTT ENTERTAINMENT PRIVATE LIMITED";

        $client = new Client();

        $response = $client->get($SMS_BASE_URL."&mobile=".$mobileNumber."&message=".urlencode($message)."&peId=1301162488706014164&tempId=1307162521569403987");

        if ($response->getStatusCode() == 200) {
            // OTP sent successfully, store the OTP in the database or session
            // and return a success response to the user
            return response()->json([
                'status' => 'success',
                'message' => 'OTP sent successfully.'
            ]);
        } else {
            // Error sending OTP, return an error response to the user
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to send OTP. Please try again later.'
            ]);
        }
    }
}
