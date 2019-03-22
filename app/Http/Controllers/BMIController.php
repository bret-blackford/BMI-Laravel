<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IanLChapman\PigLatinTranslator\Parser;

class BMIController extends Controller
{
    //
    public function index($title = "default title") {
	//return 'in BMIController - just prep';
        return view('bmi.bmi')->with(['title' => $title]);
    }

    public function calc() {
	return 'in calc() : perform calculations here';
    }

    public function practiceX() {
	$translator = new Parser();
	$translation = $translator->translate('Hello world !');
	dump( $translation );
	dump( 'in practiceX() of the BMIController' );
    }
    
}
