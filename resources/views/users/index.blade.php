<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\html.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <table class="table table-dark">
        <thead>

            <tr>
                <th>سن </th>
                <th> تحصیلات</th>
                <th> نام خانوادگی </th>
                <th>نام </th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->tahsilat }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->name }}</td>
                    <td><a href="edit/{{ $user->id }}"><button type="button"
                                class="btn btn-info">ویرایش</button></a>
                        <form action="delete/{{ $user->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="حذف">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <center>
        <a href="create"><button>فرم ایجاد کاربران</button></a>
        <a href="edit_user.php"> <button>ویرایش فرم کاربر </button></a>
    </center>

</body>

</html>
