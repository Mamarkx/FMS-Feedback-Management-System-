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
    <li class="breadcrumb-item active" aria-current="page">Feedback</li>
  </ol>
</nav>
<div class="container">
    <h2 class="text-center">FEEDBACK RECORDS</h2>
    <div class="card mt-4 bg-white">
        <div class="card-header">
            <form action="{{ route('feedback') }}" method="GET" class="search-bar">
                <div class="input-group">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search Record">
                    <button type="submit" class="btn btn-dark">
                        <span class="las la-search"></span>
                    </button>
                </div>
            </form>
        </div>
        <div class="card-body mb-3" style="max-height: 400px; overflow-y: auto;">
            <table class="table table-responsive text-center table-bordered">
                <tr class="bg-dark text-white">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Experience</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>

                @forelse($customers as $customer)
                    <tr class="border-dark">
                        <td>{{ $customer->ID }}</td>
                        <td>{{ $customer->Name }}</td>
                        <td>{{ $customer->Email }}</td>
                        <td>{{ $customer->Phone }}</td>
                        <td>{{ $customer->Experience }}</td>
                        <td>{{ $customer->Category }}</td>
                        <td>
                            <a href="{{ route('feed.show', $customer->ID) }}">
                                <button type="submit" class="but">
                                    <i class="fa-solid fa-eye" style="font-size: 20px; color:white;"></i>
                                </button>
                            </a>

                            <form method="POST" action="{{ route('feed.update', $customer->ID) }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" title="Review Patients" class="but">
                                    <i class="fa-regular fa-square-check" style="font-size: 20px; color:white;"></i>
                                </button>
                            </form>

                           <form id="delete-form-{{ $customer->ID }}" method="POST" action="{{ route('feed.destroy', $customer->ID) }}" style="display:inline">
                                 @csrf
                                @method('DELETE')
                                 <button type="button" onclick="confirmDelete(event, {{ $customer->ID }})" title="Delete Patients" class="but">
                                 <i class="fa-solid fa-trash" style="font-size: 20px; color:white;"></i>
                                </button>
                                </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No Record Found</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>


 </main>
    </div>
   <label for="sidebar-toggle" class="body-label"></label>
   <script>
function confirmDelete(event, customerID) {
    event.preventDefault(); // Prevent the default form submission

    Swal.fire({
        title: "Are you sure you want to delete this?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#0B60B0",
        cancelButtonColor: "#378CE7",
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel",
        customClass: {
            confirmButton: "btn-confirm",
            cancelButton: "btn-cancel"
        }
    }).then((result) => {
        if (result.isConfirmed) {
           
            document.getElementById('delete-form-' + customerID).submit();
        }
    });
}
</script>

@endsection