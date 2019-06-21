<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('register.title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/custom.css') }}">
</head>

<body>
    <div class="card bg-light">
        <div class="row  d-flex justify-content-center">
            <div class="col-5">
                <article class="card-body mx-auto">
                    <h4 class="card-title mt-3 text-center">@lang('register.cardTitle')</h4>
                    <p class="text-center">@lang('register.text')</p>
                    <p>
                        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   @lang('register.btnFb')</a>
                    </p>
                    <p class="divider-text">
                        <span class="bg-light">@lang('register.or')</span>
                    </p>
                    @include('commons.errors')
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="fullName" value="{{ old('fullName') }}" class="form-control" placeholder="@lang('register.fullNamePlaceHolder')" type="text">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" value="{{ old('email') }}" class="form-control" placeholder="@lang('register.emailPlaceHolder')" type="email">
                        </div>
                        <!-- form-group// -->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="password" value="{{ old('password') }}" class="form-control" name="password" placeholder="@lang('register.createPassPlaceHolder')" type="password">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="password_confirmation" class="form-control" placeholder="@lang('register.repeatPassPlaceHolder')" type="password">
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> @lang('register.btnSubmit') </button>
                        </div>
                        <!-- form-group// -->
                        <p class="text-center">@lang('register.haveAccount') <a href="">@lang('register.login')</a> </p>
                    </form>
                </article>
            </div>
        </div>

    </div>
    <!-- card.// -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('fonts/font-awesome/js/all.js') }}"></script>
</body>

</html>
