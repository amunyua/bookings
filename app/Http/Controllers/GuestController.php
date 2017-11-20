<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /*public function home(){
        return view('welcome-1',[
            'products'=>Product::all()
        ]);
    }*/

    public function booking(){
        $rooms = Room::all();
        $bookings = Booking::where('status' ,'=' ,true)->pluck('room')->toArray();
        if(count($rooms)){
//            if(count($bookings)) {
                foreach ($rooms as $room) {
                    if(in_array($room->id,$bookings)){
                        $room['status'] = 'reserved';
                    }else{
                        $room['status'] = 'vacant';
                    }
                }
//            }
        }
//        print_r($rooms);die;
        return view('welcome-1',[
            'rooms'=>$rooms
        ]);
    }
}
