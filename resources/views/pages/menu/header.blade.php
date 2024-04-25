<!DOCTYPE html>
<html>
<head>
<title>Đơn vị vận chuyển | @yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
<link rel="icon" href="{{asset('public/fontend/img/logo/logo.png')}}" type="image/x-icon/">
<style>
html {background:linear-gradient(#FF4500,#FFA500)}
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif;
                        font-weight:bolder;
                        color: white;

}
.w3-bar-block .w3-bar-item {padding:20px}

</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:10%;min-width:100px; background-color:#FF4500; color:white" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Đóng Menu</a>
  <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">Dịch vụ</a>
  <a href="#blog" onclick="w3_close()" class="w3-bar-item w3-button">Tin tức</a>
  <a href="#map" onclick="w3_close()" class="w3-bar-item w3-button">Định vị</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Liên hệ</a>
</nav>

<!-- Top menu -->
<div class="w3-top" style="background-color:#FF4500; color:white;">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()" style="background-color:#FF4500; color:white;">☰</div>
    <!-- <div class="w3-right w3-padding-16">Log out</div> -->
    <a href="{{URL::to('/loginadmin')}}"class="w3-right w3-padding-16" style="background-color:#FF4500; color:white;">Đăng xuất</a>
    <div class="w3-center w3-padding-16" style="background-color:#FF4500; color:white;">Đơn vị vận chuyển</div>
  </div>
</div>


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>

@yield('header')