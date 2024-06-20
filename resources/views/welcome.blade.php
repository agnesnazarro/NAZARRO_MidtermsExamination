<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - Movies</title>
</head>
<body>
    <div style="text-align: center">
        <h1>SM City Baguio</h1>
        <h2>Now Showing</h2>
        <h3>June 20, 2024</h3>
    </div>
    
    <div class="container" style="margin: 10px; padding: 5px">
            <h3>Movie: {{ $movieTitleOne }}</h3>
            <li>{{ $cinemaNumOne }}</li>
        
            <h3>Movie: {{ $movieTitleTwo }}</h3>
            <li>{{ $cinemaNumTwo }}</li>
        
            <h3>Movie: {{ $movieTitleThree }}</h3>
            <li>{{ $cinemaNumThree }}</li>
        
            <h3>Movie: {{ $movieTitleFour }}</h3>
            <li>{{ $cinemaNumFour }}</li>
    </div>
    
    
</body>
</html>