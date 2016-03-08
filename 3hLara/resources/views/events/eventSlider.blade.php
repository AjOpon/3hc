<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators" hidden>
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{asset('images/slider/bg1.jpg')}})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 hidden-xs animation animated-item-4 evDiv">
                                
                                <div class="slider-img">
                                    <img src="{{asset('images/slider/img1.png')}}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{asset('images/slider/bg2.jpg')}})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                                
                            <div class="col-sm-6 hidden-xs animation animated-item-4 evDiv">
                                <div class="slider-img">
                                    <img src="{{asset('images/slider/img2.png')}}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{asset('images/slider/bg3.jpg')}})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4 evDiv">
                                <div class="slider-img">
                                    <img src="{{asset('images/slider/img3.png')}}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        

        <a class="left carousel-control" id="prevEvent" href="#main-slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
          <a class="right carousel-control" id="nxtEvent"href="#main-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> 
        </div><!--/.carousel-->
          <!-- <a class="prev hidden-xs" id="prevEvent" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
                  </a>
                  <a class="next hidden-xs" id="nxtEvent"href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
                  </a>  -->
    </section><!--/#main-slider-->