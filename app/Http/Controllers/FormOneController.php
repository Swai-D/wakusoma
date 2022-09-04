<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormOneController extends Controller
{
    public function indexPage()
    {
      return view('FormOne.index-page');
    }


    public function viewTopicsListPage()
    {
      return view('FormOne.topics-list');
    }

    public function readNotesPage()
    {
      return view('FormOne.read-notes');
    }
}
