<?php  
 function fetch_data()  
 {  
      $output = '';  
      add_filter( 'the_content', 'dcms_list_data' );
      global $wpdb;

      $dbServerName = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbName = "portal_alcaldia";
      $tabla = "personal_nomina";
      $tabla1 = "personal";
      $tabla2= "nomina";
      $tabla3= "unidades_administrativas";
      $conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName); 
      $cedula  = "15249486";    
      $tipo_constancia ="1";
      $slug_page = 'personal';

      $query = "SELECT * from personal_nomina,personal,nomina,unidades_administrativas
      WHERE  personal_nomina.cedula =$cedula 
      AND ( personal_nomina.estatus_personal='A' OR  personal_nomina.estatus_personal='V')
      AND  personal_nomina.cedula   =  personal.cedula 
      AND nomina.codigo_nomina=personal_nomina.codigo_nomina 
      AND unidades_administrativas.codigo_unidad=personal_nomina.codigo_unidad";       
      $items =$wpdb->get_results($query);       
        foreach ($items as $item) {
        if($tipo_constancia =="1")
        {
            $sueldo= $item->sueldo_base;
        }
        else if($tipo_constancia =="2")
        {
            $sueldo = $item->sueldo_integral;
        }
        $output .= '<tr>
                <td>'.$item->cedula.'</td>
                <td>'.$item->nombres.'</td>
                <td>'.$item->apellidos.'</td>
                <td>'.$item->cargo.'</td>
                <td>'.$item->nombre_unidad.'</td>
                <td>'.$item->fecha_ingreso.'</td>
                <td>'.$item->nombre.'</td>  
                <td>'.$sueldo.'</td>  
                </tr>';
        }
        return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
    require_once __DIR__ . '/mpdf/vendor/autoload.php';   
    $mpdf = new \Mpdf\Mpdf(['debug' => true]);
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    $mpdf->Output();
      
 }  
 ?>  

<table class="table table-bordered">  
<tr>  
    <th width="5%">ID</th>  
    <th width="30%">Name</th>  
    <th width="10%">Gender</th>  
    <th width="45%">Designation</th>  
    <th width="10%">Age</th>  
    <th width="10%">Gender</th>  
    <th width="45%">Designation</th>  
    <th width="10%">Age</th>  
</tr>  
<?php  
echo fetch_data();  
?>  
</table>  
<br />  
<form method="post">  
<input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
</form>