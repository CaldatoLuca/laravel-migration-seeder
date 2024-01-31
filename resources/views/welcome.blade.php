<?php
// use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>

<body class="p-5 bg-dark text-light d-flex justify-content-center flex-wrap flex-column ">
    <h1 class="mb-5">Trains</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train ID</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Departure Date</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Arrival Date</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td scope="row">{{ $train->train_id }}</td>
                    <td scope="row">{{ $train->departure_station }}</td>
                    <td scope="row">{{ $train->departure_date }}</td>
                    <td scope="row">{{ \Carbon\Carbon::parse($train['departure_time'])->format('H:i') }}</td>
                    <td scope="row">{{ $train->arrival_station }}</td>
                    <td scope="row">{{ $train->arrival_date }}</td>
                    <td scope="row">{{ \Carbon\Carbon::parse($train['arrival_time'])->format('H:i') }}</td>
                    <td scope="row">{{ $train->company }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
