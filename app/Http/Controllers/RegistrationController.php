<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    // Index PAGE  
    public function IndexTable(){
        $peoples = Registration::orderBy('id','DESC')->get();
        return view(' index',compact('peoples'));
    }

    // CREATE PAGE
    public function CreateTable(){
        return view('create');
    }//END method

    //HERE ALL USERE REGISTRAATION INSERT PROCESS
    public function insert(Request $request){
        
        $request->validate([
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'email' => 'required|email|unique:registrations|max:255',
        'password' => 'required|min:8|confirmed',
        ]);

        $registration = new Registration();
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->email = $request->email;
        $registration->password = Hash::make($request->password);
        $registration->save();
        return redirect()->route('indextable')->with('status', 'You have successfully Created!');    
    } //end method
}
