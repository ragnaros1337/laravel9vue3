git f06768c7ed4e18d6d3413804fff937b43a1ea85b

---

# Кеш приложения

- [Введение](#introduction)
- [Конфигурирование](#configuration)
    - [Предварительная подготовка драйверов](#driver-prerequisites)
- [Управление кешем приложения](#cache-usage)
    - [Получение экземпляра кеша](#obtaining-a-cache-instance)
    - [Получение элементов из кеша](#retrieving-items-from-the-cache)
    - [Сохранение элементов в кеше](#storing-items-in-the-cache)
    - [Удаление элементов из кеша](#removing-items-from-the-cache)
    - [Глобальный помощник кеша](#the-cache-helper)
- [Тегированный кеш](#cache-tags)
    - [Сохранение элементов тегированного кеша](#storing-tagged-cache-items)
    - [Доступ к элементам тегированного кеша](#accessing-tagged-cache-items)
    - [Удаление элементов тегированного кеша](#removing-tagged-cache-items)
- [Атомарные блокировки](#atomic-locks)
    - [Предварительная подготовка драйверов](#lock-driver-prerequisites)
    - [Управление блокировками](#managing-locks)
    - [Управление блокировками между процессами](#managing-locks-across-processes)
- [Добавление собственных драйверов кеша](#adding-custom-cache-drivers)
    - [Написание драйвера кеша](#writing-the-driver)
    - [Регистрация драйвера кеша](#registering-the-driver)
- [События](#events)

<a name="introduction"></a>
## Введение

Некоторые задачи по извлечению или обработке данных, выполняемые вашим приложением, могут потребовать больших ресурсов ЦП или занять несколько секунд. В этом случае извлеченные данные обычно кешируют на некоторое время, чтобы их можно было быстро извлечь при последующих запросах тех же данных. Кешированные данные обычно хранятся в хранилище с быстрым доступом данных, например, [Memcached](https://memcached.org) или [Redis](https://redis.io).

К счастью, Laravel предлагает выразительный унифицированный API для различных серверов кеширования, позволяя вам воспользоваться их невероятно быстрым извлечением данных и ускорить работу вашего веб-приложения.

<a name="configuration"></a>
## Конфигурирование

Файл конфигурации кеша вашего приложения находится в `config/cache.php`. В этом файле вы можете указать, какой драйвер кеша вы хотите использовать по умолчанию для всего приложении. Laravel из коробки поддерживает популярные механизмы кеширования, такие как [Memcached](https://memcached.org), [Redis](https://redis.io), [DynamoDB](https://aws.amazon.com/dynamodb) и реляционные базы данных. Кроме того, доступен драйвер кеширования на основе файлов, в то время как драйверы `array` и `null` предоставляют удобные механизмы кеширования для ваших автоматических тестов.

Файл конфигурации кеша также содержит различные другие параметры, которые описаны в файле, поэтому обязательно изучите эти параметры. По умолчанию Laravel настроен на использование драйвера кеширования файлов, который хранит сериализованные кешированные объекты в файловой системе сервера. Для более крупных приложений рекомендуется использовать более надежный драйвер, например Memcached или Redis. Вы даже можете настроить несколько конфигураций кеша для одного и того же драйвера.

<a name="driver-prerequisites"></a>
### Предварительная подготовка драйверов

<a name="prerequisites-database"></a>
#### Предварительная подготовка драйвера на основе базы данных

При использовании драйвера кеша `database` вам нужно будет настроить таблицу для хранения элементов кеша. Вы найдете пример объявления `Schema` ниже:

    Schema::create('cache', function ($table) {
        $table->string('key')->unique();
        $table->text('value');
        $table->integer('expiration');
    });

> {tip} Вы также можете использовать команду `php artisan cache:table` Artisan для генерации миграции с правильной схемой.

<a name="memcached"></a>
#### Предварительная подготовка драйвера на основе Memcached

Для использования драйвера Memcached требуется установить [пакет Memcached PECL](https://pecl.php.net/package/memcached). Вы можете перечислить все ваши серверы Memcached в файле конфигурации `config/cache.php`. Этот файл уже содержит запись `memcached.servers` для начала:

    'memcached' => [
        'servers' => [
            [
                'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                'port' => env('MEMCACHED_PORT', 11211),
                'weight' => 100,
            ],
        ],
    ],

При необходимости вы можете задать параметр `host` сокета UNIX. Если вы это сделаете, то параметр `port` должен быть задан как `0`:

    'memcached' => [
        [
            'host' => '/var/run/memcached/memcached.sock',
            'port' => 0,
            'weight' => 100
        ],
    ],

<a name="redis"></a>
#### Предварительная подготовка драйвера на основе Redis

Перед использованием драйвера кеша Redis, вам нужно будет либо установить расширение PHP PhpRedis через PECL, либо установить пакет `predis/predis` (~ 1.0) через Composer. [Laravel Sail](/docs/{{version}}/sail) уже включает это расширение. Кроме того, на официальных платформах развертывания Laravel, таких как [Laravel Forge](https://forge.laravel.com) и [Laravel Vapor](https://vapor.laravel.com), расширение PhpRedis установлено по умолчанию.

Для получения дополнительной информации о настройке Redis обратитесь к его [странице документации Laravel](/docs/{{version}}/redis#configuration).

<a name="dynamodb"></a>
#### Предварительная подготовка драйвера на основе DynamoDB

Перед использованием драйвера кэша [DynamoDB](https://aws.amazon.com/dynamodb) необходимо создать таблицу DynamoDB для хранения всех кэшированных данных. Название таблицы должно совпадать с `stores.dynamodb.table` в конфигурационном файле `cache` вашего приложения. Обычно это `cache`.

Эта таблица также должна иметь строковый ключ раздела с именем, соответствующим значению элемента конфигурации `stores.dynamodb.key` в конфигурационном файле `cache`. По умолчанию это `key`.

<a name="cache-usage"></a>
## Управление кешем приложения

<a name="obtaining-a-cache-instance"></a>
### Получение экземпляра кеша

Чтобы получить экземпляр хранилища кеша, вы можете использовать фасад `Cache`, который мы будем использовать в этой документации. Фасад `Cache` обеспечивает удобный и краткий доступ к базовым реализациям контрактов кеширования Laravel:

    <?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Cache;

    class UserController extends Controller
    {
        /**
         * Показать список всех пользователей приложения.
         *
         * @return Response
         */
        public function index()
        {
            $value = Cache::get('key');

            //
        }
    }

<a name="accessing-multiple-cache-stores"></a>
#### Доступ к различным кеш-хранилищам

Используя фасад `Cache`, вы можете получить доступ к различным хранилищам кеша с помощью метода `store`. Ключ, переданный методу `store`, должен соответствовать одному из хранилищ, перечисленных в массиве `stores` вашего конфигурационного файла `config/cache.php`:

    $value = Cache::store('file')->get('foo');

    Cache::store('redis')->put('bar', 'baz', 600); // 10 Minutes

<a name="retrieving-items-from-the-cache"></a>
### Получение элементов из кеша

Метод `get` фасада `Cache` используется для извлечения элементов из кеша. Если элемент не существует в кеше, будет возвращено значение `null`. Если хотите, то вы можете передать второй аргумент методу `get`, указав значение по умолчанию, которое вы хотите вернуть, если элемент отсутствует:

    $value = Cache::get('key');

    $value = Cache::get('key', 'default');

Вы даже можете передать замыкание в качестве значения по умолчанию. Результат замыкания будет возвращен, если указанный элемент не существует в кеше. Передача замыкания позволяет отложить получение значений по умолчанию из базы данных или другой внешней службы:

    $value = Cache::get('key', function () {
        return DB::table(...)->get();
    });

<a name="checking-for-item-existence"></a>
#### Проверка наличия элемента

Метод `has` используется для определения того, существует ли элемент в кеше. Этот метод также вернет `false`, если элемент существует, но его значение равно `null`:

    if (Cache::has('key')) {
        //
    }

<a name="incrementing-decrementing-values"></a>
#### Увеличение и уменьшение отдельных значений в кеше

Методы `increment` и `decrement` могут использоваться для изменения значений целочисленных элементов в кеше. Оба эти метода принимают необязательный второй аргумент, указывающий величину увеличения или уменьшения значения элемента:

    Cache::increment('key');
    Cache::increment('key', $amount);
    Cache::decrement('key');
    Cache::decrement('key', $amount);

<a name="retrieve-store"></a>
#### Выполнение замыкания с последующим сохранением и получением результата

Также вы можете не только получить элемент из кеша, но и сохранить значение по умолчанию, если запрошенный элемент не существует. Например, вы можете получить всех пользователей из кеша или, если они не существуют, получить их из базы данных и добавить их в кеш. Вы можете сделать это с помощью метода `Cache::remember`:

    $value = Cache::remember('users', $seconds, function () {
        return DB::table('users')->get();
    });

Если элемент не существует в кеше, то замыкание, переданное методу `remember`, будет выполнено, и его результат будет помещен в кеш.

Вы можете использовать метод `rememberForever`, чтобы получить элемент из кеша или сохранить его навсегда, если он не существует:

    $value = Cache::rememberForever('users', function () {
        return DB::table('users')->get();
    });

<a name="retrieve-delete"></a>
#### Получение данных с последующим удалением элемента

Если вам нужно получить элемент из кеша, а затем удалить этот элемент, вы можете использовать метод `pull`. Как и в методе `get`, если элемент не существует в кеше, то будет возвращен `null`:

    $value = Cache::pull('key');

<a name="storing-items-in-the-cache"></a>
### Сохранение элементов в кеше

Вы можете использовать метод `put` фасада` Cache` для сохранения элементов в кеше:

    Cache::put('key', 'value', $seconds = 10);

Если время хранения не передается методу `put`, то элемент будет храниться бесконечно:

    Cache::put('key', 'value');

Вместо того, чтобы передавать количество секунд как целое число, вы также можете передать экземпляр `DateTime`, представляющий желаемое время хранения кешированного элемента:

    Cache::put('key', 'value', now()->addMinutes(10));

<a name="store-if-not-present"></a>
#### Сохранение значений при условии их отсутствия

Метод `add` добавит элемент в кеш, только если он еще не существует в хранилище кеша. Метод вернет `true`, если элемент был действительно добавлен в кеш. В противном случае метод вернет `false`. Метод `add` – это [атомарная операция](https://ru.wikipedia.org/wiki/Атомарная_операция):

    Cache::add('key', 'value', $seconds);

<a name="storing-items-forever"></a>
#### Сохранение элементов на постоянной основе

Метод `forever` используется для постоянного хранения элемента в кеше. Поскольку срок действия этих элементов не истекает, то их необходимо вручную удалить из кеша с помощью метода `forget`:

    Cache::forever('key', 'value');

> {tip} Если вы используете драйвер `memcached`, то элементы, которые хранятся «на постоянной основе», могут быть удалены, когда кеш достигнет предельного размера.

<a name="removing-items-from-the-cache"></a>
### Удаление элементов из кеша

Вы можете удалить элементы из кеша с помощью метода `forget`:

    Cache::forget('key');

Вы также можете удалить элементы, указав нулевое или отрицательное количество секунд срока хранения:

    Cache::put('key', 'value', 0);

    Cache::put('key', 'value', -5);

Вы можете очистить весь кеш, используя метод `flush`:

    Cache::flush();

> {note} Очистка кеша не учитывает ваш настроенный «префикс» кеша и удаляет все записи из кеша. Внимательно учитывайте это при очистке кеша, который используется другими приложениями.

<a name="the-cache-helper"></a>
### Глобальный помощник кеша

Помимо использования фасада `Cache`, вы также можете использовать глобальную функцию `cache` для извлечения и хранения данных через кеш. Когда функция `cache` вызывается с одним строковым аргументом, она возвращает значение переданного ключа:

    $value = cache('key');

Если вы передадите массив пар ключ / значение и срок хранения в функцию, то она будет хранить значения в кеше в течение указанного времени:

    cache(['key' => 'value'], $seconds);

    cache(['key' => 'value'], now()->addMinutes(10));

Когда функция `cache` вызывается без каких-либо аргументов, то она возвращает экземпляр реализации `Illuminate\Contracts\Cache\Factory`, позволяя вам вызывать другие методы кеширования:

    cache()->remember('users', $seconds, function () {
        return DB::table('users')->get();
    });

> {tip} При тестировании вызова глобальной функции `cache` вы можете использовать метод `Cache::shouldReceive` так же, как если бы вы [тестировали фасад](/docs/{{version}}/mocking#mocking-facades).

<a name="cache-tags"></a>
## Тегированный кеш

> {note} Теги кеширования не поддерживаются при использовании таких драйверов кеширования, как `file`, `dynamodb` или `database`. Более того, при использовании нескольких тегов с кешами, хранящимися «на постоянной основе», производительность будет лучше с таким драйвером, как memcached, который автоматически очищает устаревшие записи.

<a name="storing-tagged-cache-items"></a>
### Сохранение элементов тегированного кеша

Теги кеша позволяют помечать связанные элементы в кеше, а затем сбрасывать все кешированные значения, которым был назначен данный тег. Вы можете получить доступ к тегированному кешу, передав упорядоченный массив имен тегов. Например, давайте обратимся к тегированному кешу и поместим значение в кеш:

    Cache::tags(['people', 'artists'])->put('John', $john, $seconds);

    Cache::tags(['people', 'authors'])->put('Anne', $anne, $seconds);

<a name="accessing-tagged-cache-items"></a>
### Доступ к элементам тегированного кеша

Чтобы получить элемент тегированного кеша, передайте тот же упорядоченный список тегов методу `tags`, а затем вызовите метод `get` с ключом, который вы хотите получить:

    $john = Cache::tags(['people', 'artists'])->get('John');

    $anne = Cache::tags(['people', 'authors'])->get('Anne');

<a name="removing-tagged-cache-items"></a>
### Удаление элементов тегированного кеша

Вы можете удалить все элементы, которым назначен тег или список тегов. Например, эта операция удалит все кеши, помеченные либо `people`, либо `authors`, либо обоими. Таким образом, и `Anne`, и `John` будут удалены из кеша:

    Cache::tags(['people', 'authors'])->flush();

Напротив, эта операция удалит только кешированные значения, помеченные как `authors`, поэтому будет удалена `Anne`, но не `John`:

    Cache::tags('authors')->flush();

<a name="atomic-locks"></a>
## Атомарные блокировки

> {note} Чтобы использовать этот функционал, ваше приложение должно использовать драйвер кеша `memcached`, `redis`, `dynamodb`, `database`, `file`, или `array` в качестве драйвера кеша по умолчанию для вашего приложения. Кроме того, все серверы должны взаимодействовать с одним и тем же центральным сервером кеширования.

<a name="lock-driver-prerequisites"></a>
### Предварительная подготовка драйверов

<a name="atomic-locks-prerequisites-database"></a>
#### Предварительная подготовка драйвера на основе базы данных для атомарных блокировок

При использовании драйвера кеша `database` вам необходимо настроить таблицу, в которой будут храниться блокировки кеша вашего приложения. Вы найдете пример объявления `Schema` ниже:

    Schema::create('cache_locks', function ($table) {
        $table->string('key')->primary();
        $table->string('owner');
        $table->integer('expiration');
    });

<a name="managing-locks"></a>
### Управление блокировками

Атомарные блокировки позволяют управлять распределенными блокировками, не беспокоясь об условиях приоритетности. Например, [Laravel Forge](https://forge.laravel.com) использует атомарные блокировки, чтобы гарантировать, что на сервере одновременно выполняется только одна удаленная задача. Вы можете создавать и управлять блокировками, используя метод `Cache::lock`:

    use Illuminate\Support\Facades\Cache;

    $lock = Cache::lock('foo', 10);

    if ($lock->get()) {
        // Блокировка получена на 10 секунд ...

        $lock->release();
    }

Метод `get` также принимает замыкание. После выполнения замыкания Laravel автоматически снимет блокировку:

    Cache::lock('foo')->get(function () {
        // Блокировка установлена на неопределенный срок и автоматически снимается ...
    });

Если блокировка недоступна в тот момент, когда вы ее запрашиваете, вы можете указать Laravel подождать определенное количество секунд. Если блокировка не может быть получена в течение указанного срока, то будет выброшено исключение `Illuminate\Contracts\Cache\LockTimeoutException`:

    use Illuminate\Contracts\Cache\LockTimeoutException;

    $lock = Cache::lock('foo', 10);

    try {
        $lock->block(5);

        // Блокировка получена после ожидания максимум 5 секунд ...
    } catch (LockTimeoutException $e) {
        // Невозможно получить блокировку ...
    } finally {
        optional($lock)->release();
    }

Приведенный выше пример можно упростить, передав замыкание методу `block`. Когда замыкание передается этому методу, Laravel будет пытаться получить блокировку на указанное количество секунд и автоматически снимет блокировку, как только замыкание будет выполнено:

    Cache::lock('foo', 10)->block(5, function () {
        // Блокировка получена после ожидания максимум 5 секунд ...
    });

<a name="managing-locks-across-processes"></a>
### Управление блокировками между процессами

Иногда может потребоваться установить блокировку в одном процессе и снять ее в другом процессе. Например, вы можете получить блокировку во время веб-запроса и захотите снять блокировку в конце задания в очереди, которое запускается этим запросом. В этом сценарии вы должны передать «токен инициатора» с областью действия блокировки в задании в очереди, чтобы задание могло повторно создать экземпляр блокировки с использованием данного токена.

В приведенном ниже примере мы отправим задание в очередь, если блокировка будет успешно получена. Кроме того, мы передадим токен инициатора блокировки заданию в очереди с помощью метода `owner` блокировки:

    $podcast = Podcast::find($id);

    $lock = Cache::lock('processing', 120);

    if ($result = $lock->get()) {
        ProcessPodcast::dispatch($podcast, $lock->owner());
    }

В рамках задания `ProcessPodcast` нашего приложения мы можем восстановить и снять блокировку с помощью токена инициатора:

    Cache::restoreLock('processing', $this->owner)->release();

Если вы хотите принудительно снять блокировку без учета текущего инициатора, то вы можете использовать метод `forceRelease`:

    Cache::lock('processing')->forceRelease();

<a name="adding-custom-cache-drivers"></a>
## Добавление собственных драйверов кеша

<a name="writing-the-driver"></a>
### Написание драйвера кеша

Чтобы создать собственный драйвер кеша, сначала нужно реализовать [контракт](/docs/{{version}}/contracts) `Illuminate\Contracts\Cache\Store`. Итак, реализация кеша MongoDB может выглядеть примерно так:

    <?php

    namespace App\Extensions;

    use Illuminate\Contracts\Cache\Store;

    class MongoStore implements Store
    {
        public function get($key) {}
        public function many(array $keys) {}
        public function put($key, $value, $seconds) {}
        public function putMany(array $values, $seconds) {}
        public function increment($key, $value = 1) {}
        public function decrement($key, $value = 1) {}
        public function forever($key, $value) {}
        public function forget($key) {}
        public function flush() {}
        public function getPrefix() {}
    }

Нам просто нужно реализовать каждый из этих методов, используя соединение MongoDB. Для примера того, как реализовать каждый из этих методов, взгляните на `Illuminate\Cache\MemcachedStore` в [исходном коде фреймворка Laravel](https://github.com/laravel/framework). Как только наша реализация будет завершена, мы можем завершить регистрацию своего драйвера, вызвав метод `extend` фасада `Cache`:

    Cache::extend('mongo', function ($app) {
        return Cache::repository(new MongoStore);
    });

> {tip} Если вам интересно, где разместить свой собственный код драйвера кеша, то вы можете создать пространство имен `Extensions` в своем каталоге `app`. Однако имейте в виду, что Laravel не имеет жесткой структуры приложения, и вы можете организовать свое приложение в соответствии со своими предпочтениями.

<a name="registering-the-driver"></a>
### Регистрация драйвера кеша

Чтобы зарегистрировать свой драйвер кеша в Laravel, мы будем использовать метод `extend` фасада `Cache`. Поскольку другие поставщики служб могут попытаться прочитать кешированные значения в рамках своего метода `boot`, мы зарегистрируем свой драйвер в замыкании `booting`. Используя замыкание `booting`, мы можем гарантировать, что наш драйвер зарегистрирован непосредственно перед тем, как метод `boot` вызывается поставщиками служб нашего приложения, и после того, как метод `register` вызывается для всех поставщиков служб. Мы зарегистрируем наше замыкание `booting` в методе `register` класса `App\Providers\AppServiceProvider` нашего приложения:

    <?php

    namespace App\Providers;

    use App\Extensions\MongoStore;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Support\ServiceProvider;

    class CacheServiceProvider extends ServiceProvider
    {
        /**
         * Регистрация любых служб приложения.
         *
         * @return void
         */
        public function register()
        {
            $this->app->booting(function () {
                Cache::extend('mongo', function ($app) {
                    return Cache::repository(new MongoStore);
                });
            });
        }

        /**
         * Загрузка любых служб приложения.
         *
         * @return void
         */
        public function boot()
        {
            //
        }
    }

Первым аргументом, передаваемым методу `extend`, является имя драйвера. Оно будет соответствовать вашему параметру `driver` в файле конфигурации `config/cache.php`. Второй аргумент – это замыкание, которое должно возвращать экземпляр `Illuminate\Cache\Repository`. Замыкание будет передано экземпляру `$app`, который является экземпляром [контейнера служб](/docs/{{version}}/container).

После регистрации расширения обновите параметр `driver` в файле конфигурации `config/cache.php`, указав имя вашего расширения.

<a name="events"></a>
## События

Чтобы выполнить код для каждой операции с кешем, вы можете прослушивать [события](/docs/{{version}}/events), запускаемые кешем. Как правило, вы должны поместить эти слушатели событий в класс `App\Providers\EventServiceProvider` приложения:

    /**
     * Карта слушателей событий приложения.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Cache\Events\CacheHit' => [
            'App\Listeners\LogCacheHit',
        ],

        'Illuminate\Cache\Events\CacheMissed' => [
            'App\Listeners\LogCacheMissed',
        ],

        'Illuminate\Cache\Events\KeyForgotten' => [
            'App\Listeners\LogKeyForgotten',
        ],

        'Illuminate\Cache\Events\KeyWritten' => [
            'App\Listeners\LogKeyWritten',
        ],
    ];