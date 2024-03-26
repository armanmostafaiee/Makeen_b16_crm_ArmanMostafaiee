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
    <h1>فرم ایجاد دسته بندی</h1>
    </center>
    <form action="create" method="post">
        @csrf
    <input  name="name" type="text" class="form-control" placeholder=" نام دسته بندی " value="{{old('name')}}">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror
    <br>

<textarea name="texs" id="" cols="40" rows="10" placeholder="متن"></textarea>
<br>
    <button>تایید</button>
    </center>
  </form>
</body>
</html>
