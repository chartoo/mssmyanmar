@extends('main')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-6 offset-3 text-center">
                <div class="card">
                    <div class="card-header">
                     <h3>Create you account</h3> 
                    </div>
                    <div class="card-body text-left">
                            <div class="form-group">
                              <label for="customername">Your Name (သင့် နာမည်) <span class="text-danger">*</span></label>
                              <input type="customername" class="form-control" id="customername" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                              <label for="phone">Phone number (ဖုန်းနံပါတ်) <span class="text-danger">*</span></label>
                              <input type="phone" class="form-control" id="phone" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address (အီးမေးလ် လိပ့်စာ) <span class="text-danger">*</span></label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted">We'll send information to this email (ဆော့နှင့် ပတ်သတ်သော အချက်အလက်များကို ဤ အီးမေးလ်ကို ပို့ပေးပါမည်)</small>
                            </div>
                            <div class="form-group">
                              <label for="password">Password (စကားဝှက်)</label>
                              <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                              <label for="retype-password">Retype password ( စကားဝှက် နောက်တကြိမ်ပြန်ရိုက်ပါ )</label>
                              <input type="password" class="form-control" id="retype-password">
                            </div>
                    </div>
                    <div class="card-header text-center">
                        <button type="submit" class="btn btn-primary px-3">Register</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
