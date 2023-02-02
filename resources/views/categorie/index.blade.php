
   @extends('layouts.dashboard')
   @include('dashboard.partials.script')
    @section('content')
        <div class="main-panel">
    <h3>Liste Des categories</h3>
<br>
    <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">+</a>
    <br>     <br>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
            <tr>
                <th>Nom</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->nom }}</td>

                    <td> <a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-default btn-sm btn-icon icon-left"> <i
                                class="entypo-pencil"></i>
                            Edit
                        </a> <a href="#" class="btn btn-danger btn-sm btn-icon icon-left"> <i
                                class="entypo-cancel"></i>
                                <form method="post" action="{{route('admin.categories.destroy',$category)}}">
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

