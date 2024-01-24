<?php
	class Database{
		//conexion a base de datos.
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="calidadpaz";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		//funciones para crear,eliminar y editar registros 
		public function create($codigo,$tipo,$departamento,$defecto,$estilo,$color,$piel,$talla,$banda,$cantidad,$fecha){
			$sql = "INSERT INTO `registro` (codigo,tipo,departamento,defecto,estilo,color,piel,talla,banda,cantidad,fecha) VALUES ('$codigo','$tipo','$departamento','$defecto','$estilo','$color','$piel','$talla','$banda','$cantidad','$fecha')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT * FROM `registro` ORDER BY `id` DESC";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM registro where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($codigo,$tipo,$departamento,$defecto,$estilo,$color,$piel,$talla,$banda,$cantidad,$fecha, $id){
			$sql = "UPDATE registro SET codigo='$codigo', tipo='$tipo', departamento='$departamento', defecto='$defecto', estilo='$estilo', color='$color', piel='$piel', talla='$talla', banda='$banda', cantidad='$cantidad', fecha='$fecha' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM registro WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		//select de para opttions desde la base de datos y tablas
		public function read_codigo(){
			$sql = "SELECT * FROM `codigos` ORDER BY `codigo` ASC";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}		
		public function read_tipo(){
			$sql = "SELECT * FROM `tipos` ORDER BY `tipo` ASC";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		public function read_departamento(){
			$sql = "SELECT * FROM `departamentos` ORDER BY `departamento` ASC";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		public function read_defecto(){
			$sql = "SELECT * FROM `defectos` ORDER BY `defecto` ASC";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		public function read_usuario(){
			$sql = "SELECT * FROM `login` ORDER BY `usuario` ASC";
			$res = mysqli_query($this->con,$sql);
			return $res;
		}
		public function read_estilo(){
			$sql = "SELECT * FROM `estilos` ORDER BY `linea` ASC";
			$res = mysqli_query($this->con,$sql);
			return $res;
		}
		public function read_banda(){
			$sql = "SELECT * FROM `bandas` ORDER BY `banda` ASC";
			$res = mysqli_query($this->con,$sql);
			return $res;
		}
		public function read_rol(){
			$sql = "SELECT DISTINCT `rol` FROM `login` ORDER BY `rol`";
			$res = mysqli_query($this->con,$sql);
			return $res;
		}
		//funcion para crear y eliminar codigo 
		public function create_codigo($departamento,$codigo){
			$sql = "INSERT INTO `codigos` (departamento,codigo) VALUES ('$departamento','$codigo')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete_codigo($id){
			$sql = "DELETE FROM codigos WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		//Funcion para crear y eliminar tipo
		public function create_tipo($tipo){
			$sql = "INSERT INTO `tipos` (tipo) VALUES ('$tipo')";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete_tipo($id){
			$sql = "DELETE FROM tipos WHERE id=$id";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		//Funcion para crear y eliminar departamento
		public function create_departamento($departamento){
			$sql = "INSERT INTO `departamentos` (departamento) VALUES ('$departamento')";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete_departamento($id){
			$sql = "DELETE FROM departamentos WHERE id=$id";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		//Funcion para crear y eliminar defecto.
		public function create_defecto($codigo,$defecto){
			$sql = "INSERT INTO `defectos` (codigo,defecto) VALUES ('$codigo','$defecto')";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete_defecto($id){
			$sql = "DELETE FROM defectos WHERE id=$id";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		//funciones para usuario nuevo
		public function create_usuario($usuario,$password,$rol){
			$sql = "INSERT INTO `login` (usuario, passwords, rol) VALUES ('$usuario','$password','$rol')";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete_usuario($usuario){
			$sql = "DELETE FROM login WHERE id=$usuario";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		//funciones para eliminar y crear un nuevo modelo.
		public function create_estilo($linea,$estilo){
			$sql = "INSERT INTO `estilos` (linea,estilo) VALUES ('$linea','$estilo')";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete_estilo($id){
			$sql = "DELETE FROM estilos WHERE id=$id";
			$res = mysqli_query($this->con,$sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		
	}
?>