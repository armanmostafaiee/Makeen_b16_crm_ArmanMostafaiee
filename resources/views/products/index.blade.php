<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <table class="table table-dark">
        <thead>




            <tr>
                <th>قیمت محصول</th>
                <th>برند محصول</th>
                <th> رنگ محصول </th>
                <th>نام محصول</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($products as $product)
            <tbody>


                <tr>
                    <td>{{ $product->price }} </td>
                    <td> {{ $product->mark }}</td>
                    <td> {{ $product->color }}</td>
                    <td> {{ $product->name_product }}</td>
                    <td> <a href="edit/{{ $product->id }}"><button type="submit" class="btn btn-info">
                            ویرایش</button></a>
                    <form action="delete/{{ $product->id}}" method="POST">
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
        <a href="create"><button>فرم ایجاد محصولات</button></a>
        <a href="edit"><button>ویرایش فرم محصولات </button></a>
    </center>


</body>

</html>
