@extends('admin.master')
@section('content')
                            <div class="col-lg-12">
                        <h1 class="page-header">Thêm tin tuyển dụng

                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
 <div class="col-lg-7" style="padding-bottom:120px">
    <form enctype="multipart/form-data" action="{!! route('admin.recruit.getAdd') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Tiêu đề</label>
            <input class="form-control" name="txtTieuDe" placeholder="" />
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <input type='file' name="fImages"  />
        </div>
        <div class="form-group">
            <label>Vị trí tuyển dụng</label>
            <input class="form-control" name="txtViTri" placeholder="" />
        </div>
        <div class="form-group">
            <label>Địa điểm làm việc</label>
            <input class="form-control" name="txtDiaChi" placeholder="" />
            
        </div>
        <div class="form-group">
            <label>Yêu cầu</label>
           <textarea class="form-control" rows="3" name='txtYeuCau'></textarea>
        </div>
        <div class="form-group">
            <label>Quyền lợi</label>
           <textarea class="form-control" rows="3" name='txtQuyenLoi'></textarea>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
           <textarea class="form-control" name='txtMota' rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Ngày hết hạn</label>
            <input type="text" class="form-control " id="datepicker" name="txtHetHan" placeholder="" />
            
        </div>

        <button type="submit" class="btn btn-default">Thêm</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
 </div>
      
      

@endsection()           