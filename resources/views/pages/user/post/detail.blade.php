@extends('layouts.user.master')

@section('page'){{ $data->full_name }} - {{ $cate->name }}
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical'){{ URL::current() }}
@stop

@section('alternate'){{ URL::current() }}
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')
    
@stop

@section('content')
    <div class="wrapper">
        <div class="box-button pd-t-50 pd-b-50">
            <div class="container txt-center">
                <h3 class="label-list">{{ $parent->name }} - {{ $cate->name }}</h3>
                <div class="description wfm">
                    {{ $cate->description }}
                </div>
            </div>
        </div>

        <div class="pd-t-30">
            <div class="container pd-m-0">
                <div class="col-lg-4 col-xs-12">
                    <div class="img-detail img-effect">
                        <figure><img alt="{{ $data->full_name }}" src="{{ $data->avatar }}" /></figure>
                    </div>
                </div>
                <div class="col-lg-8 col-xs-12">
                    <div class="info-detail">
                        <h3 class="fullname">{{ $data->full_name }}</h3>
                        <div class="position">
                            <p>{{ $data->intro }}</p>
                            <span class="label-vote"><strong>Lượt bình chọn:</strong> {{ number_format($data->total_vote,"0","",",") }}</span>
                        </div>
                        <div class="desc-detail">
                            <h4 class="label-tt">thành tích đã đạt được</h4>
                            <div class="content-detail">
                                {!! $data->content !!}
                            </div>
                        </div>
                    </div>
                    <a class="btn-back transition" onclick="window.history.back();">Quay lại</a>
                    
                    @if($data->vote_today == 0)
                        <a class="btn-vote-detail transition" onclick="vote({{ $data->id }});">Bình chọn</a>
                    @else
                        <a class="btn-vote-item transition active-vote-detail">Đã bình chọn &nbsp<img src="{{ asset('frontend/images/active.png') }}" /></a>
                    @endif
                </div>
            </div>
        </div>

        <div class="box-button mg-t-50 pd-t-30 pd-b-20">
            <div class="container txt-center">
                <h3>Bình chọn ngay cho những gương mặt tiêu biểu đến từ các khối, phòng ban</h3>
                <?php $i = 0; ?>
                @foreach ($categories as $cate)
                    <?php $i++; ?>
                    <div class="box-btn-vote">
                        <a class="btn-vote btn-vote-2 wfm transition" onclick="open_group({{ $i }});">{{ $cate['name'] }}</a>
                    @if (isset($cate['childrens']))
                        <ul class="list-child list-{{ $i }} transition">
                            @foreach ($cate['childrens'] as $child)
                                <li><a class="transition" href="/{{ $child['slug'] }}">{{ $child['name'] }}</a></li>
                            @endforeach
                        </ul>
                    @else
                    <a class="btn-vote btn-vote-2 wfm transition" onclick="open_group({{ $i }});">{{ $cate['name'] }}</a>
                    @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('frontend/images/success.png') }}" />
                    <p class="reg-success">bình chọn thành công</p>
                    <p class="name-success"></p>
                    <p class="position-success"></p>
                    <a class="btn-back transition" href="{{ url('/') }}">quay về trang chủ</a>
                    <a class="btn-vote-detail transition" onclick="location.reload();">tiếp tục bình chọn</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pageJs')
    <script type="text/javascript">
        function vote(id){
            $.ajax({
                type:'POST',
                url:'/vote',
                data:{
                    _token: "{{ csrf_token() }}",
                    user: 3,
                    vote: id
                },
                success: function(response) {
                    if (response.status) {
                        $('#myModal').modal('show');
                        $('.name-success').html(response.name);
                        $('.position-success').html(response.position);
                    } else {
                        console.log('false');
                        // console.log(response.message);
                    }
                }
            });
        }
    </script>
@stop