@extends('layouts.template')

@section('content')
<form action="{{ route('login.auth') }}" class="card p-5" method="post">
@csrf
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control">
    @error('password')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
</form>
    
@endsection