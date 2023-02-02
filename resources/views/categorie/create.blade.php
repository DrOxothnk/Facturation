
   @extends('layouts.dashboard')
   @section('content')
   <h3>Create Categories</h3>

       <form action="{{ route('admin.categories.store') }}" method="POST">
           @csrf
           <label for="nom">Nom</label> <br>
           <input type="text" class="form-control" required name="nom"> <br>
           <button type="submit" class="btn btn-primary">Create</button>
       </form>


@endsection
