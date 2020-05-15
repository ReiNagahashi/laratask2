@extends('welcome')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            This Is Register Page!
        </div>
        <div class="card-body">
            <form action="{{route('registerSubmit')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Register">
            </form>
        </div>
    </div>
    <a href="{{url('/login')}}">Have you already had your account?</a>
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $errors)
               <li class="list-group-item text-danger">{{$errors}}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection