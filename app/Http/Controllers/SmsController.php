<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        return view('sms');
    }
    public function store(Request $request)
    {
        $key ='29424eca58a133d9ec912aa232032ba6-02ffab25-de2d-4899-8938-89d615b70a33';
        $base_url = '';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://z1ex42.api.infobip.com/sms/2/text/advanced',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"messages":[{"destinations":[{"to":"'.$request->number.'"}],"from":"hanTask","text":"'.$request->message.'"}]}',
            CURLOPT_HTTPHEADER => array(
                "Authorization: App $key",
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
    }
}
