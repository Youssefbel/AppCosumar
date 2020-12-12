<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");

require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
       
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
       $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $nom = "";
                if(isset($Row[0])) {
                    $nom = mysqli_real_escape_string($link,$Row[0]);
                }
                
                $prenom = "";
                if(isset($Row[1])) {
                    $prenom = mysqli_real_escape_string($link,$Row[1]);
                }

                $poste ="";
                if(isset($Row[2])) {
                    $poste = mysqli_real_escape_string($link,$Row[2]);
                }

                }                
                if (!empty($nom) || !empty($prenom ) || !empty($poste )) {
                    $query = "INSERT INTO fixe(nom,prenom,poste) 
                    values('".$nom."','".$prenom."','".$poste."')";
                    $result = mysqli_query($link, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                        header("location:faff.php");
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                        header("location:accueil.php");
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File";
        header("location:accueil.php");  }

?>