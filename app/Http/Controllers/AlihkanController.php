<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlihkanController extends Controller
{
    public function openWhatsApp()
{
    $phoneNumber = '081289591821'; // Replace with the desired phone number

    // Generate the WhatsApp link
    $whatsAppLink = "https://api.whatsapp.com/send?phone=$phoneNumber";

    // Redirect to the WhatsApp link
    return redirect($whatsAppLink);
}

public function openFacebook()
{
    $url = 'https://www.facebook.com/Susi123'; // Replace with the desired Facebook URL
    return redirect()->away($url);
}
}
