@extends('admin.master')
@section('content')
        <!-- Page Content -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tuyển dụng
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        @if(Session::has('flash_message'))
                        <div class="alert-success">
                            {!! Session::get('flash_message') !!}
                        </div>

                        @endif
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Vị trí tuyển dụng</th>
                                <th>Yêu cầu</th>
                                <th>Ngày đăng</th>
                                <th>Ngày kết thúc</th>
                                <th style="width: 90px"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $stt=1;
                        ?>
                        @foreach($data as $item)

                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt++ !!}</td>
                                <td>{!! $item['title'] !!}</td>
                                <td>{!! $item['position'] !!}</td>
                                <td>{!! $item['requirement'] !!}</td>
                                <td>{!! $item['created_at'] !!}</td>
                                <td>{!! $item['deadline'] !!}</td>
                                <td>
                                   {{--  <i class="fa fa-list fa-fw"></i> <a href="{{ URL::route('admin.recruit.getDetail')}}"></a> --}}
                                    <a onclick="return xacnhanxoa('bạn có chắc muốn xóa không?')" href="{{ URL::route('admin.recruit.getDelete',$item['id'])}}"><i class="fa fa-trash-o  fa-fw"></i></a>
                                    <a href="{{ URL::route('admin.recruit.getEdit',$item['id'])}}">
                                         <i class="fa fa-pencil fa-fw"></i>
                                    </a>
                                </td>
                            </tr>
                         @endforeach  
                        </tbody>
                    </table>
        <!-- /#page-wrapper -->
@endsection()      