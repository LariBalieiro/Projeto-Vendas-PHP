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

    <section id="container">
        <h1>Cadastrar Vendas</h1>
        <form method="post" action="" id="form">
            <input 
            name="productname"
            type="text" 
            placeholder="Nome do produto"
            class="formInput"
            value=""
            />

            <input 
            name="producttype"
            type="text" 
            placeholder="Tipo"
            class="formInput"
            value=""
            />

            <input 
            name="salevalue"
            type="text" 
            placeholder="Valor da venda"
            class="formInput"
            value=""
            />

            <input 
            name="clientname"
            type="text" 
            placeholder="Nome do cliente"
            class="formInput"
            value=""
            />

            <input 
            name="phone"
            type="text" 
            placeholder="Digite o telefone do cliente"
            class="formInput"
            value=""
            />

            <input 
            name="customeraddress"
            type="text" 
            placeholder="Digite o endereço do cliente"
            class="formInput"
            value=""
            />
            
            <input 
            name="cpf"
            type="text" 
            placeholder="cpf"
            class="formInput"
            value=""
            />

            <textarea
            name="saledescription"
            value="descricao"
            placeholder="Descrição da venda"
            class="formText"
            ></textarea>

            <button id="buttonAdd" type="">Cadastrar</button>
        </form>
    </section>
</body>
</html>