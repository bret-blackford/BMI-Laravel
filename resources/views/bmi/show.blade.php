@extends('layouts.master')


@section('head')
<link href='/css/bmi.css' type='text/css' rel='stylesheet'>
@endsection

@section('content')
<h1>BMI</h1>
<p>mBret in resources/views/bmi/show.blade.php<br>
    Note: show.blade.php extends resources/views/layouts/master.blade.php</p>

<h1>BMI Calculator</h1>
Enter the information below and the app will calculate your body mass index, or BMI, which gives you and indication if you are at a healthy body weight.

<!--form method='POST' action='calcBMI.php' class='form'-->
<form method='POST'  class='form' action='/check'>
    <fieldset>
        <label class='line'>Name</label>
        <input type='text' name='name' value='{{ $name }}'>

        <label class='line'>Date of Birth</label>
        <input type="date" name='dob' value=' {{ old($dob) }} '>

        <div id='gender-block'>
            Gender:
            <input type="radio" name='gender' value='Male' >
            <label>male</label>
            <input type="radio" name='gender' value='Female' >
            <label>female</label>
        </div>
        <div id='height-block'>
            <label>Height in feet
                <select name="heightFeet" >
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                </select>
            </label>
            <label>Height in inches
                <select name="heightInches" >
                    <option value="0" >0</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </label>
        </div>

        <div id='weight-block'>
            <label>Weight in lbs.
                <input type="number" name='weight' step='0.1' value='{{ $weight }}'>
            </label>
        </div>
    </fieldset>
    <input type="submit" value='calculate' class='btn'>
</form>
@endsection

