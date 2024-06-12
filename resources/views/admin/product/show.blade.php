@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$product->title}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li style="rotate: 180deg;"><a href="{{route('admin.product.index')}}" class="fas fa-share m"></a></li>
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

                <div class="row col-6">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive Hover Table</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <thead>
                                    <tr>
                                        @foreach($columns as $column)
                                            <th>{{ucfirst($column)}}</th>
                                        @endforeach
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->user_id}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->content}}</td>
                                        <td>{{$product->transaction_type}}</td>
                                        <td>{{$product->date}}</td>
                                        <td>{{$product->city}}</td>
                                        <td>{{$product->address}}</td>
                                        <td>{{$product->author}}</td>
                                        <td>{{$product->telephone}}</td>
                                        <td>{{$product->connection}}</td>
                                        <td>{{$product->home_type}}</td>
                                        <td>{{$product->room_count}}</td>
                                        <td>{{$product->additional_attr}}</td>
                                        <td>{{$product->totla_square}}</td>
                                        <td>{{$product->living_square}}</td>
                                        <td>{{$product->kitcheb_square}}</td>
                                        <td>{{$product->bathroom}}</td>
                                        <td>{{$product->repair}}</td>
                                        <td>{{$product->furniture}}</td>
                                        <td>{{$product->technique}}</td>
                                        <td>{{$product->internet_tv}}</td>
                                        <td>{{$product->material_house}}</td>
                                        <td>{{$product->year_building}}</td>
                                        <td>{{$product->count_floors}}</td>
                                        <td>{{$product->elevator}}</td>
                                        <td>{{$product->parking}}</td>
                                        <td>{{$product->maximum_guests}}</td>
                                        <td>{{$product->possible_children}}</td>
                                        <td>{{$product->possible_pets}}</td>
                                        <td>{{$product->possible_smoking}}</td>
                                        <td>{{$product->communal_services}}</td>
                                        <td>{{$product->other_services}}</td>
                                        <td>{{$product->deposit}}</td>
                                        <td>
                                            @if(isset($product->image))
                                        @foreach($product->image as $image)
                                            <img src="{{'storage/' . $image}}" width="100px" height="50px" alt="">
                                        @endforeach
                                            @endif
                                        </td>
                                        <td>{{$product->video}}</td>
                                        <td>{{$product->animation}}</td>
                                        <td>{{$product->active}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td>{{$product->deleted_at}}</td>
                                        <td class="mr-5">
                                            <a href="{{route('admin.product.edit', $product->id)}}" class="text-success"><i class="ml-4 fas fa-pencil-alt"></i></a>
                                            <form action="{{route('admin.product.delete', $product->id)}}" method="POST"  style="margin-top: -23px; margin-left: 65px">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0"><i class="fas fa-dumpster-fire text-danger" role="button"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
