@extends('proadmin.admin-inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{route('ProDashboard')}}">Dashboard</a>
        <span class="breadcrumb-item active">Create Category</span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="#">
                    <div class="form-group">
                      <label for="category_name">Category Title</label>
                      <input type="text"
                        class="form-control" name="category_name" id="category_name" aria-describedby="helpId" >
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label for="category_logo">Category Logo</label>
                      <input type="file" class="form-control-file" name="category_logo" id="category_logo" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label for="menu">Menu</label>
                      <select class="form-control" name="menu" id="menu">
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Category</button>
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
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
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
