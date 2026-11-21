<!DOCTYPE html>
<html>
<head>
    <title>Login - Laravel POS System</title>
</head>
<body>

<h1>Laravel POS System Login</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label>Username:</label><br>
    <input type="text" name="username" value="{{ old('username') }}" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>
        <input type="checkbox" name="remember">
        Remember me
    </label><br><br>

    <button type="submit">Log In</button>
</form>

<p>
    <a href="{{ route('register') }}">Create an Account</a>
</p>

</body>
</html>
