@extends('__templates.default')
@section('title','Register')
@section('main-content')

<main class="form-signin w-100 m-auto">
    @if ($errors->any())
    <ul>
       {!! implode('' , $errors->all('<li>:message</li>')) !!}
    </ul>
    @endif
    <form action="{{ route('store') }}" method="post">
    @csrf
      <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="username" placeholder="Username">
        <label for="username">Username</label>
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control " id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password_confirmation" class="form-control " id="password_confirmation" placeholder="Confirm Password">
        <label for="password_confirmation">Confirm Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
    </form>
  </main>

  @endsection
