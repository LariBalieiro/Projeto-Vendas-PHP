<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARANIS SOLAR - ÁREA INCIAL</title>
    <link rel="stylesheet" href="folha.css">
</head>
<body>
    <header id="headerContainer">
        <div id="headerContent">
            <img src="image/LogoPrincipal.svg"alt="Logo Taranis" width="140"/>
            <a>Nome
                <button>
                    Sair
                </button>
            </a>
        </div>
    </header>
    <nav id="navContainer">
        <a href="./home.php">Home</a>
        <a href="./registerSeller.php">Cadastrar Vendedores</a>
        <a href="./registerSales.php">Cadastrar Vendas</a>
        <a href="./mySeller.php">Minhas Vendas</a>
        <a href="./mySales.php">Meus Vendedores</a>
        <button id="buttonNavContainer">
            <a href="./report.php">Gerar Relatorio</a>
        </button>
    </nav> 

    <section id="containerHome">
        <div id="containerHeaderHome">
            <button class="box" >
                <img src="icons/cart-shopping-solid.svg"alt="ico" width="55"/>
                <a href='./mySeller.php'>Minhas Vendas</a>
            </button>
            <button class="box" >
                <img src="icons/question-solid.svg"alt="ico" width="45"/>
                <a href='./faq.php'>FAQ</a>
            </button>
            <button class="box" >
                <img src="icons/users-solid.svg"alt="ico" width="55"/>
                <a href='./contact.php'>Contato</a>
            </button>
        </div>
    </section>
</body>
</html>