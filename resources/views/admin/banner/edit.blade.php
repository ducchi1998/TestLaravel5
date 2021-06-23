@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Banner <a href="{{ route('admin.banner.index') }}" type="button" class="btn btn-primary">Danh Sách</a>
        </h1>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
            @if ($errors->any()) <!-- kiểm tra có bất kỳ lỗi nào -->
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('admin.banner.update',['id' => $banner->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input value="{{ $banner->title }}" type="text" class="form-control" id="title" name="title" placeholder="Nhập tên tiêu đề">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" id="exampleInputFile" name="image">
                                <img width="100" src="{{ asset($banner->image) }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                                <input value="{{ $banner->url }}" type="text" class="form-control" id="url" name="url" placeholder="Url">
                            </div>

                            <div class="form-group">
                                <label>Target</label>
                                <select class="form-control" name="target">
                                    <option {{ ($banner->target == 1) ? 'selected' : '' }} value="1">_blank</option>
                                    <option {{ ($banner->target == 2) ? 'selected' : '' }} value="2">_self</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Loại</label>
                                <select class="form-control" name="type">
                                    <option {{ $banner->type == 1 ? 'selected' : '' }} value="1">slide</option>
                                    <option {{ $banner->type == 2 ? 'selected' : '' }} value="2">background</option>
                                    <option {{ $banner->type == 3 ? 'selected' : '' }} value="3">banner right</option>
                                </select>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="is_active" {{ ($banner->is_active == 1) ? 'checked' : '' }}> Hiển thị
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input name="position" type="number" class="form-control" id="exampleInputEmail1" value="{{ $banner->position }}">
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" placeholder="Enter ...">{{ $banner->description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor1 = CKEDITOR.replace('description');
            _ckeditor1.config.height = 350; // thiết lập chiều cao
        });
    </script>
@endsection
