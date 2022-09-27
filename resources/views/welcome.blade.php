<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('red_login_google') }}" method="GET">
        <input type="submit" value="SigninWithGoogle">
    </form>


    <form action="{{ route('red_login_github') }}" method="GET">
        <input type="submit" value="SigninWitGithub">
    </form>
</body>
</html>
