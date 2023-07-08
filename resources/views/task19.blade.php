<!DOCTYPE html>
<html>

<head>
	<title>Laravel Task 19</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Task 19</h2>
        @php
                // dd($data->company->name);
                @endphp
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Employee Name</th>
                    <th>Company</th>
					<th>Image</th>

				</tr>
			</thead>    
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                     <td>{{$d->company->name}}</td>
                <td><img src="{{ url('Image/'.$d->company->image) }}" style="height: 100px; width: 150px;"></td>
            </tr>
            @endforeach
			<tbody>
			</tbody>
		</table>
	</div>
</body>

</html>
