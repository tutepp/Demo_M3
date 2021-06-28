@include('layout.topbar')
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4 style="color: #7fad39">Thêm sản phẩm</h4>
                <div class="error-message">
                    @if (session()->has('success'))
                        <div class="row">
                            <div class="alert alert-success background-success col-4 offset-4">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <span>{{ session()->get('success') }}</span>
                            </div>
                        </div>
                    @endif

                    @isset($products->image)
                        <div class="row">
                            <img class="img-thumbnail mx-auto" width="300" height="300" src="{{ asset('storage/images/product/' . $products->image) }}" alt="">
                        </div>
                    @endisset
                <form method = "post" action="{{route("product.store")}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    @csrf
                                    <div class="checkout__input">
                                        <p>Tên sản phẩm<span>*</span></p>
                                        <input type="text" placeholder="Tên sản phẩm" name="name_product">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Loại sản phẩm<span>*</span></p>
                                        <input type="text" placeholder="Loại sản phẩm" name="type_product">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Ngày nhập hàng<span>*</span></p>
                                        <input type="date" placeholder="Ngày nhập hàng" name="import_date">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Giá sản phẩm<span>*</span></p>
                                        <input type="text" placeholder="Giá sản phẩm" name="price">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nhãn hiệu của sản phẩm<span>*</span></p>
                                        <input type="text" placeholder="Nhãn hiệu của sản phẩm" name="brand">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số lượng<span>*</span></p>
                                        <input type="text" placeholder="Số lượng" name="total_product">
                                    </div>
                                </div>t
                            </div>
                            <div class="checkout__input">
                                <p>Mô tả<span>*</span></p>
                                <input type="text" placeholder="Mô tả" name="description">
                            </div>
                            <div class="checkout__input">
                                <p>Ảnh sản phẩm<span>*</span></p>
                                <input type="file" name="image">
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="site-btn">Thêm sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@include('layout.endbar')
