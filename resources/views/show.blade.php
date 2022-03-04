
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">All records</h1>
    <div class="container my-5">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <!-- <th>id</th> -->
                <th>name</th>
                <th>email</th>
                <!-- <th>phone</th> -->
                <!-- <th>dob</th> -->
                <!-- <th>gender</th> -->
                <!-- <th>language</th> -->
                <th>delete record</th>
                <th>delete</th>
                <th>single</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <!-- <td>{{$post->id}}</td> -->
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <!-- <td>{{$post->phone}}</td> -->
                <!-- <td>{{$post->dob}}</td> -->
                <!-- <td>{{$post->gender}}</td> -->
                <!-- <td>{{$post->language}}</td> -->
                <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-success">Update</a></td>
                <td><a href="/single/{{$post->id}}" class="btn btn-warning">More</a></td>
            </tr>
            @endforeach
        </table>
        <a href="/insert" class="btn btn-primary">Insert New Record</a>
    </div>
</body>
</html>