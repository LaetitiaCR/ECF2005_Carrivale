<?php

if ((strlen($_POST['name'])>100) && 
    (strlen($_POST['city'])>255) &&
    (strlen($_POST['namecontact'])>100) &&
    (strlen($_POST['mailcontact'])>100) &&
    (strlen($_POST['phonecontact'])>15))
    
{
    header('Location: FormulaireCompanies.php');
    exit;
}
else
{
    
    
    try{
        $dbconnectpdo = new PDO('mysql:host=localhost;dbname=ECF2005_Carrivale', 'root', '');
        
        $dbconnectpdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        
        $data = [
            'name' => $_POST["name"],
            'city' => $_POST["city"],
            'namecontact' => $_POST["namecontact"],
            'mailcontact' => $_POST["mailcontact"], 
            'phonecontact' => $_POST["phonecontact"],
            'dateadd' => $_POST["dateadd"],
            'dateupdate' => $_POST["dateupdate"],
            'comment' => $_POST["comment"]
        ];
        $sql = "INSERT INTO Companies(Name, City, ContaName, ContactEmail, ContactPhone, DateAdd, DateUpdate, Comment)
                VALUES (:name, :city, :namecontact, :mailcontact, :phonecontact, :dateadd, :dateupdate, :dateupdate, :comment)"; 

        $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
        $stmt=  $dbconnectpdo ->prepare($sql);
        $stmt->execute($data);
        
        echo "Entr�e ajout�e dans la table";
        
        
    }
    
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}
