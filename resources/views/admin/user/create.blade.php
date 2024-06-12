@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Пользователя</h1>
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
                    <form action="{{route('admin.user.store')}}" method="POST" class="col-4">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Эл. адрес">
                            @error('title')
                            <div class="text-danger">Это поле обязательно к заполнению.</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Пароль">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection
