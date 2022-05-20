<body>
    <h1>Quantidade de calorias consumidas</h1>
    <?php

    $value = 300 / 4;
    $quant = $_POST['value'];
    $calorias = $quant * $value;

    
    echo "Você consumiu $quant <strong> biscoitos </strong> e em <strong> calorias </strong>  isso dá $calorias calorias";
    ?> 
</body>     