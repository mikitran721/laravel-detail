<style>
    input {
        margin-bottom: 5px;
    }
</style>

<h3>Create User page</h3>
<form action="{{ route('admin.updateUser') }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="fullName" placeholder="Your full name">
    <br>
    <input type="email" name="email" placeholder="Give your email">
    <br>
    <input type="password" name="password" placeholder="Your password">
    <button type="submit">Register</button>
</form>
