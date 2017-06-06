
<?php
 /* Ejemplo 1 generando excel desde mysql con PHP
    @Autor: Carlos Hernan Aguilar Hurtado
 */

 $conexion = mysql_connect ("localhost", "root", "");
 mysql_select_db ("trabajo1", $conexion);    
 $sql = "SELECT co.fechaCF AS fechav,fa.nombre_fabrica AS nombreF,ve.codigoVen AS codigoV,co.cantidadPF AS cantidad,co.categoriaVenF AS categoriaV,(co.cantidadPF*ru.gananciaFab)AS ganancia FROM comprafab co,vendedor ve,fabricante fa,rango_vendedor ru WHERE co.codFabF = fa.codigoFab AND ve.codigoVen = co.codVenF AND ru.Categoria = co.categoriaVenF AND co.fechaCF = '05/22/2017' AND co.codFabF='F1' ";
 $resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
 
 if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
   
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("ingenieroweb.com.co")
        ->setLastModifiedBy("ingenieroweb.com.co")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("Ejemplo 1")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("ingenieroweb.com.co  con  phpexcel")
        ->setCategory("ciudades");    

   $i = 2;    
   while ($registro = mysql_fetch_object ($resultado)) {
       
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1','Nombre de las Fabircas')
            ->setCellValue('A'.$i, $registro->nombreF);
 
      $i++;
      
   }
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ejemplo1.xlsx"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();

?>