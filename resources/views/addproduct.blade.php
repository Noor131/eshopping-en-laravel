@extends('master')
@section('content')

    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="{{ route('store.product') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" name="name" class="form-control" id="productName" >
                      </div>

                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" min="0" step="1" class="form-control" id="price" placeholder="1200">
                      </div>

                      <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" class="form-control" id="category">
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description">
                      </div>

                      <div class="form-group">
                        <label for="gallery">Picture</label>
                        <input type="file" name="gallery" id="gallery">
                      </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
                <br> <br>
            </div>
        </div>
    </div>
@endsection
