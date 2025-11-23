<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function questionnaire()
    {
        return view('pages.questionnaire');
    }

    public function submitQuestionnaire(Request $request)
    {
        // Here you can handle the form submission, for example, by validating and saving the data.
        // For now, we'll just redirect back with a success message.
        return back()->with('success', 'Thank you for your submission!');
    }
}