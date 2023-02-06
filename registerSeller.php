<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARANIS SOLAR - ÁREA INCIAL</title>
    <link rel="stylesheet" href="registerSeller.css">
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
        <h1>Cadastrar Vendedor</h1>
        <form method="post" action="" id="form">
            <input 
            name="sellername"
            type="text" 
            placeholder="Digite o nome do vendedor"
            class="formInput"
            value=""
            />

            <input 
            name="sellercnpj"
            type="text" 
            placeholder="Digite o cnpj do vendedor"
            class="formInput"
            value=""
            />

            <input 
            name="sellercpf"
            type="text" 
            placeholder="cpf"
            class="formInput"
            value=""
            />

            <input 
            name="sellerlevel"
            type="text" 
            placeholder="Digite o nivel de vendedor"
            class="formInput"
            value=""
            />

            <input
            name="selleremail" 
            type="text" 
            placeholder="Digite o email do vendedor"
            class="formInput"
            value=""
            />

            <input 
            name="sellerpassword"
            type="text" 
            placeholder="Digite a senha"
            class="formInput"
            value=""
            />

            <button id="buttonAdd" type="">Cadastrar</button>
        </form>
    </section>
</body>
</html>