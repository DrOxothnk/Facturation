
   @extends('layouts.dashboard')
   @section('content')
   <h3>Create Comamande</h3>

       <form action="{{ route('admin.commandes.store') }}" method="POST">
           @csrf
           <label for="date">Date</label> <br>
           <input type="date" class="form-control" required name="date"> <br>
           <label for="total">Total</label> <br>
           <input type="number" class="form-control" required name="total"> <br>
           <button type="submit" class="btn btn-primary">Create</button>
       </form>


@endsection
