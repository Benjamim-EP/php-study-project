
@extends('site.master')
@section('content')
    <h2>Login</h2>
    <div id="errors"></div>
    <form>
        <input type="text" name="email" value="donnelly.maude@yahoo.com">
        <input type="password" name="password" value="123">
        <button id="btn-login">Login</button>
    </form>

    @section('scripts')
        <script src="/dist/login.js"></script>
    @endsection
@stop
