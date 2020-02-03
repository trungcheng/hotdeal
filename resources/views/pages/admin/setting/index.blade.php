@extends('layouts.admin.master')

@section('page')Cấu hình chung
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cấu hình chung
            <!-- <small>Optional description</small> -->
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif

                <form id="form_setting" action="{{ url('/admin/access/setting/update') }}" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}
                    
                    <!-- <div class="form-group">
                        <label>Logo</label>
                        <input name="image" type="text" size="48" class="form-control" id="xFilePath" />
                        <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                    </div> -->

                    <div class="form-group">
                        <label class="control-label">Tên công ty</label>
                        <input type="text" name="name" value="{{ ($setting != '') ? $setting->name : '' }}" class="form-control" placeholder="Tên công ty...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Slogan</label>
                        <input type="text" name="slogan" value="{{ ($setting != '') ? $setting->slogan : '' }}" class="form-control" placeholder="Slogan...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" value="{{ ($setting != '') ? $setting->email : '' }}" class="form-control" placeholder="Địa chỉ email...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Điện thoại</label>
                        <input type="text" name="phone" value="{{ ($setting != '') ? $setting->phone : '' }}" class="form-control" placeholder="Điện thoại...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" value="{{ ($setting != '') ? $setting->address : '' }}" class="form-control" placeholder="Địa chỉ...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Giờ làm việc</label>
                        <input type="text" name="time_work" value="{{ ($setting != '') ? $setting->time_work : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label>Facebook Pixel Code</label>
                        <textarea style="height: 100px;" name="fb_pixel_code" class="form-control" placeholder="Facebook Pixel Code...">{{ ($setting != '') ? $setting->fb_pixel_code : '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Title</label>
                        <input value="{{ ($setting != '') ? $setting->seo_title : '' }}" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                    </div>
                    <div class="form-group">
                        <label>SEO Description</label>
                        <input value="{{ ($setting != '') ? $setting->seo_desc : '' }}" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                    </div>
                    <div class="form-group">
                        <label>SEO Keyword</label>
                        <input value="{{ ($setting != '') ? $setting->seo_keyword : '' }}" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                    </div>

                    <div class="form-group">
                        <button style="float:right;margin-left:5px;" type="reset" class="btn btn-default">Đóng</button>
                        <button style="float:right" type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>

                </form>

            </div>
        </div>

    </section>
@stop

@section('pageJs')

@stop
