@extends('welcome')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            This Is Login Page!
        </div>
        <div class="card-body">
            <form action="{{route('loginSubmit')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
    </div>
    <a href="{{url('/register')}}">If you still don't have account</a>
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $errors)
                <li class="list-group-item text-danger">{{$errors}}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection