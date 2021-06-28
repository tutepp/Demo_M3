@include('layout.topadmin')


<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Sản Phẩm </span>
                    </div>
                    <nav class="header__menu">
                        <ul id="categories">
                            <li><a href="#">Chuột Máy Tính</a></li>
                            <li><a href="#">Bàn Phím</a></li>
                            <li><a href="#">Tai Nghe</a></li>
                            <li><a href="#">CARD Màn Hình</a></li>
                            <li><a href="#">RAM</a></li>
                            <li><a href="#">CASE Gaming</a></li>
                            <li><a href="#">Lót Chuột</a></li>
                            <li><a href="#">Camera An Ninh</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="hero__search">
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




                <div class="d-flex justify-content-center">
                    <!-- Button trigger modal -->
                    <div class="col-md-2">
                        <button type="button" class="btn bg-gradient-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp" style="background-color: #7fad39 ; color: white">
                            Thêm Sản Phẩm
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true" >
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card card-plain">
                                        <div class="d-flex justify-content-center" >
                                            <div class="card-header pb-0 text-left">
                                                <h4 class="font-weight-bolder  text-gradient" style="color:#7fad39 ">Thêm sản phẩm mới</h4>
                                            </div>
                                        </div>
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
                                                    <img class="img-thumbnail mx-auto" width="300" height="300" src="{{ asset('storage/img/product/' . $products->image) }}" alt="">
                                                </div>
                                            @endisset

                                            <form style="background-color: #a6b1ff" enctype="multipart/form-data" name="create-form" id="create-form" method="POST" action="javascript:void(0)">
                                                <div class="row">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    @csrf
                                                                    <div class="checkout__input" id="product_name">
                                                                        <p>Tên sản phẩm<span>*</span></p>
                                                                        <input type="text" placeholder="Tên sản phẩm" name="name_product">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="checkout__input" id="product_type">
                                                                        <p>Loại sản phẩm<span>*</span></p>
                                                                        <select class="form-select" name="type_id" size="3" aria-label="Default select example">
                                                                            @foreach ($types as $type )
                                                                                <option value="{{ $type->id}}"> {{ $type->name_type}} </option>
                                                                            @endforeach
                                                                        </select>
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
                                                                <div class="col-lg-6" id="product_price">
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
                                                                        <select class="form-select" size="3" name="brand_id" aria-label="size 3 select example">
                                                                            @foreach ($brands as $brand )
                                                                                <option value="{{ $brand->id}}" >{{ $brand->name_brand}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6" id="product_total">
                                                                    <div class="checkout__input">
                                                                        <p>Số lượng<span>*</span></p>
                                                                        <input type="text" placeholder="Số lượng" name="total_product">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="checkout__input">
                                                                <p>Mô tả<span>*</span></p>
                                                                <input type="text" placeholder="Mô tả" name="description">
                                                            </div>
                                                            <div class="checkout__input">
                                                                <p>Ảnh sản phẩm<span>*</span></p>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4" id="product_image">

                                                                    <input id="fileInput" type="file" name="image" >

                                                                </div>
                                                            </div>

                                                            <div class="d-flex justify-content-center">
                                                                <button type="submit" class="site-btn" id="submit">Thêm sản phẩm</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hãng </th>
                                <th>Loại Sản Phẩm</th>
                                <th>Hình Ảnh</th>
                                <th>Ngày Nhập</th>
                                <th>Giá</th>
                                <th>Số Lượng </th>
                                <th> Tùy Chọn</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $key => $product )
                                <tr>
                                    <th scope="row">{{ ++$key  }}</th>
                                    <td>{{ $product->name_product }}</td>
                                    <td>{{ $product->brands->name_brand }}</td>
                                    <td>{{ $product->types->name_type }}</td>

                                    <td><img src={{ asset('storage/img/product/' . $product->image)}}></td>

                                    <td>{{ $product->import_date}}</td>
                                    <td>{{ $product->price}}</td>
                                    <td>{{ $product->total_product}}</td>
                                    <td class="text-left">
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success btn-round waves-effect waves-light">
                                            <i class="fa fa-pencil-square-o"></i>
                                            Sửa
                                        </a>
                                        <button type="button" class="btn btn-danger"  data-product-id={{ $product->id }} data-url={{ route('product.delete', $product->id) }}>Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="product__pagination">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.endbar')

