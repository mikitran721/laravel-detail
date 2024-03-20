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
