<header class="header">

    <div class="flex">
        <a href="inicio.php" class="logo">iFood.</a>

        <!-- Start Nav. -->
        <nav class="navbar">
            <ul>
                <li><a href="inicio.php">Início</a></li>
                <li><a href="#">Páginas +</a>
                        <ul>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                </li>
                <li><a href="comprar.php">Comprar</a></li>
                <li><a href="ordens.php">Ordens</a></li>
            </ul>
        </nav>
        <!-- End Nav. -->

        <!-- Start Icons -->
        <div class="icons">
            <a href="procura.php" class="fas fa-search"></a>
            <a href="desejos.php" class="fas fa-heart"><span>(00)</span></a>
            <a href="carrinho.php" class="fas fa-shopping-cart"><span>(00)</span></a>
            <div id="usuario-btn" class="fas fa-user"></div>
            <div id="acesso-btn" class="fa-solid fa-right-to-bracket"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <!-- End Icons -->
    </div>
</header>

<!-- Start Login/Cadastrar -->
<div class="conta-form">

<div id="fechar-form" class="fas fa-times"></div>

<div class="btns">
    <span class="btn ativo entrar-btn">Entrar</span>
    <span class="btn cadastrar-btn">Cadastrar</span>
</div>

<form action="" class="entrar-form">
    <h3>Entrar</h3>
    <input type="text" placeholder="Usuário" class="box">
    <input type="password" placeholder="Senha" class="box">

    <div class="flex">
        <input type="checkbox" name="" id="lembrar">
        <label for="lembrar">Lembrar-me.</label>

        <a href="#">Esqueceu a senha?</a>
    </div>

    <input type="submit" value="Entrar" class="btn">
</form>

</div>
<!-- End Login/Cadastrar -->