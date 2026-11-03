<!DOCTYPE html>
<html>
<head>
    <title>User Accounts - Laravel POS System</title>
</head>
<body>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav>

<h1>User Accounts</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
    </tr>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['full_name'] }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>