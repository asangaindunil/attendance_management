<?php
class rfid{
    public $link='';
    function __construct($allow, $id){
        $this->connect();
        $this->storeInDB($allow, $id);
    }

    function connect(){
        $this->link = mysqli_connect('localhost','root','123') or die('Cannot connect to the DB');
        mysqli_select_db($this->link,'attendentms') or die('Cannot select the DB');
    }

    function storeInDB($allow, $id){

        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $time = $now-> format("h:i A");
        $today =$now->  format("Y/m/d");
        $query = "insert into tbl_rfid set rfid='".$id."', allow='".$allow."', date='".$today."', time='".$time."'";
//        $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
        if(mysqli_query("SELECT student_id FROM tbl_attend WHERE date='".$today."")){
            echo 'Sorry, this item has already been redeemed.';
        }else{ $result = mysqli_query($this->link, $query)
        or die('Error querying database.');
        }
    }

}
if($_GET['allow'] != '' and  $_GET['id'] != ''){
    $rfid=new rfid($_GET['allow'],$_GET['id']);
}


?>

