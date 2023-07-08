<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Form validation</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center">

        <form action="../imagecrud" method="post" style="width: 900px" enctype="multipart/form-data">
            @csrf
            <div style="margin: 50px">
                <div class="form-group">
                    <label for="exampleInputEmail1">Image Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Image Name" value="{{old('name')}}">
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Submit Image">
                    <span class="text-danger">
                        @error('image')
                        {{$message}}
                        @enderror
                    </span>
                </div><br />
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>