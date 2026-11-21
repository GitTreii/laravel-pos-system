<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav>

<h1>Edit Customer</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/customers/{{ $customer->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Full Name:</label><br>
    <input type="text" name="full_name" value="{{ old('full_name', $customer->full_name) }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email', $customer->email) }}"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}"><br><br>

    <button type="submit">Update Customer</button>
</form>

</body>
</html>
