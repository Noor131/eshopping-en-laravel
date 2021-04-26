@extends('master')
@section('content')

<div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Your Cart</h2>
                <hr> <br>
                @foreach ($products as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class="trending-image" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h2>{{ $item->name}}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </a>
                    </div>

                    {{-- here --}}



                    {{-- here --}}

                    <div class="col-sm-3">
                        {{-- <button class="btn btn-warning">Remove from cart</button> --}}
                        <div class="remove">
                        <a href="/removecart/{{ $item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                    </div>
                </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="btn btn-danger" style="margin-left: 700px" href="ordernow">Order Now</a>
            <br><br><br>
        </div>
    </div>
 </div>
@endsection
