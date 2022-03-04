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
<div class="container my-5">
     <h1 class="text-center">Update</h1>
     <form action="/update/{{$posts->id}}"  method="POST" >
         @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" required class="form-control" id="username" name="name" aria-describedby="emailHelp" value={{$posts->name}}>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value={{$posts->email}} required class="form-control" id="email" name="email" aria-describedby="emailHelp" >    
        </div>
        <div class="form-group">
            <label for="phone_no">Phone_number</label>
            <input type="tel" class="form-control" value={{$posts->phone}} id="phone_no" name="phone">
        </div>
        <div class="form-group">
            <label for="date">dob</label>
            <input type="date" class="form-control" id="date" name="dob" value={{$posts->dob}}>
        </div>
        <div class="form-group">
            <label>Gender : </label>
            <label for="male">male </label>
            <input type="radio"  id="male" name="gender" @if($posts->gender=='male') checked @endif value="male">
            <label for="female">female </label>
            <input type="radio"  id="female" name="gender" @if($posts->gender=='female') checked @endif value="female"> 
            <br>
        </div>
        <div class="form-group">
            <label>language : </label>
            <label for="english">English </label>
            <input type="checkbox"  id="english" name="language" value="english">
            <label for="hindi">Hindi</label>
            <input type="checkbox"  id="female" name="language" value="hindi"> 
            <label for="hindi">gujarati</label>
            <input type="checkbox"  id="gujarati" name="language" value="gujarati"> 
            <br>
        </div>
    <input type="submit" name="update" value="Update" class="btn btn-success" >
    </form>
    </div>

</body>
</html>