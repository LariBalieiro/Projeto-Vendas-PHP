<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARANIS SOLAR - ÁREA INCIAL</title>
    <link rel="stylesheet" href="report.css">
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
        <button onClick="PDF" id="buttonNavContainer">
            <a href="./report.php">Gerar Relatorio</a>
        </button>
    </nav> 

    <section id="container">
        <div id="containerHeader">
            <h1>Nome | Relatorio Mensal</h1>
        </div>
        <hr></hr>
        
        <div id="containerBody">
            <button id="button"><a>Gerar PDF</a></button>
            <table>
                <thead>
                    <td><b>Data</b></td>
                    <td><b>Codigo</b></td>
                    <td><b>Vendedor</b></td>
                    <td><b>Nome</b></td>
                    <td><b>Tipo da venda</b></td>
                    <td><b>Valor</b></td>
                    <td><b>Procentagem</b></td>
                    <td><b>Etapa</b></td>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>