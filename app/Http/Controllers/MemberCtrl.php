<?php

namespace hilda\Http\Controllers;

use Illuminate\Http\Request;
use hilda\Member;

class MemberCtrl extends Controller
{
    public function create(){
      return view('create');
    }

    public function postCreate(Request $request) {
      $members = new Member;

      $members->owner_name = $request->input('owner_name');
      $members->driver_name = $request->input('driver_name');
      $members->gender = $request->input('gender');
      $members->motor_reg = $request->input('motor_reg');
      $members->logbook = $request->input('logbook');
      $members->dor = $request->input('dor');
      $members->phone = $request->input('phone');
      $members->save();

      return redirect('/system/member/view');
    }

    public function view() {
      $members = Member::all();

      return view('view')->with('members', $members);
    }

    public function edit($id)
    {
      $member = Member::findOrFail($id);
      return view('edit')->with('member', $member);
    }

    public function update(Request $request, $id)
    {
      $members = Member::findOrFail($id);

      $members->driver_name = $request->input('driver_name');
      $members->phone = $request->input('phone');
      $members->save();

      return redirect('/system/member/view')->with(array(
        'members'=>$members,
        'update'=>true
      ));
    }

    public function delete() {
      $members = Member::all();

      return view('deregister')->with('members', $members);
    }

    public function destroy($id)
    {
      $member = Member::find($id);
      $member->delete();
      return redirect('/system/deregister');
    }


}
