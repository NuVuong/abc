<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecruitmentRequest;
use App\Recruitment;

class RecruitmentController extends Controller
{

    public function getList()
    {
        $data=Recruitment::select('id','title','position','requirement','created_at','deadline')->get()->toArray();
        return view('admin.recruit.list',compact('data'));
    }
    public function getAdd()
    {
        return view('admin.recruit.add');
    }
    public function postAdd(RecruitmentRequest $request)
    {
        $img=$request->file('fImages');
        $img_name=$img->getClientOriginalName();
        $recruit=new Recruitment();
        $recruit->title=$request->txtTieuDe;
        $recruit->image=$img_name;
        $recruit->description=$request->txtMota;
        $recruit->position=$request->txtViTri;
        $recruit->address_work=$request->txtDiaChi;
        $recruit->requirement=$request->txtYeuCau;
        $recruit->benefit=$request->txtQuyenLoi;
        $recruit->deadline=$request->txtHetHan;

        $recruit->save();
        $des='public/upload/images';
        $img->move($des,$img_name);

        return redirect()->route('admin.recruit.list')->with(['flash_message'=>'Thêm thành công']);
    }
    public function getDelete($id)
    {
        $recruit=Recruitment::find($id);
        $recruit->delete($id);
        return redirect()->route('admin.recruit.list')->with(['flash_message'=>'Xóa thành công']);

    }
    public function getEdit($id)
    {
         $data=Recruitment::find($id);
         // print_r($data);
        return view('admin.recruit.edit',compact('data','id'));

    }
    public function postEdit($id)
    {

    }

   
}
