<!DOCTYPE html>
<html>
<head>
<title>Đơn vị vận chuyển</title>
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
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1300px;margin-top:60px;margin-left:9em">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="service" >
    <div class="w3-quarter">
      <a href="#khaivi"><img src="{{asset('public/fontend/img/tailieu/shiptailieu.png')}}" alt="Sandwich" style="width:130%"></a>
        <h3 style="margin-left:-1rem;margin-right:-6rem">Chuyển phát nhanh hàng hóa, tài liệu</h3>
        <p style="margin-left:1rem;margin-right:-5rem">Là dịch vụ nhận gửi, vận chuyển và phát các loại thư, tài liệu, thư từ trong nước theo chỉ tiêu thời gian tiêu chuẩn. Không áp dụng với các đơn hàng có thu hộ COD.</p>
      
    </div>
    <div class="w3-quarter">
      <a href="#monchinh"><img src="{{asset('public/fontend/img/giaohoatoc/hoatoc.png')}}" style="width:130%;margin-left:8rem"></a>
      <h3 style="margin-left:10rem;margin-right:-11rem">Chuyển phát hoả tốc, hẹn giờ</h3>
      <p style="margin-left:8rem;margin-right:-14rem">Là dịch vụ nhận gửi, vận chuyển và phát nhanh chứng từ hàng hóa, vật phẩm có thứ tự ưu tiên cao nhất trong các dịch vụ chuyển phát với chỉ tiêu thời gian toàn trình không quá 24 giờ.</p>
    </div>
    <div class="w3-quarter">
      <a href="{{URL::to('/dathang')}}"><img src="{{asset('public/fontend/img/ghtietkiem/shiptietkiem.png')}}" alt="Cherries" style="width:130%;margin-left:16rem"></a>
      <h3 style="margin-left:18rem;margin-right:-19rem">Chuyển phát tiết kiệm</h3>
      <p style="margin-left:16rem;margin-right:-23rem"> là dịch vụ nhận gửi, vận chuyển và phát các loại hàng hóa, bưu phẩm, bưu kiện trong nước, không giới hạn mức trọng lượng, theo chỉ tiêu thời gian tiêu chuẩn, giá cước hợp lý. Bảng giá không áp dụng với các đơn hàng có thu […]</p>
      <!-- <p style="margin-left:18rem;margin-right:-19rem">What else?</p> -->
    </div>

  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <a href="#douong"><img src="{{asset('public/fontend/img/tmdt/dientu.png')}}" alt="Popsicle" style="width:130%"></a>
      <h3 style="margin-left:0rem;margin-right:-4rem">Chuyển phát thương mại điện tử</h3>
      <p style="margin-left:0rem;margin-right:-5rem">là dịch vụ giao hàng thu tiền, nhận gửi, vận chuyển hàng hóa, vật phẩm với thời gian tối ưu, áp dụng cho khách hàng kinh doanh online và offline trên toàn quốc. Dịch vụ cung cấp nhiều ưu đãi liên quan đến phí thu […]</p>
    </div>
    <div class="w3-quarter">
      <a href="#ruouvang"><img src="{{asset('public/fontend/img/quanly/chatluong.png')}}" alt="Salmon" style="width:130%;margin-left:8rem"></a>
      <h3 style="margin-left:10rem;margin-right:-11rem">Quản lý chất lượng phục vụ</h3>
      <p style="margin-left:8rem;margin-right:-14rem"> là nguyên tắc bồi thường thiệt hại, qui trình giải quyết khiếu nại, quy định hàng cấm gửi,[…]</p>
    </div>
    <div class="w3-quarter">
      <a href="#trangmieng"><img src="{{asset('public/fontend/img/vcquocte/quocte.png')}}" alt="Sandwich" style="width:130%;margin-left:16rem"></a>
      <h3 style="margin-left:18rem;margin-right:-19rem">Chuyển phát quốc tế</h3>
      <p style="margin-left:16rem;margin-right:-23rem">Là dịch vụ chuyển phát hàng hóa ngoài nước. Bao gồm chuyển phát quốc tế DHL, chuyển phát quốc tế nhanh (VQN), dịch vụ thông quan quốc tế chiều về.</p>
    </div>
 
  </div>

 
  
  <hr id="blog">


          
  <!-- About Section -->
 <div class="w3-container w3-padding-32 w3-center">  
    <h3>Tin tức</h3><br>
      <section class="blog-sec">
        <div class="blog-content" >
            <div class="blog-1"  id="blog1" style="border:1px solid;margin-left: 14rem; margin-right: 14rem; border-radius: 100px; background-color: white;">
              <a href="{{URL::to('/blog')}}"><img src="{{asset('public/fontend/img/blog/1.png')}}" height="400" width="800" style="border-radius: 100px;"></a>
              <h1 style="color:black">Đa dạng hình thức vận chuyển</h1>
              <h4 style="color:black">💗 Khách hàng tùy chọn phương thức vận chuyển một cách dễ dàng, thoải mái. <br>
              Rất vui vì sự tin tưởng của khách hàng!!!</h4>
            </div>
            
            Pagination  -->
              <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                  <a href="#blog1" class="w3-bar-item w3-black w3-button">1</a>
                  <a href="#blog2" class="w3-bar-item w3-button w3-hover-black">2</a>
                  <a href="#blog3" class="w3-bar-item w3-button w3-hover-black">3</a>
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
                </div>
              </div> 
        </div>
      </section>

  </div> 

  <hr id="map">
    <div class="w3-container w3-padding-32 w3-center">  
      <!-- <h3>Định vị</h3><br> -->
      <!-- <img src="/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="300"> -->
      <div class="w3-padding-32">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.680964354919!2d105.76043229372429!3d10.043163464446554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08955077eb451%3A0x7fc3cd3f0df119c6!2zVmlldHRlbCBQb3N0IEFuIEjDsmEgLSBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1712637061071!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15715.733586597586!2d105.77034014626685!3d10.02235508269091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zdmlldHRlbHBvc3QgY-G6p24gdGjGoQ!5e0!3m2!1svi!2s!4v1714028339459!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>

  <br>
  <br>
  <br>
  <hr id="contact">
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>Liên hệ</h3>
      <p>(+84)2 3456 4567</p>
      <p>Nhom 02</p>
    </div>
  
    <div class="w3-third">
      <h3>Tin tức</h3>
      <!-- <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul> -->
    </div>

    <div class="w3-third w3-serif">
      <h3>Địa chỉ</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">An Hoa</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ninh Kieu</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Can Tho</span>  
      </p>
    </div>
  </footer>

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
