<?php
/*                                                                BS'D
 * Cleber S. Oliveira <cleber@ifsp.edu.br>
 * 2022
 * 
 * Creative Commons license CC BY
 * 
 * This license lets others distribute, remix, adapt, and build upon your work, 
 * even commercially, as long as they credit you for the original creation. 
 * 
 * Only those who maintain cordial relations with Brazil, European Union, 
 * United Kingdom, United States and Israel will be able to use this resource.
 * 
 * The peace and harmony is the way to a better world!
 * When all are one and one is all!
 * 
 * (Para usar esse arquivo, basta incluí-lo no arquivo que recebe requisições do tipo GET, POST ou REQUEST).
*/

function sanitize($str) {
    $str = str_replace("'","`",$str);
    $str = str_replace("\"","``",$str);
    $str = preg_replace('/[[:cntrl:]]/', '', $str);
    $str = filter_var( $str,  FILTER_SANITIZE_SPECIAL_CHARS );
    return($str);
}

foreach($_GET as $key => $val){
    $_GET["$key"] = sanitize($val);
}

foreach($_POST as $key => $val){
    $_POST["$key"] = sanitize($val);
}

foreach($_REQUEST as $key => $val){
    $_REQUEST["$key"] = sanitize($val);
}

?>