@extends('layout.index')

@section("content")

  <input type="checkbox" name="" id="sidebar-toggle">
 
 @include('layout.sidebar')
  <div class="main-content">
      @include('layout.header')
   
    


    <!---Main start-->
    <main >
    <nav aria-label="breadcrumb margin-left-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a class="a" href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>

    <div class="container">
      <div class="row">
          <div class="col-lg" >
             <div class="card mt-2 "style="height: 10rem;">
               <br>
                  <div class="card-body">
                    <div class="rhins">
                      <div class="midzy">
                  
                        <h5 class="card-title fw-bold">{{ $count }}</h5>
                         <p class="card-text opts">Feedbacks</p>
                       </div>
                       <div class="midzy2">
                        <i class="fa-solid fa-paper-plane"></i>
                        </div>
                    </div>
                  </div>
            </div>
      </div>
                <div class="col-lg" >
             <div class="card mt-2 "style="height: 10rem;">
               <br>
                  <div class="card-body">
                    <div class="rhins">
                      <div class="midzy">
                       <h5 class="card-title fw-bold">{{ $count }}</h5>
                         <p class="card-text opts">Users</p>
                       </div>
                       <div class="midzy2">
                        <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                  </div>
                  
            </div>
      </div>
 


      <div class="col-lg" >
             <div class="card mt-2 "style="height: 10rem;">
               <br>
                  <div class="card-body">
                    <div class="rhins">
                      <div class="midzy">
                        <h5 class="card-title fw-bold">{{ $stats }}</h5>
                         <p class="card-text opts">Pending</p>
                       </div>
                       <div class="midzy2">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                    </div>
                  </div>
            </div>
      </div>

                <div class="col-lg" >
             <div class="card mt-2 "style="height: 10rem;">
               <br>
                  <div class="card-body">
                    <div class="rhins">
                      <div class="midzy">
                        <h5 class="card-title fw-bold">{{ $format_avg }}</h5>
                         <p class="card-text opts">Average</p>
                       </div>
                       <div class="midzy2">
                        <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                  </div>
            </div>
      </div>
   </div>


     
  <div class="card bg-white mt-4">
            <div class="card-body mb-3" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-responsive text-center table-bordered">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Name</th>
                            <th>Category</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feeds as $customer)
                        <tr class="border-dark">
                            <td>{{ $customer->Name }}</td>
                            <td>{{ $customer->Category }}</td>
                            <td>
                                @if ($customer->Status == 1)
                                    <button class="btn btn-success">Reviewed</button>
                                @else
                                    <button class="btn btn-danger">Pending</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>




 </main>
   </div>
     <label for="sidebar-toggle" class="body-label"></label>
@endsection