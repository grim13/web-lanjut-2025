<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
</head>
<body>
    <h1>Data Users</h1>
    <table border="1" width='100%'>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $value)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->role_name }}</td>
                <td>
                    <a href="/users/edit/{{ $value->id }}">Edit</a> |
                    <a href="/users/delete/{{ $value->id }}">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>