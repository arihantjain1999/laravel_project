<form action="/store"  method="POST" class="mx-5">
         @csrf
<div class="form-group">
            <label for="username">Username</label>
            <input type="text" required class="form-control" id="username" name="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp" >    
        </div>
        <div class="form-group">
            <label for="phone_no">Phone_number</label>
            <input type="tel" class="form-control" id="phone_no" name="phone">
        </div>
        <div class="form-group">
            <label for="date">dob</label>
            <input type="date" class="form-control" id="date" name="dob">
        </div>
        <div class="form-group">
            <label>Gender : </label>
            <label for="male">male </label>
            <input type="radio"  id="male" name="gender" value="male">
            <label for="female">female </label>
            <input type="radio"  id="female" name="gender" value="female"> 
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
            <input type="submit" name="insert" value="Register" class="btn btn-success align-center px-5" >
        </div>
        <hr>
    </form>
    