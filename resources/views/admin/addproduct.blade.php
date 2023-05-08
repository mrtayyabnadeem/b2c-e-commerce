@extends('admin.admin-inc.main')
@section('main')
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{route('Dashboard')}}">Dashboard</a>
        <span class="breadcrumb-item active">Add Product</span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text"
                                class="form-control" name="title" id="title" aria-describedby="helpId">
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group">
                              <label for="category">Category</label>
                              <select class="form-control" name="category" id="category">
                                <option>one</option>
                                <option>Two</option>
                                <option>Three</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="bio">Bio</label>
                              <textarea class="form-control" name="bio" id="bio" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="price">Price</label>
                              <input type="number"
                                class="form-control" name="price" id="price" aria-describedby="helpId" >
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group">
                              <label for="qty">QTY</label>
                              <input type="number"
                                class="form-control" name="qty" id="qty" aria-describedby="helpId" >
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group">
                              <label for="img">Product Image</label>
                              <input type="file" class="form-control-file" name="img" id="img" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted">Help text</small>
                            </div>
                            <button type="submit" class="btn btn-primary">List Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
