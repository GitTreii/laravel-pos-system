<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts - Laravel POS System</title>
</head>
<body>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav>

<h1>Customer Accounts</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer['full_name'] }}</td>
            <td>{{ $customer['email'] }}</td>
            <td>{{ $customer['phone'] }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>