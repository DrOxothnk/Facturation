
   @extends('layouts.dashboard')
   @section('content')
   <h3>Update Produit</h3>

       <form action="{{ route('admin.Produits.update',$produit->id)}}" method="POST">
           @csrf
            @method('put')
            <label for="id_cat">Categories</label>
            <select class="form-control" name="id_cat" id="id_cat">
                @foreach ($categories as $c )
                <option name="id_cat" value="{{ $c->id }}">{{ $c->nom }}</option>
                @endforeach
            </select>
           <label for="name">Name</label> <br>
           <input type="text" class="form-control" required name="name" value="{{ $produit->name }} "> <br>
           <label for="">Quantite</label> <br>
           <input type="number" class="form-control" required name="quantite" value="{{ $produit->quantite }}"> <br>
           <label for="">Prix</label> <br>
           <input type="number" class="form-control" required name="prix" value="{{ $produit->prix }}"> <br> <br>
           <button type="submit"  class="btn btn-primary">Update</button>
       </form>


@endsection
