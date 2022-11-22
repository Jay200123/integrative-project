<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Auth;
class UserController extends Controller
{
    //function for getting to signup views
    public function getSignup(){
        return view('user.signup');
    }

   //POST method
    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'name' => $request->input('fname').''.$request->lname,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role').''.$request->role='customer'
        ]);

        $user->save();

        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|max:255',
            'town' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'customer_image' => 'mimes:png,jpg,gif,svg',
        ]);

        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->phone = $request->phone;
        $customer->town = $request->town;
        $customer->address = $request->address;
        $customer->city = $request->city;

        if($file = $request->hasFile('customer_image')){
            $file = $request->file('customer_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath  = public_path().'/img_path';
            $input['customer_image'] = 'img_path/'.$fileName;
            $file->move($destinationPath, $fileName);
            $image = $input['customer_image'] = 'img_path/'.$fileName;
            $customer->customer_image = $image;
        }

        $customer->save();
        // Event::dispatch(new SendMail($user));
        Auth::login($user);
        return redirect()->route('user.profile')->with("Welcome to FootWear PH");


    }
    

    //views for sign in
    public function getSignin(){
        return view('user.signin');
    }
 
    //customer's profile
    public function getProfile(){
        $customers = Customer::where('user_id', Auth::id())->get();
        return view('user.profile', compact('customers'));
    }


    //getting the views for employee sign up
    public function getEmployee(){
        return view('user.employee_signup');
    }

    public function postEmployee(Request $request){

        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'name' => $request->input('fname').''.$request->lname,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role').''.$request->role='employee'
        ]);

        $user->save();

        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|max:255',
            'town' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'employee_image' => 'mimes:png,jpg,gif,svg',
        ]);

        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->fname = $request->fname;
        $employee->lname = $request->lname;
        $employee->phone = $request->phone;
        $employee->town = $request->town;
        $employee->address = $request->address;
        $employee->city = $request->city;

        if($file = $request->hasFile('employee_image')){
            $file = $request->file('employee_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath  = public_path().'/img_path';
            $input['employee_image'] = 'img_path/'.$fileName;
            $file->move($destinationPath, $fileName);
            $image = $input['employee_image'] = 'img_path/'.$fileName;
            $employee->employee_image = $image;
        }

        $employee->save();
        Auth::login($user);
        return redirect()->route('employee.profile')->with("Welcome to FootWear PH");
    }

    public function getEmployeeProfile(){

        $employees = Employee::where('user_id', Auth::id())->get();
        return view('user.employee_profile', compact('employees'));
    }

}
