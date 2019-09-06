@extends('layouts.admin.master')

@section('page')Profile
@stop

@section('pageCss')
    <style type="text/css">
        .alert {
            width: 50%;
            height: 40px;
            text-align: center;
            margin: 0 auto;
            position: absolute;
            top: 15px;
            left: 26.3%;
            line-height: 9px;
        }
        .alert ul li {
            list-style: none;
        }
    </style>
@stop

@section('content')
    <section class="content-header" style="padding-top:30px;">
      <h1>
        Profile
      </h1>
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
            <p class="alert alert-success">Cập nhật thành công</p>
        @endif
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('components/admin-lte/dist/img/user2-160x160.jpg') }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ ($authAdminUser->full_name) ? $authAdminUser->full_name : $authAdminUser->username }}</h3>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#setting" data-toggle="tab">Thông tin</a></li>
              <li><a href="#change-pass" data-toggle="tab">Đổi mật khẩu</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="setting">
                <form class="form-horizontal" method="post" action="{{ route('profile') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $user->id }}">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input value="{{ $user->username }}" disabled type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input value="{{ $user->email }}" disabled type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Họ tên</label>

                    <div class="col-sm-10">
                      <input value="{{ $user->full_name }}" type="text" name="full_name" class="form-control" placeholder="Họ tên">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="change-pass">
                <form class="form-horizontal" method="post" action="{{ route('change-pass') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $user->id }}">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Mật khẩu mới</label>

                    <div class="col-sm-9">
                      <input type="password" name="password" class="form-control" placeholder="Mật khẩu mới">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Xác nhận mật khẩu mới</label>

                    <div class="col-sm-9">
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu mới">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
@stop

@section('pageJs')
    <script type="text/javascript">
        $('.alert').delay(3000).fadeOut();
    </script>
@stop
