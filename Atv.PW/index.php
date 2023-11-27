<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalização de Tema</title>
    <?php
    // Verifica se o cookie de tema existe
    if(isset($_COOKIE["theme"])) {
        $selected_theme = $_COOKIE["theme"];
    } else {
        // Se o cookie de tema não existir, define um valor padrão (pode ser "light" ou "dark")
        $selected_theme = "light";
    }
    ?>
    <link id="theme-style" rel="stylesheet" href="styles/<?php echo $selected_theme; ?>.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

</head>
<body>
    <nav>
        <button class="custom-btn btn-16" onclick="toggleTheme()">Alternar Tema</button>
    </nav>

    <section  id="content">
        <!-- Conteúdo principal da página -->
        <div class="tag-span" id="tagSpan1">
        <lord-icon
    src="https://cdn.lordicon.com/lmpjunbf.json"
    trigger="in"
    stroke="light"
    colors="primary:#000000,secondary:#000000"
    style="width:250px;height:250px">
</lord-icon>
        </div>
        <div class="tag-span" id="tagSpan2">
        <lord-icon
    src="https://cdn.lordicon.com/awjihmup.json"
    trigger="in"
    stroke="light"
    colors="primary:#ffffff,secondary:#ffffff"
    style="width:250px;height:250px">
</lord-icon>
        </div>
    </section>

    <footer>
        <!-- Conteúdo do rodapé -->
    </footer>

    
</body>
</html>
<script>
        function toggleTheme() {
            var themeLink = document.getElementById('theme-style');
            var currentTheme = themeLink.getAttribute('href');
            var newTheme = currentTheme.includes('light') ? 'dark' : 'light';

            // Atualiza o cookie com o novo tema
            document.cookie = 'theme=' + newTheme + '; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';

            // Atualiza o link do estilo para o novo tema
            themeLink.setAttribute('href', 'styles/' + newTheme + '.css');

            // Esconde ambos os spans
            var tagSpan1 = document.getElementById('tagSpan1');
            var tagSpan2 = document.getElementById('tagSpan2');
            tagSpan1.classList.remove('show');
            tagSpan2.classList.remove('show');

            // Mostra o span correspondente ao novo tema
            var newTagSpan = newTheme === 'light' ? tagSpan1 : tagSpan2;
            newTagSpan.classList.add('show');
        }
    </script>