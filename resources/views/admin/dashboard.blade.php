@extends('admin.layout')

@section('dashboard')
active
@endsection
@section('title')
Dashboard
@endsection

@section('content')

@if (Auth::user()->role != 'user')

<h5 class="mb-2 mt-4">Visitors Information</h5>
<div class="row">


    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $visit_u }}</h3>

                <p>Uniq Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $visit_t }}</h3>

                <p>Total Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-clock"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $visit_d }}</h3>

                <p>Today Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>
</div>

<h5 class="mb-2 mt-4">Data Information</h5>

<div class="row">

    @if (Auth::user()->role != 'operator')



    @endif

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $product }}</h3>
                
                <p>Total Makanan</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-bowl-food"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box" style="background-color: white;">
            <div class="inner">
                <h3>{{ $blog }}</h3>

                <p>Total Blog</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-newspaper"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

</div>

@endif

@endsection