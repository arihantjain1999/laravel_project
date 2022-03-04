<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .container{
            background-color: #D3D3D3;
            border-radius:10px;
            padding:2%;
            width : 30%;
            border:2px solid grey;
            position: absolute;
            top: 50% ;
            left : 50%; 
            transform : translate(-50%,-50%);
        }
    </style>
</head>
<body>

        <div class="container">
            
        <strong>ID : </strong>    {{$posts->id}}
        <br>
    <strong>Name : </strong>  {{$posts->name}}
    <br>
    <strong>Email : </strong> {{$posts->email}}
    <br>
    <strong>Phone : </strong> {{$posts->phone}}
    <br>
    <strong>DOB : </strong>   {{$posts->dob}}
    <br>
    <strong>Gender : </strong> {{$posts->gender}}  
    <br>
    <strong>Language : </strong>  {{$posts->language}}
    <br>
    <div class="mt-3">
        <a href="/delete/{{$posts->id}}" class="btn btn-danger ml-2">Delete</a></td>
        <a href="/edit/{{$posts->id}}" class="btn btn-success ml-2">Update</a></td>
        <a href="/show" class="btn btn-primary ml-2">show all</a></td>
    </div>
</div>
</body>
</html>