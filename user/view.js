targetUrl = "../api/view_user.php" ;
jQuery.post(targetUrl, {filter: []}, function(data){
  jQuery.each(data,function(i,value){

    // defining kontrol proses
    jQuery('#karyawan tbody').append('<tr onclick="document.location.href=\'update.php?id='+ value.id +'\'" style=\"cursor: pointer\"><td>' + (i + 1) + '</td><td>' + value.id + '</td><td>' + value.nama  + '</td></tr>');
  });
  // storing kontrol proses
  // rendering tabel
  $(document).ready(function() {
    $("#karyawan").DataTable();
  } );
}, "json");
