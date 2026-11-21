<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav>

<h1>Create User</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/users" method="POST">
    @csrf

    <label>Username:</label><br>
    <input type="text" name="username" value="{{ old('username') }}"><br><br>

    <label>Full Name:</label><br>
    <input type="text" name="full_name" value="{{ old('full_name') }}"><br><br>

    <button type="submit">Save User</button>
</form>

</body>
</html>
