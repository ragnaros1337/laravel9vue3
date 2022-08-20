git 0ab96f0b7c55966f5402b99e37268a0e9dacd03e

---

# База данных · Постраничная навигация

- [Введение](#introduction)
- [Основы использования](#basic-usage)
    - [Разбиение результатов построителя запросов](#paginating-query-builder-results)
    - [Разбиение результатов Eloquent](#paginating-eloquent-results)
    - [Самостоятельное создание пагинатора](#manually-creating-a-paginator)
    - [Настройка URL-адресов постраничной навигации](#customizing-pagination-urls)
- [Отображение результатов постраничной навигации](#displaying-pagination-results)
    - [Регулирование количества отображаемых ссылок](#adjusting-the-pagination-link-window)
    - [Преобразование результатов в JSON](#converting-results-to-json)
- [Настройка вида пагинации](#customizing-the-pagination-view)
    - [Использование Bootstrap](#using-bootstrap)
- [Методы экземпляра пагинатора](#paginator-instance-methods)

<a name="introduction"></a>
## Введение

В других фреймворках постраничная навигация может быть очень болезненной. Мы надеемся, что подход Laravel к разбиению на страницы станет глотком свежего воздуха. Пагинатор Laravel интегрирован с [построителем запросов](/docs/{{version}}/queries) и [Eloquent ORM](/docs/{{version}}/eloquent) и обеспечивает удобную, простую в использовании разбивку на страницы записей базы данных с нулевой конфигурацией.

По умолчанию HTML, генерируемый пагинатором, совместим с [фреймворком Tailwind CSS](https://tailwindcss.com/); однако, также доступна поддержка разбивки на страницы с использованием Bootstrap.

<a name="basic-usage"></a>
## Основы использования

<a name="paginating-query-builder-results"></a>
### Разбиение результатов построителя запросов

Есть несколько способов разбить элементы на страницы. Самый простой – использовать метод `paginate` [построителя запросов](/docs/{{version}}/queries)  или в [запросе Eloquent](/docs/{{version}}/eloquent). Метод `paginate` автоматически устанавливает «предел» и «смещение» в запросе на основе текущей страницы, просматриваемой пользователем. По умолчанию текущая страница определяется значением аргумента `page` строки HTTP-запроса. Это значение автоматически определяется Laravel, а также автоматически вставляется в ссылки, генерируемые пагинатором.

В этом примере единственный аргумент, переданный методу `paginate` – это количество элементов, которые вы хотите отображать «на каждой странице». В этом случае давайте укажем, что мы хотели бы отображать `15` элементов на странице:

    <?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller
    {
        /**
         * Показать всех пользователей приложения.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            return view('user.index', [
                'users' => DB::table('users')->paginate(15)
            ]);
        }
    }

<a name="simple-pagination"></a>
#### Простая пагинация

Метод `paginate` подсчитывает общее количество записей, соответствующих запросу, перед извлечением записей из базы данных. Это сделано для того, чтобы пагинатор знал, сколько всего страниц с записями необходимо сформировать. Однако, если вы не планируете отображать общее количество страниц в пользовательском интерфейсе вашего приложения, запрос количества записей не нужен.

Следовательно, если вам нужно отображать только простые ссылки «Далее» и «Назад» в пользовательском интерфейсе вашего приложения, вы можете использовать метод `simplePaginate` для выполнения одного рационального запроса:

    $users = DB::table('users')->simplePaginate(15);

<a name="paginating-eloquent-results"></a>
### Разбиение результатов Eloquent

Вы также можете разбивать запросы [Eloquent](/docs/{{version}}/eloquent) на страницы. В этом примере мы разобьем модель `App\Models\User` на страницы и укажем, что мы планируем отображать 15 записей на странице. Как видите, синтаксис почти идентичен разбивке на страницы результатов построителя запросов:

    use App\Models\User;

    $users = User::paginate(15);

Конечно, вы можете вызвать метод `paginate` после указания других ограничений для запроса, таких как выражения `where`:

    $users = User::where('votes', '>', 100)->paginate(15);

Вы также можете использовать метод `simplePaginate` при разбиении на страницы моделей Eloquent:

    $users = User::where('votes', '>', 100)->simplePaginate(15);

<a name="manually-creating-a-paginator"></a>
### Самостоятельное создание пагинатора

По желанию можно вручную создать экземпляр пагинатора, передав ему массив элементов, которые у вас уже есть в памяти. Вы можете сделать это, создав экземпляр `Illuminate\Pagination\Paginator` или `Illuminate\Pagination\LengthAwarePaginator`, в зависимости от ваших потребностей.

Классу `Paginator` не требуется знать общее количество элементов в результирующем наборе; однако, из-за этого у класса нет методов для получения индекса последней страницы. `LengthAwarePaginator` принимает почти те же аргументы, что и `Paginator`; однако, для этого требуется подсчет общего количества элементов в результирующем наборе.

Другими словами, `Paginator` соответствует методу `simplePaginate` построителя запросов, а `LengthAwarePaginator` соответствует методу `paginate`.

> {note} При ручном создании экземпляра пагинатора вы должны самостоятельно «разрезать» массив результатов, который вы передаете в пагинатор. Если вы не знаете, как это сделать, ознакомьтесь с функцией PHP [`array_slice`](https://www.php.net/manual/ru/function.array-slice.php).

<a name="customizing-pagination-urls"></a>
### Настройка URL-адресов постраничной навигации

По умолчанию ссылки, созданные пагинатором, будут соответствовать URI текущего запроса. Однако метод `withPath` пагинатора позволяет вам скорректировать URI, используемый пагинатором при генерации ссылок. Например, если вы хотите, чтобы пагинатор генерировал ссылки типа `http://example.com/admin/users?page=N`, вы должны передать `/admin/users` `withPath`:

    use App\Models\User;

    Route::get('/users', function () {
        $users = User::paginate(15);

        $users->withPath('/admin/users');

        //
    });

<a name="appending-query-string-values"></a>
#### Добавление значений в строку запроса

Вы можете добавить параметр в строку запроса навигационных ссылок с помощью метода `appends`. Например, чтобы добавить `sort=votes` к каждой ссылке пагинации, вы должны сделать следующий вызов `appends`:

    use App\Models\User;

    Route::get('/users', function () {
        $users = User::paginate(15);

        $users->appends(['sort' => 'votes']);

        //
    });

Вы можете использовать метод `withQueryString`, если хотите добавить все значения строки текущего запроса к ссылкам постраничной навигации:

    $users = User::paginate(15)->withQueryString();

<a name="appending-hash-fragments"></a>
#### Добавление фрагментов хеша

Если вам нужно добавить «хеш-фрагмент» к URL-адресам, сгенерированным пагинатором, вы можете использовать метод `fragment`. Например, чтобы добавить `#users` в конец каждой навигационной ссылки, вы должны вызвать метод `fragment` следующим образом:

    $users = User::paginate(15)->fragment('users');

<a name="displaying-pagination-results"></a>
## Отображение результатов постраничной навигации

При вызове метода `paginate` вы получите экземпляр `Illuminate\Pagination\LengthAwarePaginator`. При вызове метода `simplePaginate` вы получите экземпляр `Illuminate\Pagination\Paginator`. Эти объекты содержат несколько методов, описывающих результирующий набор. В дополнение к этим вспомогательным методам, экземпляры пагинатора являются итераторами и могут быть перебраны как массив. Итак, как только вы получили результаты, вы можете отобразить результаты и отрисовать ссылки на страницы, используя [Blade](/docs/{{version}}/blade):

```html
<div class="container">
    @foreach ($users as $user)
        {{ $user->name }}
    @endforeach
</div>

{{ $users->links() }}
```

Метод `links` отрисует ссылки на остальные страницы в результирующем наборе. Каждая из этих ссылок уже будет содержать соответствующую строковую переменную запроса `page`. Помните, что HTML, сгенерированный методом `links`, совместим с [фреймворком Tailwind CSS](https://tailwindcss.com).

<a name="adjusting-the-pagination-link-window"></a>
### Регулирование количества отображаемых ссылок

Когда пагинатор отображает навигационные ссылки, включающие номер текущей страницы, а также ссылки для трех страниц до и после текущей. При необходимости вы можете контролировать количество дополнительных ссылок, отображаемых с каждой стороны текущей страницы, используя метод `onEachSide`:

    {{ $users->onEachSide(5)->links() }}

<a name="converting-results-to-json"></a>
### Преобразование результатов в JSON

Классы пагинатора Laravel реализуют контракт интерфейса `Illuminate\Contracts\Support\Jsonable` и содержат метод `toJson`, поэтому очень легко преобразовать результаты в JSON. Вы также можете преобразовать экземпляр пагинатора в JSON, вернув его из маршрута или действия контроллера:

    use App\Models\User;

    Route::get('/users', function () {
        return User::paginate();
    });

JSON из пагинатора будет включать метаинформацию, такую как `total`, `current_page`, `last_page` и другие. Записи результатов доступны через ключ `data` в массиве JSON. Вот пример JSON, созданного путем возврата экземпляра пагинатора из маршрута:

    {
       "total": 50,
       "per_page": 15,
       "current_page": 1,
       "last_page": 4,
       "first_page_url": "http://laravel.app?page=1",
       "last_page_url": "http://laravel.app?page=4",
       "next_page_url": "http://laravel.app?page=2",
       "prev_page_url": null,
       "path": "http://laravel.app",
       "from": 1,
       "to": 15,
       "data":[
            {
                // Запись ...
            },
            {
                // Запись ...
            }
       ]
    }

<a name="customizing-the-pagination-view"></a>
## Настройка вида пагинации

По умолчанию сгенерированные шаблоны для отображения навигационных ссылок, совместимы со структурой [фреймворка Tailwind CSS](https://tailwindcss.com). Однако, если вы не используете Tailwind, вы можете определять свои собственные шаблоны для отображения этих ссылок. При вызове метода `links` в экземпляре пагинатора вы можете передать имя шаблона в качестве первого аргумента метода:

    {{ $paginator->links('view.name') }}

    // Передача дополнительных данных в шаблон ...
    {{ $paginator->links('view.name', ['foo' => 'bar']) }}

Однако, самый простой способ отредактировать шаблоны постраничной навигации – это экспортировать их в каталог `resources/views/vendor` с помощью команды `vendor:publish`:

    php artisan vendor:publish --tag=laravel-pagination

Эта команда поместит шаблоны в каталог `resources/views/vendor/pagination` вашего приложения. Файл `tailwind.blade.php` в этом каталоге соответствует шаблону постраничной навигации по умолчанию. Вы можете отредактировать этот файл для изменения HTML-кода навигации.

Если вы хотите назначить другой файл в качестве шаблона постраничной навигации по умолчанию, вы можете вызвать методы `defaultView` и `defaultSimpleView` пагинатора в методе `boot` вашего класса `App\Providers\AppServiceProvider`:

    <?php

    namespace App\Providers;

    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Facades\Blade;
    use Illuminate\Support\ServiceProvider;

    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Загрузка любых служб приложения.
         *
         * @return void
         */
        public function boot()
        {
            Paginator::defaultView('view-name');

            Paginator::defaultSimpleView('view-name');
        }
    }

<a name="using-bootstrap"></a>
### Использование Bootstrap

Laravel содержит шаблоны постраничной навигации, созданные с использованием [Bootstrap CSS](https://getbootstrap.com/). Чтобы использовать эти шаблоны вместо шаблонов Tailwind по умолчанию, вы можете вызвать метод пагинатора `useBootstrap` в методе `boot` класса `App\Providers\AppServiceProvider`:

    use Illuminate\Pagination\Paginator;

    /**
     * Загрузка любых служб приложения.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }

<a name="paginator-instance-methods"></a>
## Методы экземпляра пагинатора

Каждый экземпляр пагинатора содержит дополнительную информацию о постраничной навигации, с помощью следующих методов:

Метод  |  Описание
-------  |  -----------
`$paginator->count()`  |  Получить количество элементов для текущей страницы.
`$paginator->currentPage()`  |  Получить номер текущей страницы.
`$paginator->firstItem()`  |  Получить номер первого элемента в результатах.
`$paginator->getOptions()`  |  Получить параметры пагинатора.
`$paginator->getUrlRange($start, $end)`  |  Создать диапазон URL-адресов для пагинации.
`$paginator->hasPages()`  |  Определить, достаточно ли элементов для разделения на несколько страниц.
`$paginator->hasMorePages()`  |  Определить, есть ли еще элементы в хранилище данных.
`$paginator->items()`  |  Получить элементы для текущей страницы.
`$paginator->lastItem()`  |  Получить номер последнего элемента в результатах.
`$paginator->lastPage()`  |  Получить номер последней доступной страницы. (Недоступно при использовании `simplePaginate`).
`$paginator->nextPageUrl()`  |  Получить URL-адрес следующей страницы.
`$paginator->onFirstPage()`  |  Определить, находится ли пагинатор на первой странице.
`$paginator->perPage()`  |  Количество элементов, отображаемых на каждой странице.
`$paginator->previousPageUrl()`  |  Получить URL-адрес предыдущей страницы.
`$paginator->total()`  |  Определить общее количество элементов запроса в хранилище данных. (Недоступно при использовании `simplePaginate`).
`$paginator->url($page)`  |  Получить URL-адрес для конкретного номера страницы.
`$paginator->getPageName()`  |  Получить переменную строки запроса, используемую для хранения страницы.
`$paginator->setPageName($name)`  |  Установить переменную строки запроса, используемую для хранения страницы.