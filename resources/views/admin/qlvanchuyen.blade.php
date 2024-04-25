@extends('admin.headeradmin')
@section('headervanchuyen')

 <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">QUẢN LÝ VẬN CHUYỂN</div>
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
                                <thead>
                                    <tr>
                                        <th data-breakpoints="xs">ID</th>
                                        <th>Mô tả</th>
                                        <!-- <th>Kích thước</th>
                                        <th>Trọng lượng</th> -->
                                        <th>Nơi lấy hàng</th>
                                        <th>Nơi nhận hàng</th>
                                        <th>Trạng thái</th>
                                        <!-- <th>Cod</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true">
                                        <td>1</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>An khánh, ninh kiều, cần thơ</td>
                                        <td>Phường 7, Thành phố Cà Mau, Cà Mau</td>
                                        <td>Đang giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>An khánh, ninh kiều, cần thơ</td>
                                        <td>An Hòa, Ninh Kiều, Cần Thơ</td>
                                        <td>Đang giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>Quận 1, Thành phố Hồ Chí Minh</td>
                                        <td>Phường 7, Thành phố Cà Mau, Cà Mau</td>
                                        <td>Đã giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>An khánh, ninh kiều, cần thơ</td>
                                        <td>Phường 7, Thành phố Cà Mau, Cà Mau</td>
                                        <td>Đang giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>Quận 1, Thành phố Hồ Chí Minh</td>
                                        <td>An Hòa, Ninh Kiều, Cần Thơ</td>
                                        <td>Đã giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>Bình Thủy, ninh kiều, cần thơ</td>
                                        <td>Phường 7, Thành phố Cà Mau, Cà Mau</td>
                                        <td>Đang giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>An khánh, ninh kiều, cần thơ</td>
                                        <td>Huyện Năm Căn, Cà Mau</td>
                                        <td>Đang giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Tài liệu</td>
                                        <!-- <td>1x1x1</td> -->
                                        <!-- <td>0.2 kg</td> -->
                                        <td>An Hòa, ninh kiều, cần thơ</td>
                                        <td>Phường 6, Thành phố Cà Mau, Cà Mau</td>
                                        <td>Đang giao</td>
                                        <!-- <td>20.000</td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>



@endsection