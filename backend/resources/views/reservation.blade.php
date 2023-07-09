<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reservation</title>
</head>
<body>
<h1>{{$roomName}}</h1>
<h2>Reserve your seat</h2>
<p1>Available seats:</p1>
<form action="/api/reserve" method="POST">

    @foreach($seats as $seat)
        <p><label for="seat_{{ $seat->seat_id }}">{{ $seat->seat_number }}</p>
        @if($seat->reserved && !$seat->email)
            <p>This seat is being reserved!</p>
        @elseif($seat->email)
            <p>This seat has been sold!</p>
        @else
            <input type="checkbox" name="seat_ids[]" value="{{ $seat->seat_id }}">
        @endif
    @endforeach
    <p><button type="submit">Reserve</button></p>
</form>
</body>
</html>
