@extends('layout.app')

@section('content')

<div class="auth-wrapper d-flex bg-light">
  <div class="col-md-4 m-auto">
    <div class="bg-white shadow-sm">
      <h1 class="border-bottom p-4">Register</h1>

      <div class="px-4 pt-4">

        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" />
          </div>
          <div class="mt-4 d-grid">
            <button type="submit" class="btn btn-block btn-primary">Register</button>
            <div class="text-center py-4 text-muted">
              Already have account?
              <a href="login.html" class="text-muted font-weight-bold text-decoration-none">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection