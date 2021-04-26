@extends('master')
@section('content')
<style>
    .bkash-body{
        background-color: #e3156f;
    }
    .bkash-card{
        color: white!important;
        border-radius: 20px;
        box-shadow: 0px 10px 20px 0px rgba(8, 6, 89, 0.1);
    }
    .bkash-input{
        background: ghostwhite!important;
    }
    </style>
<div class="custom-product">
    <h2 style="font-size:20px; margin-bottom: 20px;">PLACE YOUR ORDER:</h2>
        <div class="col-sm-10">

            <table class="table">
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>$ {{ $total }}</td>
                  </tr>
                  <tr>
                    <td>VAT</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <td>Delivery Charge</td>
                    <td>$10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>$ {{ $total+10 }}</td>
                  </tr>

                </tbody>
              </table>

              <div>

                <form action="/orderplace" method="POST" >
                    @csrf
                    <div class="form-group">
                      <textarea name="address" required placeholder="enter your address" class="form-control" id="email"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Payment Mehtod</label> <br> <br>
                        {{-- <input type="radio" value="cash" name="payment"> <span> Paypal </span> <br><br> --}}
                        <input type="radio" value="Bkash" name="payment"> <span> Bkash</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span> Cash On Delivery</span> <br> <br>
                    </div>
                    <button type="submit" id='submitbtn' hidden style="visibility: hidden" class="btn btn-success"></button>
                  </form>
                  <button class="poibtn btn btn-danger" data-toggle="modal" data-target="#bkashModal">Order Now</button>
                  <br><br><br>

                  <div class="modal top fade" id="bkashModal">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body bkash-body p-0">
                                <img src="/bkash_payment_logo.png" style="max-width: 570px" class="img-fluid" alt="">

                               <div class="bkash-card m-3 p-4">
                                   <p class="text-white">Merchant Id: Eshop</p>
                                   <p class="text-white">Invoice No. 123AEBXYFJ</p>
                                   <p class="text-white">Amount: {{ $total+10 }}</p>
                               </div>
                               <div class="p-4">
                               <p class="text-center text-white"> Your bkash Number</p>
                               <input type="text" class="form-control bkash-input" placeholder="e.g.01XXXXXXXX" id="">
                               <div class="d-flex justify-content-between mx-3 mt-2">
                                   <button class="btn text-white" id="proceed" onclick="post()" >Proceed</button>
                                   <button class="btn text-white" data-dismiss="modal">close</button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    </div>
 </div>

 <script>
     function post() {
  document.getElementById("submitbtn").click(); // Click on the checkbox
}
 </script>
@endsection
