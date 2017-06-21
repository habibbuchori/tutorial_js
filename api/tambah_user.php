<?php

$PHOST  = "localhost";
$PNAME  = "crud";
$PUSER  = "root";
$PPASS  = "";
$PLINK  = new PDO("mysql:host=".$PHOST.";dbname=".$PNAME, $PUSER, $PPASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nilai	= $_POST['data'];

	for($i=0;$i<count($nilai);$i++){
		define("__".$nilai[$i]['name'],$nilai[$i]['value']) ;
	}
	/* getParam **/
	$error		 = "";

	if(strlen(__id)>3){
		try{
			$PLINK->beginTransaction();
			$que	= "INSERT INTO user(id,nama) VALUES('".__id."','".__nama."')";
			if($PLINK->exec($que)>0){
				$title  = "Good Job!" ;
				$pesan 	= "Data telah berhasil disimpan";
				$kelas	= "success";
				$url    = "view.php" ;
			}
			else{
				$title  = "Sorry !" ;
				$pesan 	= "Data tidak bisa disimpan";
				$kelas	= "warning";
				$url    = "" ;
			}
			$PLINK->commit();
		}
		catch(Exception $e){
			$PLINK->rollBack();
			$title  = "Sorry !" ;
			$pesan	= "Data gagal disimpan";
			$kelas	= "error";
			$url    = "" ;
			$error	= $e->getMessage();
		}
	}
	else{
		$title  = "Sorry !" ;
		$pesan	= "Permintaan tidak dapat diterima";
		$kelas	= "error";
		$url    = "" ;
	}

	$pesan  = array("pesan"=>$pesan, "kelas"=>$kelas, "error"=>$error, "query"=>$que, "url" => $url,"title" => $title);
	echo json_encode($pesan);
?>
