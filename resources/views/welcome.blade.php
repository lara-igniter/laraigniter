<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="shortcut icon" href="{{ site_url('favicon.ico') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.remove-upcase-accents.js') }}"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="top-right links">
                @if (app()->ion_auth->logged_in())
                    <a href="{{ route('home') }}">{{ lang('dashboard') }}</a>
                @else
                    <a href="{{ route('login') }}">{{ lang('login_submit_btn') }}</a>
                @endif
            </div>

            <div class="content">
                <div class="title m-b-md">
                    {{ env('APP_NAME') }}
                </div>

                <div class="links">
                    <a href="https://codeigniter.com/docs">Docs</a>
                    <a href="https://codeigniter.com/community">Community</a>
                    <a href="https://forum.codeigniter.com/">Forum</a>
                    <a href="http://benedmunds.com/ion_auth/">IonAuth</a>
                    <a href="https://github.com/bcit-ci/CodeIgniter/">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
