<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cooperation;
use App\Course;
use App\Employer;
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
        $courses = Course::where('published', true)->orderBy('order', 'DESC')->get();;
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
        $employers = Employer::all();
        return view('detail')->with(['article' => $article, 'employers' => $employers]);
    }

    public function courses()
    {
        $courses = Course::where('published', true)->orderBy('order', 'DESC')->get();
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
        $to_email = 'uporodniasistentky@gmail.com';
        $from_email = $request->email;
        $data = [];
        Mail::send("emails.mail", $request->toArray(), function ($message) use ($to_name, $to_email, $from_email) {
            $message->to($to_email, $to_name)
                ->subject("Zpráva z kontaktního formuláře uporodniasistentky.cz");
            $message->from($from_email);
            $message->replyTo($from_email);
        });
    }
}
