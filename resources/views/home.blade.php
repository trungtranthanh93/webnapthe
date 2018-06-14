@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Giao diện</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Đăng nhập thành công .
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
    <div>Copyright © PhungGiaThuan</div>
    <div><strong>Trụ sở :</strong> số 68- TT Hợp Hòa- Tam Dương- Vĩnh Phúc</div>
    <div>Hotline: 098.316.0666 - Email: phuonglien210193@gmail.com  
    </div>
</footer>
@endsection

