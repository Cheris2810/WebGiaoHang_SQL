<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Feeship;
class DeliveryController extends Controller
{
    public function delivery(Request $request){
         $city = City::orderby('matp','ASC')->get();
        // $city = City::orderBy('matp', $request->matp)->first();
        //$city = City::where('matp',$request->matp)->get();
          return view('admin.delivery.add_delivery')->with(compact('city'));
          // Hoặc:    return view('admin.delivery.add_delivery',['city'=>$city]); 
          // echo $city; Kiểm tra DB đã liên kết chưa!!!
            
    }

    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            // echo $city;
            $output = '';
            if($data['action'] =="city"){
                $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                    $output.='<option>---Chọn quận huyện---</option';
                foreach($select_province as $province ){
                $output .= '<option value="'.$province->maqh.'">'.$province->nam_quanhuyen.'</option>';
                }
            }else{
                $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
                    $output.='<option>---Chọn xã phường---</option';
                foreach($select_wards as $wards ){
                $output .= '<option value="'.$wards->xaid.'">'.$wards->nam_xaphuong.'</option>';
                }
            }
        }
        echo $output;
    }
   
     }