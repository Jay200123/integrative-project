<style>
    body {
   padding: 0;
    margin: 0;
    background: white;
   }

 .navbar { 
  background: grey;
  padding: 15px;
  border: solid;
  /* box-shadow: 15px 10px; */
 }

 .nav-link, .navbar-brand { color: #fff;
   cursor: pointer;
   } 

 .nav-link { margin-right: 1em !important;
 } 
 .nav-link:hover{ color: #000;
   }

 .navbar-collapse { 
  justify-content: flex-end;
 }

 .divider{
  display:inline-block;
 }

 li{
  font-family: sans-serif;
  display:inline-block;
 }

 a{
  color:White;
  text-decoration:none;
 }

</style>
@include('layouts.employee_master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-md"> 
        <a class="navbar-brand" href="#">FootWear PH</a> 
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
         <span class="navbar-toggler-icon"></span> 
        </button> 
        <div class="collapse navbar-collapse" id="main-navigation"> 
        <ul class="navbar-nav"> 
        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i>Customer</a> </li>
         <li class="nav-item"> <a class="nav-link" href="index_contact.html"><i class="fa fa-user-md" aria-hidden="true"></i>Employee</a> </li> 
        <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i>Services</a> </li>
        <li class="nav-item"> <a class="nav-link" href="{{route('product.index')}}"><i class="fa fa-product-hunt"  aria-hidden="true"></i>Products</a> </li>
        </ul> 
        

        <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
              <li><i class="fa fa-user" aria-hidden="true"><a  href="{{ route('employee.profile') }}">Employee Profile</a></i></li>
              <li role="separator" class="divider"></li>
              <li><i class="fa fa-sign-out" aria-hidden="true"><a  href="{{ route('user.logout') }}">Logout</a></i></li>
              @else
            <li><a href="index_signup.html"><span class="glyphicon glyphicon-user"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Sign Up</a></li>
            <li><a href="index_signin.html"><span class="glyphicon glyphicon-log-in"><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</a></li>
            @endif
          </ul>
        </div>
        </nav>