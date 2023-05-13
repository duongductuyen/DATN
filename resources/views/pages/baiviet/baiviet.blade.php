@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
       
                        <h2 class="title text-center">TIN TỨC</h2>
                        <!-- {{$meta_title}} -->
                            <div class="product-image-wrapper">
                                @foreach($post as $key => $p)   
                                <div style="padding:0 20px; " class="single-products">
                                    <h2>{!!$p->post_title!!}</h2>
                                    {!!$p->post_content!!}
                                </div>
                                <div class="clearfix"></div>
                                @endforeach
                            </div>
</div>
<h2 class="title text-center">BÀI VIẾT LIÊN QUAN</h2>
<style type="text/css">
    .post_relate a{
        list-style-type: disc;
        font-size: 16px;
        font-weight: bold;
    }
    .post_relate a{
        color: #000;
    }
    .post_relate a:hover{
        color: #FE980F;
    }
    .post_relate{
        display: flex;
    }
    .post_relate_one{
        display: block;
        width: calc(100% / 3);
        padding: 10px;
        margin-bottom: 30px;
    }
    .single-products img{
    vertical-align: middle;
    width: 100%;
    }
</style>
<dev class="post_relate">
    @foreach($related as $key => $post_relate)
    <dev class="post_relate_one">
        <img style="width:100%; padding-bottom: 10px" src="{{asset('public/uploads/post/'.$post_relate->post_image)}}" alt="{{$p->post_slug}}" />
        <a href="{{url('/bai-viet/'.$post_relate->post_slug)}}">{{$post_relate->post_title}}</a>
    </dev>
    @endforeach
</dev>
@endsection