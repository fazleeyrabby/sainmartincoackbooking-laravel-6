<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\About;
use App\Brand;
use App\Service;
use App\Destination;
use App\Coach;
use App\Award;
use App\Gallery;
use App\Client;
use App\Clientcategory;
use App\Booking;
use Carbon\Carbon;
use DB;


class PageController extends Controller
{
    public function about()
    {
    	$about = About::first();
    	return view('about',compact('about'));
    }

    public function service()
    {
    	$categories = Brand::orderBy('id','DESC')->get();
        $service = Service::first();
    	return view('service',compact('categories','service'));
    }

    public function destination()
    {
    	$destinations = Destination::orderBy('id',"DESC")->get();
    	return view('destination',compact('destinations'));
    }

    public function coach()
    {
    	$coachs = Coach::orderBy('id',"DESC")->get();
    	return view('coach',compact('coachs'));
    }

    public function award()
    {
    	$awards = Award::orderBy('id',"DESC")->get();
    	return view('award',compact('awards'));
    }

    public function gallery()
    {
    	$galleries = Gallery::orderBy('id',"DESC")->get();
    	return view('gallery',compact('galleries'));
    }

    public function client()
    {
        $clientcategoriesLefts = Clientcategory::orderBy('id','ASC')->limit(7)->get();
        foreach ($clientcategoriesLefts as $key => $clientcategoryLeft) {
           $clientcategory_id = $clientcategoryLeft->id;
           $clients = Client::where('client_cat_id',$clientcategory_id)->get();
           $clientcategoriesLefts[$key]->clients = $clients; 
        }

        $clientcategoriesRights = Clientcategory::orderBy('id','ASC')->skip(7)->take(10)->get();
        foreach ($clientcategoriesRights as $key => $clientcategoryRight) {
           $clientcategory_id = $clientcategoryRight->id;
           $clients = Client::where('client_cat_id',$clientcategory_id)->get();
           $clientcategoriesRights[$key]->clients = $clients; 
        }
        // return $clientcategories;
    	return view('client',compact('clientcategoriesLefts','clientcategoriesRights'));
    }

    public function contact()
    {
    	// $about = About::first();
    	return view('contact');
    }

    public function booking()
    {
        $coachs = Coach::all();
        return view('booking',compact('coachs'));
    }

    public function bookingForm($id)
    {
        // $coachs = Coach::orderBy('id',"DESC")->get();
        return view('bookingFrom',compact('id'));
    }

    public function store(Request $request,$id)
    {
        $input=$request->all();
        $input['coach_id'] = $id;
        $input['status'] = 1;
        Coach::where('id',$input['coach_id'])->update(['status'=>1,'fromDate'=>$request->fromDate,'toDate'=>$request->toDate]);
        $booking=Booking::create($input);
        return redirect('booking')->with('success', 'Coach book successfully.We will contact you within 2 hours.'); 
    }

    public function datewiseSearch(Request $request){
        
        //$coachs = array();
        // $coachs = '';
        // $searchcoachs = Coach::all();
        // $input = $request->all();

        $fromdate = $request->fromDate;
        $todate = $request->toDate;
        $searchcoachs = DB::select( DB::raw("SELECT a.*,
                            IF((a.fromDate <= '".$fromdate."' AND a.toDate >= '".$fromdate."') OR (a.fromDate <= '".$todate."' AND a.toDate >= '".$todate."'), 
                            CONCAT(DATE_FORMAT(a.fromDate,'%b %d, %Y'),'-',DATE_FORMAT(a.toDate,'%b %d, %Y')),'') AS status_bus
                            FROM coach a") );
        return view('booking',compact('searchcoachs','coachs'));
    }


    public function coachbookingvalidation(Request $request){
        $from = $request->fromDate;
        $to = $request->toDate;
        $id = $request->id;
       return Coach::where('fromDate','<=',$request->fromDate)
                ->where('toDate','>=',$request->fromDate)
                ->where('fromDate','<=',$request->toDate)
                ->where('toDate','>=',$request->toDate)
                ->where('id',$id)
                ->where('status',1)
                ->count();       

        // $coacjbookval =  DB::select( DB::raw("SELECT id FROM coach a
        //     WHERE a.id = '".$id."' AND (a.fromDate <= '".$fromdate."' AND a.toDate >= '".$fromdate."' ) " ));
        // return json_encode($coacjbookval);
    }
}
