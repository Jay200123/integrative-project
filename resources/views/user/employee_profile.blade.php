@extends('layouts.employee_master')
@section('content')
<body class="background">
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
  </div>     
@endif
<h3><strong>Employee's Profile</strong></h3>
<div class="container">
        <div class="col-md-8 col-md-offset-2">
        <h1><i class="fa fa-address-card" aria-hidden="true"></i>User Profile: {{Auth::user()->name}}</h1>
      @foreach($employees as $employee)
          <img  src="{{ asset($employee->employee_image) }}" height="280px" width="280px" alt="employee.jpeg">
          </div>
        <div class="container">
            <h3><b>First Name:</b>{{$employee->fname}}</h3>
            <h3><b>Last Name:</b>{{$employee->lname}}</h3>
            <h3><b>Phone:</b>{{$employee->phone}}</h3>
            <h3><b>Address:</b>{{$employee->address}}</h3>
            <h3><b>City:</b>{{$employee->city}}</h3>
        </div>
        @endforeach
</div>
</div>
</body>
@endsection