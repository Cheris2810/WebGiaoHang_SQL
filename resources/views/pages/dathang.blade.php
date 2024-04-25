@extends('pages.menu.header')
@section('header')
@section('title', 'Giao hàng tiết kiệm')
<?php
$SERVER = 'localhost';
$user = 'root';
$pass = '';
$database = 'webgiaohang';

$conn = new mysqli($SERVER, $user, $pass, $database);

// if ($conn) {
//     echo 'Da ket noi thanh cong';
// } else {
//     echo 'Ket noi that bai';
// }

//Khai báo giá trị ban đầu, k có thì chưa submit

        if(isset($_POST['addkh'])){
            $KHN_TEN = $_POST['KHN_TEN'];
            $KHN_SDT = $_POST['KHN_SDT'];
            $KHN_GIOITINH = $_POST['KHN_GIOITINH'];
            $KHN_NAMSINH = $_POST['KHN_NAMSINH'];

                 // $KHG_TEN = $_POST['KHG_TEN'];
                 // $KHG_SDT = $_POST['KHG_SDT'];
                 // $KHG_GIOITINH = $_POST['KHG_GIOITINH'];
                 // $KHG_NAMSINH = $_POST['KHG_NAMSINH'];
                 // $KHG_DIACHI = $_POST['KHG_DIACHI'];
            

           

            // $KHN_DIACHI = $_POST['KHN_DIACHI'];
            
        if($conn ->query(
                           "INSERT INTO khachhangnhan (KHN_TEN, KHN_SDT, KHN_GIOITINH, KHN_NAMSINH) VALUES ('$KHN_TEN', '$KHN_SDT', '$KHN_GIOITINH', '$KHN_NAMSINH')"
                           // "INSERT INTO khachhanggui (KHG_TEN, KHG_SDT, KHG_GIOITINH, KHG_NAMSINH, KHG_DIACHI) VALUES ('$KHG_TEN', '$KHG_SDT', '$KHG_GIOITINH', '$KHG_NAMSINH', '$KHG_DIACHI')"
                         )
            )
                    {
                        echo "<script>alert('Thêm thành công');</script>";
                    } else {
                            echo "<script>alert('Thêm không thành công');</script>";
                }}
        

        if(isset($_POST['addkg'])){
            // $KHN_TEN = $_POST['KHN_TEN'];
            // $KHN_SDT = $_POST['KHN_SDT'];
            // $KHN_GIOITINH = $_POST['KHN_GIOITINH'];
            // $KHN_NAMSINH = $_POST['KHN_NAMSINH'];

                 $KHG_TEN = $_POST['KHG_TEN'];
                 $KHG_SDT = $_POST['KHG_SDT'];
                 $KHG_GIOITINH = $_POST['KHG_GIOITINH'];
                 $KHG_NAMSINH = $_POST['KHG_NAMSINH'];
                 $KHG_DIACHI = $_POST['KHG_DIACHI'];
            

           

            // $KHN_DIACHI = $_POST['KHN_DIACHI'];
            
        if($conn ->query(
                           // "INSERT INTO khachhangnhan (KHN_TEN, KHN_SDT, KHN_GIOITINH, KHN_NAMSINH) VALUES ('$KHN_TEN', '$KHN_SDT', '$KHN_GIOITINH', '$KHN_NAMSINH')"
                           "INSERT INTO khachhanggui (KHG_TEN, KHG_SDT, KHG_GIOITINH, KHG_NAMSINH, KHG_DIACHI) VALUES ('$KHG_TEN', '$KHG_SDT', '$KHG_GIOITINH', '$KHG_NAMSINH', '$KHG_DIACHI')"
                         )
            )
                    {
                        echo "<script>alert('Thêm thành công');</script>";
                    } else {
                            echo "<script>alert('Thêm không thành công');</script>";
                }}

        $conn->close();
    

?>



    <title>Document</title>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script type="text/javascript" src="{{asset('public/backend/js/mapuser.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>
</head>
<style>

</style>

<body style="margin-top: 5rem; background:orange; color: white; font-weight: bolder;">
    <section id="">
        <div class="container mt-5">
            <div class="row">
                <div class="col-6">

                    <form action="{{URL::to('/dathang')}}" method="post">
                         {{csrf_field()}}
                        <div>
                            <h3 class="text-center" style="font-weight: bolder;">Khách hàng gửi</h3>
                        </div>
                        <div>
                            <label class="form-label" for="">Họ và tên</label>
                            <input class="form-control" type="text" name="KHG_TEN">
                        </div>
                        <div>
                            <label class="form-label" for="">Số điện thoại</label>
                            <input class="form-control" type="text" name="KHG_SDT">
                        </div>
                       <div>
                            <label class="form-label" for="select">Giới tính</label>
                            
                                <input class="form-control" type="text" name="KHG_GIOITINH">
                           
                        </div>
                        <div>
                            <label class="form-label" for="">Năm sinh</label>
                            <input class="form-control" type="text" name="KHG_NAMSINH">
                        </div>

                        <div>
                            <label class="form-label" for="">Địa chỉ</label>
                            <input class="form-control" type="text" name="KHG_DIACHI">
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto mt-5" style="justify-content: center;">
                                    
                                    <button type="submit" class="btn btn-primary" name="addkg" style="width: 10rem;"> Lưu</button>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <h3 style="margin-bottom: -2rem;">Địa chỉ người gửi</h3>

                        <div style="margin-top:5rem;">    
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6661028642598!2d105.76718097484635!3d10.044387190063286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a088100037d507%3A0x19fef9e5ab168a84!2zSOG6u20gMzExIMSQLiBOZ3V54buFbiBWxINuIEPhu6ssIEFuIEjDsmEsIE5pbmggS2nhu4F1LCBD4bqnbiBUaMahLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1713975566416!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div> 
                        
                    </form>
                    

                   

                </div>
                <div class="col-6">
                    <form action="{{URL::to('/dathang')}}" method="post">
                        {{csrf_field()}}

                        <div>
                            <h3 class="text-center" style="font-weight: bolder;">Khách hàng nhận</h3>
                        </div>
                        <div>
                            <label class="form-label" for="">Họ và tên</label>
                            <input class="form-control" type="text" name="KHN_TEN">
                        </div>
                        <div>
                            <label class="form-label" for="">Số điện thoại</label>
                            <input class="form-control" type="tel" name="KHN_SDT">
                        </div>
                        <div>
                            <label class="form-label" for="select">Giới tính</label>
                            
                                <input class="form-control" type="text" name="KHN_GIOITINH">
                           
                        </div>
                        <div>
                            <label class="form-label" for="">Năm sinh</label>
                            <input class="form-control" type="text" name="KHN_NAMSINH">
                        </div>

                        <div>
                            <label class="form-label" for="select">Số nhà</label>
                            
                                <input class="form-control" type="text" name="KHN_GIOITINH">
                           
                        </div>

                        <div>
                            <div>
                                <label class="form-label" for="">Tỉnh / Thành Phố</label>
                                <select class="form-select" id="city" aria-label=".form-select-sm">
                                    <option value="" selected>Chọn tỉnh thành</option>
                                </select>

                                <label class="form-label" for="">Quận / Huyện</label>
                                <select class="form-select" id="district" aria-label=".form-select-sm">
                                    <option value="" selected>Chọn quận huyện</option>
                                </select>

                                <label class="form-label" for="">Xã / Phường</label>
                                <select class="form-select" id="ward" aria-label=".form-select-sm">
                                    <option value="" selected>Chọn phường xã</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto mt-5" style="justify-content: center;">
                                    <!-- <a href="{{URL::to('/dathang')}}" style="margin-left:10rem"><button onclick="return" class="btn btn-primary" type="button" style="width:10rem">Lưu</button></a> -->
                                    <button type="submit" class="btn btn-primary" name="addkh" style="width: 10rem;"> Lưu</button>
                            </div>
<br><br>
                            <h3 style="margin-bottom: -2rem;">Địa chỉ người nhận</h3>

                            <div style="margin-top:5rem;">    
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.7057772592057!2d105.75214587484632!3d10.041119990066377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0886c462afe2b%3A0x879459f127606604!2zMTU1IMSQLiBOZ3V54buFbiBUcmkgUGjGsMahbmcsIFBoxrDhu51uZyBBbiBLaMOhbmgsIE5pbmggS2nhu4F1LCBD4bqnbiBUaMahLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1713976022478!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </div> 
<br>


                            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                            <script>
                                var citis = document.getElementById("city");
                                var districts = document.getElementById("district");
                                var wards = document.getElementById("ward");
                                var Parameter = {
                                    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                                    method: "GET",
                                    responseType: "application/json",
                                };

                                var promise = axios(Parameter);
                                promise.then(function (result) {
                                    renderCity(result.data);
                                });

                                function renderCity(data) {
                                    for (const x of data) {
                                        citis.options[citis.options.length] = new Option(x.Name, x.Id);
                                    }
                                    citis.onchange = function () {
                                        district.length = 1;
                                        ward.length = 1;
                                        if (this.value != "") {
                                            const result = data.filter(n => n.Id === this.value);

                                            for (const k of result[0].Districts) {
                                                district.options[district.options.length] = new Option(k.Name, k.Id);
                                            }
                                        }
                                    };
                                    district.onchange = function () {
                                        ward.length = 1;
                                        const dataCity = data.filter((n) => n.Id === citis.value);
                                        if (this.value != "") {
                                            const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                                            for (const w of dataWards) {
                                                wards.options[wards.options.length] = new Option(w.Name, w.Id);
                                            }
                                        }
                                    };
                                }
                            </script>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row mt-5">


                <form action="" style="margin-top:-2rem">
                    <h3 class="text-center" style="font-weight: bolder;">Thông tin đơn hàng</h3>

                    <div>
                        <label class="form-label" for="">Chi nhánh đặt hàng</label>
                        <input class="form-control" type="text" >
                    </div>

                    <div>
                        <label class="form-label" for="">Kích thước</label>
                        <input class="form-control" type="text">
                    </div>

                    <div>
                        <label class="form-label" for="">Mô tả</label>
                        <input class="form-control" type="text">
                    </div>

                    <div>
                        <label class="form-label" for="">Loại hàng</label>
                        <input class="form-control" type="text">
                    </div>

                    <div>
                        <label class="form-label" for="">Trọng lượng</label>
                        <input class="form-control" type="number">
                    </div>

                   <div>
                        <label class="form-label" for="">Phương thức thanh toán</label>
                        <input class="form-control" type="text">
                    </div>

                </form>

               <!--  <div style="margin-top:5rem;">    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.680964354919!2d105.76043229372429!3d10.043163464446554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08955077eb451%3A0x7fc3cd3f0df119c6!2zVmlldHRlbCBQb3N0IEFuIEjDsmEgLSBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1712637061071!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                </div>  -->
                    




                <div class="d-grid gap-2 col-6 mx-auto mt-5">
                    <a href="{{URL::to('/home')}}" style="margin-left:10rem"><button onclick="return" class="btn btn-primary" type="button" style="width:25rem">Quay về</button></a>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mt-5">
                    <a href="{{URL::to('/hoadon')}}"> <button onclick="return" class="btn btn-primary" type="button" style="width:25rem">Tạo đơn hàng</button></a>
                </div>
            </div>
            
        </div>
        <br><br><br><br><br>

    </section>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>



@endsection