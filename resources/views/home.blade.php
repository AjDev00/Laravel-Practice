<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ url('store') }}" method="post">
        @csrf
        
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Email Address</label><br>
        <input type="text" name="email"><br>
        <label for="">Phone Number</label><br>
        <input type="text" name="phoneNumber"><br>
        <input type="submit" value="submit">
    </form>

</body>
</html>