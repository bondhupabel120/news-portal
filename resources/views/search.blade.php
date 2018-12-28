<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
</head>
<body>
    @foreach($users as $user)
        {{ $user->name }}

    @endforeach
    <input type="search" value="search" placeholder="search">
</body>
</html>