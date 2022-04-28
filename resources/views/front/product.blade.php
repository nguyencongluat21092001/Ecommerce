@extends('front.layout.master')

@section('body')
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                    <h2>Product Shop</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Clothings</li>
                        <li>HandBag</li>
                        <li>Shoes</li>
                        <li>Accessories</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel" >

                    @foreach ($AllProducts as $item )

                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/{{$item->productImages[0]->path}}" alt="">
                            @if ($item->discount != null)
                            <div class="sale">Sale</div>
                            @endif

                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="{{ route('detail',$item->id) }}">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        {{$item->productcategory->name}}
                        <div class="pi-text">
                            <div class="catagory-name">{{$item->tag}}</div>
                            <a href="#">
                                <h5>{{$item->name}}</h5>
                            </a>
                            <div class="product-price">
                               @if($item->discount !=null)
                                ${{$item->discount}}
                                <span>${{$item->price}}</span>
                                @else
                                ${{$item->price}}
                                @endif
                            </div>
                        </div>
                    </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Deal Of The Week</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                    consectetur adipisicing elit </p>
                <div class="product-price">
                    $35.00
                    <span>/ HanBag</span>
                </div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="#" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->





 <!-- Related Products Section End -->
 <div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($AllProducts as $item )


            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/{{$item->productImages[0]->path}}" alt="">
                        @if ($item->discount != null)
                        <div class="sale">Sale</div>
                        @endif
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="{{ route('detail',$item->id) }}">+ Quick View</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    {{$item->productcategory->name}}
                    <div class="pi-text">
                        <div class="catagory-name">{{$item->tag}}</div>
                        <a href="#">
                            <h5>{{$item->name}}</h5>
                        </a>
                        <div class="product-price">
                            {{$item->discount}}
                            <span> {{$item->price}}</span>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Related Products Section End -->


@endsection
