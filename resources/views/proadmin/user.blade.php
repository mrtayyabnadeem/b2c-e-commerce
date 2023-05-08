@extends('proadmin.admin-inc.main')
@section('main')

<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{route('ProDashboard')}}">Dashboard</a>
    <span class="breadcrumb-item active">User List</span>
</nav>


<div class="container my-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
