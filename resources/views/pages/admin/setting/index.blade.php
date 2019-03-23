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

                <form id="form_setting" action="{{ url('/admin/setting/update') }}" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}
                    
                    <!-- <div class="form-group">
                        <label>Logo</label>
                        <input name="image" type="text" size="48" class="form-control" id="xFilePath" />
                        <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                    </div> -->

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" value="{{ $setting->email }}" class="form-control" placeholder="Địa chỉ email...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Hotline</label>
                        <input type="text" name="hotline" value="{{ $setting->hotline }}" class="form-control" placeholder="Hotline...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" value="{{ $setting->address }}" class="form-control" placeholder="Địa chỉ...">
                    </div>

                    <div class="form-group">
                        <label>Facebook Pixel Code</label>
                        <textarea style="height: 100px;" name="fb_pixel_code" class="form-control" placeholder="Facebook Pixel Code...">{{ $setting->fb_pixel_code }}</textarea>
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
    <script type="text/javascript">
        function openPopup() {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById( 'xFilePath' ).value = file.getUrl();
                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
        
        function openPopupMulti(id) {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById( 'xFilePath'+id ).value = file.getUrl();
                    });
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( 'xFilePath'+id ).value = evt.data.resizedUrl;
                    });
                }
            });
        }

        var i = 1;
        function add_img(){
            i++;
            var insert = '<p class="item-img add_'+i+'" style="margin:3px 0; height: 40px; padding:0;"><span style="display:block;"><input type="text" size="48" class="form-control list-img" name="image_list[]" id="xFilePath'+i+'" /><button class="btn btn-primary btn-upload-multi" onclick="openPopupMulti('+i+')">Tải ảnh lên</button><button onclick="del_accads('+i+');" type="button" class="btn btn-primary">Xóa</button></span></p>';
            $(insert).appendTo('.box-img');
        }
        
        function del_accads(id){
            $('.add_'+id).remove(); 
        }
    </script>
@stop
