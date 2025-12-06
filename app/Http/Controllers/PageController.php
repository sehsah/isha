<?php

namespace App\Http\Controllers;

use App\Models\QuestionnaireResponse;
use App\Models\User;
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
        $projects = [
            [
                'title' => 'Modern Living Room Design',
                'description' => 'A sleek and contemporary living room featuring minimalist furniture, neutral colors, and large windows for natural light.',
                'image' => 'projects/projects1.jpg',
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects2.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects3.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects4.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects5.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects6.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects7.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects8.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects9.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects10.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects11.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects12.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects13.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects14.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects15.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects16.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects17.jpg',                
            ],
            [
                'title' => 'Cozy Bedroom Retreat',
                'description' => 'A warm and inviting bedroom with soft textiles, ambient lighting, and calming colors to create a peaceful atmosphere.',
                'image' => 'projects/projects18.jpg',                
            ],
        ];        
        return view('pages.projects', ['projects' => $projects]);
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
        $data = $request->all();
        QuestionnaireResponse::create($data);

        // Send notification email to admin
        \Mail::to('ishalrumaihi@hotmail.com')
            ->send(new \App\Mail\QuestionnaireSubmitted($data));

        return back()->with('success', 'Thank you for your submission! We have received your information and will be in touch shortly.');
    }

    public function submitRegister(Request $request)
    {
        // In a real application, you would add validation here.
        $data = $request->all();
        User::create($data);
        return redirect()->route('questionnaire');
    }

    public function howTo()
    {
        return view('pages.how-to');
    }

    public function services()
    {
        return view('pages.services');
    }
}
