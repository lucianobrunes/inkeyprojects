<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset(getSettingValue('favicon')) }}" type="image/x-icon" sizes="16x16">
    <meta name="description" content="Infy-Tracker">
    <meta name="keyword" content="Bootstrap,Admin,Template,InfyOm,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <!-- Bootstrap-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{mix('assets/style/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons/css/simple-line-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
</head>
<body class="c-app flex-row align-items-center">
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="login-brand">
                        <img src="{{ asset('assets/img/logo-red-black.png') }}" alt="logo" width="100"
                             class="shadow-light">
                    </div>
                    @yield('content')
                    <div class="simple-footer">
                        {{ __('messages.common.all_rights_reserved_copyright') }} &copy; {{ date('Y') }} {{ getAppName() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
@yield('scripts')

</body>
</html>
