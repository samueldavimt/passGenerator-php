<?php
    require_once('handlePass.php');

    
    if(count($_GET) > 0){
        $hidePassword = "block"; // none
        $hideControls = ''; // controls-hide
        $lenghtDefault = $_GET['lenght_password'];
        $password = $generatePass->handlePass($_GET);

    }else{
        $hidePassword = "none"; //block
        $hideControls = 'controls-hide'; // vazio
        $password = '';
        $lenghtDefault = '12';
    }

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex">
    
    <div class="container flex">
        <div class="apresentation">
            <h1>Create Secure <span>Password</span></h1>
            <button>Create</button>
        </div>

    </div>

    <div class="controls-password <?=$hideControls?>">
            <h2>Selecione as opções</h2>
            <form method="GET" action="index.php" class="controls">
                <div class="container-controls">
                    <div class="input-area-number">
                        <span>Tamanho Mínimo</span>
                        <input type="number" required name="lenght_password" id="" value="<?=$lenghtDefault?>" placeholder="12">
                    </div>

                    <label class="container-checked">
                        Letras Maiúsculas
                        <input type="checkbox" name="upper_include" id="">
                        <span class="checkmark"></span>
                    </label>

                    <label class="container-checked">
                        Caractéres Especiais
                        <input type="checkbox" checked name="especial_caracteres" id="" >
                        <span class="checkmark"></span>
                    </label>
                </div>
                <input type="submit" value="Gerar Senha">
            </form>

            <div style="display:<?=$hidePassword?>;" class="password flex">
                <span class="new-password"><?php print_r($password)?></span>
            </div>

        </div>



    <script src="script.js"></script>
</body>
</html>