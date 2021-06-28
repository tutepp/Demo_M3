@extends('layout.index')

@section('backend')
    <div>
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Them Tac Gia</h1>
            </div>
            <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        <p style="color:red">{{ $nameError }}</p>
                    @endforeach
                @endif
            </div>
            <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
            <div class="form-custom-validation">
            <form class="user" method="post" action="{{route("author.store")}}">

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        @csrf
                        <label  for="name">Ten tac gia</label>
                        <input type="text" class="form-control form-control-user" name="name"
                               placeholder="Tên tác giả">
                    </div>
                    <div class="col-sm-6">
                        <label >Ngày sinh</label>
                        <input type="date" class="form-control form-control-user" name="year_of_birth"
                               placeholder="Ngày sinh">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label >Ngay mat</label>
                        <input type="date" class="form-control form-control-user"
                              name="year_of_dead" placeholder="Tên tác giả">
                    </div>
                    <div class="col-sm-6">
                        <label  for="age">Tuoi</label>
                        <input type="text" class="form-control form-control-user"
                               name="age" placeholder="">
                    </div>
                </div>Tuoi
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label >Chon anh</label>
                        <input type="file" class="form-control-user"
                                name="image" placeholder="Tên tác giả">
                    </div>
                    <div class="col-sm-6">
                        <label >Quoc tich</label>
                        <input type="text" class="form-control form-control-user"
                               name="country" placeholder="Quoc tich">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label >Mo ta</label>
                        <input type="text" class="form-control form-control-user"
                               name="description" placeholder="Mo ta">
                    </div>
                    <div class="col-sm-6">
                        <label >Summary</label>
                        <input type="text" class="form-control form-control-user"
                               name="summary" placeholder="Summary">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-user ">
                        Them tac gia
                    </button>
                    <a href="{{asset('author')}}" class="btn btn-primary btn-user ">
                        Quay lai
                    </a>
                </div>

            </form>
            </div>
        </div>
    </div>
@endsection
