<?php
    namespace Dompdf;
    require_once 'dompdf/autoload.inc.php';
    require_once 'template.php';

    if(isset($_POST['submit_val'])){
        $order = array("name" => "Ivan Dimov", "productName" => "Waterproof portable speakers", "productPrice" => "20", "deliveryDate" => "2150");
        ob_start();
        $template = ob_get_clean();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($template);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $f;
        $l;
        if(headers_sent($f,$l))
        {
            echo $f,'<br/>',$l,'<br/>';
            die('now detect line');
        }
        $dompdf->stream("Prueba",array("Attachment"=>0));
    }
?>