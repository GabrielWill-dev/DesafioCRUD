<?php

	abstract class conexao
	{
		private static $conn;

		public static function getConn()
		{
			if (self::$conn == null) {
				self::$conn = new PDO('mysql: host=localhost; dbname=desafio-crud;', 'root', '');
			}
			
			return self::$conn;
		}
	}

?>