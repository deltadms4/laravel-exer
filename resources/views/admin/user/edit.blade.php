@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование Пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="col-4">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control mb-2" name="name" placeholder="Имя" value="{{$user->name}}">
                            <input type="text" class="form-control mb-2" name="email" placeholder="Эл. адрес" value="{{$user->email}}">
                            <input type="text" class="form-control mb-2" name="password" placeholder="Пароль">
                            <input type="text" class="form-control mb-2" name="role" placeholder="Роль" value="{{$user->role}}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection
