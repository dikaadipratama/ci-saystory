<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Dhikha'
    ];
    return view('pages/home', $data);
  }
}
