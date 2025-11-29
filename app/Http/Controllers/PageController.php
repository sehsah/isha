<?php

namespace App\Http\Controllers;

use App\Models\QuestionnaireResponse;
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

    public function faq()
    {
        return view('pages.faq');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function submitQuestionnaire(Request $request)
    {
        // In a real application, you would add validation here.
        QuestionnaireResponse::create($request->all());

        return back()->with('success', 'Thank you for your submission! We have received your information and will be in touch shortly.');
    }
}
