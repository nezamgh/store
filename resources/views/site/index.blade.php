@extends('site.layouts.master')

@section('imageheader')
<div class="container pt-4  d-none d-lg-block">
    <div class="d-flex flex-row">
        <div class="port-item m-2 text-center ">
            <img src="image/8.jpg.png" class="mr-2 img1"><br>
            <span>دانلود کتاب صوتی</span>
        </div>

        <div class="port-item m-2 text-center">
            <img src="image/6.jpg.png" class="mr-2 img1"><br>
            <span>کتاب آموزشی</span>
        </div>


        <div class="port-item m-2 text-center">
            <img src="image/3.jpg.png" class="mr-2 img1"><br>
            <span> کتاب جدید</span>
        </div>
    </div>
</div>
@endsection





@section('special')
    <div class="row">
        <div class="card">
            <h4 class="card-title text-right m-2">آخرین کتاب ها</h4>
            <div class="row">


                @foreach ($lastbook as $lastbook )
                <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card m-4" style="width:13rem">
                            <a href="{{ $lastbook->pathSlug() }}"><img class="card-img-top" src="{{ url('/upload/images').'/'.$lastbook->image }}" width="200" height="150" ></a>
                            <div class="card-body">
                                <a href="{{ $lastbook->pathSlug() }}"><p class="text-center">{{ $lastbook->title }}</p></a>


                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection


