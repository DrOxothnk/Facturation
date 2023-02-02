
   @extends('layouts.dashboard')
   @include('dashboard.partials.script')
    @section('content')

        <div class="main-panel">
    <h3>Liste Des Produits</h3>
    <br>
    <a class="btn btn-primary" href="{{ route('admin.Produits.create') }}">+</a>
    <br> <br>
    @if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
            <tr>
                <th>Designation</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->name }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->quantite }}</td>
                    <td>{{ $produit->categories->nom }}</td>
                    <td> <a href="{{ route('admin.Produits.edit',$produit) }}" class="btn btn-default btn-sm btn-icon icon-left"> <i
                                class="entypo-pencil"></i>
                            Edit
                        </a> <a href="#" class="btn btn-danger btn-sm btn-icon icon-left"> <i
                                class="entypo-cancel"></i>
                                <form method="post" action="{{route('admin.Produits.destroy',$produit)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <i class="material-icons mdc-button__icon">delete</i>
                                    </button>
                                </form>
                        </a> <a href="#" class="btn btn-info btn-sm btn-icon icon-left"> <i
                                class="entypo-info"></i>
                            Profile
                        </a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
 @endsection
