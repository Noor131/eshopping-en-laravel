<?php
use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
$total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 20px">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">EShop</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
    @if (Session::get('user')['id'] != 1)

        <li><a href="/myorders">Orders</a></li>
        <li>
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">search</button>
            </form>
        </li>
    </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>v<i class="fa fa-bell" aria-hidden="true"></i></li>
        <li>
            <a href="/cartlist">
                <i class="fas fa-shopping-cart"></i>
                Cart({{ $total }} )
            </a>
        </li>

    @else
    <li><a href="{{ route('add.product') }}">Add Product</a></li>
    @endif


    @if (Session::has('user'))

    <li class="dropdown" style="right: 0; left: auto">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"></span>  {{ Session::get('user')['name'] }}
        </a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
        </ul>
      </li>

    @else
        <li><a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        <li><a href="/register"> <i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
    @endif
{{--
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li> --}}
      </ul>
    </div>
  </nav>


