<?php
session_start();

// Adicionar um item ao carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    
    $cart_item = array(
        "id" => $product_id,
        "name" => $product_name,
        "price" => $product_price,
        "quantity" => 1
    );
    
    // Verificar se o carrinho já existe na sessão
    if (isset($_SESSION["cart"])) {
        // Verificar se o item já existe no carrinho
        $item_exists = false;
        foreach ($_SESSION["cart"] as $key => $item) {
            if ($item["id"] == $product_id) {
                // Atualizar a quantidade do item no carrinho
                $_SESSION["cart"][$key]["quantity"] += 1;
                $item_exists = true;
                break;
            }
        }
        
        // Adicionar o item ao carrinho se não existir
        if (!$item_exists) {
            array_push($_SESSION["cart"], $cart_item);
        }
    } else {
        // Criar o carrinho e adicionar o item
        $_SESSION["cart"] = array($cart_item);
    }
}

// Remover um item do carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["remove_from_cart"])) {
    $product_id = $_POST["product_id"];
    
    // Remover o item do carrinho
    foreach ($_SESSION["cart"] as $key => $item) {
        if ($item["id"] == $product_id) {
            unset($_SESSION["cart"][$key]);
            break;
        }
    }
    
    // Reindexar os índices do carrinho
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
}

// Limpar o carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clear_cart"])) {
    unset($_SESSION["cart"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-size: 14px;
        }
        
        .container {
            width: 100%;
            min-height: 100vh;
            background-color: #fff;
            position: relative;
            overflow: hidden;
        }
        
        .retangulo {
            width: 656px;
            height: 91px;
            background-color: rgba(237, 252, 237, 1);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 3px;
            overflow: hidden;
        }
        
        .button-verde-fimpedido {
            width: 167px;
            height: 44px;
            background-color: rgba(55, 189, 69, 1);
            border-radius: 3px;
            overflow: hidden;
        }
        
        .texto {
            color: #000;
            font-family: Inter, sans-serif;
            font-weight: normal;
            font-size: 20px;
            text-align: left;
        }
        
        .fundo-resumo {
            width: 353px;
            height: 528px;
            background-color: rgba(237, 251, 237, 1);
            position: absolute;
            top: 313px;
            left: 1010px;
            border-radius: 3px;
            overflow: hidden;
        }
        
        .adicionar-endereco {
            width: 203px;
            height: 35px;
            background-color: rgba(55, 189, 69, 1);
            position: absolute;
            top: 419px;
            left: 690px;
            border-radius: 3px;
            overflow: hidden;
        }
        
        .icon {
            opacity: 1;
            position: absolute;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
        
        .carrinho {
            width: 50px;
            height: 50px;
            background-image: url("../images/carrinho.png");
            top: 0;
            left: 157px;
        }
        
        .inicio {
            width: 50px;
            height: 50px;
            background-image: url("../images/inicio.png");
            top: 0;
            left: 18px;
        }
        
        .perfil {
            width: 50px;
            height: 50px;
            background-image: url("../images/perfil.png");
            top: 0;
            right: 18px;
        }
        
        .payment-icon {
            width: 30px;
            height: 30px;
            opacity: 1;
            position: absolute;
        }
        
        .picpay {
            background-image: url("../images/picpay.png");
            top: 676px;
            right: 18px;
        }
        
        .mastercard {
            background-image: url("../images/mastercard.png");
            top: 801px;
            right: 18px;
        }
        
        .visa {
            background-image: url("../images/visa.png");
            top: 841px;
            right: 18px;
        }
        
        .elo {
            background-image: url("../images/elo.png");
            top: 881px;
            right: 18px;
        }
        
        .pix {
            background-image: url("../images/pix.png");
            top: 921px;
            right: 18px;
        }
    </style>
  
</head>
<body>
    <div class="container">
        <h1>Carrinho de Compras</h1>
        
        <?php if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) : ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
                
                <?php foreach ($_SESSION["cart"] as $item) : ?>
                    <tr>
                        <td><?php echo $item["id"]; ?></td>
                        <td><?php echo $item["name"]; ?></td>
                        <td><?php echo $item["price"]; ?></td>
                        <td><?php echo $item["quantity"]; ?></td>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="product_id" value="<?php echo $item["id"]; ?>">
                                <button type="submit" name="remove_from_cart">Remover</button>
                            </form>
                        </td>
                    </tr>
 
<?php
///////////////////////////////////////////////////////////////////////// session_start();

// Adicionar um item ao carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    
    $cart_item = array(
        "id" => $product_id,
        "name" => $product_name,
        "price" => $product_price,
        "quantity" => 1
    );
    
    // Verificar se o carrinho já existe na sessão
    if (isset($_SESSION["cart"])) {
        // Verificar se o item já existe no carrinho
        $item_exists = false;
        foreach ($_SESSION["cart"] as $key => $item) {
            if ($item["id"] == $product_id) {
                // Atualizar a quantidade do item no carrinho
                $_SESSION["cart"][$key]["quantity"] += 1;
                $item_exists = true;
                break;
            }
        }
        
        // Adicionar o item ao carrinho se não existir
        if (!$item_exists) {
            array_push($_SESSION["cart"], $cart_item);
        }
    } else {
        // Criar o carrinho e adicionar o item
        $_SESSION["cart"] = array($cart_item);
    }
}

// Remover um item do carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["remove_from_cart"])) {
    $product_id = $_POST["product_id"];
    
    // Remover o item do carrinho
    foreach ($_SESSION["cart"] as $key => $item) {
        if ($item["id"] == $product_id) {
            unset($_SESSION["cart"][$key]);
            break;
        }
    }
    
    // Reindexar os índices do carrinho
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
}

// Limpar o carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clear_cart"])) {
    unset($_SESSION["cart"]);
}
?>
</head>
<body>
    <div class="container">
        <div class="retangulo">
            <h1 class="texto">Carrinho de Compras</h1>
        </div>
        
        <?php if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) : ?>
            <table>
                <tr>
                    <th>ID</</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
                
                <?php foreach ($_SESSION["cart"] as $item) : ?>
                    <tr>
                        <td><?php echo $item["id"]; ?></td>
                        <td><?php echo $item["name"]; ?></td>
                        <td><?php echo $item["price"]; ?></td>
                        <td><?php echo $item["quantity"]; ?></td>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="product_id" value="<?php echo $item["id"]; ?>">
                                <button type="submit" name="remove_from_cart">Remover</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
            <form method="post" action="">
                <button type="submit" name="clear_cart">Limpar Carrinho</button>
            </form>
        <?php else : ?>
            <p>O carrinho está vazio.</p>
        <?php endif; ?>
        
        <div class="fundo-resumo">
            <h2 class="texto">Resumo do Pedido</h2>
        </div>
        
        <div class="adicionar-endereco">
            <h3 class="texto">Adicionar Endereço</h3>
        </div>
        
        <div class="icon carrinho"></div>
        <div class="icon inicio"></div>
        <div class="icon perfil"></div>
        
        <div class="payment-icon picpay"></div>
        <div class="payment-icon mastercard"></div>
        <div class="payment-icon visa"></div>
        <div class="payment-icon elo"></div>
        <div class="payment-icon pix"></div>
    </div>
</body>
</html>