@extends('front-inc.main')
@section('main-body')
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <h4>Registration</h4>
                <form action="{{ route('sellercenter.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="staticEmail"
                                placeholder="example@example.com">
                            <small>
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputPassword">
                            <small>
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Confrim Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword">
                            <small>
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Brand Name <small>(Brand Name also Store
                                Name)</small></label>
                        <div class="col-sm-10">
                            <input type="text" name="store_name" class="form-control" id="inputPassword">
                            <small>
                                @error('store_name')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Saller Category</small></label>
                        <div class="col-sm-10">
                            <select name="seller-category" id="seller-category" name="store_category" class="form-control">
                                <option value="local">Local</option>
                                <option value="brand">Brand</option>
                            </select>
                            <small>
                                @error('seller-category')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="store_logo" id="store_logo">
                            <small>
                                @error('store_logo')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
                            <small>
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Zip</label>
                        <div class="col-sm-10">
                            <input type="number" name="zip" min="0" class="form-control" id="zip">
                            <small>
                                @error('zip')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" value="Create Store" class="btn btn-info" id="Submit">
                            <input type="reset" value="Reset" class="btn btn-danger" id="Reset">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <h4>Login</h4>
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col">
                            <div class="card m-auto">
                                <div class="card-body">
                                    <form action="{{ route('sellercenter.create') }}" method="GET">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="login_email"
                                                aria-describedby="helpId" placeholder="example.example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="login_password" aria-describedby="helpId">
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">login</button>
                                        </div>
                                    </form>
                                    @if (Session::has('sms'))
                                        <div class="alert alert-warning alert-dismissible fade show m-1" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>
                                                {{ Session::get('sms') }}
                                            </strong>
                                        </div>
                                        <script>
                                            $(".alert").alert();
                                        </script>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
