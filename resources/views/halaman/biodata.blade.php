@extends('layout.master')
@section('judul')
    Halaman Biodata
@endsection

@section('content')
<h1>New Account</h1>
<h2>Sign UpForm</h2>
<form action="/submit" method="post">
    @csrf
    <label>first name</label><br>
    <input type="text" name="name"><br><br>
    <label>last name</label><br>
    <input type="text" name="name"><br><br>
    <label>gender</label><br>
    <input type="radio" id="" name="fav_language" value="man">
    <label>man</label><br>
    <input type="radio" id="" name="fav_language" value="women">
    <label>women</label><br>
    <input type="radio" id="" name="fav_language" value="other">
    <label>other</label><br><br>
    <label>nationality:</label>
    <select name="nationality" id="">
        <option value="Indonesia">Indonesia</option>
        <option value="English">English</option>
        <option value="Arab">Arab</option>
        <option value="singapura">singapura</option>
    </select><br><br>
    <label>language spoken:</label><br>
    <input type="checkbox" id="" name="indonesian" value="indonesian">
    <label>indonesian</label><br>
    <input type="checkbox" id="" name="english" value="english">
    <label>english</label><br>
    <input type="checkbox" id="" name="arabic" value="arabic">
    <label>arabic</label><br>
    <input type="checkbox" id="" name="japanese" value="japanese">
    <label>japanese</label>
    <br><br>
    <label>pesan</label><br>
    <textarea name="motivasi" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="Submit">
</form> 
@endsection

