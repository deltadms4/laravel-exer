@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="card">
                                <div class="col-1 mt-2" style="left: 80%">
                                    <a href="{{route('admin.category.create')}}" type="button" class="btn btn-block btn-primary">+</a>
                                </div>
                            <div class="card-body">

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        @foreach($columns as $column)
                                        <th>{{ucfirst($column)}}</th>
                                        @endforeach
                                            <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->user_id}}</td>
                                        <td>{{$category->parent_id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>{{$category->active}}</td>
                                        <td><a href="{{route('admin.category.show', $category->id)}}"><i class="ml-2 far fa-eye"></i></a>
                                            <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="ml-2 fas fa-pencil-alt"></i></a>
                                            <form action="{{route('admin.category.delete', $category->id)}}" method="POST" style="margin-top: -23px; margin-left: 65px">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0"> <i class="fas fa-dumpster-fire text-danger" role="button"></i></button>
                                            </form>
                                        </td>
{{--                                        <td>--}}
{{--                                            <div class="progress progress-xs">--}}
{{--                                                <div class="progress-bar bg-warning" style="width: 70%"></div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}

                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>


@endsection
