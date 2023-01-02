@extends('admin.layout')

@section('pagetitle')
active
@endsection
@section('title')
Page Title
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


                        <form action="{{ route('pagetitle.update', $pagetitle->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Alur</strong>
                                        <input type="text" name="judul_alur" class="form-control" @error('judul_alur') is-invalid @enderror placeholder="Judul Alur" value="{{$pagetitle->judul_alur}}">
                                        @error('judul_alur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Deskripsi Alur</strong>
                                        <input type="text" name="deskripsi_alur" class="form-control" @error('deskripsi_alur') is-invalid @enderror placeholder="Judul Alur" value="{{$pagetitle->deskripsi_alur}}">
                                        @error('deskripsi_alur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Resto</strong>
                                        <input type="text" name="judul_resto" class="form-control" @error('judul_resto') is-invalid @enderror placeholder="Judul Resto" value="{{$pagetitle->judul_resto}}">
                                        @error('judul_resto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Deskripsi Resto</strong>
                                        <input type="text" name="deskripsi_resto" class="form-control" @error('deskripsi_resto') is-invalid @enderror placeholder="Judul Resto" value="{{$pagetitle->deskripsi_resto}}">
                                        @error('deskripsi_resto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Gambar Resto</strong>
                                        <input type="hidden" name="oldResto" value="{{ $pagetitle->gambar_resto }}">
                                        @if ($pagetitle->gambar_resto)
                                        <img src="{{ asset('storage/' . $pagetitle->gambar_resto) }}" alt="No Resto" class="favicon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="favicon-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('gambar_resto') is-invalid @enderror name="gambar_resto" id="gambar_resto" onchange="previewFavicon()">
                                            @error('gambar_resto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Counter</strong>
                                        <input type="text" name="judul_counter" class="form-control" @error('judul_counter') is-invalid @enderror placeholder="Judul Counter" value="{{$pagetitle->judul_counter}}">
                                        @error('judul_counter')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Gambar Testimonial</strong>
                                        <input type="hidden" name="oldTestimonial" value="{{ $pagetitle->gambar_testimonial }}">
                                        @if ($pagetitle->gambar_testimonial)
                                        <img src="{{ asset('storage/' . $pagetitle->gambar_testimonial) }}" alt="No Testimonial" class="favicon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="favicon-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('gambar_testimonial') is-invalid @enderror name="gambar_testimonial" id="gambar_testimonial" onchange="previewFavicon()">
                                            @error('gambar_testimonial')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Testimonial</strong>
                                        <input type="text" name="judul_testimonial" class="form-control" @error('judul_testimonial') is-invalid @enderror placeholder="Judul Testimonial" value="{{$pagetitle->judul_testimonial}}">
                                        @error('judul_testimonial')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Partner</strong>
                                        <input type="text" name="judul_partner" class="form-control" @error('judul_partner') is-invalid @enderror placeholder="Judul Partner" value="{{$pagetitle->judul_partner}}">
                                        @error('judul_partner')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Subscribe</strong>
                                        <input type="text" name="judul_subscribe" class="form-control" @error('judul_subscribe') is-invalid @enderror placeholder="Judul Subscribe" value="{{$pagetitle->judul_subscribe}}">
                                        @error('judul_subscribe')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Gambar Subscribe</strong>
                                        <input type="hidden" name="oldSubscribe" value="{{ $pagetitle->gambar_subscribe }}">
                                        @if ($pagetitle->gambar_subscribe)
                                        <img src="{{ asset('storage/' . $pagetitle->gambar_subscribe) }}" alt="No Subscribe" class="favicon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="favicon-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('gambar_subscribe') is-invalid @enderror name="gambar_subscribe" id="gambar_subscribe" onchange="previewFavicon()">
                                            @error('gambar_subscribe')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Blog</strong>
                                        <input type="text" name="judul_blog" class="form-control" @error('judul_blog') is-invalid @enderror placeholder="Judul Blog" value="{{$pagetitle->judul_blog}}">
                                        @error('judul_blog')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Deskripsi Blog</strong>
                                        <input type="text" name="deskripsi_blog" class="form-control" @error('deskripsi_blog') is-invalid @enderror placeholder="Judul Blog" value="{{$pagetitle->deskripsi_blog}}">
                                        @error('deskripsi_blog')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Gambar Blog</strong>
                                        <input type="hidden" name="oldBlog" value="{{ $pagetitle->gambar_blog }}">
                                        @if ($pagetitle->gambar_blog)
                                        <img src="{{ asset('storage/' . $pagetitle->gambar_blog) }}" alt="No Blog" class="favicon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="favicon-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('gambar_blog') is-invalid @enderror name="gambar_blog" id="gambar_blog" onchange="previewFavicon()">
                                            @error('gambar_blog')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Judul Contact</strong>
                                        <input type="text" name="judul_contact" class="form-control" @error('judul_contact') is-invalid @enderror placeholder="Judul Contact" value="{{$pagetitle->judul_contact}}">
                                        @error('judul_contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Deskripsi Contact</strong>
                                        <input type="text" name="deskripsi_contact" class="form-control" @error('deskripsi_contact') is-invalid @enderror placeholder="Deskripsi Contact" value="{{$pagetitle->deskripsi_contact}}">
                                        @error('deskripsi_contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Gambar Contact</strong>
                                        <input type="hidden" name="oldContact" value="{{ $pagetitle->gambar_contact }}">
                                        @if ($pagetitle->gambar_contact)
                                        <img src="{{ asset('storage/' . $pagetitle->gambar_contact) }}" alt="No Contact" class="favicon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="favicon-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('gambar_contact') is-invalid @enderror name="gambar_contact" id="gambar_contact" onchange="previewFavicon()">
                                            @error('gambar_contact')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Page Resto</strong>
                                        <input type="text" name="page_resto" class="form-control" @error('page_resto') is-invalid @enderror placeholder="Page Resto" value="{{$pagetitle->page_resto}}">
                                        @error('page_resto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Page Blog</strong>
                                        <input type="text" name="page_blog" class="form-control" @error('page_blog') is-invalid @enderror placeholder="Page Blog" value="{{$pagetitle->page_blog}}">
                                        @error('page_blog')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Page Contact</strong>
                                        <input type="text" name="page_contact" class="form-control" @error('page_contact') is-invalid @enderror placeholder="Page Contact" value="{{$pagetitle->page_contact}}">
                                        @error('page_contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
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