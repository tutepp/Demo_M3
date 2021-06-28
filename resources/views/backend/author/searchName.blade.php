@extends('layout.index')

@section('backend')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h3 class="h3 mb-2 text-gray-800">Danh sach tim kiem</h3>
        <p class="mb-4">
            <a href="{{asset('author/create')}}">
                <button type="button" class="btn btn-primary">Thêm tac gia</button>
            </a>
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sach tac gia</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên tác giả</th>
                            <th> Tuoi </th>
                            <th>Que quan</th>
                            <th>Chuc nang</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($authors as $key => $author )
                            <tr>
                                <th scope="row">{{ ++$key  }}</th>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->age }}</td>
                                <td>{{ $author->country }}</td>
                                <td class="text-left">
                                    <a href="{{ route('author.show-edit', $author->id) }}" ><i class="c-light-blue ti-pencil"></i>Edit</a> |

                                    <a href="{{route('author.delete', $author->id)}}" onclick="return confirm('Ban co muon xoa du lieu khong?')">
                                        <i class="ti-trash text-danger"></i>Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
