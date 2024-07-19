<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
    <h2 class="nav justify-content-center text-center text-light p-2 mb-5 bg-dark"> Event Managemnet System</h2>
    <a class="text-light bg-primary btn " style="right:0" href="{{route('event.welcome')}}">Back to Home</a>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-striped table-bordered table-responsive" style="margin-top:10px;">
                        <thead class="table-primary">
                            <th>id</th>
                            <th>title</th>
                            <th>date</th>
                            <th>location</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{$event->id}}</td>
                                <td>{{$event->title}}</td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->location}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                </td>
                                <td>

                                    <form action="{{route('event.destroy',$event->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                    </form>
                                </td>
                </div>
                </td>
                </tr>
                @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>