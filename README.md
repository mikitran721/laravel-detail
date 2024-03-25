# LARAVEL - ALL

# KIEN THUC

-   co the chay tren moi truong dev voi cong tuy chon qua
    -   `php artisan serve --port 9000`
-   luồng hoạt động:
    -   URI -> Routes -> Controller (load/hiển thị view, model - tương tác DB)
    -   view(): hàm load view
-   Hien thi danh sach Routes dang su dung:
    -   `php artisan route:list`

## COMPONENT

-   cách tạo component; cách sd;
-   cơ chế quản lý data
-   truyền dữ liệu từ bên ngoài vào/ra
-   custom lại

## ROUTES:

### Resource Route:

-   7 default methods: index() ~ list; create(); store() ~ tao ban ghi moi; edit() - man hinh edit; update() - luu cap nhat/user press submit; show() - detail; destroy() - xoa du lieu;
-   muc dich: chuan hoa lai cac method tuong ung tung chuc nang cho 1 object.
-   syntax: `php artisan make:controller UserController --resource`
-   De bo cac controllerMethod ko can thiet, tai route page config nhu sau:
    -   `Route::resource('user', UserController::class)->except(['create', 'edit']);`
    -   `Route::resource('user', UserController::class)->only(['index']);`

### Another Route:

-   get, post, patch, delete, options, group
-   Voi phuong thuc post, can co config `@csrf` trong view chua form de gui du lieu di
-   can su dung config `@method('put')` voi phuong thuc trong form khac voi `post|get`

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
-   `Route with prefix`: dùng để nhóm chung route

```php
//C1: Route::group(['prefix' => 'backend'], function () {
//C2: Route::prefix('backend')->group(function () {
Route::prefix('backend')->group(function () {
    Route::get('user-management', function () {
        return 'User management monitor';
    })->name('backend.user');

    Route::get('product-management', function () {
        return 'Product management monitor';
    })->name('backend.product');
}
```

-   `Route namespace`: tránh lỗi `function callback` khi sử dụng php artisan optimize trong qt deploy = cách gọi route với controller
    -   `php artisan make:controller Backend/UserController` sẽ auto tạo folder nếu chưa có
    ```php
    Route::get('user', 'UserController@index')->name('admin.user');
    ```
