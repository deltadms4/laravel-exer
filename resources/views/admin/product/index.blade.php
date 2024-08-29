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
                                    <a href="{{route('admin.product.create')}}" type="button" class="btn btn-block btn-primary">+</a>
                                </div>
                            <div class="card-body table-responsive p-0">
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
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->user_id}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->price}}</td>
{{--                                        <td>{{$product->content}}</td>--}}
{{--                                        <td>{{$product->transaction_type}}</td>--}}
{{--                                        <td>{{$product->date}}</td>--}}
{{--                                        <td>{{$product->city}}</td>--}}
{{--                                        <td>{{$product->address}}</td>--}}
{{--                                        <td>{{$product->author}}</td>--}}
{{--                                        <td>{{$product->telephone}}</td>--}}
{{--                                        <td>{{$product->connection}}</td>--}}
{{--                                        <td>{{$product->home_type}}</td>--}}
{{--                                        <td>{{$product->room_count}}</td>--}}
{{--                                        <td>{{$product->additional_attr}}</td>--}}
{{--                                        <td>{{$product->totla_square}}</td>--}}
{{--                                        <td>{{$product->living_square}}</td>--}}
{{--                                        <td>{{$product->kitcheb_square}}</td>--}}
{{--                                        <td>{{$product->bathroom}}</td>--}}
{{--                                        <td>{{$product->repair}}</td>--}}
{{--                                        <td>{{$product->furniture}}</td>--}}
{{--                                        <td>{{$product->technique}}</td>--}}
{{--                                        <td>{{$product->internet_tv}}</td>--}}
{{--                                        <td>{{$product->material_house}}</td>--}}
{{--                                        <td>{{$product->year_building}}</td>--}}
{{--                                        <td>{{$product->count_floors}}</td>--}}
{{--                                        <td>{{$product->elevator}}</td>--}}
{{--                                        <td>{{$product->parking}}</td>--}}
{{--                                        <td>{{$product->maximum_guests}}</td>--}}
{{--                                        <td>{{$product->possible_children}}</td>--}}
{{--                                        <td>{{$product->possible_pets}}</td>--}}
{{--                                        <td>{{$product->possible_smoking}}</td>--}}
{{--                                        <td>{{$product->communal_services}}</td>--}}
{{--                                        <td>{{$product->other_services}}</td>--}}
{{--                                        <td>{{$product->deposit}}</td>--}}
{{--                                        <td>--}}
{{--                                            @if(isset($product->image))--}}
{{--                                            @foreach($product->image as $image)--}}
{{--                                            <img src="{{'storage/' . $product->image}}" width="100px" height="50px" alt="">--}}
{{--                                            @endforeach--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
{{--                                        <td>{{$product->video}}</td>--}}
{{--                                        <td>{{$product->animation}}</td>--}}
{{--                                        <td>{{$product->active}}</td>--}}
{{--                                        <td>{{$product->created_at}}</td>--}}
{{--                                        <td>{{$product->updated_at}}</td>--}}
{{--                                        <td>{{$product->deleted_at}}</td>--}}
                                        <td><a href="{{route('admin.product.show', $product->id)}}"><i class="ml-2 far fa-eye"></i></a>
                                                <a href="{{route('admin.product.edit', $product->id)}}" class="text-success"><i class="ml-2 fas fa-pencil-alt"></i></a>
                                            <form action="{{route('admin.product.delete', $product->id)}}" method="POST"  style="margin-top: -23px; margin-left: 65px">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0"><i class="fas fa-dumpster-fire text-danger" role="button"></i></button>
                                            </form>
                                        </td>
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
