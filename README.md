# LARAVEL - ALL

# KIEN THUC

-   co the chay tren moi truong dev voi cong tuy chon qua
    -   `php artisan serve --port 9000`
-   luồng hoạt động:
    -   URI -> Routes -> Controller (load/hiển thị view, model - tương tác DB)
    -   view(): hàm load view

#### Route Get:

-   tất cả request đều qua route; Route sẽ điều hướng tới controller để thực thi tương ứng
-   các loại route theo cấu trúc `Route::get($uri,$callback)`:
    -   get | post | patch | delete | options | group | resource;
-   Truyen tham so tren URL:

        ```php
        Route::get('news/{id}', function () {
        });
        ```

-   `Route name`:

        -   syntax:

        ```php
        <!-- config -->
        Route::get('routenames', function () {
            return 'Route name screen';
        })->name('rname');

       <!-- su dung -->

        <a href="{{ route('rname') }}">Route name1</a>
        ```

-   `Route with params and where`:

```php
    // config
    Route::get('rparam/{id}/branch/{bid}', function ($id, $bid) {
        return "Route params: $id - branch: $bid";
    })->name('rpa.branch')->where('id','[0-9a-zA-Z]+');

    //call
    <a href="{{ route('rpa.branch',['id'=>1, 'bid'=>2])}}">Branch - Route name pram 1</a>
```

-   `Route where global`: ap dung cho ca project
    -   can config trong `RouteServiceProvider`:
    ```php
    Route::pattern('bid', '[0-9a-z]+');
    ```
