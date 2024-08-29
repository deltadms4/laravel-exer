<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



/opt/php/8.1/bin/php composer.phar install

/opt/php/8.1/bin/php artisan migrate:refresh --seed


# Вилки на бек 
# Для клиента


## '/api/user/id' - выводит по id пользователя  запрос,

## '/api/user/add' - добавляет пользователя  но запрос регистрация
## {
##    "name": "Delta",
##    "email": "delta@gmail.com",
##    "password": "pdokjiojgr4334",
## },

## '/api/auth/login' - вход в аккаунт 
## {
## "email": "delta@gmail.com",
## "password": "pdokjiojgr4334"
## },

## '/api/auth/logout' - выход {"Bearer $token"},

## '/api/auth/refresh' - обновить {старый токен отправить},

## '/api/auth/me' - авторизованный пользователь {действующий токен отправить},


## '/api/product/index' - выводит все продукты запрос post 
## {
## "int": "integer"
## },
## '/api/product/id' - выводит по id продукты запрос post 
## {
##   "id": "integer"
## },

## '/api/product/main' - выводит последние 12 продуктов запрос post,

## '/api/product/add' - добавляет продукт но запрос 
## "user_id" => "nullable|string",
## "category" => "nullable|string",
## "title" => "nullable|string",
## "content" => "nullable|string",
## "price" => "nullable|string",
## "transaction_type" => "nullable|string",
## "date" => "nullable|string",
## "city" => "nullable|string",
## "address" => "nullable|string",
## "author" => "nullable|string",
## "telephone" => "nullable|string",
## "connection" => "nullable|string",
## "home_type" => "nullable|string",
## "room_count" => "nullable|string",
## "additional_attr" => "nullable|string",
## "total_square" => "nullable|string",
## "living_square" => "nullable|string",
## "kitchen_square" => "nullable|string",
## "bathroom" => "nullable|string",
## "repair" => "nullable|string",
## "furniture" => "nullable|string",
## "technique" => "nullable|string",
## "internet_tv" => "nullable|string",
## "material_house" => "nullable|string",
## "year_building" => "nullable|string",
## "count_floors" => "nullable|string",
## "elevator" => "nullable|string",
## "parking" => "nullable|string",
## "maximum_guests" => "nullable|string",
## "possible_children" => "nullable|string",
## "possible_pets" => "nullable|string",
## "possible_smoking" => "nullable|string",
## "communal_services" => "nullable|string",
## "other_services" => "nullable|string",
## "deposit" => "nullable|string",
## "image" => "nullable|array",
## "video" => "nullable|file",
## "3D_animation" => "nullable|file",
## "active" => "nullable|string",
## },

## '/api/product/update' - обновляет продукт по id можно только 1 атрибут или много
## {
## "id": "integer",
## "ваш атрибут": "ваше значение"
## },

## '/api/product/delete' - удаляет продукт по id post
## {
## "id": "1"
## }

## '/api/category/index' - выводит все категории запрос post,

## '/api/category/id' - выводит по id категории  запрос post 
## {
## "id": "integer"
## },

## '/api/category/parent' - выводит дочерние категории по родительскому id 
## {
## "parent_id": "integer"
## },



<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## About Laravel


## '/admin/user/index' - выводит все пользователя запрос post,

## '/admin/user/id' - выводит по id пользователя  запрос post,

## '/admin/user/add' - добавляет пользователя  но запрос post 
## {
## "name":"delta", 
## "email":"delta@gmail.com", 
## "password":"thsdae3453"
## },

## '/admin/user/update' - обновляет пользователя  по id можно только 1 атрибут или много запрос post
## {"id": "integer",
## "ваш атрибут": "ваше значение"
## },

## '/admin/user/delete' - удаляет пользователя  по id post
## {
## "id": "1"
## }

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


## '/admin/category/index' - выводит все категории запрос post,

## '/admin/category/id' - выводит по id категории  запрос post 
## {
## "id":"integer"
## },

## '/admin/category/parent' - выводит дочерние категории по родительскому id 
## {"parent_id": "integer"
## },

## '/admin/category/add' - добавляет категории запрос post 
## {
## "user_id": "integer|nullable",
## "category": "parent_id|nullable" ,
## "title": "string",
## "active": "boolean"},

## '/admin/category/update' - обновляет категории  по id можно только 1 атрибут или много запрос post 
## {"id": "integer",
## "ваш атрибут": "ваше значение"
## },

## '/admin/category/delete' - удаляет категории  по id post
## {
## "id": "1"
## }

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## Learning Laravel


## '/admin/product/index' - выводит все продукты запрос post 
## {"int": "integer"
## },

## '/admin/product/id' - выводит по id продукты запрос post 
## {
## "id": "integer"
## },

## '/admin/product/main' - выводит последние 12 продуктов запрос post,

## '/admin/product/add' - добавляет продукт но запрос post 
## {
## "user_id" => "nullable|string",
## "category" => "nullable|string",
## "title" => "nullable|string",
## "content" => "nullable|string",
## "price" => "nullable|string",
## "transaction_type" => "nullable|string",
## "date" => "nullable|string",
## "city" => "nullable|string",
## "address" => "nullable|string",
## "author" => "nullable|string",
## "telephone" => "nullable|string",
## "connection" => "nullable|string",
## "home_type" => "nullable|string",
## "room_count" => "nullable|string",
## "additional_attr" => "nullable|string",
## "total_square" => "nullable|string",
## "living_square" => "nullable|string",
## "kitchen_square" => "nullable|string",
## "bathroom" => "nullable|string",
## "repair" => "nullable|string",
## "furniture" => "nullable|string",
## "technique" => "nullable|string",
## "internet_tv" => "nullable|string",
## "material_house" => "nullable|string",
## "year_building" => "nullable|string",
## "count_floors" => "nullable|string",
## "elevator" => "nullable|string",
## "parking" => "nullable|string",
## "maximum_guests" => "nullable|string",
## "possible_children" => "nullable|string",
## "possible_pets" => "nullable|string",
## "possible_smoking" => "nullable|string",
## "communal_services" => "nullable|string",
## "other_services" => "nullable|string",
## "deposit" => "nullable|string",
## "image" => "nullable|array",
## "video" => "nullable|file",
## "3D_animation" => "nullable|file",
## "active" => "nullable|string",
## },

## '/admin/product/update' - обновляет продукт по id можно только 1 атрибут или много запрос post
## {
## "id": "integer",
## "ваш атрибут": "ваше значение"
## },

## '/admin/product/delete' - удаляет продукт по id post
## {
## "id": "1"
## },





Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners


- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
