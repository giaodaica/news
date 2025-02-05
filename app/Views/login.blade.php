@section('title')
Đăng Nhập
@endsection
<style>
    input{
        width: 400px !important;
    }
    form{
        padding-left: 500px;
        padding-top: 100px;
    }
</style>
@extends('layout')
@section('content')
<div class="site-section-cover overlay" style="background-image: url('images/hero_bg.jpg');">

  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10 text-center">
        <h1><strong>About The Company</strong></h1>
      </div>
    </div>
  </div>
</div>

<form action="" class="">
    <h1>Đăng Nhập</h1>
    <div class="form-group">
      <label for="">Tài khoản</label>
      <input type="text" name="" id="" class="form-control" placeholder="nhap ten tai khoan" aria-describedby="helpId">
      <small id="helpId" class="text-muted"></small>
    </div>

    <div class="form-group">
      <label for="">Mật Khẩu</label>
      <input type="text" name="" id="" class="form-control" placeholder="nhap mat khau" aria-describedby="helpId">
      <small id="helpId" class="text-muted"></small>
    </div>

    <div class="form-group">
      <label for="">Xác Nhận Mật Khẩu</label>
      <input type="text" name="" id="" class="form-control" placeholder="nhap mat khau" aria-describedby="helpId">
      <small id="helpId" class="text-muted"></small>
    </div>
    <button class="btn btn-primary">Đăng nhập</button>
</form>
@endsection