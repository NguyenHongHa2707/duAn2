<?php  
class database{

	//DB Params
	private $dns = "mysql:host=brmww30ouptshpzdn4jj-mysql.services.clever-cloud.com;dbname=brmww30ouptshpzdn4jj";
	private $username = "uan2dvooohu0kfer";
	private $password = "uan2dvooohu0kfer";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

