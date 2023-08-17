<!DOCTYPE html>
<html>
<head>
    <title>Info</title>
</head>
<body>
    <h1>Usuário</h1>
    <img src="{{ $git['avatar_url'] }}" alt="Avatar">
    <p>NOme: {{ $git['name'] }}</p>
    <p>Username: {{ $git['login'] }}</p>
    <p>Location: {{ $git['location'] }}</p>
    <p>Followers: {{ $git['followers'] }}</p>
</body>
</html>
