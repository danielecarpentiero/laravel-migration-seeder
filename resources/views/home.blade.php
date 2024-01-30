<!DOCTYPE html>
<html lang="en">

<head>
    <php? @vite('resources/js/app.js')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>I treni in orario</title>
</head>

<body>
    <div class="container">
        <h2>Tutti i treni che partono</h2>
        <ul>
            @foreach ($trains as $train)      
            <li>{{$train['azienda']}}</li>
            @endforeach
        </ul>
        <h2>I treni che invece partono oggi</h2>
        <ul>
            @foreach ($todayTrains as $todayTrain)
                <li>{{$todayTrain['azienda']}}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>