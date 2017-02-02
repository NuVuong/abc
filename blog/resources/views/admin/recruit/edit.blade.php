@extends('admin.master')
@section('content')

{{--         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row"> --}}
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa tin tuyển dụng

                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <form enctype="multipart/form-data" action="{{-- {!! route('admin.recruit.getEdit',) !!} --}}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="txtTieuDe" placeholder="" 
                                value="{!! old('txtTieuDe',isset($data)?$data['title']:null)!!}" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type='file' name="fImages"  />
                                <img src="{!! old('fImages',isset($data)?$data['image']:null)!!}">
                           
                            </div>
                            <div class="form-group">
                                <label>Vị trí tuyển dụng</label>
                                <input class="form-control" name="txtViTri" placeholder="" value="{!! old('txtViTri',isset($data)?$data['position']:null)!!}" />
                            </div>
                            <div class="form-group">
                                <label>Địa điểm làm việc</label>
                                <input class="form-control" name="txtDiaChi" placeholder="" value="{!! old('txtDiaChi',isset($data)?$data['address_work']:null)!!}" />

                            </div>
                            <div class="form-group">
                                <label>Yêu cầu</label>
                                <textarea class="form-control" rows="3" name='txtYeuCau'>{!! old('txtTieuDe',isset($data)?$data['title']:null)!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Quyền lợi</label>
                                <textarea class="form-control" rows="3" name='txtQuyenLoi'> {!! old('txtQuyenLoi',isset($data)?$data['requirement']:null)!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name='txtMota' rows="3" >{!! old('txtMota',isset($data)?$data['description']:null)!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Ngày hết hạn</label>
                                <input type="date" class="form-control " id="datepicker" name="txtHetHan" placeholder="" value="{!! old('txtHetHan',isset($data)?$data['deadline']:null)!!}"  />

                            </div>

                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
      {{--           </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div> --}}
        <!-- /#page-wrapper -->

        @endsection()           
