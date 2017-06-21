var getParam = function () {
  // This function is anonymous, is executed immediately and
  // the return value is assigned to QueryString!
  var query_string = {};
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
        // If first entry with this name
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = decodeURIComponent(pair[1]);
        // If second entry with this name
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
      query_string[pair[0]] = arr;
        // If third or later entry with this name
    } else {
      query_string[pair[0]].push(decodeURIComponent(pair[1]));
    }
  }
  return query_string;
}();

targetUrl = "../api/view_user.php" ;
jQuery.post(targetUrl, {filter: [{name: "id" ,value: getParam.id}]}, function(data){

    jQuery("input[name=id]").attr("value", data[0].id);
    jQuery("input[name=nama]").attr("value", data[0].nama);
}, "json");


jQuery('#submit').click(function(){
    swal({
        title: "Apakah Anda Yakin?",
        text: "Menyimpan data",
        type: "info",
        showCancelButton: true,
        confirmButtonText: "Ya, Simpan !",
        cancelButtonText: "Tidak, Batal Simpan!",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
          dataFeed  = {filter: [{name: "id" ,value: getParam.id}], data: jQuery('#form').serializeArray()};
          console.log(dataFeed);
          targetUrl = "../api/sunting_user.php";
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