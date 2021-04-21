@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 align="center"> Laravel CRUD </h2>
                <br></br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            
            <th width="280px"> </th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project-> nip}}</td>
                <td>{{ $project-> nama }}</td>
                <td>{{ $project-> alamat }}</td>
                
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $projects->links() !!}

@endsection
