<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8
    ">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

    </style>

</head>

<body>
    <a class="text-light bg-primary btn " style="right:0" href="{{route('event.welcome')}}">Back to Home</a>

    <div class="card mt-5">
        <div class="card-body">
            <p style="font-size:20px; font-weight:bold;">Update date</p>

            <form action="{{ route('event.update', $event->id) }}" class="was-validated" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group has-validation">
                    <label for="title">title</label>
                    <input type="text" name="title" id="title" class="form-control {{$errors->has('title')?'is-invalid':''}}" required value="{{$event->title}}">
                    @if($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('title')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group has-validation">
                    <label for="date">date</label>
                    <input type="date" name="date" id="date" class="form-control {{$errors->has('date')?'is-invalid':''}}" required value="{{$event->date}}">
                    @if($errors->has('date'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('date')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group has-validation">
                    <label for="location">location</label>
                    <input type="text" name="location" id="location" class="form-control {{$errors->has('location')?'is-invalid':''}}" required value="{{$event->location}}">
                    @if($errors->has('location'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('location')}}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-5">Update</button>
            </form>

        </div>
    </div>

</body>

</html>