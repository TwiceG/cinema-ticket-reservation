<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cinema</title>
    <head/>

    <body>
    <h1>Welcome to Cinema</h1>
    @foreach($rooms as $room)
        <a href="/reservation?roomId={{$room->room_id}}&roomName={{$room->room_name}}">
        <p>{{$room->room_name}}</p>
        </a>
    @endforeach

    </body>
</html>
