<?php
namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\property;
use App\Models\user;
use DB;
use Mail;
class homeController extends Controller {
    //
    public function index() {

        $properties_sale_row1 = property::where('offering_type2','sale')->join('photo','photo.reference_number','=','property.reference_number')->take(3)->get();
         $properties_sale_row2 = property::where('offering_type2','sale')->whereMonth('created_at','11')->join('photo','photo.reference_number','=','property.reference_number')->take(3)->get();
         $properties_sale_row3 = property::where('offering_type2','sale')->whereMonth('created_at','10')->join('photo','photo.reference_number','=','property.reference_number')->take(3)->get();

         $properties_rent_row1 = property::where('offering_type2','rent')->where('offering_type1','commercial')->join('photo','photo.reference_number','=','property.reference_number')->take(3)->get();
         $properties_rent_row2 = property::where('offering_type2','rent')->where('offering_type1','commercial')->whereMonth('created_at','6')->join('photo','photo.reference_number','=','property.reference_number')->take(3)->get();
         $properties_rent_row3 = property::where('offering_type2','rent')->where('offering_type1','commercial')->whereMonth('created_at','12')->join('photo','photo.reference_number','=','property.reference_number')->take(3)->get();
         $agents = user::whereNotNull('image')->take(4)->get();
         // dd($agents);
        return view('Pages.home',compact('properties_sale_row1','properties_sale_row2','properties_sale_row3','properties_rent_row1','properties_rent_row2','properties_rent_row3','agents'));
    }
    //submit proerty by from home page
    public function submitProperty(Request $g) {
         $g->validate([
            'unit_no' => 'required',
            'Building' => 'required',
            'area' => 'required',
            'LandLord' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required|numeric',
            'Price' => 'required',
        ]);
        try {
            $unit = $g->get('unit_no');
            $Building = $g->get('Building');
            $area = $g->get('area');
            $LandLord = $g->get('LandLord');
            $email = $g->get('email');
            $contact_no = $g->get('contact_no');
            $Bedroom = $g->get('Bedroom');
            $Washroom = $g->get('Washroom');
            $Conditions = $g->get('Conditions');
            $Area_Sqft = $g->get('Area_Sqft');
            $Price = $g->get('Price');
            $comment = $g->get('comment');
            $add_by = $g->get('add_by');
            $sale_status = $g->get('sale_status');
            $sale_price = $g->get('sale_price');
            $rented_status = $g->get('rented_status');
            $type = $g->get('type');
            $property_status = $g->get('property_status');
            $rented_price = $g->get('rented_price');
            $db_ext = \DB::connection('mysql-another');
            $success = $db_ext->table('submittedproperties')->insert(['unit_no' => $unit, 'Building' => $Building, 'area' => $area, 'LandLord' => $LandLord, 'email' => $email, 'contact_no' => $contact_no, 'Bedroom' => $Bedroom, 'Washroom' => $Washroom, 'Conditions' => $Conditions, 'Area_Sqft' => $Area_Sqft, 'Price' => $Price, 'type' => $type]);
            // send mail to admin when someone register a property
            $emailFromEnvFile = env("MAIL_USERNAME", "email Not Found");
            $subject = "New Property Submitted";
            $done = Mail::send('email.requestedProperty', ['building' => $Building], function ($m) use ($subject, $emailFromEnvFile) {
                $m->from($emailFromEnvFile, 'Edenfort Contact');
                $m->to($emailFromEnvFile)->subject($subject);
            });
            // end of mail
            return back()->with('msg', '<div class="alert alert-success">Property Listed Successfully!</div>');
        }
        catch(\Exception $e) {
            return back()->with('msg', '<div class="alert alert-danger">Something went wrong</div>');
        }
    }
    //end of submit property
    public function search(Request $request) {
        // $data = property::select(['location'])->where('location', 'LIKE', '%'.$request->term)->distinct('location')->get();
        $data = DB::select("SELECT DISTINCT location FROM `property` WHERE location like '%" . $request->term . "%'");
        return json_encode($data);
    }
    //      public function ajaxLocation(Request $request){
    //   // check if ajax request is coming or not
    //         if($request->ajax()) {
    //             // select country name from database
    //             $data = property::where('location', 'LIKE', $request->location.'%')
    //                 ->distinct('location')->get();
    //             // declare an empty array for output
    //             $output = '';
    //             // if searched countries count is larager than zero
    //             if (count($data)>0) {
    //                 // concatenate output to the array
    //                 $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
    //                 // loop through the result array
    //                 foreach ($data as $row){
    //                     // concatenate output to the array
    //                     $output .= '<li class="list-group-item">'.$row->location.'</li>';
    //                 }
    //                 // end of output
    //                 $output .= '</ul>';
    //             }
    //             else {
    //                 // if there's no matching results according to the input
    //                 $output .= '<li class="list-group-item">'.'No results'.'</li>';
    //             }
    //             // return output result array
    //             return $output;
    //         }
    //     }
    
}
