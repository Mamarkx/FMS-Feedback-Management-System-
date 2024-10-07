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
    <li class="breadcrumb-item "><a class="a" href="{{route('feedback')}}">Feedback</a></li>
    <li class="breadcrumb-item active" aria-current="page">View</li>
  </ol> 
</nav>
<div class="container">
     <div class="row justify-content-center ">
        <div class="col-md-8 m-2">

    <form class="form row p-3 card ">
        <!-- Name -->
        <div class="col-md-12 m-2">
            <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ $customer->Name }}" readonly
            >
        </div>
        
        <!-- Email and Phone -->
        <div class="col-md-12 m-2">
            <div class="row">
                <!-- Email -->
                <div class="col">
                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ $customer->Email }}" readonly
                    />
                </div>
                <!-- Phone -->
                <div class="col">
                    <label for="phone" class="form-label">Contact<span class="text-danger">*</span></label>
                    <input
                        type="text"
                        class="form-control"
                        id="phone"
                        name="phone"
                        value="{{ $customer->Phone }}" readonly
                    />
                </div>
            </div>
        </div>
        
        <!-- Rate of Experience -->
        <div class="col-md-12 m-2">
            <label for="experience" class="form-label">Rate of Experience<span class="text-danger">*</span></label>
            <input
                type="text"
                class="form-control"
                id="experience"
                name="experience"
                value="{{ $customer->Experience }}" readonly
            />
        </div>

        <!-- Rate -->
        <div class="col-md-12 m-2">
            <label for="rate" class="form-label">Rate<span class="text-danger">*</span></label>
            <input
                type="text"
                class="form-control"
                id="rate"
                name="rate"
                value="{{ $customer->Rate }}" readonly
            />
        </div>
        
        <!-- Feedback Category -->
        <div class="col-md-12 m-2">
            <label for="category" class="form-label">Feedback Category <span class="text-danger">*</span></label>
            <input
                type="text"
                class="form-control"
                id="category"
                name="category"
                value="{{ $customer->Category }}" readonly
            />
        </div>

        <!-- Message -->
        <div class="col-md-12 m-2">
            <label for="message" class="form-label">Message<span class="text-danger">*</span></label>
            <textarea
                class="form-control"
                id="message"
                name="message"
                cols="40"
                rows="10"
                readonly
            >{{ $customer->Message }}</textarea>
        </div>
    </form>



        </div>
    </div>
</div>

 </main>
    </div>
   <label for="sidebar-toggle" class="body-label"></label>
@endsection