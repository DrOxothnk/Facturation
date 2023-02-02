
   @extends('layouts.dashboard')
   @include('dashboard.partials.script')
    @section('content')
        <div class="main-panel">
    <h3>Liste Des commandes</h3>
    <br>
    <a class="btn btn-primary" href="{{ route('admin.commandes.create') }}">+</a>
    <br> <br>
    <br>  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
            <tr>
                <th>Date</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $commande)
                <tr>
                    <td>{{ $commande->date }}</td>
                    <td>{{ $commande->total }}</td>
                    <td> <a href="{{ route('admin.commandes.edit',$commande) }}" class="btn btn-default btn-sm btn-icon icon-left"> <i
                                class="entypo-pencil"></i>
                            Edit
                        </a> <a href="#" class="btn btn-danger btn-sm btn-icon icon-left"> <i
                                class="entypo-cancel"></i>
                                <form method="post" action="{{route('admin.commandes.destroy',$commande)}}">
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
