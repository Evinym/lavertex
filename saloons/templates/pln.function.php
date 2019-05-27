<?php
function get_planing_list(){
    include "../../includes/dbh.inc.php";
    try{
        return $reponse = $conn->query("SELECT * FROM adplaning");
    } catch(PDOException $e){
       echo "Error : ". $e->getMessage();
       return false; 
    }
}
?>

<?php

function get_planing($id){
    include "../../includes/connection.php";

    try{
        $sql= "SELECT * FROM adplaning WHERE id= ?";
        $result=$connection->prepare($sql);
        $result->bindValue(1, $id, PDO::PARAM_INT);
        $result->execute();
    }
    catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
    return $result->fetch();
}

function add_planing($coiffure, $date, $hour, $surname, $passwordd, $id=null){
    include "../../includes/connection.php";

    if($id){
        $sql = "UPDATE adplaning SET numcoiffure = ?, date = ?, hour = ?, surname = ?, passwordd = ? WHERE id = ?";
    } else {
        $sql = "INSERT INTO adplaning (numcoiffure, date, hour, surname, passwordd) VALUE(?, ?, ?, ?, ?)";
    }

    try{
        $result= $connection->prepare($sql);
        $result->bindValue(1, $coiffure, PDO::PARAM_STR);
        $result->bindValue(2, $date, PDO::PARAM_STR);
        $result->bindValue(3, $hour, PDO::PARAM_STR);
        $result->bindValue(4, $surname, PDO::PARAM_STR);
        $result->bindValue(5, $passwordd, PDO::PARAM_STR);

        if($id){
            $result->bindValue(6, $id,PDO::PARAM_INT);
        }
        $result->execute();
    } catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
    return true;
}

?>