<?php

// this line means that controller is part of a group
// of controllers located in the App\Http\Controllers folder
namespace App\Http\Controllers;

// this line gives us access to Laravel's built in controller class
// located int that folder (That file is the Controller.php file)
use App\Http\Controllers\Controller;


// here we create a new class called PageController
// which extends the Laravel Controller class
// which borrows the built in Controller class functionality 
// this is our about action
class PageController extends Controller
{
	public function about()
	{
		return view('pages/about');
	}
}

