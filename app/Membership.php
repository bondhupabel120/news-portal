<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = ['first_name','last_name','father_name','mother_name','institute_name','class','roll','present_address','permanent_address','mobile','email','facebook'];

    public static function saveMembershipInfo($request){
        $member = new Membership();
        $member->first_name        = $request->first_name;
        $member->last_name         = $request->last_name;
        $member->father_name       = $request->father_name;
        $member->mother_name       = $request->mother_name;
        $member->institute_name    = $request->institute_name;
        $member->class             = $request->class;
        $member->roll              = $request->roll;
        $member->present_address   = $request->present_address;
        $member->permanent_address = $request->permanent_address;
        $member->mobile            = $request->mobile;
        $member->email             = $request->email;
        $member->facebook          = $request->facebook;
        $member->save();
    }

    public static function deleteMembership($request){
        $member = Membership::find($request->id);
        $member->delete();
    }
}
