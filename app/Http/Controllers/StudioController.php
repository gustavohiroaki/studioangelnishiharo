<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
    {
        $studio = [
            ["imageSource" => "/assets/img/landing/studio1.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio2.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio3.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio4.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio5.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio6.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio7.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio8.png", "imageDescription" => "Lorem ipsum"],
            ["imageSource" => "/assets/img/landing/studio9.png", "imageDescription" => "Lorem ipsum"]
        ];
        $payload = [
            "css" => "studio",
            "title" => "Studio",
            "studio" => $studio
        ];
        return view('studio', $payload);
    }
}
