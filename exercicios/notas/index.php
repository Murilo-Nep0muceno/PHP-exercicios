<body>
    <h1>Resultado da media</h1>
    <?php

    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $num3= $_POST['num3'];

    $soma = ($num1 + $num2 + $num3) / 3;
    
    $carros = [
        'nome' => 'BMW',
        'modelo' => 'i8',
    ];

    print_r($carros);

    echo $soma;
    
    ?> 
</body>