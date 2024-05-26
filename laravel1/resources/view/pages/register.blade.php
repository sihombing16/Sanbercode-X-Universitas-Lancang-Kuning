<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="welcome.html" method="post"> 
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
            <label for="">bio :</label> <br>
       <textarea name="bio" id="" cols="30" rows="10"></textarea> <br><br>
        <button type="submit">submit</button> <br>
    </form>
    <a href="/">kembali</a>
</body>
</html>