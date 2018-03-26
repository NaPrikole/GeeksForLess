<?php

class OrderController {

    public function Send(){

        $msg_box = array();
        $errors = array();
        $userName = $_POST['name'];
        $userAddress = $_POST['address'];
        $count = $_POST['count'];
        $bookId = $_POST['bookId'];
        $bookTitle = $_POST['bookTitle'];
        $bookPrice = $_POST['bookPrice'];
//        if($userName == "") {
//            $errors[] = "Wrong data";
//        } else if (!preg_match('/^([A-za-z\s]{2,15})\s+([A-za-z\s]{1})\.\s+([A-za-z\s]{1})\.$/u', $userName)) {
//            $errors[] = "Wrong data";
//        }
//        if($userAddress == "") {
//            $errors[] = "Wrong data";
//        }
//        if($count == "") {
//            $errors[] = "Wrong data";
//        } else if(filter_var($count, FILTER_VALIDATE_INT, array("options" => array("min_range"=>1, "max_range"=>999))) ===  false) {
//            $errors[] = "Wrong count";
//        }
        $arrors = array();

         if(empty($errors)){
            $message  = "Order form: " . $userName . "<br/>";
            $message .= "ID good: " . $bookId . "<br/>";
            $message .= "Title: " . $bookTitle . "<br/>";
            $message .= "Count: " . $count . "<br/>";
            $message .= "Price: " . $bookPrice . "<br/>";
            $message .= "Order send to address: " . $userAddress;
            Order::send_mail($message);

            $msg_box[] = "<span style='color: green;'>Thanks for your order.</span>";
        }else{
            $msg_box = array();
            foreach($errors as $one_error){
                $msg_box[] = "<span style='color: red;'>$one_error</span><br/>";
            }
        }

        foreach($msg_box as $message) {
            echo $message;
        }
    }
}