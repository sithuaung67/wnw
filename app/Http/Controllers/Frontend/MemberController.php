<?php

namespace App\Http\Controllers\Frontend;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Frontend.Member.index');
    }
    public function NewMember(){
        $member_id=Member::all();
        return view('Frontend.Member.add_member',compact('member_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        $this->validate($request,[
////        'member_id'=>'required',
////        'first_name'=>'required',
//////        'middle_name'=>'required',
//////        'last_name'=>'required',
//////        'birth_date'=>'required',
//////        'day'=>'required',
//////        'month'=>'required',
//////        'year'=>'required',
////        'email'=>'required',
////        're_email'=>'required',
////        'password'=>'required',
////        're_password'=>'required',
//        'phone'=>'required',
//
//    ]);
            $member=new Member();
        $member->pid=$request['pid'];
        $member->member_name="wnwmember".$request['phone'];
        $member->ownership=$request['ownership'];
        $member->gender=$request['gender'];
        $member->full_name=$request['fname'].$request['mname'].$request['lname'];
        $member->birth_date=$request['dob'];
        $member->email=$request['email'];
        $member->re_email=$request['re_email'];
        $member->password=$request['pw'];
        $member->confirm_password=$request['re_pw'];
        $member->phone=$request['phone'];
        $member->agree=$request['agree'];
        $member->save();
        return view('Payment.index');
//        return redirect('https://demo2.2c2p.com/2C2PFrontEnd/RedirectV3/payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
