<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    @if(Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
    {{Session::forget('message')}}
    @endif
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            <p class="alert alert-danger">Xin đăng nhập hoặc đăng kí trước khi nạp thẻ</p>
            @endif
        </div>
        @endif

        <form class="form-nap-the" method="POST"  action="{{ route('sendInfor') }}" > 
            <div>
                <h3 class="mb-3">1. Chọn loại thẻ cào</h3>
                <div class="d-flex flex-md-row flex-column ">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="loaithe" value="Viettel">
                            <img src="{{asset('/image/vt.png')}}">
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="loaithe" value="Vinaphone">
                            <img src="{{asset('/image/vn.png')}}">
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="loaithe" value="Mobiefone">
                            <img src="{{asset('/image/mb-h.png')}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column ">
                <h3 class="mb-3 mt-5">2. Nhập thông tin thẻ cào</h3>
                <div class="input-group mb-3">

                    <label class="input-group-text" for="inputGroupSelect01"> Mệnh giá</label>
                    <select class="" id="inputGroupSelect01" name="menhgia">
                        <option value="0">Chọn mệnh giá</option>
                        <option value="10000">10.000</option>
                        <option value="20000">20.000</option>
                        <option value="30000">30.000</option>
                        <option value="50000">50.000</option>
                        <option value="100000">100.000</option>
                        <option value="200000">200.000</option>
                        <option value="300000">300.000</option>
                        <option value="500000">500.000</option>
                        <option value="1000000">1.000.000</option>
                        <option value="2000000">2.000.000</option>
                        <option value="5000000">5.000.000</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="ma-the" class="col-form-label input-group-text">Mã thẻ </label>
                    <div class="">
                        <input type="number" class="form-control" id="ma-the" name="mathe" required>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="ma-seri" class="input-group-text col-form-label">Mã seri</label>
                    <div class="">
                        <input type="number" class="form-control" id="ma-seri" name="seri" required>
                    </div>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if (Auth::check())
            <button type="submit" class="btn btn-primary">Submit</button>
            @else
                <button type="submit" class="btn btn-primary" disabled>Submit</button>
            @endif
    </div>

    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

</html>