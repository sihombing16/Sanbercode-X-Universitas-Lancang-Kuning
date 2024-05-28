 @extends('layouts.master')

 @section('title')
    Biodata
 @endsection

 @section('content')
    <form action="/welcome"method="post"> 
        @csrf
        <label>First name:</label> <br>
        <input type="text"> <br> <br>
        <label>last name:</label> <br>
        <input type="text"> <br> <br>
        <label>Gender:</label> <br>
        <input type="radio">Male <br>
        <input type="radio">Famale <br>
        <input type="radio">Other <br>
        <label>Nationality:</label> <br>
        <select name="Nationality">
            <option value="">Indonesian</option>
            <option value="">English</option>
            <option value="">Sweden</option>
            <option value="">Germany</option>
            </select><br><br>
            <label >Language Spoken</label><br>
            <input type="checkbox" name="Language Spoken"> Bahasa Indonesian <br>
            <input type="checkbox" name="Language Spoken"> Japan <br>
            <input type="checkbox" name="Language Spoken"> Other <br>
            <label>bio:</label><br>
       <textarea name="bio" id="" cols="30" rows="10"></textarea> <br><br>
        <button type="submit">submit</button> <br>
    </form>
    <a href="/">kembali</a>
@endsection
