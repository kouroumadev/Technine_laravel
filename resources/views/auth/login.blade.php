<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/vendors/images/favicon-16x16.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css
    " rel="stylesheet">

</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                    <h3 class="mb-5">Sign in</h3>

                    <div class="form-outline mb-4">
                        <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="Enter your Email ID"/>

                        @error('email')
                        <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                        @error('password')
                        <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                    <hr class="my-4">

                    <a href="{{ route('register') }}" class="btn btn-lg btn-block btn-info"
                        type="submit"> Registration</a>


                    </div>
                </div>
                </div>
            </div>
            </div>
        </form>
      </section>


     <!-- success Popup html End -->
    <!-- js -->
    <script src="{{ asset('theme/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/layout-settings.js') }}"></script>
</body>

</html>

