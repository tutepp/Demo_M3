
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#create-form').submit(function () {
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '/product/create',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            async: true,
            success: function (data) {
                // reset form fields
                $('#create-form')[0].reset();
                console.log(data.products);
                // Them thong bao thanh cong
                $('#product_image').append('<p class="text-success">Them moi thanh cong!</p>');

                $('.table').find('tbody').empty();
                //Them san pham moi tao vao table
                let html = [];

                $.each(data.products, function (index, product) {
                    html.push('<tr><th scope="row">' + ++index + '</th>' +
                        '<td>' + product.name_product + '</td>' +
                        '<td>' + product.brands.name_brand + '</td>' +
                        '<td>' + product.types.name_types + '</td>' +
                        '<td><img src="' + 'http://127.0.0.1:8000/storage/img/product/' + product.image + '" alt="image"></td>' +
                        '<td>' + product.import_date + '</td>' +
                        '<td>' + product.price + '</td>' +
                        '<td>' + product.total_product + '</td>');
                    html.push('<td><button class="btn btn-success">Edit</button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-product-id="' + product.id + '" >Delete</button></td></tr>');
                });

                $('.table').find('tbody').append(html.join(""));
            },
            error: function (data) {
                console.log(data.responseJSON.errors);
                $('#create-form').find('p').remove();

                if (data.responseJSON.errors.name) {
                    $('#product_name').append('<p class="text-danger">' + errorName + '</p>');
                }

                if (data.responseJSON.errors.price) {
                    $('#product_price').append('<p class="text-danger">' + errorPrice + '</p>');
                }

                if (data.responseJSON.errors.total_product) {
                    $('#product_total').append('<p class="text-danger">' + errorTotal + '</p>');
                }
            }
        });
    });
    function actionDelete(event){
        event.preventDefault();
        let urlRequest = $(this).data('url');
        let that = $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'GET',
                    url: urlRequest,
                    success: function (data) {
                        console.log(data);
                        if(data.code===200){
                            that.parent().parent().remove();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }

                    },
                    error: function (data) {

                    }
                });
            }
        })
    }
    $(function (){
        $(document).on('click', '.btn-danger', actionDelete)
    })
});

