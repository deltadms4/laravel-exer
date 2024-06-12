@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Категории</h1>
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
                    <form action="{{route('admin.category.store')}}" method="POST" class="col-4">
                        @csrf
                        <div class="form-group" style="display:none;">
                            <input type="text" class="form-control" name="user_id" placeholder="Пользователь" value="{{auth()->user()->id}}">
                        </div>
                        <div class="form-group">
                            <select name="parking" class="form-control">
                                @foreach($categories as $category)
                                    <option>Категория</option>
                                    <option value="{{ $category->id}}" {{ $category->title== old('type_id') ? ' selected' : ''}}>
                                        {{ $category->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Категория">
                            @error('title')
                            <div class="text-danger">Это поле обязательно к заполнению.</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="active" placeholder="Активно">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection
