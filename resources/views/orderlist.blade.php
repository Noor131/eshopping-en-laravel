@extends('master')
@section('content')

<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Order Date</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($orders as $order)
          <tr class="table-active">

            <td>{{ $order['product']->name}}</td>
            <td>{{ $order['product']->price}}</td>
            <td>{{ $order['order']->created_at}}</td>
            <td>{{ $order['order']->address}}</td>
            <td>
                <a href="{{ route('order.complete',$order['order']->id) }}" class="btn btn-success">Complete</a>
                <a href="{{ route('order.cancel',$order['order']->id) }}" class="btn btn-danger">Cancel</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

</div>
@endsection
