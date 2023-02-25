<?php
if(isset($_POST["export"]))
{
    $data = new EtudiantController();
    $etudiants = $data->getAdmisEtudiant();
  
  $output .= '<table class="table table-bordered " >  
                    <tr>  
                         <th>Nom</th>  
                         <th>Prenom</th>  
                         <th>CNE</th>  
                    </tr>';
  
  foreach($etudiants as $etud) {
   $output .= '<tr>  
                         <td>'.$etud["nom"].'</td>  
                         <td>'.$etud["prenom"].'</td>  
                         <td>'.$etud["cne"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
}
?>