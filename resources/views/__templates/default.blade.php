<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>

    {{-- Header or Navbar --}}
    @include('__templates.includes.header')


    {{-- Main Content --}}
    @section('main-content')
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg"
                alt="" width="72" height="57">
            <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-themes.png"
                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                        loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                        most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                        system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="container px-5 py-5 text-center">
            <main>
                <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
                <div class="row row-cols-1 row-cols-md-3 mb-5 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0<small
                                        class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 users included</li>
                                    <li>2 GB of storage</li>
                                    <li>Email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for
                                    free</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15<small
                                        class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>20 users included</li>
                                    <li>10 GB of storage</li>
                                    <li>Priority email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-bg-primary border-primary">
                                <h4 class="my-0 fw-normal">Enterprise</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$29<small
                                        class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>30 users included</li>
                                    <li>15 GB of storage</li>
                                    <li>Phone and email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="display-6 text-center mb-4">Compare plans</h2>

                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th style="width: 34%;"></th>
                                <th style="width: 22%;">Free</th>
                                <th style="width: 22%;">Pro</th>
                                <th style="width: 22%;">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="check" viewBox="0 0 16 16">
                                        <path
                                            d="M13.485 1.929L5.5 9.914 2.515 6.929a1 1 0 1 0-1.415 1.414l3.5 3.5a1 1 0 0 0 1.415 0l8.5-8.5a1 1 0 0 0-1.415-1.414z" />
                                    </symbol>
                                </svg>

                                <th scope="row" class="text-start">Public</th>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Private</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Permissions</th>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Sharing</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Unlimited members</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Extra security</th>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check"></use>
                                    </svg></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>


        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form</h1>
                    <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each
                        required form group has a validation state that can be triggered by attempting to submit the form
                        without completing it.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                        <hr class="my-4">
                        <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                    </form>
                </div>
            </div>
        </div>
    @show




    {{-- Footer --}}
    @include('__templates.includes.footer')
</body>

</html>
