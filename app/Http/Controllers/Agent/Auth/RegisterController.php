<?php

namespace App\Http\Controllers\Agent\Auth;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::WEBSITE_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('agent');
    }

    protected function registered(Request $request, $user)
    {
        $this->guard('agent')->logout(); // Log out the newly registered user
        toastr()->success('Agent Registered, Please Wait Untill The Account be Active','Success');
        return redirect()->route('website.home');
    }

    protected function guard()
    {
        return auth()->guard('agent');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'person_name' => ['required', 'string', 'max:255'],
            'person_phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'person_email' => ['required', 'string', 'email', 'max:255', 'unique:agents'],
            'password' => ['required', 'string', 'min:8','confirmed'],
            'management_name' => ['required', 'string', 'max:255'],
            'management_email' => ['required', 'string', 'email', 'max:255'],
            'management_phone' =>['required', 'regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'user_name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'company_reg_no' => ['required', 'numeric'],
            'nature_of_business' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'city' => ['required', 'string', 'max:255'],
            'currency' => ['required'],
            'pincode' => ['required', 'numeric'],
            'website'=> ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Agent::create([
            'person_name' => $data['person_name'],
            'person_phone' => $data['person_phone'],
            'person_email' => $data['person_email'],
            'management_name' => $data['management_name'],
            'management_email' => $data['management_email'],
            'management_phone' => $data['management_phone'],
            'user_name' => $data['user_name'],
            'company_name' => $data['company_name'],
            'company_reg_no' => $data['company_reg_no'],
            'nature_of_business' => $data['nature_of_business'],
            'address' => $data['address'],
            'country' => $data['country'],
            'city' => $data['city'],
            'currency' => $data['currency'],
            'pincode' => $data['pincode'],
            'website' => $data['website'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
