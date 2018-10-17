<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  @yield('og')
  <title>@yield('title')</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/font-awesome.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/font-linearicons.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap-theme.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/jquery.fancybox.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/jquery-ui.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.carousel.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.transitions.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.theme.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick-theme.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/theme.css')}}" media="all"/>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/responsive.css')}}" media="all"/>
</head>
<body>
<div class="wrap">
  <div id="header">
    <div class="header-7">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-4">
            <div class="logo-7">
              <a href="{{route('page.index')}}"><img src="{{asset('assets/frontend/')}}/images/logo-putih-kuning.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-8">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="header-timer"><span class="lnr lnr-clock"></span> Senin, 20 Oktober, 2018</div>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="header-search-7">
                  <div class="social-header-7">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                  <div class="search-form-7">
                    <form>
                      <input type="text" value="Search" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
                      <input type="submit" value="" />
                    </form> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-10 col-sm-12 col-xs-12">
            <nav class="main-nav main-nav-7">
              <ul class="main-menu">
                
                <li><a href="{{route('page.index')}}">Home</a></li>
                <li class="has-mega-menu">
                  <a href="#">Teknologi</a>
                  <div class="mega-menu">
                    <div class="mega-menu-tab-slider">
                      <div class="event-slider box-post-slider">
                        <h2 class="title home-title">Teknologi</h2>
                        <div class="current-event">
                          <div class="event-tab-list">
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#post-latest" aria-controls="post-latest" role="tab" data-toggle="tab">Terbaru</a></li>
                              <li role="presentation"><a href="#post-trending" aria-controls="post-trending" role="tab" data-toggle="tab">Trending</a></li>
                              <li role="presentation"><a href="#post-popular" aria-controls="post-popular" role="tab" data-toggle="tab">Populer</a></li>
                              <li role="presentation"><a href="#post-review" aria-controls="post-review" role="tab" data-toggle="tab">Most Review</a></li>
                              <li role="presentation"><a href="#post-top" aria-controls="post-top" role="tab" data-toggle="tab">top post</a></li>
                            </ul>
                          </div>
                          <div class="event-tab-content">
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="post-latest">
                                <div class="home-direct-nav">
                                  <div class="wrap-item">
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                  </div>
                                </div>
                              </div>
                              <!-- End Latest -->
                              <div role="tabpanel" class="tab-pane" id="post-trending">
                                <div class="home-direct-nav">
                                  <div class="wrap-item">
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                  </div>
                                </div>
                              </div>
                              <!-- End Trending -->
                              <div role="tabpanel" class="tab-pane" id="post-popular">
                                <div class="home-direct-nav">
                                  <div class="wrap-item">
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                  </div>
                                </div>
                              </div>
                              <!-- End Popular -->
                              <div role="tabpanel" class="tab-pane" id="post-review">
                                <div class="home-direct-nav">
                                  <div class="wrap-item">
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                  </div>
                                </div>
                              </div>
                              <!-- End Review -->
                              <div role="tabpanel" class="tab-pane" id="post-top">
                                <div class="home-direct-nav">
                                  <div class="wrap-item">
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                        
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event2.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">mollis inter appling in hoen gcodon paling</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event3.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">inter appling paling Faucibus in hoeng codon </a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                      <div class="item-event-post">
                                        <div class="post-timer">
                                          <span class="lnr lnr-clock"></span> <span class="date-time">FEBRUARY 1, 2016</span> 
                                        </div>
                                        <div class="post-thumb">
                                          <a href="#"><img src="{{asset('assets/frontend/')}}/images/home/event1.jpg" alt="" /></a>
                                        </div>
                                        <div class="post-info">
                                          <h3 class="post-title"><a href="#">appling codon paling Fauc ibus in hoeng</a></h3>
                                          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet ementum, nunc other executives</p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Item -->
                                  </div>
                                </div>
                              </div>
                              <!-- End Top -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Event Slider -->
                    </div>
                  </div>
                </li>
                <li><a href="#">Gaya Hidup</a></li>
                <li><a href="#">Musik </a></li>
                <li><a href="#">Pengetahuan</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#">Daftar</a></li>
              </ul>
              <div class="mobile-menu">
                <span class="mobile-menu-text">Menu</span>
                <a href="#" class="btn-mobile-menu"><span class="lnr lnr-menu"></span></a>
              </div>
              <div class="extra-menu">
                <a href="#" class="btn-extra-menu"><span class="lnr lnr-menu"></span></a>
              </div>
              <div class="extra-menu-dropdown">
                <div class="row">
                  <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item-extra-menu">
                      <h2>More</h2>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item-extra-menu">
                      <ul>
                        <li><a href="404.html">404</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="about-light.html">About Light</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-dark.html">Blog Dark</a></li>
                        <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item-extra-menu">
                      <ul>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-grid-ml.html">Blog Grid ML</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="contact.html">Contact Dark</a></li>
                        <li><a href="contact-light.html">Contact Light</a></li>
                        <li><a href="detail.html">Detail</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item-extra-menu">
                      <ul>
                        <li><a href="event.html">Event</a></li>
                        <li><a href="grid-shop.html">Grid Shop</a></li>
                        <li><a href="list-shop.html">List Shop</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="list.html">List Post</a></li>
                        <li><a href="list-2.html">List Light</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item-extra-menu">
                      <ul>
                        <li><a href="list-mr.html">List Main Right</a></li>
                        <li><a href="list-ml.html">List Main Left</a></li>
                        <li><a href="list-event.html">List Event</a></li>
                        <li><a href="single.html">Single Post</a></li>
                        <li><a href="single2.html">Single Style 2</a></li>
                        <li><a href="single-dark2.html">Single Dark 2</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item-extra-menu">
                      <ul>
                        <li><a href="single-dark3.html">Single Dark 3</a></li>
                        <li><a href="video.html">Video</a></li>
                        <li><a href="search-dark.html">Search Dark</a></li>
                        <li><a href="search-dark-ml.html">Search Dark ML</a></li>
                        <li><a href="search-dark.html">Search Light</a></li>
                        <li><a href="search-dark-ml.html">Search Light ML</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Extra Menu -->
            </nav>
            <!-- End Main Nav -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header -->
  @yield('content')
  <!-- End Content -->
  <div id="footer">
    <div class="newsletter7">
      <div class="container">
        <div class="content-newsletter7">
          <h2>newsletter</h2>
          <form>
            <p><input type="text" name="email" value="https://7uptheme.com/newday" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" /></p>
            <p>
              <input type="submit" value="Yes" />
              <input type="reset" value="No Thanks" />
            </p>
          </form>
        </div>  
      </div>  
    </div>
    <div class="footer7">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="logo-footer7"><a href="#">lulus<span>langsunglaku</span>.id</a></div>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="social-footer7">
              <a class="ft-facebook" href="#"><i class="fa fa-facebook"></i></a>
              <a class="ft-twitter" href="#"><i class="fa fa-twitter"></i></a>
              <a class="ft-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
              <a class="ft-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
              <a class="ft-instagram" href="#"><i class="fa fa-instagram"></i></a>
              <a class="ft-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
              <a class="ft-vimeo" href="#"><i class="fa fa-vimeo"></i></a>
              <a class="ft-youtube" href="#"><i class="fa fa-youtube"></i></a>
              <a class="ft-rss" href="#"><i class="fa fa-rss"></i></a>
            </div>
          </div>
        </div>
        <div class="copy-right7">
          <p>Copyright © 2016 Wordpress. All Rights Reserved. Designed by <a href="#">7uptheme.com.</a></p>
        </div>
        <ul class="list-inline menu-footer7">
          <li><a href="#">Terms of Use </a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">AdChoices</a></li>
          <li><a href="#">Advertise with us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Work for us</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Transcripts</a></li>
          <li><a href="#">License Footage</a></li>
          <li><a href="#">Newday Newsource</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Footer -->
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery-1.12.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.fancybox-media.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/theme.js')}}"></script>
</body>
</html>