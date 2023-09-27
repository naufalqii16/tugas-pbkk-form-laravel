<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <td>email</td>
            <td>name</td>
            <td>photo</td>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{ $data->email }}</td>
            <td>{{ $data->name }}</td>
            <td>
                <img src="/uploads/employees/{{ $data->personal_photo }}" alt="personal photo" height="auto" width="120">
            </td>
        </tr>

        @endforeach
    </table>
</body>
</html>
