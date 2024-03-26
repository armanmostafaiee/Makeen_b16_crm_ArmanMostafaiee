
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
                <th>متن </th>
                <th>عنوان </th>
                <th> نام خانوادگی  </th>
                <th>نام </th>
                <th></th>
            </tr>
        </thead>
        @foreach ($posts as $post)
            <tbody>


                <tr>
                    <td>{{ $post->texs }} </td>
                    <td> {{ $post->cat }}</td>
                    <td> {{ $post->last_name }}</td>
                    <td> {{ $post->name }}</td>
                    <td> <a href="edit/{{ $post->id }}"><button type="submit" class="btn btn-info">
                            ویرایش</button></a>
                    <form action="delete/{{ $post->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="حذف">
                    </form>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>

    </tbody>
  </table>
      <center>
      <a href="create"><button>فرم ایجاد پست</button></a>
      <a href="edit_post.php"> <button>ویرایش فرم پست  </button></a>
       </center>
</body>
</html>
