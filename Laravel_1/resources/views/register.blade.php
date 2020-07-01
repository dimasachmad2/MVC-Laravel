<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Challenge Day 1</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <form  method="POST" action="/welcome">
        @csrf
        <label for="first_name">First Name :</label><br><br>
        <input type="text" name="first_name" id="first_name"><br><br>

        <label for="last_name">Last Name :</label><br><br>
        <input type="text" name="last_name" id="last_name"><br><br>

        <label for="gender">Gender</label><br><br>
        <input type="radio" name="gender" id="gender" value="0">Male <br>
        <input type="radio" name="gender" id="gender" value="1">Female <br>
        <input type="radio" name="gender" id="gender" value="2">Other <br><br>

        <label for="nation">Nationality :</label><br><br>
        <Select name="nation" id="nation">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
            <option value="Thailand">Thailand</option>
        </Select><br><br>

        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="0"> Bahasa Indonesia <br>
        <input type="checkbox" name="language" value="1"> English <br>
        <input type="checkbox" name="language" value="2"> Other <br><br>

        <label for="bio">Bio :</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submit" value="Sign Up">
    </form>

    <br><br>
    <p>&copy; Dimas Achmad Nugraha</p>
</body>
</html>