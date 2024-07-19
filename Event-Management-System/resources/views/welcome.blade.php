<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <style>
        .body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: cadetblue;
        }
        .cont{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0px 100px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }
        .card-body{
            background-color: #f8f9fa;
            text-align: center;
        }
        a{
            width: 50%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="body">
    <div class="container ">
        <div class="card cont mt-5">
            <div class="card-body">Event Management </div>
            <a href="{{route('event.index')}}" class="btn btn-primary mt-3">Get Event Details</a>
            <a href="{{route('event.create')}}" class="btn btn-primary mt-3">Register Event</a>
        </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>