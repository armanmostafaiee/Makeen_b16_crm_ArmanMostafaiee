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
        <th>کد محصول</th>
        <th>موجودی محصول</th>
        <th> انبار محصول </th>
        <th>نام محصول</th>
        <th> </th>
      </tr>
    </thead>
    @foreach ($orders as $order)
    <tbody>


      <tr>
          <td> {{ $order->code }}</td>
          <td>{{ $order->mojodi }}</td>
          <td>{{ $order->location }}</td>
        <td>{{ $order->name_product }}</td>
        <td> <a href="edit/{{ $order->id }}"><button type="button" class="btn btn-info">ویرایش</button></a>
            <form action="delete/{{ $order->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="حذف">
            </form>

        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <center>
      <a href="create"><button>فرم ایجاد سفارشات</button></a>
      <a href="edit_order.php"> <button>ویرایش فرم سفارشات  </button></a>
       </center>
</body>
</html>
