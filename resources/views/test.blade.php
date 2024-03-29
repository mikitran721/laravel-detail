<h1>Miki Tran</h1>
<a href="/user">User</a> |
<a href="/product">Product</a>
<hr>
<h3>Another Routes</h3>
<a href="{{ route('admin.updateUser') }}">Create User</a>
<hr>
<ul>
    <li><a href="/news/1">Bai 1</a></li>
    <li><a href="/news/2/category/3">Bai 2</a></li>
</ul>
<hr>
<h3>Route name</h3>
<a href="{{ route('rname') }}">Route name1</a>
<a href="{{ route('rname') }}">Route name2</a>
<hr>
<h3>Route name with 1 param</h3>
<a href="{{ route('rpa.show', ['id' => '1a']) }}">Route name pram 1 with where</a>
<a href="{{ route('rpa.show', ['id' => 2]) }}">Route name pram 2 with where</a>

<hr>
<h3>Route name with 2 params</h3>
<a href="{{ route('rpa.branch', ['id' => 1, 'bid' => 2]) }}">Branch - Route name pram 1</a>
<a href="{{ route('rpa.branch', ['id' => 2, 'bid' => '3a']) }}">Branch - Route name pram 2</a>

<hr>
<h3>Route group with prefix</h3>
<ul>
    <li><a href="{{ route('backend.user') }}">User management</a></li>
    <li><a href="{{ route('backend.product') }}">product management</a></li>
    <li><a href="{{ route('backend.category') }}">category management</a></li>
</ul>

<hr>
<h3>Route with namespace</h3>
<ul>
    <li><a href="{{ route('admin.user') }}">User management</a></li>
    <li><a href="{{ route('admin.product') }}">product management</a></li>
    <li><a href="{{ route('admin.category') }}">category management</a></li>
</ul>
