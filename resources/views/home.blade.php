<!DOCTYPE html>
<html lang="en">

<head>
    <php? @vite('resources/js/app.js')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>I treni in orario</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="my-3">Tutti i treni</h2>
        <ul>
            @foreach ($trains as $train)      
            <li>
                <h4>{{$train['azienda']}} {{$train['codice_treno']}}</h4>
                <h5>Partenza: {{$train['stazione_partenza']}} alle {{\Carbon\Carbon::parse($train->partenza)->format('H:i') }} - Arrivo: {{$train['stazione_arrivo']}} alle {{ \Carbon\Carbon::parse($train->orario_arrivo)->format('H:i') }}</h5>
                <h5></h5>
            </li>
            @endforeach
        </ul>
        <h2 class="my-3">I treni che invece partono oggi</h2>
        <ul>
            @foreach ($todayTrains as $todayTrain)
            <li>
                <h4>{{$todayTrain['azienda']}} {{$todayTrain['codice_treno']}}</h4>
                <h5>Partenza: {{$todayTrain['stazione_partenza']}} alle {{\Carbon\Carbon::parse($train->partenza)->format('H:i') }} - Arrivo: {{$train['stazione_arrivo']}} alle {{ \Carbon\Carbon::parse($todayTrain->orario_arrivo)->format('H:i') }}</h5>
                <h5></h5>
            </li>
            @endforeach
        </ul>
        <h2 class="my-3">I treni che invece sono partiti ieri</h2>
        <ul>
            @foreach ($yesterdayTrains as $yesterdayTrain)
            <li>
                <h4>{{$yesterdayTrain['azienda']}} {{$yesterdayTrain['codice_treno']}}</h4>
                <h5>Partenza: {{$yesterdayTrain['stazione_partenza']}} alle {{\Carbon\Carbon::parse($train->partenza)->format('H:i') }} - Arrivo: {{$train['stazione_arrivo']}} alle {{ \Carbon\Carbon::parse($yesterdayTrain->orario_arrivo)->format('H:i') }}</h5>
                <h5></h5>
            </li>
                @endforeach
        </ul>
    </div>
</body>

</html>