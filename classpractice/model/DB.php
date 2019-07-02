<?php 
	class DB
	{
		var $host = "127.0.0.1";
		var $username = "root";
		var $password = "";
		var $dbName = "phpclasspractice";

		var $conn;

		function DB()
		{
			$this->conn  = new mysqli($this->host,$this->username, $this->password, $this->dbName);
		}


		function CheckConnection()
		{
			if($this->conn->connect_error)
			{
				die("Connection Failed: " . $this->conn->connect_error);
			}
			echo "Connected Successfully";
		}

		

		function ExecQuery($query)
		{
			$result = $this->conn->query($query);

			if($result === True)
			{
				return "Successfully";
			}
			else
			{
				$rows = array();

				if($result->num_rows>0)
				{
					// output the data of each row

					while($row = $result->fetch_assoc())
					{
						array_push($rows,$row);
					}

					return $rows;

				}
				else
				{
					echo "0 results";
				}
			}
		}
	}
	
 ?>