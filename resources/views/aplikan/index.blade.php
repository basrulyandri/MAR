@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Aplikan Terbaru
@stop

@section('content')
  	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Aplikan</h2>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="{{route('aplikan.index')}}">Aplikan Terbaru</a>
                </li>                
            </ol>
        </div>
        <div class="col-sm-8">
            
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
            @if(auth()->user()->hasReachLimitTakeAplikanPerDay())
                <div class="alert alert-warning"><i class="fa fa-warning"></i> Jumlah take anda hari ini sudah mencapai maksimal. Tips: jika anda ingin take aplikan, silahkan release aplikan terlebih dahulu.</div>
            @endif
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Aplikan Terbaru</h5>
                        <div class="ibox-tools">
                            @if(getOption('is_presenter_can_take_aplikan') == 0 && auth()->user()->isPresenter())
                                <span><i class="fa fa-exclamation"></i> Hubungi Koordinator untuk mengklaim aplikan anda</span>
                            @endif
                           </div>
                    </div>
                    <div class="ibox-content">

                        <div>
                            <div class="feed-activity-list">
                                @foreach($aplikan as $apl)                                
                                <div class="feed-element">
                                    <a href="#" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{url('assets/backend/img')}}/default.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">
                                            @if(getOption('is_presenter_can_take_aplikan') == 1 && auth()->user()->isPresenter())
                                            <button idaplikan="{{$apl->id}}" class="btn btn-xs btn-success take{{(auth()->user()->hasReachLimitTakeAplikanPerDay() ? ' disabled' : '')}}"><i class="fa fa-thumbs-up"></i> Take </button>
                                            @endif

                                            @if(getOption('is_presenter_can_take_aplikan') == 0 && auth()->user()->isKoordinatorPresenter())
                                                    {!!Form::select('user_id',$presentersList,old('user_id'),['class' => 'form-control givento','aplikan_id' => $apl->id])!!}
                                                    <br>
                                                    <button idaplikan="{{$apl->id}}" class="btn btn-xs btn-success take{{(auth()->user()->hasReachLimitTakeAplikanPerDay() ? ' disabled' : '')}}"><i class="fa fa-thumbs-up"></i> Take </button>
                                            @endif


                                        </small>
                                        <strong><a href="{{route('aplikan.detail',$apl)}}">{{$apl->nama}}</a></strong> sumber informasi dari <strong>{{$apl->sumberInformasi()}}</strong>. <br>
                                        <small class="text-muted">{{$apl->alamatLengkap()}}</small>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="well">
                                                    <p>Pilihan Jurusan: {{$apl->konsentrasi->nama}}</p>
                                                    <p>Alamat: {{$apl->alamat}}</p>
                                                    @if(getOption('is_presenter_can_take_aplikan') == 0 && auth()->user()->isKoordinatorPresenter())
                                                    <p>Email: {{$apl->email}}</p>
                                                    <p>Telp: {{$apl->telpon}}</p>
                                                    @endif
                                                </div>                                            
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled project-files">
                                                    <li><i class="fa fa-clock-o text-{{($apl->isFresh() ? 'info': 'warning')}}"></i> {{$apl->tanggal_daftar->diffForHumans()}}</a></li>
                                                    @if($apl->hasBeenTakenBefore())
                                                        <li><i class="fa fa-frown-o text-warning"></i> Sudah Pernah di Take</li>
                                                    @else
                                                        <li><i class="fa fa-smile-o text-info"></i> Belum Pernah di Take</li>
                                                    @endif
                                                    <li><i class="fa fa-circle"></i> {{$apl->jmlFollowedUp() >= 1 ? $apl->jmlFollowedUp().' Kali di follow up' : 'Blm di follow up'}}</li>
                                                    <li><i class="fa fa-circle"></i> {{$apl->jmlDilayani() >= 1 ? $apl->jmlDilayani().' Kali di layani' : 'Blm pernah di layani'}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="actions">                                            
                                        </div>
                                    </div>
                                </div>                   
                                @endforeach             
                            </div>
                            {{$links}}                            

                        </div>

                    </div>
                </div>
            </div>          
        </div>
	</div>
@stop

@section('footer')
    <script>
        $(document).ready(function(){
            $('.take').click(function(){
                var el = $(this);
                var idaplikan = el.attr('idaplikan');
                var _token = '{{Session::token()}}';
                el.html('<i class="fa fa-spinner fa-spin"></i> Loading')
                $.ajax({
                  method:'POST',
                  url:'{{route('ajax.aplikan.take')}}',
                  data:{_token:_token,idaplikan:idaplikan}
                }).success(function(data){
                    console.log(data);
                    if(data.status == 'success'){
                        el.closest('.feed-element').hide('slow',function(){
                            el.remove();
                        });
                        toastr.success('Aplikan berhasil di take !');     
                    } else {
                        el.html('<i class="fa fa-thumbs-up"></i> Take');
                        toastr.error('Jumlah take aplikan hari ini sudah maksimal.','Gagal !');
                    }
                });              

            });

            $('.givento').change(function(){
                var el = $(this);
                var aplikan_id = $(this).attr('aplikan_id');
                var user_id = $(this).val();
                var _token = '{{Session::token()}}';
                $.ajax({
                  method:'POST',
                  url:'{{route('ajax.aplikan.givento')}}',
                  data:{_token:_token,aplikan_id:aplikan_id,user_id:user_id}
                }).success(function(data){
                    console.log(data);
                    if(data.status == 'success'){
                        el.closest('.feed-element').hide('slow',function(){
                            el.remove();
                        });
                        toastr.success('Aplikan berhasil di teruskan ke presenter!');     
                    }
                });              
            });
        });
    </script>
@endsection
