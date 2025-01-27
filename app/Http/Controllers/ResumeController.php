<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $about=About::get()->first();
        $experience =Experience::get();
        $education= Education::get();
        $skill=Skill::get();
        $social=Contact::get();
        return view('index',compact('about','experience','education','skill','social'));
    }
}
