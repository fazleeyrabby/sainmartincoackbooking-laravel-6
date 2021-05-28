<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Coach;

class BookingController extends Controller
{
  public  function booking(Request $request){
  	$request->session()->forget(['menu']);
    $request->session()->put(['menu'=>'booking']);

    $bookings=Booking::join('coach','booking.coach_id','=','coach.id')
            ->select('booking.*', 'coach.name as coachName','coach.img as coachImage')
            ->orderBy('booking.booking_id','DESC')
            ->get();
    return view('admin.booking',compact('bookings'));
    } 

    public  function showBooking(Request $request,$id){
	  	$request->session()->forget(['menu']);
	    $request->session()->put(['menu'=>'booking']);
	    Coach::where('id',$id)->update(['status'=>1]);
	    Booking::where('booking_id',$id)->update(['status'=>0]);
	    $bookings=Booking::join('coach','booking.coach_id','=','coach.id')
	            ->select('booking.*', 'coach.name as coachName','coach.img as coachImage')
	            ->orderBy('booking.booking_id','DESC')
	            ->get();
	    return view('admin.booking',compact('bookings'));
    } 

    public  function bookingcoachPub(Request $request,$id){
    	$request->session()->forget(['menu']);
	    $request->session()->put(['menu'=>'booking']);
    	$bookingCoach = Booking::where('booking_id',$id)
    			->select('coach_id')
    			->first();
	    Coach::where('id',$bookingCoach->coach_id)->update(['status'=>0]);
	    Booking::where('booking_id',$id)->update(['status'=>2]);
	    return redirect()->back()->with('success', ' Your Coach has been Published successfully');
    }

    public  function bookingcoachUnpub(Request $request,$id){
    	$request->session()->forget(['menu']);
	    $request->session()->put(['menu'=>'booking']);
    	$bookingCoach = Booking::where('booking_id',$id)
    			->select('coach_id')
    			->first();
	    Coach::where('id',$bookingCoach->coach_id)->update(['status'=>1]);
	    Booking::where('booking_id',$id)->update(['status'=>2]);
	    return redirect()->back()->with('success', ' Your Coach has been Unpublished successfully');
    }

    public function destroy($id){
        $data = Booking::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' Booking Coach will be deleted successfully');
    }
}
