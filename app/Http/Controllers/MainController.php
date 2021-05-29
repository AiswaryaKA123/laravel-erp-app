<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use App\Models\AdmissionModel;
use App\Models\ScholarshipModel;
use App\Models\CharityModel;
use App\Models\AdminModel;
use App\Models\SponsorModel;
use App\Models\BusModel;
use App\Models\PaymentModel;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
    function gallery()
    {
        return view('gallery');
    }
    function scholarship()
    {
        return view('scholarship');
    }
    function sponsor()
    {
        return view('sponsor');
    }
    function bus()
    {
        return view('bus');
    }
    function scholarship_save(Request $request)
    {
        $scholarshipmodel=new ScholarshipModel();
        $scholarshipmodel->studfname=$request->studfname;
        $scholarshipmodel->studlname=$request->studlname;
        $scholarshipmodel->studid=$request->studid;
        $scholarshipmodel->studcaddress=$request->studcaddress;
        $scholarshipmodel->studpaddress=$request->studpaddress;
        $scholarshipmodel->studcast=$request->studcast;
        $scholarshipmodel->studreligion=$request->studreligion;
        $scholarshipmodel->studstate=$request->studstate;
        $scholarshipmodel->studcity=$request->studcity;
        $scholarshipmodel->studpin=$request->studpin;
        $scholarshipmodel->studcountry=$request->studcountry;
        $scholarshipmodel->studemail=$request->studemail;
        $scholarshipmodel->studphoneno=$request->studphoneno;

        $scholarshipmodel->save();

    }
    function viewstudent()
    {
        return view('viewstudent');
    }

    function studadmission()
    {
        return view('studadmission');
    }
    function charity()
    {
        return view('charity');
    }
    function charity_save(Request $request)
    {
        $charitymodel=new CharityModel();
        $charitymodel->fname=$request->fname;
        $charitymodel->lname=$request->lname;
        $charitymodel->email=$request->email;
        $charitymodel->acode=$request->acode;
        $charitymodel->phno=$request->phno;
        $charitymodel->amount=$request->amount;
        $charitymodel->msg=$request->messsage;

        $charitymodel->save();
    }
    function scholrships()
    {
        return view('scholarship');
    }
    function tution()
    {
        return view('tutionfee');
    }
    function events()
    {
        return view('events');
    }
    
    function profile()
    {
        $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];
        return view('profile', $data);
    }
    function dasboard()
    {
        return view('dashboard');
    }
    function admin_reg()
    {
        return view('admin_reg');
    }
    function admin_save(Request $request)
    {

        if($request->password != $request->cpassword)
        {
            echo "Passwords isn't matches. Try again.";
        }
        else
        {
            $adminmodel=new AdminModel();
            $adminmodel->username=$request->username;
            $adminmodel->password=Hash::make($request->password);

            $adminmodel->save();

            echo "Admin registration successfull.";
        }
   }
    function dashboard()
    {
        return view('dashboard');
    }
    function addcharity(Request $request)
    {
        $charityaddmodel=new CharityModel();
    
        $charityaddmodel->fname=$request->fname;
        $charityaddmodel->lname=$request->lname;
        $charityaddmodel->email=$request->email;
        $charityaddmodel->acode=$request->acode;
        $charityaddmodel->phno=$request->phno;
        $charityaddmodel->amount=$request->amount;
        $charityaddmodel->msg=$request->msg;
        $charityaddmodel->save();


    }
    function addascholarship(Request $request)
    {
        $scholarshipmodel->studfname=$request->studfname;
        $scholarshipmodel->studlname=$request->studlname;
        $scholarshipmodel->studid=$request->studid;
        $scholarshipmodel->studlname=$request->studlname;
        $scholarshipmodel->studcaddress=$request->studcaddress;
        $scholarshipmodel->studpaddress=$request->studpaddress;
        $scholarshipmodel->studcast=$request->studcast;
        $scholarshipmodel->studreligion=$request->studreligion;
        $scholarshipmodel->studcity=$request->studcity;
        $scholarshipmodel->studpin=$request->studpin;
        $scholarshipmodel->studcountry=$request->studcountry;
        $scholarshipmodel->studemail=$request->studemail;
        $scholarshipmodel->studcast=$request->studcast;
    }
    function addstud(Request $request)
    {
        $studaddmodel=new AdmissionModel();
        $studaddmodel->sname=$request->sname;
        $studaddmodel->class=$request->class;
        $studaddmodel->admyear=$request->admyear;
        $studaddmodel->dob=$request->dob;
        $studaddmodel->aadhaar=$request->aadhaar;
        $studaddmodel->district=$request->district;
        $studaddmodel->address=$request->address;
        $studaddmodel->pin=$request->pin;
        $studaddmodel->blgrp=$request->blgrp;
        $studaddmodel->idmark1=$request->idmark1;
        $studaddmodel->idmark2=$request->idmark2;
        $studaddmodel->prevschool=$request->prevschool;
        $studaddmodel->prevclass=$request->prevclass;
        $studaddmodel->prevyear=$request->prevyear;
        $studaddmodel->grade=$request->grade;
        $studaddmodel->achieve=$request->achieve;
        $studaddmodel->gbehaviour=$request->gbehaviour;
        $studaddmodel->illness=$request->illness;
        $studaddmodel->secondlang=$request->secondlang;
        $studaddmodel->thirdlang=$request->thirdlang;

        $studaddmodel->save();

        //return redirect('/home');
    }
    function sponsor_save(Request $request)
    {
        $sponseraddmodel=new SponsorModel();
        $sponseraddmodel->sponsor_id=$request->sponsor_id;
        $sponseraddmodel->spname=$request->spname;
        $sponseraddmodel->email=$request->email;
        $sponseraddmodel->place=$request->place;
        $sponseraddmodel->occu=$request->occu;
        $sponseraddmodel->save();
    }
    function bus_save(Request $request)
    {
        $busaddmodel=new BusModel();
        $busaddmodel->busno=$request->busno;
        $busaddmodel->dname=$request->dname;
        $busaddmodel->route=$request->route;
        $busaddmodel->bfee=$request->bfee;
        $busaddmodel->date=$request->date;
        $busaddmodel->save();
    }



 

    function save(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:register_models',
            'username'=>'required|unique:register_models',
            'password'=>'required|min:4|max:5',
            'cpassword'=>'required|min:4|max:5'
        ]);

        $register=new RegisterModel();
        $register->fname=$request->fname;
        $register->lname=$request->lname;
        $register->gender=$request->flexRadioDefault;
        $register->dob=$request->dob;
        $register->address=$request->address;
        $register->faname=$request->faname;
        $register->mname=$request->mname;
        $register->gname=$request->gname;
        $register->focc=$request->focc;
        $register->mocc=$request->mocc;
        $register->class=$request->class;
        $register->section=$request->section;
        $register->email=$request->email;
        $register->phoneno=$request->phoneno;
        $register->username=$request->username;
        $register->password=Hash::make($request->password);
        $register->cpassword=Hash::make($request->cpassword);

        $check_password=$request->password;
        $check_cpassword=$request->cpassword;

        $save=$register->save();

        if($check_password==$check_cpassword)
        {
            if($save)
            {
                return back()->with('success','Registration successfull');
            }
            else
            {
                return back()->with('fail','Something went wrong, try again later');
            }
        }
        else
        {
            return back()->with('fail',"Passwords isn't matches");
        }
    }
    function check(Request $request)
    {
        $request->validate([
            'acctype'=>'required',
            'username'=>'required',
            'password'=>'required|min:4|max:12'
        ]);

        $acctype=$request->acctype;
        if($acctype=="Admin")
        {
            $admininfo=AdminModel::where('username','=',$request->username)->first();
            if(!$admininfo)
            {
                return back()->with('fail','Invalid username');
            }
            else
            {
                if(Hash::check($request->password, $admininfo->password))
                {
                    $request->session()->put('LoggedUser',$admininfo->id);
                    return redirect('/dashboard');
                }
                else
                {
                    return back()->with('fail','Invalid password');
                }
            }
        }
        else if($acctype=="User")
        {
            $userinfo=RegisterModel::where('username','=',$request->username)->first();

            if(!$userinfo)
            {
                return back()->with('fail','Invalid username');
            }
            else
            {
                if(Hash::check($request->password, $userinfo->password))
                {
                    $request->session()->put('LoggedUser',$userinfo->id);
                    return redirect('/home');
                }
                else
                {
                    return back()->with('fail','Invalid password');
                }
            }
        }
        else
        {
            return back()->with('fail','Select an account type');
        }
    }
    function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
    function home()
    {
        $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];
        return view('home', $data);
    }
    function about()
    {
        return view('about');
    }
    function contact()
    {
        return view('contact');
    }
    function payment_save()
    {
        
        $payaddmodel=new PaymentModel();
        $payaddmodel->sname=$request->fname;
        $payaddmodel->sclass=$request->sclass;
        $payaddmodel->fee=$request->fee;
        $payaddmodel->payment=$request->payment;
        $payaddmodel->cardno=$request->cardno;
        $payaddmodel->date=$request->date;
        $payaddmodel->month=$request->month;
        $payaddmodel->cvv=$request->cvv;
        $payaddmodel->save();

    }
}
