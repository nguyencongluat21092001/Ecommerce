@extends('front.layout.master')

@section('body')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->




    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">codeleanon</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Picnic</a></li>
                                <li><a href="#">Model</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                @foreach ( $blogss as $blog )
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/{{$blog->image}}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>{{$blog->title}}</h6>
                                        <p>codeleanon <span>{{date('M d,Y',strtotime($blog->created_at))}}</span></p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        @foreach ( $blogs as $blog )


                        <div class="col-lg-4 col-md-6">
                            <div class="single-latest-blog">
                                <img src="front/img/blog/{{$blog->image}}" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                        <div class="tag-item">
                                            <i class="fa fa-calendar-o"></i>
                                            {{date('M d,Y',strtotime($blog->created_at))}}
                                        </div>
                                        <div class="tag-item">
                                            <i class="fa fa-comment-o"></i>
                                            {{ count($blog->blogComments)}}
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h4>{{$blog->title}}</h4>
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->







    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->



@endsection
