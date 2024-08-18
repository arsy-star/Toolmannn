<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="{{asset('css/Registrasi/register.css')}}">
</head>
<body>
    <form action="{{route ('registrasi')}}" method="POST">
      @csrf
        <div class="container">
          <h1 class="sign">Sign Up</h1>
          <p><h5 class="sign">Please fill in this form to create an account.</h5></p>
      
              <label for="email"><b><h4 class="sign">Username</h4></b></label>
            <input class="username" type="text" name="username" placeholder="Enter Username" required>
          <label for="email"><b><h4 class="sign">Email</h4></b></label>
          <input class="email" type="text" placeholder="Enter Email" name="email" required>
          
          <label for="psw"><b><h4 class="sign">Password</h4></b></label>
          <input class="password" type="password" placeholder="Enter Password" name="password" required>
          
      
                  <label for="email"><b><h4 class="sign">Role</h4></b></label>
            
           <select name="Role" required>
            <option selected hidden value="">Role</option>
            <option value="admin">admin</option>
            <option value="student">student</option>
            <option value="teacher">teacher</option>
            {{-- <option value="66">+66</option> --}}
           </select>
           
      
          <p><h5 class="sign"></h5><a href="/login" style="color:white">already have an account</a>.</p>
      
          <div class="clearfix">
      
            <button type="submit" class="btn">Sign Up</button>
          </div>
        </div>
      </form>

  
</body>
</html>