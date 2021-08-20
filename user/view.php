
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
	<button class="btn btn-primary" onclick="window.location.href='tambah.php'"> Tambah Data </button>
</div>
<br>
	<div class="container table-responsive">
		<table id="karyawan" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Id</th>
					<th>Nama</th>
					
					
				</tr>
			</thead>
			<tbody></tbody>
			
		</table>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>    
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
	<script src="view.js"></script>
</body>
</html>