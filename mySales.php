<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARANIS SOLAR - ÁREA INCIAL</title>
    <link rel="stylesheet" href="mySales.css">
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

    <section id="container">
        <div id="containerHeader">
            <h1>Minhas Vendas</h1>
            <button>
                <FiRefreshCcw size={25} color="#3fffa3"/>
            </button>
        </div>

        <article id="listOrders">
            <span id="emptyList">
                Nenhuma venda Cadastrada ...
            </span>

            <section id="orderItem">
                <div>
                    <div id="tag"></div>
                    <span><strong>Tipo:</strong></span>
                    <span><strong>Nome:</strong></span>
                    <span><strong>ID:</strong></span>
                    <button id="botaoD">Deletar</button>
                    <button id="botaoA">Alterar</button>
                </div>
            </section>
        </article>
    </section>
</body>
</html>