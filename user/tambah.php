
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link href="../sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
  <!-- This is what you need -->

</head>
<body>

<div class="container">
	<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content card-outline-info ">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Form Tambah</h4>
            </div>
            <div class="card-block">
                <form class="" id="form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="wemailAddress2"> ID : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control" id="wemailAddress2" name="id"> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="wphoneNumber2">Nama :</label>
                                    <input type="text" class="form-control" id="wphoneNumber2" name="nama">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                	<input type="button" id="submit" value="kirim" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="../sweetalert/sweetalert.min.js"></script>
<script src="../sweetalert/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>    
<script src="tambah.js"></script>
</body>
</html>