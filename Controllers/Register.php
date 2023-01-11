<?php

namespace App\Http\Controllers;

use App\Models\registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function view(){
        return view('Register', ['title'=>'Register']);
    }

    public function regist(Request $request){
        $validate = $request->validate([
            'name' => 'required|min:5',
            'Email_Address' => ['required','email:rfc,dns','unique:registers'],
            'password' => 'required_with:Confirm_Password|same:Confirm_Password|alpha_num|min:8',
            'Confirm_Password' => 'alpha_num|min:8',
            'Gender' => 'required',
            'Date_of_Birth' => 'required|date|after_or_equal:'.date('1900-01-01').'|before:'.now()->format('Y-m-d'),
            'Country' => 'required'
        ]);
        $validate['password'] = Hash::make($validate['password']);
        if(registers::create($validate)){
            return redirect('/');
        }else{
            return 'Failed';
        }
    }
}
