<?php  
	try
	{
		$host= 'localhost';
        $dbname= 'labs1_php2';
        $username='root';
        $password='';
        $conn= new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$username, $password, );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //"tao doi tuong thuoc lop pdo"
	}catch (PDOException $e){
		die("lỗi: ". $e->getMessage());
	}
?>