<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reserve</title>
<head/>
<body>
<h1>{{$roomName}}</h1>
<h2>Reserve your seat</h2>
<p>Available seats:</p>
<form action="/api/reserve" method="POST">
    @foreach($seats as $seat)
        <label for="seat_{{ $seat->seat_id }}">{{ $seat->seat_number }}</label>
        @if($seat->reserved)
            <p>This seat is being reserved!</p>
            @if($seat->email)
                <p>This seat is sold!</p>
            @endif
        @else
            <input type="checkbox" name="seat_ids[]" value="{{ $seat->seat_id }}">
        @endif

    @endforeach
    <p><button type="submit">Reserve</button></p>
</form>



</body>
</html>
