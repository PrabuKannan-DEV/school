<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Student</h1>
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">

        <label for="dob">DOB</label>
        <input type="date" name="dob" id="dob">

        <button type="submit">Save</button>
    </form>
</body>
</html>
