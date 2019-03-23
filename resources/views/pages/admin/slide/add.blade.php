@extends('layouts.admin.master')

@section('page')Thêm mới slide
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="SlideController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới slide
            <a href="{{ route('slides') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input name="title" type="text" class="form-control slug" placeholder="Tiêu đề...">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                	<label>Loại đối tượng</label>
                                	<select id="target_type" name="target_type" class="form-control">
                                		<option value="product">Sản phẩm</option>
                                		<option value="article">Bài viết</option>
                                	</select>
                                </div>
                                <div class="form-group">
                                	<label>Đối tượng</label>
                                	<select id="target" name="target" class="form-control">
                                		@if (count($products) > 0)
	                                		@foreach ($products as $key => $pro)
	                                			<option value="{{ $pro->id }}">{{ $pro->name }}</option>
	                                		@endforeach
                                		@else
                                			<option value="">Không có đối tượng nào</option>
                                		@endif
                                	</select>
                                </div>
                                <div class="form-group">
                                	<label>Hiển thị</label>
                                	<select name="status" class="form-control">
                                		<option value="1">Có</option>
                                		<option value="0">Không</option>
                                	</select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('add')" type="button" class="btn btn-primary">Thêm</button>
                                <a href="{{ route('slides') }}" class="btn btn-default">Quay lại</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>

</div>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/slide.controller.js') !!}
    <script type="text/javascript">
	    function openPopup() {
	        CKFinder.popup({
	            chooseFiles: true,
	            onInit: function( finder ) {
	                finder.on( 'files:choose', function( evt ) {
	                    var file = evt.data.files.first();
	                    document.getElementById( 'xFilePath' ).value = file.getUrl();
	                } );
	                finder.on( 'file:choose:resizedImage', function( evt ) {
	                    document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
	                });
	            }
	        });
	    }
	    
	    function openPopupMulti(id) {
	        CKFinder.popup({
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

	    $(document).on('change', '#target_type', function () {
	    	$.get('/admin/slides/loadObject/' + $(this).val(), function (res) {
				var html = '';
				if (res.length > 0) {
					$.each(res, function (i, obj) {
						html += '<option value="'+obj.id+'">'+obj.name+'</option>';
					});		
				} else {
					html += '<option value="">Không có đối tượng nào</option>';
				}
				$('#target').html(html);
	    	});
	    });
	</script>
@stop
