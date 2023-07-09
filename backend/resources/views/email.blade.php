<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>


    <title>Email</title>
</head>
<body>
    <h1>Add your email</h1>
    <form action="/api/send-email?seatId={{ $seatId }}" method="POST">
        <label for="email">Email:</label>
        <input name="email" type="email">
        <button type="submit">Send</button>
    </form>

    <div id="countdown">
        <p id="timer"></p>
    </div>

<script>
    function checkReservation(seatId) {
        fetch(`/api/check-reservation?seatId=${seatId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error(error);
            });
    }



    function updateCountdown() {
        const targetDate = moment().add(1, 'minutes');
        const seatId = "{{ $seatId }}";
        const timerElement = document.querySelector("#timer");

        setInterval(() => {
            const currentTime = moment();
            const remainingTime = targetDate.diff(currentTime);

            if (remainingTime <= 0) {
                timerElement.textContent = "Countdown expired";
                checkReservation(seatId);
                window.location.href = "/";
            } else {
                const formattedTime = moment.utc(remainingTime).format('HH:mm:ss');
                timerElement.textContent = formattedTime;
            }
        }, 1000);
    }

    updateCountdown();




    updateCountdown();
</script>

</body>
</html>
