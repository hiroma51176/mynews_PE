<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    // php/Laravel 14 課題５
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
    // PHP/Laravel 17 課題で追加
    public function profile_histories()
    {
        return $this->hasmany('App\Profile_History');
    }
}
