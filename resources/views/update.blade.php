<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Edit User</h2>

        <form action="{{route('imagecrud.update', "$data->id") }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Submit Image">
            </div>  <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>