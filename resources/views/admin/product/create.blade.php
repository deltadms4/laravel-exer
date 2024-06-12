@extends('admin.main.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Обявления</h1>
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

                    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data" class="col-4">
                        @csrf
                        <div class="form-group" style="display: none">
                            <input type="text" class="form-control" name="user_id" value="{{auth()->user()->id}}" placeholder="Пользователь">
                        </div>
                        <div class="form-group">
                        <select name="category" class="form-control">
                            <option>Категория</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : ''}}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Название">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="price" placeholder="Цена &#x20bd">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="content" placeholder="Описание">
                        </div>
                        <div class="form-group">
                            <select name="transaction_type" class="form-control">
                                <option>Тип сделки</option>
                                @foreach($transaction_types as $type)
                                    <option value="{{ $type }}" {{ $type == old('type_id') ? ' selected' : ''}}>
                                       {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="date" placeholder="Срок аренды в месяцах или до даты">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="Город">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Адрес">
                        </div>
                        <div class="form-group">
                            <select name="author" class="form-control">
                                <option>Автор</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author }}" {{ $author == old('type_id') ? ' selected' : ''}}>
                                        {{ $author }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="telephone" placeholder="Тел. номер">
                        </div>
                        <div class="form-group">
                            <p>Тип Связи</p>
                            <label>
                                <input type="checkbox" name="connection" value="Звонки"><h6>Звонки</h6>
                                <input type="checkbox" name="connection" value="Сообщение"><h6>Сообщение</h6>
                                <input type="checkbox" name="connection" value="Сообщение по Whats App"><h6>Сообщение по Whats App</h6>
                                <input type="checkbox" name="connection" value="Любой"><h6>Любой</h6>
                            </label>
                        </div>
                        <div class="form-group">
                            <select name="home_type" class="form-control">
                                <option>Тип дома</option>
                                @foreach($home_types as $home_type)
                                    <option value="{{ $home_type}}" {{ $home_type== old('type_id') ? ' selected' : ''}}>
                                        {{ $home_type}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="room_count" placeholder="Кол. комнат">
                        </div>
                        <div class="form-group">
                            <select name="additional_attr" class="form-control">
                                <option>Доп. пространства</option>
                                @foreach($additional_attrs as $additional_attr)
                                    <option value="{{ $additional_attr}}" {{ $additional_attr== old('type_id') ? ' selected' : ''}}>
                                        {{ $additional_attr}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="total_square" placeholder="Общая площадь м&#178;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="living_square" placeholder="Жилая площадь м&#178;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kitchen_square" placeholder="Площадь кухни м&#178;">
                        </div>
                        <div class="form-group">
                            <select name="bathroom" class="form-control">
                                <option>Санузел</option>
                                @foreach($bathrooms as $bathroom)
                                    <option value="{{ $bathroom}}" {{ $bathroom== old('type_id') ? ' selected' : ''}}>
                                        {{ $bathroom}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="repair" class="form-control">
                                <option>Ремонт</option>
                                @foreach($repairs as $repair)
                                    <option value="{{ $repair}}" {{ $repair== old('type_id') ? ' selected' : ''}}>
                                        {{ $repair}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="furniture" placeholder="Мебель">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="technique" placeholder="Элк. техника">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="internet_tv" placeholder="Интернет, ТВ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="material_house" placeholder="Материал дома">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="year_building" placeholder="Год постройки">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="count_floors" placeholder="Кол. этажей">
                        </div>
                        <div class="form-group">
                            <select name="elevator" class="form-control">
                                <option>Лифт</option>
                                @foreach($elevators as $elevator)
                                    <option value="{{ $elevator}}" {{ $elevator== old('type_id') ? ' selected' : ''}}>
                                        {{ $elevator}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="parking" class="form-control">
                                <option>Парковка</option>
                                @foreach($parkings as $parking)
                                    <option value="{{ $parking}}" {{ $parking== old('type_id') ? ' selected' : ''}}>
                                        {{ $parking}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="maximum_guests" placeholder="Макс. кол. Гостей">
                        </div>
                        <div class="form-group">
                            <p>Можно с детми</p>
                            <label>
                                <input type="checkbox" name="possible_children"><h6>Да</h6>
                                <input type="checkbox" name="possible_children"><h6>Нет</h6>
                            </label>
                        </div>
                        <div class="form-group">
                            <p>Можно с животными</p>
                            <label>
                                <input type="checkbox" name="possible_pets"><h6>Да</h6>
                                <input type="checkbox" name="possible_pets"><h6>Нет</h6>
                            </label>
                        </div>
                        <div class="form-group">
                            <p>Можно курить</p>
                            <label>
                                <input type="checkbox" name="possible_smoking"><h6>Да</h6>
                                <input type="checkbox" name="possible_smoking"><h6>Нет</h6>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="communal_services" placeholder="Ком. услуги">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="other_services" placeholder="Другие услуги">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="deposit" placeholder="Залог">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Добавить Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image[]">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="custom-file">
{{--                            {{ csrf_field() }}--}}
                            <input type="file" class="custom-file-input" id="exampleVideo" name="video[]" multiple>
                            <label class="custom-file-label" for="exampleInputFile">Выберите видео</label>
{{--                            <p>--}}
{{--                                @if($errors->has('video'))--}}
{{--                                    {{$errors->first('video')}}--}}
{{--                                @endif--}}
{{--                            </p>--}}
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleAnimation" name="animation[]" multiple>
                                <label class="custom-file-label" for="exampleInputFile">Выберите 3D анимацию</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="active" placeholder="Активно">
                        </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </form>
                </div>
                </div>
            </section>

        </div>
    @endsection
