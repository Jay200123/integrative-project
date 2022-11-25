<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="navbar navbar-default" style="background-color:none">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i>Products</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">


          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if (Auth::check())
              <li><i class="fa fa-user" aria-hidden="true"><a href="{{route('user.profile')}}"></i>Customer Profile</a></li>
              <li role="separator" class="divider"></li>

              <li><i class="fa fa-sign-out" aria-hidden="true"><a href="{{ route('user.logout') }}"></i>Logout</a></li>
              @else
              <li><i class="fa fa-user-plus" aria-hidden="true"><a href="{{route('user.signup')}}"></i>Customer Signup</a></li>
              <li><i class="fa fa-id-card" aria-hidden="true"><a href="{{route('user.esignup')}}"></i>Employee Signup</a></li>
              <li><i class="fa fa-sign-in" aria-hidden="true"><a href="{{route('user.signin')}}"></i>Signin</a></li>
            @endif
          </ul>
        </li>
    </ul>
</div>
</div> 
</nav>      


