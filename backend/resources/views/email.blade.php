<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email</title>
    <head/>
<body>
<h1>Add your email</h1>
<form action="/api/send-email?seatId={{$seatId}}">
<label for="email">email: </label>
<input name="email" type="email">
<button type="submit">send</button>
</form>

</body>
</html>
