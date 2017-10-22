<?php
header('Content-type: text/html; charset=utf-8'); 
class DB_Functions {

    private $db;

    //put your code in here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }

/**
     * Adding new user to mysql database
     * returns user details
     */

public function storeUser($nusp, $nome, $senha) {
	require_once 'include/DB_Connect.php';
	$dbcon = new DB_Connect();
	$con = $dbcon->connect();
	$result = mysqli_query($con, "INSERT INTO usuario(nusp, nome, senha) 
	VALUES('$nusp', '$nome', '$senha')");
}

public function storeProblem($nusp, $tipo, $status, $local, $descricao, $data_inicio, $data_reporte) {
        
	$result = mysqli_query("INSERT INTO problema(usuario, tipo, status, local,descricao,data_inicio,data_reporte) 
	VALUES('$nusp','$tipo', '$status', '$local','$descricao','$data_inicio','$data_reporte'");

}

public function getUserByNuspAndSenha($nusp, $senha) {
	mysqli_select_db("eachosproblemas_bd");
	$result = mysqli_query("SELECT * FROM usuario WHERE n_usp = '$nusp'") or die(mysqli_error());
	mysqli_query("SET NAMES 'utf8'");
	mysqli_query('SET character_set_connection=utf8');
	mysqli_query('SET character_set_client=utf8');
	mysqli_query('SET character_set_results=utf8');
	// check for result 
	$no_of_rows = mysqli_num_rows($result);
	if ($no_of_rows > 0) {
		$result = mysqli_fetch_array($result);
		
		$encrypted_password = $result['senha'];
	   
		// check for password equality
		if ($encrypted_password == $senha) {
			// user authentication details are correct
			return $result;
		}
	} else {
		// user not found
		return false;
	}
}

public function getProblemas(){
	$db = new DB_Functions();
	
	$problemas = array();
	$result = mysqli_query("SELECT * FROM problema") or die(mysqli_error());
	
	while($row = mysqli_fetch_array($result)) {
		$problema = array();
		$problema["descricao"] = $row["descricao"];
		$problema["usuario"] = $row["usuario"];
		$problema["tipo"] = $row["tipo"];
		$problema["status"] = $row["status"];
		$problema["id"] = $row["id"];
		$problema["data_inicio"] = $row["data_inicio"];
		$problema["data_termino"] = $row["data_termino"];
		$problema["data_reporte"] = $row["data_reporte"];
		array_push($problemas,$problema);
	}
	return $problemas;
}

public function getProblema($id){
	$db = new DB_Functions();
	$result = mysqli_query("SELECT * FROM problema WHERE id = '$id'") or die(mysqli_error());
	$problema = array();
	$row = mysqli_fetch_array($result);
	$problema["descricao"] = $row["descricao"];
	$problema["usuario"] = $row["usuario"];
	$problema["tipo"] = $row["tipo"];
	$problema["status"] = $row["status"];
	$problema["id"] = $row["id"];
	$problema["data_inicio"] = $row["data_inicio"];
	$problema["data_termino"] = $row["data_termino"];
	$problema["data_reporte"] = $row["data_reporte"];
	return $problema;
}

public function getFeedbacks($idProblema){
	$db = new DB_Functions();
	$feedbacks = array();
	$result = mysqli_query("SELECT * FROM feedback WHERE problema = '$idProblema'") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)) {
		$feedback = array();
		$feedback["descricao"] = $row["descricao"];
		$feedback["id"] = $row["id"];
		$feedback["problema"] = $row["problema"];
		array_push($feedbacks,$feedback);
	}
	return $feedbacks;
}
}

?>
