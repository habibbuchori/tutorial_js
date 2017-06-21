<?php

$PHOST  = "localhost";
$PNAME  = "crud";
$PUSER  = "root";
$PPASS  = "";
$PLINK  = new PDO("mysql:host=".$PHOST.";dbname=".$PNAME, $PUSER, $PPASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST['filter'])){
			$filter	= array();
			$nilai	= $_POST['filter'];
			for($i=0;$i<count($nilai);$i++){
				$filter[]	= $nilai[$i]['name']."='".$nilai[$i]['value']."'";
			}
			if($i>0){
				$filter	= "WHERE ".implode(' AND ',$filter);
			}
		}
		else{
			$filter	= "";
		}
		/* getParam **/

		/* database **/
		try {
			$que 	= "SELECT * FROM user ".$filter ;
			$sth 	= $PLINK->prepare($que);
			$sth->execute();
			$row	= $sth->fetchAll(PDO::FETCH_ASSOC);
			$PLINK 	= null;
		}
		catch (PDOException $e){
			$row    = array("pesan"=>"Inquiry data gagal dilakukan", "error"=>$e->getMessage(), "query"=>$que);
		}

	echo json_encode($row);
    flush();
?>