@extends('layouts.master')
@section('content')
<body class="background">
<div class="row">
        <div class="col-md-4 col-md-offset-4">
        <h3>
        <i class="fa fa-sign-in" aria-hidden="true"></i>Sign In
        </h3>    
            <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
      
    @endif
            <form class="" action="{{ route('user.signins') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i>Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                    @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password"><i class="fa fa-key" aria-hidden="true"></i>Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                    <input type="submit" value="Sign In" class="btn btn-primary">  
             </form>
        </div>
</div>
</div>
</body>
@endsection