
@extends('pages.menu.header')
@extends('pages.menu.footer')
@section('title','Tin tức')
@section('header')

<link rel="icon" href="{{asset('public/fontend/img/logo/logo.png')}}" type="image/x-icon/">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/styleblog.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body {
background:linear-gradient(#FF4500,#FFA500)
}
</style>

</head>
<body>
  
<!-- !PAGE CONTENT! -->

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px;margin-left: 350px;">
    <a style="display: scroll; position: fixed; bottom: 3px; right: 7px;" title="Back to Top" href="{{URL::to('/home')}}"><i class="fas fa-undo-alt" style="width: 50px;"></i></a>
  <!-- First Photo Grid-->
  <div class=" w3-row-padding w3-padding-16 w3-center" id="ship">
    <div class="tin w3-quarter ">
  <img src="https://file.hstatic.net/200000472237/file/ship-2-chieu-dam-bao-quyen-loi-nguoi-mua-va-nguoi-ban_f8d859c619da4eef9e0de86acf0dbdc3_grande.png" alt="ship hàng" width="230" height="150" class="w3-hover-opacity">
  <font color="#FFFFFF">
      <h3><b>Ship hàng và những điều cần biết</b></h3>
      <p>Ship hàng là một cụm từ khá quen thuộc với các chủ shop kinh doanh online. Tuy nhiên để hiểu rõ ship giao hàng là gì và nên lựa chọn hình thức nào tốt thì chắc hẳn không phải ai cũng biết. Trong bài viết dưới đây, chúng tôi sẽ hỗ trợ shop giải đáp thông tin trên!</p>
     <a href=" shiphang.html " style="color: blue;" target="_blank"> Xem thêm</a>
   
    </font>
    </div>
    <div class="tin w3-quarter">
      <img src="https://dichvubocxepdainam.com/wp-content/uploads/2020/12/shipper-la-gi.jpg" alt="dịch vụ giao hàng" width="230" height="150" class="w3-hover-opacity">
    <font color="#FFFFFF">
      <h3><b>TOP 7 dịch vụ giao hàng nhanh uy tín</b></h3>
      <p>Hiện tại, thị trường có rất nhiều các dịch vụ giao hàng uy tín mà các shop online có thể sử dụng. Mỗi dịch vụ có một số điểm khác nhau về thời gian giao hàng, chi phí giao hàng,... Dưới đây là top 7 dịch vụ giao hàng nhanh uy tín mà shop online có thể tin dùng.</p>
    <a href=" top7.html " style="color: blue;" target="_blank"> Xem thêm</a>
    </font>
    </div>
    <div class="tin w3-quarter">
      <img src="https://dichvubocxepdainam.com/wp-content/uploads/2020/12/shipper-la-gi-33.jpg" alt="shipper" width="230" height="150" class="w3-hover-opacity">
    <font color="#FFFFFF">
      <h3><b>Shipper là gì & những điều cần biết</b></h3>
      <p>Shipper là gì? Chắc hẳn bạn nghe tới cụm từ này khá nhiều song vẫn chưa nắm bắt được cụ thể những thông tin có liên quan tới ngành nghề này. Nếu bạn muốn tìm kiếm câu trả lời hãy cùng tham khảo và tìm hiểu thêm thông tin cung cấp dưới đây.</p>
    <a href=" shipper.html " style="color: blue;" target="_blank"> Xem thêm</a>
    </font>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class=" w3-row-padding w3-padding-16 w3-center">
    <div class="tin w3-quarter">
      <img src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2015/06/FREESHIP.png" alt="3 lưu ý" width="230" height="150" class="w3-hover-opacity">
    <font color="#FFFFFF">
      <h3><b>3 lưu ý khi ship hàng online</b></h3>
      <p>Trong kinh doanh online thì việc ship hàng là một khâu không thể thiếu. Khi khách hàng ghé vào bất kỳ một trang web nào đó, điều đầu tiên là sẽ tìm những sản phẩm phù hợp với sở thích và túi tiền của họ. Sau đó sẽ xem xét cách thức và chi phí ship hàng...</p>
    <a href=" 3luuy.html " style="color: blue;" target="_blank"> Xem thêm</a>
    </font>
    </div>
    <div class="tin w3-quarter">
      <img src="https://phuongnamvina.com/img_data/images/tong-hop-cac-cach-ship-hang-khi-ban-hang-online.jpg" alt="cách ship hàng" width="230" height="150" class="w3-hover-opacity">
    <font color="#FFFFFF">
      <h3><b>Các cách ship hàng khi kinh doanh online</b></h3>
      <p>Hiện nay, khi mà công nghệ ngày một phát triển thì xu hướng bán hàng online đã và đang trở thành một hình thức phổ biến, rất được nhiều người lựa chọn để bắt đầu công việc kinh doanh làm giàu cho mình. Bên cạnh những tiêu chí về chất lượng sản phẩm,... </p>
    <a href=" tonghop.html " style="color: blue;" target="_blank"> Xem thêm</a>
    </font>
    </div>
    <div class="tin w3-quarter" class="w3-hover-opacity">
      <img src="https://www.vietcargo.vn/wp-content/uploads/2023/04/cachtinhgiaorderhangus-1pngmin-7157-1.png" alt="8 điều cần lưu ý" width="230" height="150">
    <font color="#FFFFFF">
      <h3><b>8 điều cần lưu ý khi ship Mỹ về Việt Nam</b></h3>
      <p>Nếu như trước đây, việc vận chuyển hàng hóa giữa các quốc gia là khá phức tạp, khó khăn và tốn nhiều thời gian. Thì giờ đây, gửi hàng hóa từ Mỹ về Việt Nam đã trở nên dễ dàng hơn nhờ các hình thức vận chuyển đường bộ, đường thủy và đường hàng không.</p>
    <a href=" 8dieu.html " style="color: blue;" target="_blank"> Xem thêm</a>
    </font>
    </div>
  </div>  
    <div>
      
    </div>
</div>


@section('footer')
@endsection