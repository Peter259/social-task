<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fb = new \Facebook\Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v2.5',
        ]);

        $accessToken = env('FACEBOOK_APP_ID').'|'.env('FACEBOOK_APP_SECRET');
        $fb->setDefaultAccessToken($accessToken);

        // Send the request to Graph
        $response = null;
        try {
            $user = Auth::user();
        //  $response = $fb->get('/111223232720147/posts?fields=message, full_picture, created_time');
            $response = $fb->get('/'.$user->facebook_id.'/posts?fields=message, full_picture, created_time');

        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        return view('home')->with('response', $response);
    }
}
