<?php

/**
 PHP API for Login, Register, Changepassword, Resetpassword Requests and for Email Notifications.
 **/

if (isset($_GET['tag']) && $_GET['tag'] != '') {
    // Get tag
    $tag = $_GET['tag'];

    // Include Database handler
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);

    // check for tag type
    if ($tag == 'cadastrar_usuario') {
        // Request type is cadastrar usuario
        $nusp = $_GET['nusp'];
        $senha = $_GET['senha'];
		$nome = $_GET['nome'];
        $db->storeUser($nusp, $nome, $senha);
		$response["success"] = 1;
		$response["error"] = 0;
		echo json_encode($response);
    }

	if ($tag == 'cadastrar_problema') {
        // Request type is cadastrar usuario
        $nusp = $_GET['nusp'];
        $tipo = $_GET['tipo'];
		$local = $_GET['local'];
		$descricao = $_GET['descricao'];
		$data_inicio = $_GET['data_inicio'];
		$data_reporte = $_GET['data_reporte'];
        $db->storeProblem($nusp, $tipo, 1, $local, $descricao, $data_inicio, $data_reporte);
		$response["success"] = 1;
		$response["error"] = 0;
		echo json_encode($response);
    }
	
	if ($tag == 'login') {
        // Request type is check Login
        $nusp = $_GET['nusp'];
        $senha = $_GET['senha'];

        // check for user
        $user = $db->getUserByNuspAndSenha($nusp, $senha);
        if ($user != false) {
            // user found no seu cu
            // echo json with success = 1
            $response["success"] = 1;
			$response["usuario"]["nusp"] = $user["nusp"];
            $response["usuario"]["nome"] = $user["nome"];
            
            echo json_encode($response);
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = 1;
            $response["error_msg"] = "Incorrect info";
            echo json_encode($response);
        }
    } 
	
	if ($tag == 'selecionar_problemas') {

        // check for user
        $problemas = $db->getProblemas();
        echo json_encode($problemas);
    }
	
	if ($tag == 'selecionar_problema') {
		$idProblema = $_GET['id_problema'];
        // check for user
        $problema = $db->getProblema($idProblema);
        echo json_encode($problema);
    }
	
	if ($tag == 'selecionar_feedbacks') {
		$idProblema = $_GET['id_problema'];
        // check for user
        $feedbacks = $db->getFeedbacks($idProblema);
        echo json_encode($feedbacks);
    }
	if($tag == 'farofa')
	{
		$response["success"] = 55587;
		$response=json_encode($response);
		echo $response;
	}
}

/*$response["success"] = 1;
$response=json_encode($response);
echo $response;*/
  
?>
