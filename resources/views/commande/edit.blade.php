
   @extends('layouts.dashboard')
   @section('content')
   <h3>Upadate Commandes</h3>

       <form action="{{ route('admin.commandes.update',$commande->id) }}" method="POST">
           @csrf
           @method('put')
           <label for="date">Date</label> <br>
           <input type="date"  class="form-control" required name="date" value="{{ $commande->date }}"> <br>
           <label for="total">Total</label> <br>
           <input type="text"  class="form-control" required name="total" value="{{ $commande->total }}"> <br>
           <button type="submit" class="btn btn-primary">Create</button>
       </form>


@endsection


