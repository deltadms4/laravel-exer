@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input class="btn btn-outline-danger" type="submit" value="Выйти">
                    </form>
                </li>
            </div>
        </div>
    </div>
</div>
@endsection
