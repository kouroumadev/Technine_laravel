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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css
    " rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/src/plugins/jquery-steps/jquery.steps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/styles/style.css') }}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>

</head>

<body>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                      <form method="POST" id="" action="{{ route('register') }}" class="mx-1 mx-md-4">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">

                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="name" id="form3Example1c" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required />
                            @error('name')
                            <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">

                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" required />
                            @error('email')
                            <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">

                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" required />
                            @error('password')
                            <div class="alert alert-danger" role="alert"> {{ $message }}</div>
                            @enderror
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">

                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password_confirmation" id="form3Example4cd" class="form-control" required />
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" type="button" class="btn btn-primary btn-lg">Register</button>
                        </div>


                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


     <!-- success Popup html End -->
    <!-- js -->
    <script src="{{ asset('theme/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('theme/src/plugins/jquery-steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('theme/vendors/scripts/steps-setting.js') }}"></script>
</body>

</html>

