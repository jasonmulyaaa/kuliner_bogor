@extends('admin.layout')

@section('config')
active
@endsection
@section('title')
Config
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-right">
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">


                        <form action="{{ route('config.update', $config->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title</strong>
                                        <input type="text" name="title" class="form-control" @error('title') is-invalid @enderror placeholder="Title" value="{{$config->title}}">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>favicon</strong>
                                        <input type="hidden" name="oldFavicon" value="{{ $config->favicon }}">
                                        @if ($config->favicon)
                                        <img src="{{ asset('storage/' . $config->favicon) }}" alt="No favicon" class="favicon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="favicon-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('favicon') is-invalid @enderror name="favicon" id="favicon" onchange="previewFavicon()">
                                            @error('favicon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nav Image</strong>
                                        <input type="hidden" name="oldNavImg" value="{{ $config->nav_img }}">
                                        @if ($config->nav_img)
                                        <img src="{{ asset('storage/' . $config->nav_img) }}" alt="No Image" class="nav-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="nav-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('nav_img') is-invalid @enderror name="nav_img" id="nav_img" onchange="previewNavImg()">
                                            @error('nav_img')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Footer Image</strong>
                                        <input type="hidden" name="oldFooterImg" value="{{ $config->footer_img }}">
                                        @if ($config->footer_img)
                                        <img src="{{ asset('storage/' . $config->footer_img) }}" alt="No Image" class="footer-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="footer-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('footer_img') is-invalid @enderror name="footer_img" id="footer_img" onchange="previewFooterImg()">
                                            @error('footer_img')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Footer Description</strong> <br>
                                        <textarea name="footer_desc" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->footer_desc }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Meta Title</strong> <br>
                                        <textarea name="meta_title" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->meta_title }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Meta Description</strong> <br>
                                        <textarea name="meta_desc" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->meta_desc }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Meta Search Engine</strong> <br>
                                        <textarea name="meta_search" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->meta_search }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Meta Keyword</strong> <br>
                                        <textarea name="meta_keyword" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->meta_keyword }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Meta Author</strong> <br>
                                        <textarea name="meta_auth" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->meta_auth }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Meta Website</strong> <br>
                                        <textarea name="meta_web" id="contents" cols="30" rows="5" style="width: 100%;">{{ $config->meta_web }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<script>
    function previewFavicon() {
        const image = document.querySelector('#favicon');
        const imgPreview = document.querySelector('.favicon-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

<script>
    function previewNavImg() {
        const image = document.querySelector('#nav_img');
        const imgPreview = document.querySelector('.nav-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

<script>
    function previewFooterImg() {
        const image = document.querySelector('#footer_img');
        const imgPreview = document.querySelector('.footer-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection