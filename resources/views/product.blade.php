@extends('master')
@section('content')
    {{-- here --}}
        <!-- The social media icon bar -->
<div class="icon-bar">
    <a href="#" class="facebook"> <i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
  </div>

    {{-- here --}}
    <div class="container custom-product">
        <h2 style="font-size: 27px"><b>IN THE CART</b><h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id']}}">
                        <img class="slider-img" src="{{ $item['gallery'] }}">
                        <div class="carousel-caption slider-text">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

          </div>

          <div class="trending-wrapper">
            <h3 style="Georgia"><strong>TRENDING NOW</strong></h3>
                <br>
             <div class="trendingg">
            @foreach ($products as $item)
            <div class="col-sm-4 col-md-2">
                <div class="thumbnail">
                    <a href="detail/{{ $item['id']}}">
                    <img class="trending-image" src="{{ $item['gallery'] }}">
                    <div class="text">
                        <h5>{{ $item['name'] }}</h5>
                    </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
        </div>


        <br><br><br><br><br><br>


        {{-- here --}}

        <h3 style="Copperplate"><b>MORE PRODUCTS</b></h3>
        <br><br>
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                  <div class="thumbnail-image">
                    <img src="https://www.aroged.com/wp-content/uploads/2021/02/The-future-Asus-ROG-Phone-5-is-the-best-smartphone.jpg" alt="..." style="max-height: 300px max-width: 200px" class="img-responsive">
                    </div>
                    <div class="caption">
                        <h3>Gaming Phones</h3>
                        <p>Avail the latest gaming phones at staggering offers</p>
                            <div class="clearfix">
                                <div class="pull-left price"><h4><b>$799</b></h4></div>
                                    <p></p><a href="#" class="btn btn-primary pull-right" role="button">View Product</a> </p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                      <img src="https://i.ytimg.com/vi/yJnohSuBIs4/maxresdefault.jpg" alt="..." style="max-height: 300px max-width: 200px" class="img-responsive">
                      </div>
                      <div class="caption">
                          <h3>Best Camera phones</h3>
                          <p>Get the best camera phones at the best prices</p>
                              <div class="clearfix">
                                  <div class="pull-left price"><h4><b>$499</b></h4></div>
                                      <p></p><a href="#" class="btn btn-primary pull-right" role="button">View Product</a> </p>
                              </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                      <img src="https://www.apple.com/newsroom/images/product/iphone/standard/Apple_announce-iphone12pro_10132020_big.jpg.large.jpg" alt="..." style="max-height: 300px max-width: 200px" class="img-responsive">
                      </div>
                      <div class="caption">
                          <h3>Fastest Phones</h3>
                          <p>List of super fast phones that comes with the snapdragon 888</p>
                              <div class="clearfix">
                                  <div class="pull-left price"><h4><b>$1200</b></h4></div>
                                      <p></p><a href="#" class="btn btn-primary pull-right" role="button">View Product</a> </p>
                              </div>
                      </div>
                  </div>
              </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                  <div class="thumbnail-image">
                    <img src="https://i.pinimg.com/736x/05/8e/56/058e5672e07755f428028012fea3e74a.jpg" alt="..." style="max-height: 300px max-width: 200px" class="img-responsive">
                    </div>
                    <div class="caption">
                        <h3>Alienware Area 51</h3>
                        <p>World's most powerful and overclockable gaming laptop. Featuring up to 10th Gen Intel® Core™ i9K processors</p>
                            <div class="clearfix">
                                <div class="pull-left price"><h4><b>$5799</b></h4></div>
                                    <p></p><a href="#" class="btn btn-primary pull-right" role="button">View Product</a> </p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                      <img src="https://i.ytimg.com/vi/weU1pYsMnRk/maxresdefault.jpg" alt="..." style="max-height: 800px max-width: 800px" class="img-responsive">
                      </div>
                      <div class="caption">
                          <h3>Asus Rog Strix G512</h3>
                          <p>Comes with the GTX 1650ti to give you the best gaming experience</p>
                              <div class="clearfix">
                                  <div class="pull-left price"><h4><b>$2400</b></h4></div>
                                      <p></p><a href="#" class="btn btn-primary pull-right" role="button">View Product</a> </p>
                              </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="thumbnail-image">
                      <img src="https://media.wired.com/photos/5d5ec4d7a9558100099f379e/191:100/w_1280,c_limit/Gear-Razer-blade-pro-17-source-razer-FATA.jpg" alt="..." style="max-height: 300px max-width: 200px" class="img-responsive" >
                      </div>
                      <div class="caption">
                          <h3>Razer Blade Pro 17</h3>
                          <p>Razer's latest 17-inch laptop offers desktop-grade gaming performance in a weighty but portable package</p>
                              <div class="clearfix">
                                  <div class="pull-left price"><h4><b>$4890</b></h4></div>
                                      <p></p><a href="#" class="btn btn-primary pull-right" role="button">View Product</a> </p>
                              </div>
                      </div>
                  </div>
              </div>
      </div>
    </div>
        {{-- here --}}
        <br><br><br>

    </div>
</div>
@endsection
