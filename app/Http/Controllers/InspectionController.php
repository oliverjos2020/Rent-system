<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\Inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InspectionController extends Controller
{

    public function index(){
        
        if(auth()->user()->userHasRole('Admin')){
            $inspection = Inspection::where('payment', '1')->where('visit', '1')->get();
        }else{
            $id = Auth()->User()->id;
            $inspection = Inspection::where('user_id', $id)->get();
        }
       
        return view('dashboard.manage-inspection', ['inspection' => $inspection]);
    }

    public function pending(){
        
            $inspection = Inspection::where('payment', '1')->where('visit', '0')->get();
    
        return view('dashboard.manage-inspection-pending', ['inspection' => $inspection]);
    }

    public function wishlist(){
        $inspection = Inspection::where('payment', '0')->where('visit', '0')->get();
    
        return view('dashboard.inspection-awaiting-payt', ['inspection' => $inspection]);
    }

    public function inspection(){
        $data = request()->validate([
            'property_id' => ['required','max:15'],
            'payment' => ['required','max:15'],
            'amount' => ['required','max:15'],
            'visit' => ['required','max:15']
        ]);
        auth()->user()->inspections()->create($data);

        $user = Auth()->User()->id;
        // $cart = Cart::limit(1)->get();
        $Inspectionitem = Inspection::where('user_id', $user)->get();
        // $total = Cart::where('user_id', $id)->sum('amount');
        // return view('home.inspection-cart', ['Inspectionitem'=>$Inspectionitem]);
        

        Session::flash('inspection-created', '');
        // return view('home.cart', ['cart'=>$cart,'cartitem'=>$cartitem,'total'=>$total]);
        return back();
    }

    public function visit(Inspection $inspection){
        $user = $inspection['id'];
        Inspection::where('id', $user)->update(['visit' => '1']);
        Session::flash('visited', 'inspection completed');
        return back();
    }

    public function view($id){
        $cart = Cart::limit(1)->get();
        $Inspectionitem = Inspection::where('user_id', $id)->where('payment', '0')->get();
        // $total = Cart::where('user_id', $id)->sum('amount');
        return view('home.inspection-cart', ['cart'=>$cart,'Inspectionitem'=>$Inspectionitem]);
    }

    public function delete(Inspection $inspection){
        $inspection->delete();
        Session::flash('cart-deleted', 'Item Removed');
        return back();
    }

    public function verify(Request $request){
        // return $request;
        $inspection = new Inspection;
        $skey = "sk_test_f4f498e04004fea994980a1574ad941b908fc60a";
        $reference = $request['reference'];
        $user = $request['user'];
        $property = $request['property_id'];
        $status = 1;

        $curl = curl_init();
  
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $skey",
        "Cache-Control: no-cache",
        ),
    ));
  
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $obj = json_decode($response);
            $message = $obj->message;
            
            Inspection::where('user_id', $user)->where('property_id', $property)->where('payment', '0')->update(['payment' => $status, 'payment_message' => $message, 'reference_id' => $reference]);
            echo $response;
            // return $obj->message;
        }
                
    }


}
