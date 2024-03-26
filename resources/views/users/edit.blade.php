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
<h1>فرم ویرایش کاربران</h1>
</center>
<br>
<form action="{{$user->id}}" method="post">
@csrf
<input value="{{$user->name}}"  name="name"  type="text" class="form-control" placeholder="نام"  value="{{old('name_product')}}" >
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
<br>
<input value="{{$user->last_name}}" name="last_name"  type="text" class="form-control" placeholder="نام خانوادگی">
<br>
<input value="{{$user->tahsilat}}" name="tahsilat"  type="text" class="form-control" placeholder="تحصیلات ">
<br>
<input value="{{$user->age}}"  name="age" type="text" class="form-control" placeholder="سن ">
<center>
<br>
<button>تایید</button>
</center>
</form>
</body>
</html>
