<!DOCTYPE html>
<html>
<head>
    <title>Register - Laravel POS System</title>
</head>
<body>

<h1>Register</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label>Username:</label><br>
    <input type="text" name="username" value="{{ old('username') }}" required><br><br>

    <label>Full Name:</label><br>
    <input type="text" name="full_name" value="{{ old('full_name') }}" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="password_confirmation" required><br><br>

    <button type="submit">Register</button>
</form>

<a href="{{ route('login') }}">Already registered? Log in</a>

</body>
</html>
