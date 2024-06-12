@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование Категории</h1>
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
                    <div class="col-12" >
                        Добавить Категорию
                    </div>
                    <form action="{{route('admin.category.update', $category->id)}}" method="POST" class="col-4">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_id" placeholder="Пользователь" value="{{auth()->user()->id}}" style="display: none;">
                            <input type="text" class="form-control" name="parent_id" placeholder="Родительская Категория" value="{{$category->parent_id}}">
                            <input type="text" class="form-control" name="title" placeholder="Название" value="{{$category->title}}">
                            <input type="text" class="form-control" name="active" placeholder="Активно" value="{{$category->active}}">

                        </div>
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection
