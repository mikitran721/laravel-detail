# KIẾN THỨC

-   Tạo: `php artisan make:component Sidebar`
    -   se tao ra 2 file tai `app\view\component` va `resource\views`
    -   trong app: quan ly & xu ly du lieu
    -   trong resource: noi dung hien thi user nhin thay (UI cua component)
-   goi component trong view: `<x-sidebar title="Laravel 10" :email="$email" />`
    -   `title` bien tinh; `:email` bien dong
-   lay du lieu tu component ra view qua cac function co return
-   lay `class, id` tu routes vao `view` qua `{{ $attributes }}`
    -   để kế thừa thêm thuộc tính cùng name trong view of component `<div {{ $attributes->merge(['class' => 'test-class']) }}>`
-
