<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IanLChapman\PigLatinTranslator\Parser;

class BMIController extends Controller
{
    //
    public function index() {
	return 'in BMIController - just prep';
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
