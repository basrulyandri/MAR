@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="{{getOption('site_title')}}" />
    <meta property="og:description" content="{{getOption('site_description')}}" />
    <meta property="og:image" content="{{url('/')}}{{getOption('site_og_image')}}" />
    <meta property="title" content="{{getOption('site_title')}}" />
    <meta name="description" content="{{getOption('site_description')}}" />
@stop

@section('title')
{{getOption('site_title')}} | {{getOption('site_description')}}
@stop
@section('content')
<div id="content">
    <div class="banner-gradient">
      <div class="container">
        <div class="inner-banner-gradient">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="item-banner-gradient gradient-black">
                <a href="#" class="gradient-arrow"><span class="lnr lnr-arrow-right"></span></a>
                <div class="banner-gradient-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/fransisca.jpg" alt="" /></a>
                </div>
                <div class="banner-gradient-info">
                  <a href="#" class="postcat">Inspirasi</a>
                  <h3 class="post-title"><a href="#">Mungkinkah kamu sukses di usia muda ?</a></h3>
                  <p class="desc">Jaman Ibu Bapak kita dulu, usia itu menentukan bisa atau tidaknya kita sukses. Karena hanya yang berusia matang saja (35-40 tahun) yang didengar idenya dan omongannya oleh perusahaan </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item-banner-gradient gradient-black">
                <a href="#" class="gradient-arrow"><span class="lnr lnr-arrow-right"></span></a>
                <div class="banner-gradient-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/goodtogreat.jpg" alt="" /></a>
                </div>
                <div class="banner-gradient-info">
                  <a href="#" class="postcat">Pengetahuan</a>
                  <h3 class="post-title"><a href="#">Baik itu, Musuhnya hebat </a></h3>
                  <p class="desc">Kami punya cerita buat kamu tentang Jojo seorang pendaki gunung.
Jojo punya keinginan untuk berkemah di alam terbuka dengan pemandangan yang indah. Wow, pasti nikmat sekali rasanya, begitu gumamnya dalam hati </p>
                </div>
              </div>
              <div class="item-banner-gradient gradient-black">
                <a href="#" class="gradient-arrow"><span class="lnr lnr-arrow-right"></span></a>
                <div class="banner-gradient-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/minimfaedah.jpg" alt="" /></a>
                </div>
                <div class="banner-gradient-info">
                  <a href="#" class="postcat">Hiburan</a>
                  <h3 class="post-title"><a href="#">Minim Faedah, 5 Kebiasaan Buruk Pelajar SMA Ini Banyak Dilakuin Deh! </a></h3>
                  <p class="desc">Nggak tahu kenapa, pas jadi warga Sekolah Menengah Atas (SMA) dan sederajatnya, ada aja kebiasan baru yang dilakuin teman-teman. </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item-banner-gradient gradient-black">
                <a href="#" class="gradient-arrow"><span class="lnr lnr-arrow-right"></span></a>
                <div class="banner-gradient-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/lll.jpg" alt="" /></a>
                </div>
                <div class="banner-gradient-info">
                  <a href="#" class="postcat">Info</a>
                  <h3 class="post-title"><a href="#">Cara LP3I supaya kamu kerja secepatnya setelah lulus</a></h3>
                  <p class="desc">Tahukah kamu, Bahwa LP3I membentuk divisi khusus Penempatan Kerja untuk membantu kamu supaya bisa cepat bekerja setelah lulus.</p>
                </div>
              </div>
              <div class="item-banner-gradient gradient-black">
                <a href="#" class="gradient-arrow"><span class="lnr lnr-arrow-right"></span></a>
                <div class="banner-gradient-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/avengers.jpg" alt="" /></a>
                </div>
                <div class="banner-gradient-info">
                  <a href="#" class="postcat">Hiburan</a>
                  <h3 class="post-title"><a href="#">Avengers 4 Selesai Shooting, Sutradara Posting Gambar Misterius </a></h3>
                  <p class="desc"> Film Avengers 4 akhirnya telah resmi menyelesaikan proses shooting. Hal ini dikonfirmasi langsung oleh kedua sutradara, Anthony dan Joe Russo, lewat akun Twitter @Russo_Brothers pada 12 Oktober lalu </p>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>  
    </div>  
    <!-- End Banner Gradient -->
    <div class="event-current">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12 col-sm-12">
            <div class="event-current-intro">
              <span>Info </span>
              <strong>events</strong>
              <p></p>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-sm-12">
            <div class="item-event-current">
              <div class="content-event-current">
                <div class="item-event-icon">
                  <span class="lnr lnr-clock"></span>
                </div>
                <div class="item-event-info">
                  <span class="date-time">15 Oktober 2018</span>
                  <h3><a href="#">Pensi Milenia</a></h3>
                </div>
              </div>
              <a href="#" class="find-ticket">Lihat</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-sm-12">
            <div class="item-event-current">
              <div class="content-event-current">
                <div class="item-event-icon">
                  <span class="lnr lnr-clock"></span>
                </div>
                <div class="item-event-info">
                  <span class="date-time">20 Oktober 2018</span>
                  <h3><a href="#">Stand up Comedy contest</a></h3>
                </div>
              </div>
              <a href="#" class="find-ticket">Lihat</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-sm-12">
            <div class="item-event-current">
              <div class="content-event-current">
                <div class="item-event-icon">
                  <span class="lnr lnr-clock"></span>
                </div>
                <div class="item-event-info">
                  <span class="date-time">1 November 2018</span>
                  <h3><a href="#">Workshop animasi</a></h3>
                </div>
              </div>
              <a href="#" class="find-ticket">Lihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Event Current -->
    <div class="latest-post-bx-slider">
      <div class="container">
        <div class="inner-latest-post-bx-slider">
          <div class="intro-bx-latest-post">
            <label>luluslangsunglaku.id</label>
            <h2>Terbaru</h2>
            <a href="#">Lihat semua</a>
          </div>
          <div class="content-bx-latest-post">
            <div class="item-bx-latest-post">
              <div class="bx-latest-post-thumb">
                <a href="#"><img src="{{asset('assets/frontend/')}}/images/fransisca2.jpg" alt="" /></a>
              </div>
              <div class="bx-latest-post-info">
                <a href="#" class="postcat">Inspirasi</a>
                <h3><a href="#">Mungkinkah kamu sukses di usia muda ?</a></h3>
                <ul>
                  <li><span class="lnr lnr-clock"></span> 2 Jam lalu</li>
                  <li><span class="lnr lnr-bubble"></span> 6</li>
                </ul>
              </div>
            </div>
            <div class="item-bx-latest-post">
              <div class="bx-latest-post-thumb">
                <a href="#"><img src="{{asset('assets/frontend/')}}/images/goodtogreat2.jpg" alt="" /></a>
              </div>
              <div class="bx-latest-post-info">
                <a href="#" class="postcat">Pengetahuan</a>
                <h3><a href="#">Baik itu, Musuhnya hebat</a></h3>
                <ul>
                  <li><span class="lnr lnr-clock"></span> 13 jam lalu</li>
                  <li><span class="lnr lnr-bubble"></span> 9</li>
                </ul>
              </div>
            </div>
            <div class="item-bx-latest-post">
              <div class="bx-latest-post-thumb">
                <a href="#"><img src="{{asset('assets/frontend/')}}/images/lll4.jpg" alt="" /></a>
              </div>
              <div class="bx-latest-post-info">
                <a href="#" class="postcat">Info</a>
                <h3><a href="#">Tiket masa depan</a></h3>
                <ul>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <div class="item-bx-latest-post">
              <div class="bx-latest-post-thumb">
                <a href="#"><img src="{{asset('assets/frontend/')}}/images/avengers2.jpg" alt="" /></a>
              </div>
              <div class="bx-latest-post-info">
                <a href="#" class="postcat">Hiburan</a>
                <h3><a href="#">Avengers 4 Selesai Shooting, Sutradara Posting Gambar Misterius</a></h3>
                <ul>
                  <li><span class="lnr lnr-clock"></span> 1 hari ago</li>
                  <li><span class="lnr lnr-bubble"></span> 17</li>
                </ul>
              </div>
            </div>
            <div class="item-bx-latest-post">
              <div class="bx-latest-post-thumb">
                <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/lat2.jpg" alt="" /></a>
              </div>
              <div class="bx-latest-post-info">
                <a href="#" class="postcat">Sport</a>
                <h3><a href="#">Peinistrator General in acre poenes opakcha</a></h3>
                <ul>
                  <li><span class="lnr lnr-clock"></span> 2 hours ago</li>
                  <li><span class="lnr lnr-bubble"></span> 6</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Latest Post -->
    <div class="owl-speaker">
      <div class="container">
        <div class="content-owl-speaker">
          <h2>Speakers</h2>
          <div class="wrap-item">
            <div class="item">
              <div class="item-owl-speaker speaker-blueair">
                <div class="owl-speaker-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/spe1.jpg" alt="" /></a>
                </div>
                <div class="owl-speaker-info">
                  <h3><a href="#">Roman Reigis</a></h3>
                  <p>Recently we opened new division specifically designed for consulting IT companies. It consists entirely of specialists who are keen on running business </p>
                  <a href="#" class="readmore"><span>read more</span></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-owl-speaker speaker-green">
                <div class="owl-speaker-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/spe2.jpg" alt="" /></a>
                </div>
                <div class="owl-speaker-info">
                  <h3><a href="#">Martil kevinOwen</a></h3>
                  <p>Our activity is based on up-to-date technological advance ments. Discover what technology SM Consulting uses to stay in the top 10 of companies. </p>
                  <a href="#" class="readmore"><span>read more</span></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-owl-speaker speaker-red">
                <div class="owl-speaker-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/spe3.jpg" alt="" /></a>
                </div>
                <div class="owl-speaker-info">
                  <h3><a href="#">Anbeto Derio</a></h3>
                  <p>Whether your business is big or small, our consulting services progress of modern companies. Be helpful for your company development. </p>
                  <a href="#" class="readmore"><span>read more</span></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-owl-speaker speaker-blue">
                <div class="owl-speaker-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/spe4.jpg" alt="" /></a>
                </div>
                <div class="owl-speaker-info">
                  <h3><a href="#">Jeny Alphor WY</a></h3>
                  <p>Whether your business is big or small, our consulting services progress of modern companies. Be helpful for your company development. </p>
                  <a href="#" class="readmore"><span>read more</span></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-owl-speaker speaker-orange">
                <div class="owl-speaker-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/spe5.jpg" alt="" /></a>
                </div>
                <div class="owl-speaker-info">
                  <h3><a href="#">Troysoohy vidtoanbez</a></h3>
                  <p>Whether your business is big or small, our consulting services progress of modern companies. Be helpful for your company development.</p>
                  <a href="#" class="readmore"><span>read more</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Owl Speaker -->
    <div class="what-new-slider">
      <div class="container">
        <div class="content-what-new-slider">
          <div class="what-new-intro intro-bx-latest-post">
            <label>newdAY</label>
            <h2>what's new</h2>
            <a href="#">View All</a>
          </div>
          <div class="wrap-item">
            <div class="item">
              <div class="clearfix">
                <div class="what-new-left">
                  <div class="item-what-new item-leading">
                    <div class="what-new-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/new1.jpg" alt="" /></a>
                    </div>
                    <div class="what-new-info">
                      <span class="post-format"><span class="lnr lnr-file-empty"></span></span>
                      <a href="#" class="postcat">technology</a>
                      <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                    </div>
                  </div>
                </div>
                <div class="what-new-right">
                  <div class="item-what-new">
                    <div class="what-new-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/new2.jpg" alt="" /></a>
                    </div>
                    <div class="what-new-info">
                      <span class="post-format"><span class="lnr lnr-camera-video"></span></span>
                      <a href="#" class="postcat">sport</a>
                      <h3><a href="#">Peinistrator General in acre poenes </a></h3>
                    </div>
                  </div>
                  <div class="item-what-new">
                    <div class="what-new-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/new3.jpg" alt="" /></a>
                    </div>
                    <div class="what-new-info">
                      <span class="post-format"><span class="lnr lnr-camera"></span></span>
                      <a href="#" class="postcat">World</a>
                      <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
            <div class="item">
              <div class="clearfix">
                <div class="what-new-left">
                  <div class="item-what-new item-leading">
                    <div class="what-new-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/new1.jpg" alt="" /></a>
                    </div>
                    <div class="what-new-info">
                      <span class="post-format"><span class="lnr lnr-file-empty"></span></span>
                      <a href="#" class="postcat">technology</a>
                      <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                    </div>
                  </div>
                </div>
                <div class="what-new-right">
                  <div class="item-what-new">
                    <div class="what-new-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/new2.jpg" alt="" /></a>
                    </div>
                    <div class="what-new-info">
                      <span class="post-format"><span class="lnr lnr-camera-video"></span></span>
                      <a href="#" class="postcat">sport</a>
                      <h3><a href="#">Peinistrator General in acre poenes </a></h3>
                    </div>
                  </div>
                  <div class="item-what-new">
                    <div class="what-new-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/new3.jpg" alt="" /></a>
                    </div>
                    <div class="what-new-info">
                      <span class="post-format"><span class="lnr lnr-camera"></span></span>
                      <a href="#" class="postcat">World</a>
                      <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
          </div>
        </div>
      </div>
    </div>
    <!-- End What New Slider -->
    <div class="most-popular-post">
      <div class="container">
        <div class="content-most-popular-post">
          <h2>MOST POPULAR</h2>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="item-most-popular-post">
                <div class="most-popular-post-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pop1.jpg" alt="" /></a>
                </div>
                <div class="most-popular-post-info">
                  <a href="#" class="postcat">world</a>
                  <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                  <a href="#" class="readmore">read more</a>
                </div>
                <span class="post-format"><span class="lnr lnr-file-empty"></span></span>
              </div>
              <div class="item-most-popular-post">
                <div class="most-popular-post-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pop2.jpg" alt="" /></a>
                </div>
                <div class="most-popular-post-info">
                  <a href="#" class="postcat">Technology</a>
                  <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                  <a href="#" class="readmore">read more</a>
                </div>
                <span class="post-format"><span class="lnr lnr-camera"></span></span>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="item-most-popular-post">
                <div class="most-popular-post-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pop3.jpg" alt="" /></a>
                </div>
                <div class="most-popular-post-info">
                  <a href="#" class="postcat">business</a>
                  <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                  <a href="#" class="readmore">read more</a>
                </div>
                <span class="post-format"><span class="lnr lnr-camera"></span></span>
              </div>
              <div class="item-most-popular-post">
                <div class="most-popular-post-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pop4.jpg" alt="" /></a>
                </div>
                <div class="most-popular-post-info">
                  <a href="#" class="postcat">Technology</a>
                  <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                  <a href="#" class="readmore">read more</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="item-most-popular-post">
                    <div class="most-popular-post-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pop5.jpg" alt="" /></a>
                    </div>
                    <div class="most-popular-post-info">
                      <a href="#" class="postcat">sport</a>
                      <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                      <a href="#" class="readmore">read more</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="item-most-popular-post">
                    <div class="most-popular-post-thumb">
                      <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pop6.jpg" alt="" /></a>
                    </div>
                    <div class="most-popular-post-info">
                      <a href="#" class="postcat">travel</a>
                      <h3><a href="#">Lorem Ipsum is that it has a more</a></h3>
                      <a href="#" class="readmore">read more</a>
                    </div>
                    <span class="post-format"><span class="lnr lnr-camera"></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Most Popular Post -->
    <div class="custom-banner-adv">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="item-custom-banner-adv">
              <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/ban1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="item-custom-banner-adv">
              <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/ban2.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Custom Banner Adv -->
    <div class="photo-video-slider">
      <div class="container">
        <h2>photos & video</h2>
        <div class="content-photo-video-slider">
          <div class="wrap-item">
            <div class="item">
              <div class="item-photo-video">
                <div class="photo-video-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pho1.jpg" alt="" /></a>
                </div>
                <div class="photo-video-info">
                  <h3><a href="#">Nexus 6 release date borem ipsum dolor sit amet consecte tur</a></h3>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-photo-video">
                <div class="photo-video-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pho1.jpg" alt="" /></a>
                </div>
                <div class="photo-video-info">
                  <h3><a href="#">Nexus 6 release date borem ipsum dolor sit amet consecte tur</a></h3>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-photo-video">
                <div class="photo-video-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pho1.jpg" alt="" /></a>
                </div>
                <div class="photo-video-info">
                  <h3><a href="#">Nexus 6 release date borem ipsum dolor sit amet consecte tur</a></h3>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-photo-video">
                <div class="photo-video-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pho1.jpg" alt="" /></a>
                </div>
                <div class="photo-video-info">
                  <h3><a href="#">Nexus 6 release date borem ipsum dolor sit amet consecte tur</a></h3>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="item-photo-video">
                <div class="photo-video-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/pho1.jpg" alt="" /></a>
                </div>
                <div class="photo-video-info">
                  <h3><a href="#">Nexus 6 release date borem ipsum dolor sit amet consecte tur</a></h3>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="view-all">view all</a>
        </div>
      </div>
    </div>
    <!-- End Photo Video -->
    <div class="popular-bottom">
      <div class="container">
        <div class="content-popular-bottom">
          <h2>most popular</h2>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item-popular-bottom">
                <div class="popular-bottom-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/most1.jpg" alt="" /></a>
                  <span class="post-format"><span class="lnr lnr-camera"></span></span>
                </div>
                <div class="popular-bottom-info">
                  <h3><a href="#">Lorem Ipsum is that ithas and moren cuire</a></h3>
                  <ul>
                    <li><span class="lnr lnr-clock"></span> 2 hours ago</li>
                    <li><span class="lnr lnr-bubble"></span> 6</li>
                  </ul>
                  <p>Recently we opened oin division and specifically designed for consulting  companies. It consists entirely </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item-popular-bottom">
                <div class="popular-bottom-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/most2.jpg" alt="" /></a>
                  <span class="post-format"><span class="lnr lnr-camera"></span></span>
                </div>
                <div class="popular-bottom-info">
                  <h3><a href="#">There are many variations of passages ovil</a></h3>
                  <ul>
                    <li><span class="lnr lnr-clock"></span> 2 hours ago</li>
                    <li><span class="lnr lnr-bubble"></span> 6</li>
                  </ul>
                  <p>Opened oin division and specifically designed for consulting  companies. It consists entirely of specialists </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item-popular-bottom">
                <div class="popular-bottom-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/most3.jpg" alt="" /></a>
                </div>
                <div class="popular-bottom-info">
                  <h3><a href="#">repeat predefined chunks as necessary cyalig</a></h3>
                  <ul>
                    <li><span class="lnr lnr-clock"></span> 2 hours ago</li>
                    <li><span class="lnr lnr-bubble"></span> 6</li>
                  </ul>
                  <p>Division and specifically designed for consulting  companies. Po are keen on running business  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item-popular-bottom">
                <div class="popular-bottom-thumb">
                  <a href="#"><img src="{{asset('assets/frontend/')}}/images/home7/most4.jpg" alt="" /></a>
                </div>
                <div class="popular-bottom-info">
                  <h3><a href="#">Ipsum is that ithas and morent cuire Lorem </a></h3>
                  <ul>
                    <li><span class="lnr lnr-clock"></span> 2 hours ago</li>
                    <li><span class="lnr lnr-bubble"></span> 6</li>
                  </ul>
                  <p>Specifically designed for consulting  companies. It consists entirely of specialists who recently  </p>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="viewall">View All</a>
        </div>
      </div>
    </div>
    <!-- End Popular Bottom -->
  </div>
@stop