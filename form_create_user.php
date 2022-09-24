<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="header">
        <nav class="navegation">
            <abbr title="União Nacional dos Trouxa">UNT</abbr>

        </nav>
    </header>

    <aside class="second-part">

    </aside>

    <main class="main-part">
        <article class="post">
            <h3>Cadastro de usuários</h3>

            <form action="create_user.php" method="POST">
                <label for="client_name">Name: </label>
                <input type="text" name="client_name" id="client_name" placeholder="Write your name"> <br><br>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Your email"> <br> <br>
                <label for="phone">Cellphone:</label>
                <input type="tel" name="phone" id="phone"> <br><br>
                <label for="client_password">Password:</label>
                <input type="password" name="client_password" id="client_password" placeholder = "Use numbers"> <br><br>
                <input type="submit" value="Send">
            </form>
<br><br>
            <code>
                val trouxa : String = "Iris Correa"
            </code>
            <br><br>
            <details>
                <summary>Trouxa list</summary>
                <ul>
                    <li>HTML5 E CSS</li>
                    <li>JavaScript</li>
                    <li>Node.js</li>
                    <li>Python</li>
                </ul>
            </details>

        </article>
        <br>
        <dfn>HTML</dfn> HyperText Markup Language
    </main>

    <footer class="footer">
        <br>
        <address>
            Avenida Dos Trouxas, 1765, Conj 71 - São Paulo
        </address>        

    </footer>
</body>
</html>