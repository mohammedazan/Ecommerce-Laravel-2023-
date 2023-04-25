<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 30px;
			color: #333;
			font-size: 28px;
			font-weight: bold;
		}

		table {
			margin: 0 auto;
			width: 80%;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
		}

		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid #ddd;
		}

		th {
			background-color: #333;
			color: #fff;
			font-weight: bold;
			font-size: 18px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		td button {
			margin: 5px;
			padding: 5px 10px;
			border-radius: 5px;
			border: none;
			color: #fff;
			font-size: 14px;
			cursor: pointer;
		}

		.btn-primary {
			background-color: #007bff;
		}

		.btn-primary:hover {
			background-color: #0069d9;
		}

		.btn-danger {
			background-color: #dc3545;
		}

			.btn-danger:hover {
			background-color: #c82333;
		}
	</style>
</head>
<body>
	<h1>Categories :  <a href="http://127.0.0.1:8000/admin/new-category" class="btn btn-primary">Add Categories</a></h1>
	<table>
		<thead>
		  <tr>
			<th>Category</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		  @foreach($categories as $category)
			<tr>
			  <td>{{ $category }}</td>
			  <td>
				<button class="btn btn-primary btn-sm">Edit</button>
				<button class="btn btn-danger btn-sm">Delete</button>
			  </td>
			</tr>
		  @endforeach
		</tbody>
	  </table>
</body>
</html>
