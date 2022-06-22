<?php

if (isset($_POST["name"]) && isset($_POST["user_phone"]) && isset($_POST["mail"]) && isset($_POST["vibor"])) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'user_phone' => $_POST["user_phone"],
    	'mail' => $_POST["mail"],
    	'vibor' => $_POST["vibor"]
    ); 

    $message = "Имя: ".$result['name']. " Телефон: " . $result['user_phone']. " Почта:  ". $result['mail']." Мастер и услуга:  ". $result['vibor'] ;

    mail('igor.zheleznyak.95@mail.ru', 'My Subject', $message);
    
    echo json_encode($result);

}

?>