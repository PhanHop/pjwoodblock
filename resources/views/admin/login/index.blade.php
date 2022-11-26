<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.auth.check-login') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="username">
        <input type="password" name="pwd">
        <input type="submit" value="Login">
    </form>
</body>
</html>