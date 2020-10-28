<?php
  $vProduto = 50;
  $margemLucro = null;
  $comprador = 'José';
  $res = null;

  if($vProduto <= 40){
    $margemLucro = $vProduto * 0.45;
    $res = $vProduto + $margemLucro;
    echo "{$comprador}";
  } 
  else if ($vProduto > 40){
    $margemLucro = $vProduto * 0.30;
    $res = $vProduto + $margemLucro;
    echo "{$comprador}";
  }

  function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

console.log(console_log($res));

?>
