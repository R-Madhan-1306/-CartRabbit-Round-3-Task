<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

<body>
    <a class="text-light bg-primary btn " style="right:0" href="{{route('event.welcome')}}">Back to Home</a>
    <div class="card container form mt-5">
        <div class="card-body">
            <h2>Enter Event Details</h2>
            <form action="{{route('event.store')}}" class="was-validated" method="POST" novalidate>
                @csrf
                <div class="form-group has-validation">
                    <label for="title">title</label>
                    <input type="text" class="form-control {{$errors->has('title')?'is-invalid':''}}" id="title" name="title" required>
                    @if($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('title')}}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group has-validation">
                    <label for="date">date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    @if($errors->has('date'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('date')}}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group has-validation">
                    <label for="location">location</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                    @if($errors->has('location'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('location')}}</strong>
                    </span>
                @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>