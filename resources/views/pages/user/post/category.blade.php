@extends('layouts.user.master')

@section('page') {{ $cate->name }}
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
        <h3 class="label-list">{{ $cate->name }}</h3>
        <div class="description wfm">
          {{ $cate->description }}
        </div>
      </div>
    </div>

    <div class="pd-t-30">
      <div class="container pd-m-0">
        @foreach($data as $item)
          <div class="col-lg-4 col-xs-12">
            <div class="item mg-b-50">
              <div class="img-item img-effect">
                <figure><img alt="{{ $item->full_name }}" src="{{ $item->avatar }}" /></figure>
              </div>
              <div class="info">
                <a href="/{{ $item->id }}">{{ $item->full_name }}</a>
                <div class="desc-item">
                  {{ $item->intro }}
                </div>
              </div>
              <div class="btn-item">
                <a class="btn-detail transition" href="/{{ $item->id }}">Chi tiết</a>
                <a class="btn-vote-item transition" onclick="vote({{ $item->id }})">Bình chọn</a>
              </div>
              <p class="total-vote">{{ number_format($item->total_vote,"0","",",") }} lượt bình chọn</p>
            </div>
          </div>
        @endforeach
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
@stop

@section('pageJs')
@stop