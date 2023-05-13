@extends('layout')
@section('content_category')
<div class="features_items">
    <h2 class="title text-center">TIN {{$meta_title}}</h2>
                        
                            <div class="product-image-wrapper">
                                @foreach($post as $key => $p)   
                                <div class="single-products">
                                        <div class="single-products-left">
                                            <img src="{{asset('public/uploads/post/'.$p->post_image)}}" alt="{{$p->post_slug}}" />
                                        </div>
                                        <div class="single-products-right">
                                            <h4 style="color:#000; ">{{$p->post_title}}</h4>
                                            <p>{!!$p->post_desc!!}</>
                                            <a href="{{url('/bai-viet/'.$p->post_slug)}}" class="btn btn-default btn-sm">Xem bài viết</a>
                                        </div>
                                </div>
                                <hr>
                                @endforeach
                            </div>
</div>
<style type="text/css">
    .single-products{
        display: flex;
        margin: 20px;
    }
    .single-products-left{
        width: 40%;
    }
    .single-products-left img{
        width: 100%;
    }
    .single-products-right{
        display: block;
        position: relative;
        width: 60%;
        margin-left: 10px;
    }
    .single-products-right a{
        position: absolute; 
        bottom: 0px; 
        right: 0;
    }
    hr{
        margin: 0 20px;
    }
</style>
<ul class="pagination pagination-sm m-t-none m-b-none">
    {!!$post->links()!!}
</ul>                    
@endsection