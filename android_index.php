<?php

/**
 PHP API for Login, Register, Changepassword, Resetpassword Requests and for Email Notifications.
 **/

if (isset($_POST['tag']) && $_POST['tag'] != '') {
  // Get tag
  $tag = $_POST['tag'];
  require_once 'include/DB_Functions.php';
  $db = new DB_Functions();
  // Include Database handler
  //require_once 'include/DB_Functions.php';
  //$db = new DB_Functions();
  // response Array
  $response = array("tag" => $tag, "success" => 0);

  // check for tag type
  if ($tag == 'store_user') {
    // Request type is cadastrar usuario
    $nusp = $_POST['nusp'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $result = $db->storeUser($nusp, $name, $password, $email);
    if($result){
  		$response["success"] = 1;
    }else{
      $response["success"] = 0;
    }
		echo json_encode($response);
  }

	if ($tag == 'login') {
    // Request type is check Login
    $nusp = $_POST['nusp'];
    $password = $_POST['password'];

    // check for user
    $user = $db->getUserByNuspAndPassword($nusp, $password);
    if ($user != false) {
      $response["success"] = 1;
      $response["user"]["nusp"] = $user["nusp"];
      $response["user"]["name"] = $user["name"];
      echo json_encode($response);
    } else {
      // user not found
      // echo json with error = 1
      $response["success"] = 0;
      $response["error_msg"] = "Incorrect info";
      echo json_encode($response);
    }
  }

	if ($tag == 'store_problem') {
    // Request type is cadastrar usuario
    $user = $_POST['nusp'];
		$place = $_POST['place'];
		$description = $_POST['description'];
    $imageData = $_POST['image_data'];
    $imageName = $_POST['image_name'];
    if($db->storeProblem($description, $place, 1, $user, $imageData, $imageName)){
  		$response["success"] = 1;
    }else{
      $response["success"] = 0;
    }
		echo json_encode($response);
  }

	if ($tag == 'selecionar_problemas') {

        // check for user
        $problemas = $db->getProblemas();
        echo json_encode($problemas);
    }

	if ($tag == 'selecionar_problema') {
		$idProblema = $_POST['id_problema'];
        // check for user
        $problema = $db->getProblema($idProblema);
        echo json_encode($problema);
    }

	if ($tag == 'selecionar_feedbacks') {
		$idProblema = $_POST['id_problema'];
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
}else{
  echo "Opção inválida";
}

/*$response["success"] = 1;
$response=json_encode($response);
echo $response;*/

?>
