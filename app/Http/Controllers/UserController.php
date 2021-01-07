<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sex_claim;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use TJGazel\Toastr\Facades\Toastr;


class UserController extends Controller

{
    public function create_sexual_clai()
    {
        return view('create_sexual_claim');
    }

    public function createSex(Request $request)
    {
        //here where we send sexual claim in database
        $sexual = new sex_claim();
        $sexual->name = $request->name;
        $sexual->category = $request->category;
        $sexual->institution = $request->institution;
        $sexual->cp = $request->contactPerson;
        $sexual->sclaim = $request->sclaim;
        $sexual->active = $request->status;
        $sexual->user_modified = Auth::user()->id;

    if($sexual->save())
        {
            Toastr::success('Sexual Claim Sumbited Successfully', 'Congratulation Success');
          return redirect()->route('sexual_claims');
        }else
        { 
            Toastr::error('Sexual Claim Did Not Sumbited Successfully', 'OooPs Soory Error');
          return redirect()->back();
        }

        //dd($request);
    }


     //retrive Sexual claim by getSexual method
     public function getSexual()
     {
         $sexs = sex_claim::all();
         return view('sexual_claims', ['sexs'=>$sexs]);
     }


    public function change_pass()
    {
        return view('change_password');
    }

    public function sexual_clai()
    {
        return view('sexual_claims');
    }

    public function sexual_prog()
    {
        return view('sexual_progress');
    }
    public function create_dawati()
    {
        return view('create_dawati_claim');
    }

    public function dawati_clai()
    {
        return view('dawati_claims');
    }

    public function dawati_prog()
    {
        return view('dawati_progress');
    }
    public function create_testimo()
    {
        return view('create_testimonal');
    }
    
    public function my_testimo()
    {
        return view('my_testimonals');
    }
    public function patrol_lead()
    {
        return view('patrol_leader');
    }

    public function patrol_comma()
    {
        return view('patrol_commander');
    }
    
    public function user_patrol_evide()
    {
        return view('user_patrol_evidence');
    }

}
