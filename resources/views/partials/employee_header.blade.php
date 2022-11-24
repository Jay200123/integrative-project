<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">

    <li>
    <a href="{{route('product.index')}}">
    <i class="fa fa-archive"  aria-hidden="true"></i>Products
    </a>
    </li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if (Auth::check())
              <li><i class="fa fa-user" aria-hidden="true"><a href="{{ route('employee.profile') }}"></i>Employee Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><i class="fa fa-sign-out" aria-hidden="true"><a href="{{ route('user.logout') }}"></i>Logout</a></li>
              @else
              <li><i class="fa fa-user-plus" aria-hidden="true"><a href="{{ route('user.signup') }}"></i>Customer Signup</a></li>
              <li><i class="fa fa-user-plus" aria-hidden="true"><a href="{{ route('user.employee') }}"></i>Employee Signup</a></li>
              <li><i class="fa fa-sign-in" aria-hidden="true"><a href="{{ route('user.signin') }}"></i>Signin</a></li>
            @endif
          </ul>
        </li>
    </ul>
</div>
</div> 
</nav>      


