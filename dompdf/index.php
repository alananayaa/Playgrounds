<?php
    $order = array("name" => "Ivan Dimov", "productName" => "Waterproof portable speakers", "productPrice" => "20", "deliveryDate" => "2150");

    ob_start();
    
    require_once("template.php");
    
    $template = ob_get_clean();
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf; 
    $dompdf = new Dompdf();
 
    $dompdf->loadHtml($template);
    
    $dompdf->setPaper('legal', 'portrait');
    
    $dompdf->render();
    
    $dompdf->stream("invoice",array("Attachment" => 0));
?>