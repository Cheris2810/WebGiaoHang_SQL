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

<body>
    <section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand" style="background: orange;">
    <a href="#" class="logo" style="font-weight: bold;">
        QUẢN LÝ
    </a>
    <div class="sidebar-toggle-box" style="background:orange;">
        <div class="fa fa-bars"></div>
        <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
    </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" >
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">Bạn có 8 chi tiết</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>MỤC TIÊU</h5>
                                <p>25% , Thời hạn  12 tháng 10 hoàn thành thu phí</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>TỔNG ĐƠN</h5>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#"></a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fas fa-envelope"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">Bạn có 4 thông báo mail</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('public/backend/img/3.png')}}"></span>
                                <span class="subject">
                                <span class="from">Đơn đã giao</span>
                                <span class="time">9 giờ trước</span>
                                </span>
                                <span class="message">
                                    Hoàn thành!!
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('public/backend/img/1.png')}}"></span>
                                <span class="subject">
                                <span class="from">Đơn đã giao</span>
                                <span class="time">2 phút trước</span>
                                </span>
                                <span class="message">
                                    Hoàn thành!!
                                </span>
                    </a>
                </li>
            
                <li>
                    <a href="#">Xem tất cả tin nhắn</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fas fa-bell"></i>
                <span class="badge bg-warning">0</span>
            </a>
            <ul class="dropdown-menu extended notification">

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li >
            <input type="text" class="form-control search" placeholder=" Search" style="background:brown;">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown" >
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="background:brown;">
                <img alt="" src="{{asset('public/backend/img/2.png')}}">
                <span class="username">
                    <?php
                    $admin_name = Session::get('name_admin');
                    if($admin_name){
                        echo '<span class="span-name-admin">'.$admin_name.'</span>';
                    }
                    ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                <li><a href="{{URL::to('/')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="#">
                        <i class="fa fa-th"></i>
                        <span>Quản lý đơn hàng</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="{{URL::to('/qlvchuyen')}}">
                        <i class="fa fa-book"></i>
                        <span>Quản lý vận chuyển</span>
                    </a>
                    <!-- <ul class="sub">
						<li><a href="typography.html">Typography</a></li>
						<li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul> -->
                </li>
              
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
      
    </aside>

    </body>
    <!--sidebar end-->
    <!--main content start-->

        <!-- page end-->
        </div> 
    </section>
 <!-- footer -->
    <!--      <div class="footer">
            <div class="wthree-copyright">
              <p>© 2024 He thong QLKTX <a href="http://w3layouts.com">Bao Khanh</a></p>
            </div>
          </div> -->
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $('.add_delivery').click(function(){
            var city = $('.city').val();
            var province = $('.province').val();      
            var wards = $('.wards').val();
            var fee_ship = $('.fee_ship').val();
            alert(city);
            alert(province);
            alert(wards);
            alert(fee_ship);
        });

        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name ="_token"]').val();
            var $result ='';
            // alert(action);
            // alert(matp);
            // alert(_token);
            if(action == 'city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select_delivery')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                    $('#'+result).html(data);
                }
            });
        });
    })

</script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="{{asset('public/backend/js/monthly.js')}}"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',
                
            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <!-- //calendar -->

</html>

  @yield('headervanchuyen')