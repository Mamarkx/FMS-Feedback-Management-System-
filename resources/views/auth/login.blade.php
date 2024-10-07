<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('logs/login.css')}}">
       <link rel="stylesheet" type="text/css" href="{{ asset('logs/login.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        
    <div class="container main">

            <div class="col-md-5.6 right bg-white back">  
                            
                <div class="input-box">
                <form method="post" action="{{route('login.post')}}" >    
                @csrf     
                  @if(session()->has("success"))

          <div class="alert alert-success ">
          {{session()->get("success")}}
          
          </div>
            @endif
            
            @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

                   <header>LOGIN ACCOUNT</header>
                 <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Email"
                  id="name"
                  name="email"
                  required/>
                </div>   
                    <div class="input-group mb-3">
                <span class="input-group-text" ><i class="fa-solid fa-lock"></i></span>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  id="name"
                  name="password"
                  required/>

                    </div>
                    
                        <div class="form-check-forgot-password mb-3">
                         <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                          <label class="form-check-label" for="rememberMe"> Remember Me</label>
                         <a href="#" class="forgot-password-link">Forgot Password</a>
                        </div>

                   <div class="input-field">                        
                        <input type="submit" name="submit" class="submit" value="Login">
                         <div class="register">
                    <a href="{{route('register')}}" class="btn btn-success">Register Account</a>
                   </div>
                   </div> 
                  

                   </form>
                </div>  
            </div>
            
   
    </div>
</div>

</body>
</html>
