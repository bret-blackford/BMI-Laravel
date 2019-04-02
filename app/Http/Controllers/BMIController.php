<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IanLChapman\PigLatinTranslator\Parser;

class BMIController extends Controller
{
    //
    public function index($title = "default title") {
	return 'in app/Http/Controllers/BMIController - just prep';
        //return view('bmi.bmi')->with( ['title' => $title] );
    }

    public function calc(Request $request, $title = "default title") {
        $name = $request->session()->get(name,'');
        $dob = $request->session()->get('dob', null);
        $gender = $request->session()->get('gender',null);
        $heightFeet = $request->session()->get('heightFeet',null);
        $heightInches = $request->session()->get('heightInches',null);
        
	//return 'in calc() : perform calculations here';
        //return view('bmi.bmi')->with( ['title' => $title] );
        return view('bmi.show')->with( ['title' => $title] );
    }

    public function practiceX() {
	$translator = new Parser();
	$translation = $translator->translate('Hello world !');
	dump( $translation );
	dump( 'in practiceX() of the BMIController' );
    }
    
}
