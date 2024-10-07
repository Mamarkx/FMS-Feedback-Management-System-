<header>
    <div class="menu-toggle">
  <input type="checkbox" id="sidebar-toggle">

  <label for="sidebar-toggle" class="toggle-icon" >
    <span class="icon"><i class="las la-bars"></i></span>
  </label>  
</div>

<div>
@foreach($details as $infos)
 <div class="side-head">
 <div class="first">
  <i onclick="toggleNotifi()" class="fa-solid fa-bell"></i>
 </div>
 <div class="second">
 <span>{{ $infos->Fname . ' ' . $infos->Lname }}</span>
 <img src="{{ asset($infos->Image) }}" onclick="Dropdown()" width="30" height="30">
 <i onclick="Dropdown()" class="fa-solid fa-caret-down"></i>
 </div>           
  </div>
  
    </header>
       <div id="myDropdown" class="dropdown-content">
     <div class="drop-name">
      <img src="{{ asset($infos->Image) }}" width="50" height="50">
      <span><p>{{ $infos->Fname . ' ' . $infos->Lname }}</p></span> 
     </div>
     <hr class="breaker">
    <a href="{{ route('profile')}}" class="sub-menu"><i class="fa-solid fa-user"></i>Profile</a>

   <a href="{{ route('logout') }}" class="sub-menu" 
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   <i class="fa-solid fa-right-from-bracket"></i> Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

   
  </div>
  @endforeach

 