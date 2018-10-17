@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="Download Brosur LP3I Pondok gede| {{getOption('site_title')}}" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="{{url('/')}}{{getOption('site_og_image')}}" />
    <meta name="description" content="" />
@stop
@section('content')

@section('title')
Download brosur | {{getOption('site_title')}}
@stop

@section('content')
<div id="content">
		<div class="contact-page">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="{{asset('assets/frontend/images/banner-downloadbrosur.jpg')}}" alt="">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="contact-form-page contact-form-page-light">
							<h2>Formulir Download Brosur LP3I Pondok Gede</h2>
							<form>
								<p><input type="text" placeholder="Nama"></p>
								<p><input type="text" placeholder="Email"></p>
								<p><input type="text" placeholder="Telpon"></p>
								<p><input type="submit" value="Download">
							</p></form>
						</div>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
@stop

@section('footer')

@stop