@extends('admin.indexadmin')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
<section id="main-content" style="margin-top: -8rem;">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm phí vận chuyển
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal " method="">
                                {{csrf_field()}}
                                <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Chọn tỉnh/thành phố</label>
                                    <select name="city" id="city" class="col-lg-6 choose city">
                                        <option value="" class="form-control">---Chọn tỉnh/thành phố---</option>
                                        foreach($city as $city){
                                        <option value="{{$city[58]->matp}}" class="">{{$city[58]->name_city}}
                                        </option>
                                        }endforeach 
                                    </select>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-lg-3 control-label">Chọn quận huyện</label>
                                    <select name="province" id="province" class="col-lg-6 choose province ">
                                        <option value="" class="form-control">---Chọn quận huyện---</option>
                                    </select>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">Chọn xã phường</label>
                                    <select name="wards" id="wards" class="col-lg-6 wards">
                                        <option value="" class="form-control">---Chọn xã phường---</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Phí vận chuyển</label>
                                    <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail" placeholder="Tên danh mục">
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button name="add_delivery" id="" class="btn btn-primary add_delivery" type="button">Thêm phí vận chuyển</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            
            <!-- page end-->
        </div>
</section>

@endsection