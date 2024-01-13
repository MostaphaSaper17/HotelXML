<?php

namespace App\Http\Controllers\Agent\Auth;

use App\Models\Agent;
use App\Models\Country;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $agent = Agent::where('person_email',$request->person_email)->get('is_active')->first();
        if(!$agent){
            $Employee = Employee::where('email',$request->person_email)->get();
            $this->validate($request, [
                'person_email' => 'required|email',
                'password' => 'required',
            ]);

            if(auth()->guard('employee')->attempt(['email' => $request->input('person_email'),  'password' => $request->input('password')])){
                toastr()->success('Logged In Successfully','Success');
                return redirect()->route('employee.home');
            }else {
                toastr()->success('Invalid email or password','Error');
                return back();
            }
        }
        if($agent['is_active'] == 0){
            toastr()->success('Your Account is NOT Active Yet','Error');
            return back();
        };

        $this->validate($request, [
            'person_email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('agent')->attempt(['person_email' => $request->input('person_email'),  'password' => $request->input('password')])){
            toastr()->success('Logged In Successfully','Success');
            return redirect()->route('agent.home');
        }else {
            toastr()->success('Invalid email or password','Error');
            return back();
        }
    }

    public function getRegister()
    {
        $countries = Country::all();
        return view('website.agent.register',compact('countries'));
    }
}
