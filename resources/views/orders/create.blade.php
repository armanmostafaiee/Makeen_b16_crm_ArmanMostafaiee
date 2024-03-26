<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\html.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <center>
    <h1>فرم ایجاد سفارشات</h1>
    </center>
    <form action="create" method="post">
        @csrf
    <input name="name_product" type="text" class="form-control" placeholder=" نام محصول " value="{{old('name_product')}}">
    @error('name_product')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <br>
    <input name="location"  type="text" class="form-control" placeholder="انبار محصول " value="{{old('location')}}">
    @error('location')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <br>
    <input name="mojodi" type="text" class="form-control" placeholder=" موجودی  سفارش " value="{{old('mojodi')}}">
    @error('mojodi')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <br>
    <input name="code" type="text" class="form-control" placeholder=" کد  سفارش " value="{{old('code')}}">
    @error('code')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <center>
      <br>
    <button>تایید</button>
    </center>
  </form>
</body>
</html>
