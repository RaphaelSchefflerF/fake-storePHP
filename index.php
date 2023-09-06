<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="img/m14.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Lojas Marisa</title>
    <header>
      <div>
        <nav class="navbar bg-body-secondary nav-espaco">
        <img src="img/marisa.png" width="200" height="200">
          <ul class="nav">
            <form class="d-flex $pink-200" role="search">
              <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
            </form>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Entre - Cadastre-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Compras</a>
            </li>
          </ul>
        </nav>
        <nav class="navbar bg-dark"></nav>
      </div>
    </header>
  </head>
<body>
    <div class="App">
        <div class="produto-lista">
            <?php
                $produtos = json_decode(file_get_contents("https://fakestoreapi.com/products"), true);
                foreach ($produtos as $product) {
                    echo '<div class="produto-card">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['title'] . '" />';
                    echo '<h3>' . $product['title'] . '</h3>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<h4>$' . $product['price'] . ' - R$ ' . ($product['price'] * 4.94) . '</h4>';
                    echo '<button onclick="window.location.reload();">Comprar</button>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
  </body>
</html>