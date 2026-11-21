<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav>

<h1>Customer Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="/customers/create">Add New Customer</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->full_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a href="/customers/{{ $customer->id }}/edit">Edit</a>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
