<?    
include ('cfg\cfg.php');  // 傳 MYSQL server 值
include ('model\wadb.cls.php');  //查詢新增修改刪除 class
include ('header.html');

$db=new wadb (db_database, db_name, db_username, db_password);

if ($_GET[action] != "") {
	switch ($_GET[action]) {
		case add:
		if (count($_POST)>0 ) {
			// print_r($_POST);
			$sql= "insert into comment (name, email, sex, content, create_time, ip) values (
					'".$_POST['name']."', 
					'".$_POST['email']."', 
					'".$_POST['sex']."', 
					'".$_POST['content']."', 
					'".time()."', 
					'".$_SERVER['REMOTE_ADDR']."')";  //print_r($_SERVER)查看使用者端連線資訊
			$db->insertRecords ($sql); // call 新增 class
			// print_r($sql);
		}
		
		include ('add.html');
		break;
		
		default:
		$sql= "select * from comment order by id desc";
		$data= $db->selectRecords ($sql);
		include ('form.php');
		// print_r($data);
		include ('viewer.html');
		break;
			
		} 
	}

else {
		$sql= "select * from comment order by id desc";
		$data= $db->selectRecords ($sql);
		include ('form.php');
		// print_r($data);
		include ('viewer.html');
	
	}

include "footer.html";	

?>