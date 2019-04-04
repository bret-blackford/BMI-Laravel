
@extends('layouts.master')


@section('head')
<link href='/css/bmi.css' type='text/css' rel='stylesheet'>
@endsection

@section('content')
<h1>BMI</h1>
<p>mBret in resources/views/bmi/bmi.blade.php<br>
    Note: show.blade.php extends resources/views/layouts/master.blade.php</p>

<h1>BMI Calculator</h1>
Enter the information below and the app will calculate your body mass index, or BMI, which gives you and indication if you are at a healthy body weight.

<!--form method='POST' action='calcBMI.php' class='form'-->
<!--form method='POST'  class='form' -->
<form method='POST'  class='form' action='/check'>
    <fieldset>
        {{ csrf_field() }}
        <label class='line'>Name</label>
        <input type='text' name='name' value='{{ old("name") }}'></br>

        <label class='line'>Date of Birth</label>
        <input type='date' name='dob' value='{{ old("dob") }}'>

        <div id='gender-block'>
            Gender:
            <input type="radio" name='gender' value='Male' {{ (old('gender') == 'Male') ? 'checked' : '' }}>
            <label>male</label>
            <input type="radio" name='gender' value='Female' {{ (old('gender') == 'Female') ? 'checked' : '' }}>
            <label>female</label>
        </div>
        
        <div id='height-block'>
            <label>Height in feet
                <select name="heightFeet" >                  
                    <option value='1' {{ (old('heightFeet') == '1') ? 'selected' : '' }}>1</option>
                    <option value="2" {{ (old('heightFeet')=='2') ? 'selected' : '' }}>2</option>
                    <option value="3" {{ (old('heightFeet')=='3') ? 'selected' : '' }}>3</option>
                    <option value="4" {{ (old('heightFeet')=='4') ? 'selected' : '' }}>4</option>
                    <option value="5" {{ (old('heightFeet')=='5') ? 'selected' : '' }}>5</option>
                    <option value="6" {{ (old('heightFeet')=='6') ? 'selected' : '' }}>6</option>
                    <option value="7" {{ (old('heightFeet')=='7') ? 'selected' : '' }}>7</option>
                    <option value="8" {{ (old('heightFeet')=='8') ? 'selected' : '' }}>8</option>
                </select>
            </label>
            <label>Height in inches
                <select name="heightInches" >
                    <option value="0" {{ (old('heightInches')=='0') ? 'selected' : '' }}>0</option>
                    <option value="1" {{ (old('heightInches')=='1') ? 'selected' : '' }}>1</option>
                    <option value="2" {{ (old('heightInches')=='2') ? 'selected' : '' }}>2</option>
                    <option value="3" {{ (old('heightInches')=='3') ? 'selected' : '' }}>3</option>
                    <option value="4" {{ (old('heightInches')=='4') ? 'selected' : '' }}>4</option>
                    <option value="5" {{ (old('heightInches')=='5') ? 'selected' : '' }}>5</option>
                    <option value="6" {{ (old('heightInches')=='6') ? 'selected' : '' }}>6</option>
                    <option value="7" {{ (old('heightInches')=='7') ? 'selected' : '' }}>7</option>
                    <option value="8" {{ (old('heightInches')=='8') ? 'selected' : '' }}>8</option>
                    <option value="9" {{ (old('heightInches')=='9') ? 'selected' : '' }}>9</option>
                    <option value="10" {{ (old('heightInches')=='10') ? 'selected' : '' }}>10</option>
                    <option value="11" {{ (old('heightInches')=='11') ? 'selected' : '' }}>11</option>
                </select>
            </label>
        </div>

        <div id='weight-block'>
            <label>Weight in lbs.
                <input type="number" name='weight' step='0.1' value='{{ old("weight") }}'>
            </label>
        </div>

    </fieldset>
    <input type="submit" value='calculate' class='btn'>
</form>


@endsection


