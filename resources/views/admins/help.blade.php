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
    <li class="breadcrumb-item active" aria-current="page">Help and Support</li>
  </ol>
</nav>

<!--- main content-->
<div class="container">
   <h2 class="text-center">Frequently Asked Questions (FAQ)</h2>
    <div class="card mt-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item p-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <strong>Q1 &nbsp;&nbsp;</strong>   How to view user feedback information ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>In the side navbar, there is an option called 'Feedbacks'. In the table of records, there is a column labeled 'Action' with an <strong>Eye </strong>symbol. Click the eye symbol to view details.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item  p-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Q2 &nbsp;&nbsp;</strong>   How to delete users record ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <p>In the side navbar, there is an option called 'Feedbacks'. In the table of records, there is a column labeled 'Action' with both a <strong>trash Can</strong> symbol and an eye symbol. Click the eye symbol to view details and the trash can symbol to delete the record.</p>

                    </div>
                </div>
            </div>
            <div class="accordion-item  p-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <strong>Q3 &nbsp;&nbsp;</strong> How can I know if a new record has been added?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                         <p>In the dashboard, there's a tracker for users and feedback. If the count changes, it means a new record has been added. Additionally, the notifications also have a count.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item  p-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong>Q4 &nbsp;&nbsp;</strong> How to access the admin dashboard?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Typically, you can access the admin dashboard by logging into the login form using your admin credentials. There's an account specifically for admins.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item  p-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                       <strong>Q5 &nbsp;&nbsp;</strong>  How can I monitor feedback trends and metrics in the system
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Look for the 'Reports' option in the side navbar. There, you will find pie charts and bar charts that provide data analysis and summaries about feedback.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>


 </main>
    </div>
   <label for="sidebar-toggle" class="body-label"></label>
@endsection