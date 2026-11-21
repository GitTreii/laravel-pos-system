<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav>

<h1>User Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="/users/create">Add New User</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Avatar</th>
        <th>Actions</th>
    </tr>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->full_name }}</td>
            <td>
                @if ($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" width="80" height="80" alt="User Avatar">
                @else
                    <img src="{{ asset('images/avatar-placeholder.svg') }}" width="80" height="80" alt="Placeholder Avatar">
                @endif
            </td>
            <td>
                <a href="/users/{{ $user->id }}/edit">Edit</a>
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>