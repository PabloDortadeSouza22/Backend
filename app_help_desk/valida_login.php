<?php

$usuario_autenticado = false;

$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => 12345
    ]
];

foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST
    ['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado = true){
    echo "Usuario autenticado com sucesso";
}else{
    //echo "Usuario ou senha incorreto";
    header ('Location: index.php?login=erro');
}
?>