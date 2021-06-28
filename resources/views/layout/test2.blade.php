@include('layout.topbar')

<!-- Categories Section End -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="http://127.0.0.1:8000/storage/img/categories/cat-4.jpg">
                        <h5><a href="#">Case May Tinh</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="http://127.0.0.1:8000/storage/img/categories/cat-1.jpg">
                        <h5><a href="#">Ban phim</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="http://127.0.0.1:8000/storage/img/categories/cat-2.jpg">
                        <h5><a href="#">Man hinh</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="http://127.0.0.1:8000/storage/img/categories/cat-5.jpg">
                        <h5><a href="#">Chuot</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="http://127.0.0.1:8000/storage/img/categories/cat-3.jpg">
                        <h5><a href="#">Camera An Ninh</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section Begin -->

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h2>San pham</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <div class="d-flex justify-content-center">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        Danh Mục
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="Bạn đang quan tâm tới sản phẩm nào?">
                                    <button type="submit" class="site-btn">Tìm Kiếm</button>
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="row" id="product_list">
                @foreach ($products as $key => $product )
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/img/product/' . $product->image)}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">`
                                <h6><a href="#">{{ $product->name_product }}</a></h6>
                                <h5>{{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <div class="row" id="product_list">
                                @foreach ($products as $key => $product )
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/img/product/' . $product->image)}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">`
                                                <h6><a href="#">{{ $product->name_product }}</a></h6>
                                                <h5>{{ $product->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <div class="row" id="product_list">
                                @foreach ($products as $key => $product )
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/img/product/' . $product->image)}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">`
                                                <h6><a href="#">{{ $product->name_product }}</a></h6>
                                                <h5>{{ $product->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <div class="row" id="product_list">
                                @foreach ($products as $key => $product )
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/img/product/' . $product->image)}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">`
                                                <h6><a href="#">{{ $product->name_product }}</a></h6>
                                                <h5>{{ $product->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <div class="row" id="product_list">
                                @foreach ($products as $key => $product )
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/img/product/' . $product->image)}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">`
                                                <h6><a href="#">{{ $product->name_product }}</a></h6>
                                                <h5>{{ $product->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.endbar')
