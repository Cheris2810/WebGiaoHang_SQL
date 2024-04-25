<!DOCTYPE html>
<head>
<title>Đơn vị vận chuyển | Quản lý</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="{{asset('public/fontend/img/logo/logo.png')}}" type="image/x-icon/">
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
 <link href="{{asset('public/backend/css/minimal.css')}}" rel="stylesheet">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
</head>

<style>
  html {
    background:white;
  }
</style>

<body>
<section id="main-content" style="background: white; margin-left:0rem">
  <section class="wrapper">
    <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     ĐƠN HÀNG
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
       <!--  <thead>
          <tr>
            <th>Tên người gửi</th>
            <th>Tên người nhận</th>
            <th>Chi nhánh đặt hàng</th>
            <th data-breakpoints="xs">Loại hàng</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Gía tiền</th>
          </tr>
        </thead> -->
        <!-- <thead>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </thead> -->
        <tbody>
          <tr data-expanded="true">
            <td>Họ tên người gửi:</td>
            <td>Nhi</td>
            <!--<td>Fuhrman</td>
            <td>High School History Teacher</td>
            
            <td>July 25th 1960</td> -->
          </tr>
          <tr>
            <td>Di động:</td>
            <td>0912345678</td>
            <!-- <td>Weisz</td>
            <td>Wallpaperer Helper</td>
          
            <td>March 30th 1982</td> -->
          </tr>
          <tr>
            <td>Họ tên người nhận:</td>
            <td>Uyên</td>
            <!-- <td>Haner</td>
            <td>Internal Medicine Nurse Practitioner</td>
           
            <td>February 26th 1966</td> -->
          </tr>
          <tr>
            <td>Di động:</td>
            <td>0923456789</td>
           <!--  <td>Landa</td>
            <td>Offbearer</td>
           
            <td>March 29th 1966</td> -->
          </tr>
          <tr>
            <td>Địa chỉ:</td>
            <td>155 Nguyễn Tri Phương,Ninh Kiều, Cần Thơ </td>
            <!-- <td>Bittinger</td>
            <td>Roller Skater</td>
           
            <td>September 22nd 1964</td> -->
          </tr>
          <tr>
            <td>Chi nhánh:</td>
            <td>Ninh Kiều, Cần Thơ</td>
           <!--  <td>Lewis</td>
            <td>Clown</td>
           
            <td>August 4th 1991</td> -->
          </tr>
          <tr>
            <td>Phân loại:</td>
            <td>Tài liệu</td>
            <!-- <td>Leak</td>
            <td>Ships Electronic Warfare Officer</td>
          
            <td>November 20th 1979</td> -->
          </tr>
          <tr>
            <td>Tổng phí:</td>
            <td>20.000VNĐ</td>
           <!--  <td>Cooke</td>
            <td>Technical Services Librarian</td>
           
            <td>April 7th 1969</td> -->
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  </section>

  <div class="d-grid gap-2 col-6 mx-auto mt-5" style="justify-content: center;">
                    <a href="{{URL::to('/dathang')}}" style="margin-left:10rem"><button onclick="return" class="btn btn-primary" type="button" style="width:25rem">Quay về</button></a>
  </div>

<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>

</body>
<html>
