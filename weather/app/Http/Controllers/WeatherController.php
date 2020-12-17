<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index($local='Hue'){
            $datajson = Http::get('api.openweathermap.org/data/2.5/weather', [
                'q' => $local,
                'appid' => '6a90d6621003b518dca8752f379ab51e'
            ]);
            $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
            $time->setTimezone(new DateTimeZone(str_replace('-', '/', 'Asia-Ho_Chi_Minh')));
            $data = json_decode($datajson);
            return view('weather', compact('data', 'time'));
    }
    public function changecity($local){
        $datajson = Http::get('api.openweathermap.org/data/2.5/weather', [
            'q' => $local,
            'appid' => '6a90d6621003b518dca8752f379ab51e'
        ]);
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', 'Asia-Ho_Chi_Minh')));
        $data = json_decode($datajson);
        return view('weather', compact('data', 'time'));
    }
}
