<!DOCTYPE html>
<html>

<head>
	<title>Laravel Image CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Image List</h2>

		<p><a href="../../imagecrud/create" class="btn btn-success">Add New Image</a></p>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td><img src="{{ url('Image/'.$d->image) }}" style="height: 100px; width: 150px;"></td>
                <td>
					<form action="{{route('imagecrud.update', "$d->id".'/edit') }}" method="get">
                        @csrf
                        <button type="sumit" class="btn btn-success">Update</button>
                        </form>

                    <form action="{{route('imagecrud.destroy', "$d->id") }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="sumit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
			<tbody>
				
			</tbody>
		</table>
	</div>
</body>

</html>
