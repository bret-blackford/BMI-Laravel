<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use IanLChapman\PigLatinTranslator\Parser;

class BMIController extends Controller {

    //
    public function index() {
        //dump('in app/Http/Controllers/BMIController::index() - just prep');
        return view('bmi.bmi')->with([
                    //return view('bmi.show')->with([
                    'name' => null,
                    'dob' => null,
                    'gender' => null,
                    'heightFeet' => null,
                    'heightInches' => null,
                    'weight' => null,
        ]);
    }

    public function calc(Request $request) {
        //dump('in BMIController calc()');

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
        //dump( ' i am here in BMIController::chex()');
        //dump( $request->all() );

        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'heightFeet' => 'required',
            'heightInches' => 'required',
            'weight' => 'required',
        ]);

        //dump('in BMIController validate()');

        $name = $request->input('name', null);
        $dob = $request->input('dob', null);
        $gender = $request->input('gender', null);
        $heightFeet = $request->input('heightFeet', null);
        $heightInches = $request->input('heightInches', null);
        $weight = $request->input('weight', null);

        $dob2 = new DateTime($dob);
        $now = new DateTime();
        $difference = $now->diff($dob2);
        $age = $difference->y;
        //$age = 99.9;

        $totHeightInches = 0;
        $bmi = 0.00;

        $totHeightInches = ($heightFeet * 12) + $heightInches;
        $bmi = number_format(($weight * 703) / (pow($totHeightInches, 2)), 2);

        $status = 'obese';
        if ($bmi < 30) {
            $status = 'overweight';
        } if ($bmi < 25) {
            $status = 'normal';
        } if ($bmi < 18.5) {
            $status = 'underweight';
        }

        $response = $name . ", you are a " . $age . " year old " . $gender;
        $response .= " and have a body mass index (BMI) of : <b>" . $bmi . "</b>%";
        $response .= " which classifies you as <b>" . $status . "</b>";

        dump( 'response' . $response );
        return redirect('/bmi')->with([
            'response' => $response
        ]);

        //return view('/bmi')->with([
        //    'response' => $response
        //]);
    }

}
