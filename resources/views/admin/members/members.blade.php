@extends('admin.admindash')

@section('content')
  <div class="row">
    <div class="col-md-4">
      <a href="/system/create" class="btn btn-lg btn-primary">REGISTER MEMBER</a>
    </div>

    <div class="col-md-4">
      <a href="/system/member/view" class="btn btn-lg btn-primary">VIEW REGISTER</a>
    </div>

    <div class="col-md-4">
      <a href="/system/deregister" class="btn btn-lg btn-primary">DEREGISTER MEMBER</a>
    </div>

  </div>
  @yield('members')
@endsection
