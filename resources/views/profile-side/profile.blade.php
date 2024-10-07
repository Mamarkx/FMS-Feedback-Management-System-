@extends('layout.index')
@section("content")

  <input type="checkbox" name="" id="sidebar-toggle">
 
 @include('layout.sidebar')
  <div class="main-content">
  @foreach($info as $infos)
      @include('layout.header')
   
    


    <!---Main start-->
    <main >
    <nav aria-label="breadcrumb margin-left-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a class="a" href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>

<div class="container">
  <div class="card">
    <div class="row no-gutters">
      <div class="col-md-4 border">
        <div class="row">
          <div class="col">
            <div class="mb-4">
              <div class="card-body text-center">
                <!-- Access image property on individual item -->
                <img src="{{ asset($infos->Image) }}" alt="Profile Image" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"> </h5>
                <p class="text-muted mb-1">ADMIN</p>
                <p class="text-muted mb-4">Seoul, Korea</p>
              </div>
            </div>
            <div class="mb-4 mb-lg-0">
              <div class="card-body p-0">
                <h2 class="mb-3 text-center">Social Media</h2>
                <ul class="list-group list-group-flush rounded-3">
                   <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">Alagad Ni ShinRyujin</p>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">Aso ni Ryujin</p>
              </li>
                   <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram  fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">iamfinethankyouandryu</p>
              </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title fw-bold mb-4">Account Settings</h1>
         
          <form method="post" action="{{ route('profile-side.update', ['ID' => $infos->ID]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" class="form-control bg-white" name="Fname" value="{{ $infos->Fname }}">
              </div>
              <div class="col">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" class="form-control" name="Lname" value="{{ $infos->Lname }}">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="Email" value="{{ $infos->Email }}">
              </div>
              <div class="col">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" class="form-control" name="Phone" value="{{ $infos->Phone }}">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <label for="position">Position</label>
                <input type="text" id="position" class="form-control bg-white" value="Admin" readonly>
              </div>
              <div class="col">
                <label for="password">Password</label>
                <div class="input-group">
                  <input type="password" id="password" class="form-control" name="Password" value="{{ $infos->Password }}" aria-describedby="password-reveal">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="password-reveal-btn"><i class="fas fa-eye"></i></button>
                  </div>
                </div>
              </div>
            </div>  
            <div class="row mt-4 mb-5">
              <label for="profile">Profile Picture</label>
              <input type="file" id="profile" class="form-control" name="Image">            
            </div>
            <div class="buttons">
              <button type="submit" class="btn btn-success kkk" name="submit">Update</button>
              <button class="btn btn-dark">Cancel</button>           
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach


 </main>
   </div>
     <label for="sidebar-toggle" class="body-label"></label>
     <script>
    // Function to toggle password visibility
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var passwordRevealBtn = document.getElementById("password-reveal-btn");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordRevealBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            passwordField.type = "password";
            passwordRevealBtn.innerHTML = '<i class="fas fa-eye"></i>';
        }
    }

    // Add event listener to the reveal button
    document.getElementById("password-reveal-btn").addEventListener("click", function() {
        togglePasswordVisibility();
    });
</script>
@endsection