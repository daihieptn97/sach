<?php
 Class Model{

 	private $conn = null;
 	private $severName = "localhost";
 	private $userName = "root";
 	private $password = "";
 	private $databaseName = "ql_sach";

 	public function __construct()
 	{
 		$this->conn = new mysqli($this->severName, $this->userName, $this->password, $this->databaseName);
 		mysqli_set_charset($this->conn, "utf8");
 	}

 	public function getData()
 	{
 		$sql = "SELECT * FROM `sach` WHERE 1";
 		return $this->conn->query($sql);
 	}

 	public function getDataSort($sort = "desc") // ham dung de sap xep
 	{
 		$sql = "SELECT * FROM `sach` ORDER BY giasach " . $sort;
 		return $this->conn->query($sql);
 	}

 	public function them($name, $gia, $nxb)
 	{
 		$sql = "INSERT INTO `sach`( `name`, `giasach`, `nxb`) VALUES ('$name','$gia','$nxb' )";
 		return $this->conn->query($sql);
 	}

 	public function sua($name, $gia, $nxb, $id)
 	{
 		$sql = "UPDATE `sach` SET `name`='$name',`giasach`='$gia',`nxb`='$nxb' WHERE id = '$id' ";
 		return $this->conn->query($sql);
 	}

 	public function xoa($id)
 	{
 		$sql = "DELETE FROM `sach` WHERE id = '$id' ";
 		return $this->conn->query($sql);
 	}

 	public function thongtinsach($id)
 	{
 		$sql = "SELECT * FROM `sach` WHERE id = '$id' ";
 		return $this->conn->query($sql);
 	}



 }