@extends('layouts.backend.master')
@section('title')
    Dashboard
@stop
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard.index')}}">Dashboard</a>
                </li>                
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">                
                    <strong>Link Referral anda : </strong> 
                    @if(auth()->user()->isPresenter() || auth()->user()->isKoordinatorPresenter())               
                        <a target="_blank" href="{{route('page.index',['psr' => auth()->user()->id])}}">{{route('page.index',['psr' => auth()->user()->id])}}</a>
                        
                    

                    @else(auth()->user()->isReferrer())                
                        <a target="_blank" href="{{route('page.index',['sin' => auth()->user()->id])}}">{{route('page.index',['sin' => auth()->user()->id])}}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if(auth()->user()->isAdmin())
        @include('includes.dashboardadmin')
    @endif

    @if(auth()->user()->isPresenter() || auth()->user()->isKoordinatorPresenter())
        @include('includes.dashboardpresenter')
    @endif

    @if(auth()->user()->isReferrer())
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">                                
                                <a href="{{route('aplikan.referensi.saya')}}"><h5>Aplikan Referensi saya</h5></a>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{auth()->user()->references()->count()}}</h1>
                                <small>Orang</small>
                            </div>
                        </div>
                    </div>                
                    <div class="col-lg-2">

                    </div>   

                    <div class="col-lg-8">
                    <h3>Bahan untuk Share</h3>
                    @foreach(pages() as $page)
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">                     
                                    <div>
                                        <div class="ibox-content no-padding border-left-right">
                                            <img alt="image" style="width: 100%;margin-top: 0;" class="img-responsive" src="{{url('/').$page->thumbnail()}}">
                                            <div class="ibox-content profile-content">
                                            <h4 style="font-family: Tahoma,Verdana,Segoe,sans-serif;"><strong>{{$page->title}}</strong></h4>
                                            <p>{{$page->excerpt}}</p>
                                            <a href="https://www.facebook.com/sharer.php?u={{route('page.single',['slug' => $page->slug,'sin' => $page->user_id])}}" class="fb-share btn btn-success btn-facebook">
                                                <i class="fa fa-facebook"> </i> Share On Facebook
                                            </a>
                                        </div>    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    @endif
@stop

@section('footer')
<script>
    $(document).ready(function() {
        $('.fb-share').click(function(e) {
            e.preventDefault();
            window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
            return false;
        });
    });
</script>
@stop