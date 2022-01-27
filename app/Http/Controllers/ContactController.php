<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        $request->session()->put($inputs);

        if($this->validate($request, Contact::$rules)){
            return view('/confirm', compact("inputs"));
        }else{
            redirect('/contact');
        }
    }
    public function add()
    {
        return view('confirm');
    }

    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Contact::create($form);
        redirect('thanks');
    }
    public function thanks()
    {
        return view('thanks');
    }
}
