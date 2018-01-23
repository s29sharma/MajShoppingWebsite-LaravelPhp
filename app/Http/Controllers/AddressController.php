<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getAddressPage(){
        return view('checkout.address');
    }

    public function postAddress(Request $request){
        $rules = ['firstname' => 'required','lastname'=>'required','email'=>'required|email','inputAddress'=>'required','inputAddress2'=>'required','inputCity'=>'required','inputState'=>'required|not_in:Choose...'];
        $customMessages = ['inputState.required' => 'You must select a state',
            'inputState.not_in' => 'You must select a state'];
        $this->validate($request, $rules, $customMessages);
        $firstname=$request->input("firstname");
        $lastname=$request->input("lastname");
        $email=$request->input("email");
        $address1=$request->input("inputAddress");
        $address2=$request->input("inputAddress2");
        $city=$request->input("inputCity");
        $state=$request->input("inputState");
        $zip=$request->input("inputZip");
        return view('checkout.payment',['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'address1'=>$address1,'address2'=>$address2,'state'=>$state,'city'=>$city,'zip'=>$zip]);

    }

    public function completePayment(){

    }
}
