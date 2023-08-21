<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="img/NIP-LOGO.png" type="image/x-icon" />
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link href="recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Tela Inicial NIP :)</title>
    </head>
    <body>
        <header class="cabecalho">
            <h1 >Mecânica NIP</h1>
            <h2></h2>
        </header>
        <main style="text-align: center" class="">
            <div  class="principallog form-group " >  
                <div style="margin-left: 41%" class="seclog ">
                    <form style="width: 30%" action="inicial.php" method="post" >
                        <div class="mb-3 mt-3 ">
                            <label style="font-size: 30px; margin-top: 50%"  class="" for="email">Usuário</label><br>
                            <input  id="user" type="text" class="form-control " required  name="user"/>
                        </div>  
                        <button type="submit" class="btn btn-danger btn-lg">Login</button>
                    </form>
                </div>
            </div>
        </main>
        <footer style="background-color: #a9c1f5;" class="rodape">
            NIP :) © <?= date('Y'); ?>
        </footer>
    </body>
</html>