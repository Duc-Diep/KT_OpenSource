@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>Đăng kí thành công</p>
        </div>
    @endif
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Đăng kí học phần') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="dang-ky-hoc-phan" method="post">
                        @csrf
                        <input class="form-control form-control-lg" name="user_id" value="1" hidden type="text">
                        <p>Môn học</p>
                        <select class="form-control" id="monhoc_id" name="monhoc_id">
                            <option value="1">Java</option>
                            <option value="2">C#</option>
                            <option value="3">OOP</option>
                            <option value="4">C++</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-3">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
