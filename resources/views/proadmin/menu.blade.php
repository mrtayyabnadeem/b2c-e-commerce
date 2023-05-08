@extends('proadmin.admin-inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ route('ProDashboard') }}">Dashboard</a>
        <span class="breadcrumb-item active">Create Menu</span>
    </nav>

    <div class="container">
        @if(Session::has('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ Session::get('status') }}</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('storeMenu') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Menu_name">Menu Title</label>
                        <input type="text" class="form-control" name="Menu_name" id="Menu_name"
                            aria-describedby="helpId">
                        @error('Menu_name')
                            <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Menu</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($menu) && sizeof($menu))
                                @foreach ($menu as $row)
                                <tr>
                                    <td scope="row">{{$row['id']}}</td>
                                    <td>{{$row['menu_title']}}</td>
                                    <td><button type="button" class="btn btn-primary">btn</button></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
