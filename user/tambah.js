
$("#submit").click(function(){
    
    swal({
        title: "Apakah Anda Yakin?",
        text: "Menyimpan data",
        type: "info",
        showCancelButton: true,
        confirmButtonText: "Ya, Simpan !",
        cancelButtonText: "Tidak, Batal Simpan!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function(isConfirm){
        if (isConfirm) {
          dataFeed 	= {data: jQuery('#form').serializeArray()};
          targetUrl	= "../api/tambah_user.php";
          jQuery.post(targetUrl, dataFeed, function(data){
            console.log(data.pesan + data.query);
            swal({
                title: data.title ,
                text: data.pesan + "<br>" + data.error,
                type: data.kelas,
                html: true

            }, function(){
                if (data.kelas == "success") {
                  window.location = data.url;
                  
                  }
            });
          }, "json");
        } else {
            swal("Cancelled", "Data Tidak di simpan", "error");
        }
    });
});