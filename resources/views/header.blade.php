<?php
use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
$total = ProductController::cartItem();
}
?>

<nav class="navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">EShop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                @if (Session::get('user')['id'] != 1)
                    <li class=""><a href="/myorders">Orders</a></li>
                @endif
            </ul>
            @if (Session::get('user')['id'] != 1)
                <form action="/search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control search-box" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">search</button>
                </form>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="/cartlist">
                            <i class="fas fa-shopping-cart"></i>
                            Cart({{ $total }} )
                        </a>
                    </li>
                @else

                    <ul class="nav navbar-nav">
                        <li class=""><a href="{{ route('add.product') }}">Add Product</a></li>
                    </ul>

        @endif


        @if (Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {{ Session::get('user')['name'] }}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </li>





        @else
            <li><a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            <li><a href="/register"> <i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
        @endif
        </ul>
    </div>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
