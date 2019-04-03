<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IanLChapman\PigLatinTranslator\Parser;

class BMIController extends Controller {
    //
    public function index() {
        dump('in app/Http/Controllers/BMIController::index() - just prep');
        return view('bmi.bmi')->with([
        //return view('bmi.show')->with([
                    'name' => 'Bret',
                    'dob' => null,
                    'gender' => null,
                    'heightFeet' => 6,
                    'heightInches' => 1,
                    'weight' => 177,
        ]);
    }

    public function calc(Request $request) {
        dump('in BMIController calc()');
        
        $name = $request->session()->get('name', '');
        $dob = $request->session()->get('dob', null);
        $gender = $request->session()->get('gender', null);
        $heightFeet = $request->session()->get('heightFeet', null);
        $heightInches = $request->session()->get('heightInches', null);
        $weight = $request->session()->get('weight', null);

        //return 'in calc() : perform calculations here';
        //return view('bmi.bmi')->with( ['title' => $title] );
        return view('bmi.show')->with([
                    'name' => $name,
                    'dob' => $dob,
                    'gender' => $gender,
                    'heightFeet' => $heightFeet,
                    'heightInches' => $heightInches,
                    'weight' => $weight,
        ]);
    }

    public function practiceX() {
        $translator = new Parser();
        $translation = $translator->translate('Hello world !');
        dump($translation);
        dump('in practiceX() of the BMIController');
    }

    public function chex(Request $request) {
        dump( $request->all() );

        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'heightFeet' => 'required',
            'heightInches' => 'required',
            'weight' => 'required',
        ]);
  
        dump('in BMIController validate()');
    }

}
