<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    //

    public function  index()
    {
      echo view('user');
    }
    
    public function store(Request $request)
{
    // $validatedData = $request->validate([
    //     'receipt_upload' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

    //    ]);

    //    $name = $request->file('receipt_upload')->getClientOriginalName();

    //    $path = $request->file('receipt_upload')->store('public/receipt');
       
// public/images/yourfile.png
        
$request->validate([
'name' => 'required',
'email' => 'required',
'mobile_no' => 'required',
'receipt_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

]);

 
        if ($receipt_upload = $request->file('receipt_upload')) {
            $imageDestinationPath = 'receipt/';
            $postImage = date('YmdHis') . "." . $receipt_upload->getClientOriginalExtension();
            $receipt_upload->move($imageDestinationPath, $postImage);
            $input['receipt_upload'] = $postImage;
        }
$register = new Register;
$register->name = $request->name;
$register->email = $request->email;
$register->mobile_no = $request->mobile_no;
$register->gender = $request->gender;
$register->transaction_no = $request->transaction_no;
$register->district = $request->district;
$register->taluka = $request->taluka;
$register->aadhar_no = $request->aadhar_no;
//$register->referral_name = $request->referral_name;
$register->dob = $request->dob;
$register->City = $request->City;
$register->receipt_upload = $input['receipt_upload'];

$register->save();
return redirect()->route('register.index')
->with('success','Company has been created successfully.');
}
}
