<?php 
Class Controller{
	private $model;

	function __construct()
	{
		require 'model/Model.php';
		$this->model = new Model();
	}

	public function index()
	{
		if(isset($_GET['sort'])){
			$dataHome = $this->model->getDataSort($_GET['sort']);
		}else 
			$dataHome = $this->model->getData();
		require 'views/home.php';
	}

	public function them() // ham khong co chu 's' la ham de hien thi views tuong ung
	{
		require 'views/them.php';
	}

	public function thems() // ham co chu 's' la ham de su ly du lieu 
	{
		$res = $this->model->them($_POST['ten'], $_POST['gia'], $_POST['nxb']);
		if($res){
			echo "Thêm thành công ! ";
			header("refresh:0.5;?page=index");
		}else{
			echo "Thêm thất bại";
		}
	}

	public function sua() // ham khong co chu 's' la ham de hien thi views tuong ung
	{
		$sach = $this->model->thongtinsach($_GET['id'])->fetch_assoc();
		require 'views/them.php';
	}


	public function suas() // ham co chu 's' la ham de su ly du lieu 
	{
		$res = $this->model->sua($_POST['ten'], $_POST['gia'], $_POST['nxb'], $_POST['id']);
		if($res){
			echo "sua thành công ! ";
			header("refresh:0.5;?page=index");
		}else{
			echo "sua thất bại";
		}
	}



	public function xoa() 
	{
		$res = $this->model->xoa($_GET['id']);
		if($res){
			echo "xoá thành công ! <br> đang điều hướng về trang chủ ...";
			header("refresh:0.5;?page=index");
		}else{
			echo "Xoá thất bại";
		}
	}


}