@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование Обявления</h1>
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
                    <form action="{{route('admin.product.update', $product->id)}}" method="POST" class="col-4" enctype='multipart/form-data'>
                        @csrf
                        @method('PATCH')
                        <div class="form-group" style="display: none">
                            <input type="text" class="form-control" name="user_id" value="{{auth()->user()->id}}" placeholder="Пользователь">
                        </div>
                        <div class="form-group">
                            <h6>Категория</h6>
                            <select name="category" class="form-control">
                                    <option>{{$product->category}}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $product->category }}" {{ $product->id == old('$category_id') ? ' selected' : ''}}>
                                        {{ $category->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <h6>Название</h6>
                            <input type="text" class="form-control" name="title" value="{{$product->title}}" placeholder="Название">
                        </div>

                        <div class="form-group">
                            <h6>Цена</h6>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Цена &#x20bd">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="content" value="{{$product->content}}" placeholder="Описание">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="transaction_type" class="form-control">--}}
{{--                                <option>{{$product->transaction_type}}</option>--}}
{{--                                @foreach($transaction_types as $type)--}}
{{--                                    <option value="{{ $type }}" {{ $type == old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $type }}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="date" value="{{$product->date}}" placeholder="Срок аренды в месяцах или до даты">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="city" value="{{$product->city}}" placeholder="Город">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="address" value="{{$product->address}}" placeholder="Адрес">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="author" class="form-control">--}}
{{--                                <option>{{$product->author}}</option>--}}
{{--                                @foreach($authors as $author)--}}
{{--                                    <option value="{{ $author }}" {{ $author == old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $author }}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="telephone" value="{{$product->telephone}}" placeholder="Тел. номер">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <p>Тип Связи</p>--}}
{{--                            <label>--}}
{{--                                <input type="checkbox" name="connection" value="Звонки"><h6>Звонки</h6>--}}
{{--                                <input type="checkbox" name="connection" value="Сообщение"><h6>Сообщение</h6>--}}
{{--                                <input type="checkbox" name="connection" value="Сообщение по Whats App"><h6>Сообщение по Whats App</h6>--}}
{{--                                <input type="checkbox" name="connection" value="Любой"><h6>Любой</h6>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="home_type" class="form-control">--}}
{{--                                <option>{{$product->home_type}}</option>--}}
{{--                                @foreach($home_types as $home_type)--}}
{{--                                    <option value="{{ $home_type}}" {{ $home_type== old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $home_type}}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="room_count" value="{{$product->room_count}}" placeholder="Кол. комнат">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="additional_attr" class="form-control">--}}
{{--                                <option>{{$product->additional_attr}}</option>--}}
{{--                                @foreach($additional_attrs as $additional_attr)--}}
{{--                                    <option value="{{ $additional_attr}}" {{ $additional_attr== old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $additional_attr}}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="total_square" value="{{$product->total_square}}" placeholder="Общая площадь м&#178;">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="living_square" value="{{$product->living_square}}" placeholder="Жилая площадь м&#178;">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="kitchen_square" value="{{$product->kitchen_square}}" placeholder="Площадь кухни м&#178;">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="bathroom" class="form-control">--}}
{{--                                <option>{{$product->bathroom}}</option>--}}
{{--                                @foreach($bathrooms as $bathroom)--}}
{{--                                    <option value="{{ $bathroom}}" {{ $bathroom== old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $bathroom}}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="repair" class="form-control">--}}
{{--                                <option>{{$product->repair}}</option>--}}
{{--                                @foreach($repairs as $repair)--}}
{{--                                    <option value="{{ $repair}}" {{ $repair== old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $repair}}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="furniture" value="{{$product->furniture}}" placeholder="Мебель">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="technique" value="{{$product->technique}}" placeholder="Элк. техника">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="internet_tv" value="{{$product->internet_tv}}" placeholder="Интернет, ТВ">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="material_house" value="{{$product->material_house}}" placeholder="Материал дома">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="year_building" value="{{$product->year_building}}" placeholder="Год постройки">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="count_floors" value="{{$product->count_floors}}" placeholder="Кол. этажей">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="elevator" class="form-control">--}}
{{--                                <option>{{$product->elevator}}</option>--}}
{{--                                @foreach($elevators as $elevator)--}}
{{--                                    <option value="{{ $elevator}}" {{ $elevator== old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $elevator}}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="parking" class="form-control">--}}
{{--                                <option>{{$product->parking}}</option>--}}
{{--                                @foreach($parkings as $parking)--}}
{{--                                    <option value="{{ $parking}}" {{ $parking== old('type_id') ? ' selected' : ''}}>--}}
{{--                                        {{ $parking}}--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="maximum_guests" value="{{$product->maximum_guests}}" placeholder="Макс. кол. Гостей">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <p>Можно с детми</p>--}}
{{--                            <label>--}}
{{--                                <input type="checkbox" name="possible_children"><h6>Да</h6>--}}
{{--                                <input type="checkbox" name="possible_children"><h6>Нет</h6>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <p>Можно с животными</p>--}}
{{--                            <label>--}}
{{--                                <input type="checkbox" name="possible_pets"><h6>Да</h6>--}}
{{--                                <input type="checkbox" name="possible_pets"><h6>Нет</h6>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <p>Можно курить</p>--}}
{{--                            <label>--}}
{{--                                <input type="checkbox" name="possible_smoking"><h6>Да</h6>--}}
{{--                                <input type="checkbox" name="possible_smoking"><h6>Нет</h6>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="communal_services" value="{{$product->communal_services}}" placeholder="Ком. услуги">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="other_services" value="{{$product->other_services}}" placeholder="Другие услуги">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="deposit" value="{{$product->deposit}}" placeholder="Залог">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputFile">Добавить Изображение</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="custom-file">--}}
{{--                                    <input type="file" class="custom-file-input" name="image[]">--}}
{{--                                    @if(isset($product->image))--}}
{{--                                    @foreach($product->image as $image)--}}
{{--                                    <label class="custom-file-label">{{$image}}</label>--}}
{{--                                    @endforeach--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <span class="input-group-text">Загрузка</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                                            {{ csrf_field() }}--}}
{{--                                <input type="file" class="custom-file-input" id="exampleVideo" name="video[]" multiple>--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">Выберите видео</label>--}}
{{--                                                            <p>--}}
{{--                                                                @if($errors->has('video'))--}}
{{--                                                                    {{$errors->first('video')}}--}}
{{--                                                                @endif--}}
{{--                                                            </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" class="custom-file-input" id="exampleAnimation" name="animation[]" multiple>--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">Выберите 3D анимацию</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" name="active" value="{{$product->active}}" placeholder="Активно">--}}
{{--                        </div>--}}
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection
