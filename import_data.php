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

                $site ="";
                if(isset($Row[2])) {
                    $site = mysqli_real_escape_string($link,$Row[2]);
                }
                $matricule ="";
                if(isset($Row[3])) {
                    $matricule = mysqli_real_escape_string($link,$Row[3]);
                }
                $service ="";
                if(isset($Row[4])) {
                    $service = mysqli_real_escape_string($link,$Row[4]);
                }
                $numero ="";
                if(isset($Row[5])) {
                    $numero = mysqli_real_escape_string($link,$Row[5]);
                }
                $statut ="";
                if(isset($Row[6])) {
                    $statut = mysqli_real_escape_string($link,$Row[6]);
                }
                $forfait ="";
                if(isset($Row[7])) {
                    $forfait = mysqli_real_escape_string($link,$Row[7]);
                }
                $gsm ="";
                if(isset($Row[8])) {
                    $gsm = mysqli_real_escape_string($link,$Row[8]);
                } 
                $date ="";
                if(isset($Row[9])) {
                    $date = mysqli_real_escape_string($link,$Row[9]);
                } 
                $facture ="";
                if(isset($Row[10])) {
                    $facture = mysqli_real_escape_string($link,$Row[10]);
                }                
                if (!empty($nom) || !empty($prenom ) || !empty($site ) || !empty($matricule ) || !empty($service )|| !empty($numero ) || !empty($statut)
                    || !empty($forfait ) || !empty($gsm)|| !empty($date ) || !empty($facture)) {
                    $query = "INSERT INTO personnel(nom,prenom,site,matricule,service,numero,statut,forfait,gsm,date,facture) 
                    values('".$nom."','".$prenom."','".$site."','".$matricule."','".$service."','".$numero."','".$statut."','".$forfait."','".$gsm."','".$date."','".$facture."')";
                    $result = mysqli_query($link, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                        header("location:afficher.php");
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
        $message = "Invalid File Type. Upload Excel File.";
        header("location:accueil.php");
  }
}
?>