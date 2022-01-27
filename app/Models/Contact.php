<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'adress', 'building_name', 'opinion'];

    public static $rules = array(
        'lastname' => 'required',
        'firstname' => 'required',
        'gender' => 'required|in:男,女',
        'email' => 'required|email',
        'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
        'address' => 'required',
        'building_name' => 'nullable',
        'opinion' => 'required|max:120'
    );

    public function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->english, 'as')]);
    }
    public function getFullNameAttribute()
    {
        return "{inputs->lastname} . {inputs->firstname}";
    }
}