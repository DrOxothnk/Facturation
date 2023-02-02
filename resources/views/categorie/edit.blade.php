
   @extends('layouts.dashboard')
   @section('content')
   <h3>Upadate Categories</h3>

       <form action="{{ route('admin.categories.update',$categorie->id) }}" method="POST">
           @csrf
           @method('put')
           <label for="nom">Nom</label> <br>
           <input type="text"  class="form-control" required name="nom" value="{{ $categorie->nom }}"> <br>
           <button type="submit" class="btn btn-primary">Create</button>
       </form>


@endsection
