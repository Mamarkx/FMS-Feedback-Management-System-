@extends('layout.index')
@section('content')

  <input type="checkbox" name="" id="sidebar-toggle">
 
 @include('layout.sidebar')
  <div class="main-content">
      @include('layout.header')
    


    <!---Main start-->
    <main >
    <nav aria-label="breadcrumb margin-left-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a class="a" href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Customer</li>
  </ol>
</nav>

 <!---Main Content-->
   <div class="container">
   <div class="card mt-2">
<div class="card-header">
<h3 class="text-center">CUSTOMER HISTORY<h3>
</div>
<div class="card-body mb-3" style="max-height: 400px; overflow-y: auto;">
        <table class="table table-responsive text-center ghv">
            <tr class="bg-dark text-white ">   
              <td>ID</td>  
                <td>Name</td>
                <td>Date</td>
                <td>Time</td>       
            </tr>
      <tr class="border-dark ">
      @foreach($users as $user )
                       <td>{{$user->ID}}</td>
                        <td>{{$user->Name}}</td>
                            <td>{{$user->Date}}</td>
                                <td>{{$user->Time}}</td>
                    </tr>
               @endforeach
			
        </table>
    </div>


   </div>

   </div>



 </main>
 
   </div>
   <label for="sidebar-toggle" class="body-label"></label>
@endsection