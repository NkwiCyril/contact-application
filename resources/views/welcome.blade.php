@extends('layout.app')

@section('content')
<div class="py-5 bg-white">
  <div class="px-4 my-5 text-center">
    <h1 class="display-5 fw-bold mt-4">Contact App</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>
      <div class="d-flex justify-content-sm-center">
        <a href="/register" class="btn btn-primary btn-lg mr-2">Sign up</a>
        <a href="/login" class="btn btn-outline-secondary btn-lg">Sign in</a>
      </div>
    </div>
  </div>
</div>
<footer class="py-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md">
        <strong>Contact App</strong>
        <small class="d-block mb-3">© 2021-2022</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a href="#">Email Marketing</a></li>
          <li><a href="#">Email Template</a></li>
          <li><a href="#">Email Broadcast</a></li>
          <li><a href="#">Autoresponder Email</a></li>
          <li><a href="#">RSS-to-Email</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a href="#">Landing page Guide</a></li>
          <li><a href="#">Inbound Marketing Guide</a></li>
          <li><a href="#">Email Marketing Guide</a></li>
          <li><a href="#">Helpdesk Guide</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a href="#">Team</a></li>
          <li><a href="#">Locations</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
@endsection