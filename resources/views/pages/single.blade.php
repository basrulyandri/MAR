@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="{{$post->title}} | {{getOption('site_title')}}" />
    <meta property="og:description" content="{{$post->excerpt}}" />
    <meta property="og:image" content="{{url('/')}}{{$post->thumbnail}}" />
    <meta name="description" content="{{$post->excerpt}}" />
@stop
@section('content')

@section('title')
{{$post->title}} | {{getOption('site_title')}}
@stop

<div id="content">
		<div class="container">
			<div class="main-content-blog2">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="single-leading2">
							<div class="single-leading-thumb">
								<a href="#"><img src="{{asset('assets/frontend/')}}/images/single/lead.jpg" alt="" /></a>
							</div>
							<div class="single-leading-info">
								<a href="#" class="single-leading-avatar">
									<img src="{{$post->user->getAvatarUrl()}}" alt="" />
								</a>
								<a href="#" class="single-leading-author">{{$post->user->getNameOrEmail()}}</a>
								<p>{{$post->user->about}}.</p>
								<div class="single-leading-social">
									<a href="{{$post->user->twitter_url}}"><i class="fa fa-twitter"></i></a>
									<a href="{{$post->user->facebook_url}}"><i class="fa fa-facebook"></i></a>
									<a href="{{$post->user->instagram}}"><i class="fa fa-instagram"></i></a>									
								</div>
							</div>
						</div>
						<!-- End Single Leading -->
						<div class="main-content-single2">
							<h2>{{$post->title}}</h2>
							{!!$post->body!!}
							
						</div>
						<!-- End Main Content -->
						<div class="single-list-tags">
							<label>	tags:</label>
							<a href="#">Tennis, </a>
							<a href="#">Golf, </a>
							<a href="#">Football, </a>
							<a href="#">Caroing, </a>
							<a href="#">Hockey, </a>
							<a href="#">Snowboarding </a>
						</div>
						<!-- End Single Tags -->
						<div class="related-article">
							<h2>RELATED ARTICLES</h2>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="item-related-article">
										<div class="related-article-thumb">
											<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/single/rl1.jpg"></a>
											<ul class="featurred-cat-newday">
												<li>in: <a href="#">World </a></li>
												<li>Post by: <a href="#">admin</a></li>
											</ul>
										</div>
										<div class="related-article-info">
											<h3><a href="#">Administrator General in 320-acre land row </a></h3>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="item-related-article">
										<div class="related-article-thumb">
											<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/single/rl2.jpg"></a>
											<ul class="featurred-cat-newday">
												<li>in: <a href="#">World </a></li>
												<li>Post by: <a href="#">admin</a></li>
											</ul>
										</div>
										<div class="related-article-info">
											<h3><a href="#">Laoreet tempus vestibulum in tortor tortor aenean</a></h3>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="item-related-article">
										<div class="related-article-thumb">
											<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/single/rl3.jpg"></a>
											<ul class="featurred-cat-newday">
												<li>in: <a href="#">World </a></li>
												<li>Post by: <a href="#">admin</a></li>
											</ul>
										</div>
										<div class="related-article-info">
											<h3><a href="#">Quis id consequat nulla tempus maecenas est lorem </a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<!-- End related -->
						<div class="single-comment-list single-comment-list2">
							<h2><span>3</span> Comment</h2>
							<ol>
								<li>
									<div class="single-comment-box">
										<div class="single-comment-thumb">
											<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/single/avar1.png"></a>
										</div>
										<div class="single-comment-info">
											<h3><a href="#">RICHARD simole</a></h3>
											<a class="single-comment-reply" href="#">Reply</a>
											<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
											<div class="single-comment-date"><span class="lnr lnr-calendar-full"></span> 12 Dec 2015</div>
										</div>
									</div>
									<ul>
										<li>
											<div class="single-comment-box">
												<div class="single-comment-thumb">
													<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/single/avar2.png"></a>
												</div>
												<div class="single-comment-info">
													<h3><a href="#">Kate Ana</a></h3>
													<a class="single-comment-reply" href="#">Reply</a>
													<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
													<div class="single-comment-date"><span class="lnr lnr-calendar-full"></span> 12 Dec 2015</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="single-comment-box">
										<div class="single-comment-thumb">
											<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/single/avar3.png"></a>
										</div>
										<div class="single-comment-info">
											<h3><a href="#">RICHARD simole</a></h3>
											<a class="single-comment-reply" href="#">Reply</a>
											<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
											<div class="single-comment-date"><span class="lnr lnr-calendar-full"></span> 12 Dec 2015</div>
										</div>
									</div>
								</li>
							</ol>
						</div>
						<!-- End Single Comment -->
						<div class="post-comment post-comment2">
							<h2>LEAVE A COMMENT</h2>
							<div class="form-comment">
								<form>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Name *" name="name">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Email *" name="email">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Website" name="website">
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<textarea onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" rows="8" cols="30" name="message">Your comment</textarea>
											<button class="submit-comment"><span data-hover="post comment">post comment</span> </button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- End Post Comment -->
						<div class="post-control2">
							<a href="#" class="prev-post"><span class="lnr lnr-arrow-left"></span> <span class="control-post-text">prev post</span></a>
							<a href="#" class="next-post"><span class="control-post-text">next post</span> <span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="sidebar-single2 sidebar-right">
							<div class="trending-box4">
								<div class="trending-box-title">
									<strong>18</strong> <span>TRENDING</span>
								</div>
								<div class="list-trending-box">
									<div class="wrap-item">
										<div class="item">
											<div class="item-trending-box">
												<h3><a href="#">1. What Now?</a></h3>
												<p>Fantasy Source: How owners can react to RG3 not starting</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren1.jpg" alt="" /></a>
													<span class="trending-comment">8</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">2. Administrator General in 320-acre land row</a></h3>
												<p>The Administrator General is em broiled in a bitter</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren2.jpg" alt="" /></a>
													<span class="trending-comment">13</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">3. Ngos hit back at Presi dent Museveni over</a></h3>
												<p>NGOs which President Yoweri Musev eni accused of funding </p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren3.jpg" alt="" /></a>
													<span class="trending-comment">2</span>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="item-trending-box">
												<h3><a href="#">4. What Now?</a></h3>
												<p>Fantasy Source: How owners can react to RG3 not starting</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren4.jpg" alt="" /></a>
													<span class="trending-comment">8</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">5. Administrator General in 320-acre land row</a></h3>
												<p>The Administrator General is em broiled in a bitter</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren5.jpg" alt="" /></a>
													<span class="trending-comment">13</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">6. Ngos hit back at Presi dent Museveni over</a></h3>
												<p>NGOs which President Yoweri Musev eni accused of funding </p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren3.jpg" alt="" /></a>
													<span class="trending-comment">2</span>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="item-trending-box">
												<h3><a href="#">7. What Now?</a></h3>
												<p>Fantasy Source: How owners can react to RG3 not starting</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren1.jpg" alt="" /></a>
													<span class="trending-comment">8</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">8. Administrator General in 320-acre land row</a></h3>
												<p>The Administrator General is em broiled in a bitter</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren3.jpg" alt="" /></a>
													<span class="trending-comment">13</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">9. Ngos hit back at Presi dent Museveni over</a></h3>
												<p>NGOs which President Yoweri Musev eni accused of funding </p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren5.jpg" alt="" /></a>
													<span class="trending-comment">2</span>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="item-trending-box">
												<h3><a href="#">10. What Now?</a></h3>
												<p>Fantasy Source: How owners can react to RG3 not starting</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren4.jpg" alt="" /></a>
													<span class="trending-comment">8</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">11. Administrator General in 320-acre land row</a></h3>
												<p>The Administrator General is em broiled in a bitter</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren2.jpg" alt="" /></a>
													<span class="trending-comment">13</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">12. Ngos hit back at Presi dent Museveni over</a></h3>
												<p>NGOs which President Yoweri Musev eni accused of funding </p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren3.jpg" alt="" /></a>
													<span class="trending-comment">2</span>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="item-trending-box">
												<h3><a href="#">13. What Now?</a></h3>
												<p>Fantasy Source: How owners can react to RG3 not starting</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren5.jpg" alt="" /></a>
													<span class="trending-comment">8</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">14. Administrator General in 320-acre land row</a></h3>
												<p>The Administrator General is em broiled in a bitter</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren4.jpg" alt="" /></a>
													<span class="trending-comment">13</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">15. Ngos hit back at Presi dent Museveni over</a></h3>
												<p>NGOs which President Yoweri Musev eni accused of funding </p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren1.jpg" alt="" /></a>
													<span class="trending-comment">2</span>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="item-trending-box">
												<h3><a href="#">16. What Now?</a></h3>
												<p>Fantasy Source: How owners can react to RG3 not starting</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren3.jpg" alt="" /></a>
													<span class="trending-comment">8</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">17. Administrator General in 320-acre land row</a></h3>
												<p>The Administrator General is em broiled in a bitter</p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren2.jpg" alt="" /></a>
													<span class="trending-comment">13</span>
												</div>
											</div>
											<div class="item-trending-box">
												<h3><a href="#">18. Ngos hit back at Presi dent Museveni over</a></h3>
												<p>NGOs which President Yoweri Musev eni accused of funding </p>
												<div class="trending-box-thumb">
													<a href="#"><img src="{{asset('assets/frontend/')}}/images/home4/tren1.jpg" alt="" /></a>
													<span class="trending-comment">2</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Trending Box -->
							<div class="newsletter4">
								<h2>newsletter</h2>
								<p>Subscribe to our email Newsletter for useful tips </p>
								<form>
									<input type="text" name="email">
									<input type="submit" value="Subscribe">
								</form>
								<p>Valuable resources. Choose your preference below...</p>
							</div>
							<!-- End Newsletter -->
							<div class="adv-weather">
								<img alt="" src="{{asset('assets/frontend/')}}/images/home4/weather.png">
							</div>
							<!-- End weather -->
							<div class="most-read-popular">
								<div class="title-most-read-tab">
									<ul role="tablist" class="nav nav-tabs">
										<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="mostread" href="#mostread">most read</a></li>
										<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="popularread" href="#popularread">popular</a></li>
									</ul>
								</div>
								<div class="content-most-read-tab">
									<!-- Tab panes -->
									<div class="tab-content">
										<div id="mostread" class="tab-pane active" role="tabpanel">
											<div class="most-read-slider">
												<div class="wrap-item owl-carousel owl-theme" style="opacity: 1; display: block;">
													<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 912px; left: 0px; display: block;"><div class="owl-item" style="width: 228px;"><div class="item">
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most1.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Police chief Kale Kayihura </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most2.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Basta is the and secret  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most3.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Kale Kayihura id addressed </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most4.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Everything you ever need  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
													</div></div><div class="owl-item" style="width: 228px;"><div class="item">
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most4.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Police chief Kale Kayihura </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most3.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Basta is the and secret  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most2.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Kale Kayihura id addressed </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most1.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Everything you ever need  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
													</div></div></div></div>
													<!-- End Item -->
													
													<!-- End Item -->
												<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><span class="lnr lnr-chevron-left"></span></div><div class="owl-next"><span class="lnr lnr-chevron-right"></span></div></div></div></div>
											</div>
											<!-- End Most Read Slider -->
										</div>
										
										<div id="popularread" class="tab-pane" role="tabpanel">
											<div class="most-read-slider">
												<div class="wrap-item owl-carousel owl-theme" style="opacity: 0; display: block;">
													<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 400px; left: 0px; display: block;"><div class="owl-item" style="width: 100px;"><div class="item">
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most4.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Police chief Kale Kayihura </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most3.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Basta is the and secret  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most2.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Kale Kayihura id addressed </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most1.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Everything you ever need  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
													</div></div><div class="owl-item" style="width: 100px;"><div class="item">
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most1.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Police chief Kale Kayihura </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most2.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Basta is the and secret  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most3.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Kale Kayihura id addressed </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
														<div class="item-most-read clearfix">
															<div class="most-read-thumb">
																<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/most4.jpg"></a>
															</div>
															<div class="most-read-info">
																<h3><a href="#">Everything you ever need  </a></h3>
																<span class="most-read-date"><span class="lnr lnr-clock"></span> 12 Jun 2016</span>
															</div>
														</div>
													</div></div></div></div>
													<!-- End Item -->
													
													<!-- End Item -->
												<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><span class="lnr lnr-chevron-left"></span></div><div class="owl-next"><span class="lnr lnr-chevron-right"></span></div></div></div></div>
											</div>
											<!-- End Most Read Slider -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Most Popular -->
							<div class="adv-shop-online">
								<a href="#"><img alt="" src="{{asset('assets/frontend/')}}/images/home4/ad22.jpg"></a>
							</div>
							<!-- End Shop Online -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Content Home -->
		</div>
	</div>
@stop

@section('footer')

@stop