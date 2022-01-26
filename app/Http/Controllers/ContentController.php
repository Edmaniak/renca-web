<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cooperation;
use App\Course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class ContentController extends Controller
{
    const ABOUT_ARTICLE_ID = 1;

    public function welcome()
    {
        $courses = Course::all();
        $about = Article::find(self::ABOUT_ARTICLE_ID);
        $cooperations = Cooperation::all();
        return view('welcome')->with(
            [
                'courses' => $courses,
                'about' => $about,
                'cooperations' => $cooperations
            ]
        );
    }

    public function article($id)
    {
        $article = Article::find($id);
        return view('detail')->with(['article' => $article]);
    }

    public function courses()
    {
        $courses = Course::all();
        return view('courses')->with(['courses' => $courses]);
    }

    public function course($id)
    {
        $course = Course::find($id);
        return view('detail')->with(['article' => $course]);
    }

    public function coop($id)
    {
        $coop = Cooperation::find($id);
        return view('detail')->with(['article' => $coop]);
    }

    public function sendMail(Request $request)
    {
        $to_name = 'Renata Kolaciová';
        $to_email = 'renata.kolaciova@gmail.com';
        $data = [];
        Mail::send("emails.mail", $request->toArray(), function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject("Zpráva z kontaktního formuláře uporodniasistentky.cz");
            $message->from('uporodniasistentky@test.cz');
        });
    }
}
