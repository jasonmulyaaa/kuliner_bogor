@extends('admin.layout')

@section('product')
active
@endsection
@section('title')
Makanan
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
                            <a class="btn btn-danger" href="{{ route('product.index') }}"> Back</a>
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


                        <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image</strong>
                                        <input type="hidden" name="oldImage" value="{{ $product->image }}">
                                        @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="img-preview img-fluid mb-3">
                                        @endif
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" @error('image') is-invalid @enderror name="image" id="image" onchange="previewImage()">
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title</strong>
                                        <input type="text" name="title" class="form-control" @error('title') is-invalid @enderror placeholder="Title" value="{{$product->title}}">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Quotes</strong>
                                        <input type="text" name="quotes" class="form-control" @error('quotes') is-invalid @enderror placeholder="quotes" value="{{$product->quotes}}">
                                        @error('quotes')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Description</strong>
                                        <textarea name="desc" id="contents" cols="30" rows="10">{{ $product->desc }}</textarea>
                                        <script>
                                            CKEDITOR.replace('contents');
                                        </script>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Short Description</strong>
                                        <textarea name="short_desc" id="contents1" cols="30" rows="10">{{ $product->short_desc }}</textarea>
                                        <script>
                                            CKEDITOR.replace('contents1');
                                        </script>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Benefit</strong> <br>
                                        <textarea name="benefit" cols="30" rows="5" style="width: 100%;">{{ $product->benefit }}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                  <div class="form-group">
                                      <strong>Kecamatan</strong>
                                      <select class="form-control" name="category">
                                          @foreach($category as $c)
                                              <option value="{{$c->id}}" @if($product->category == $c->id)selected @endif>{{$c->category}}</option>
                                          @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Tempat Makan</strong>
                                        <input type="text" name="name" class="form-control" @error('name')
                                            is-invalid @enderror placeholder="Nama Tempat Makan" value="{{ $product->name }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Alamat Tempat Makan</strong>
                                        <input type="text" name="alamat" class="form-control" @error('alamat')
                                            is-invalid @enderror placeholder="Alamat Tempat Makan" value="{{ $product->alamat }}">
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Rating (/10)</strong>
                                        <input type="number" name="rating" class="form-control" @error('rating')
                                            is-invalid @enderror placeholder="Rating (/10)" value="{{ $product->rating }}">
                                        @error('rating')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Harga</strong>
                                        <input type="number" name="harga" class="form-control" @error('harga')
                                            is-invalid @enderror placeholder="Harga" value="{{ $product->harga }}">
                                        @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Jam Operasi Tempat Makan</strong>
                                        <input type="text" name="jam" class="form-control" @error('jam')
                                            is-invalid @enderror placeholder="Jam Operasi Tempat Makan" value="{{ $product->jam }}">
                                        @error('jam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection