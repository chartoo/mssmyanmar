@extends('main')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-6 py-4 offset-3 text-center">
                <div class="card">
                    <div class="card-header">
                     <h3>Login</h3> 
                    </div>
                    <div class="card-body text-left">
                            <div class="form-group">
                              <label for="username">Email / Phone (အီးမေးလ် (သို့) ဖုန်းနံပါတ်) <span class="text-danger">*</span></label>
                              <input type="username" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                              <label for="password">Password (စကားဝှက်)</label>
                              <input type="password" class="form-control" id="password">
                            </div>
                            <b><i><a href="/forgetpassword">Forget password ?</a></i></b>
                    </div>
                    <div class="card-header text-center">
                        <button type="submit" class="btn btn-primary px-3">Login</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
