<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalização de Tema</title>
    <?php
    setcookie('theme', time() + 5);
    if(isset($_COOKIE["theme"])) {
        $selected_theme = $_COOKIE["theme"];
    } else {
        $selected_theme = "light";
    }
    ?>
    <link id="theme-style" rel="stylesheet" href="styles/<?php echo $selected_theme; ?>.css">
    <link rel="stylesheet" href="stylep.css">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

</head>
<body onload="manterStyle()">
    <nav>
        <button class="btn" onclick="toggleTheme()">Tema</button>
    </nav>

    <section  id="content">
        <!-- Conteúdo principal da página -->
        <div class="tag-span" id="tagSpan1">
        <lord-icon
    src="https://cdn.lordicon.com/lmpjunbf.json"
    trigger="in"
    stroke="light"
    colors="primary:#212A3E,secondary:#394867"
    style="width:250px;height:250px">
</lord-icon>
        </div>
        <div class="tag-span" id="tagSpan2">
        <lord-icon
    src="https://cdn.lordicon.com/awjihmup.json"
    trigger="in"
    stroke="light"
    colors="primary:#F1F6F9,secondary:#9BA4B5"
    style="width:250px;height:250px">
</lord-icon>
        </div>
    </section>

    <footer>
 

    </footer>

    
</body>
</html>

<script>
    
function manterStyle() {
    const cookies = window.document.cookie
    const cookie = cookies.split(";")
    const themeString = cookie[1]
    const theme = themeString.split("=")[1]

    toggleTheme(theme)
}

function toggleTheme(temaAtual) {
    var themeLink = document.getElementById('theme-style');
    if (temaAtual) {
        themeLink.setAttribute('href', `styles/${temaAtual}.css`);
    } else {
        var currentTheme = themeLink.getAttribute('href');
        var newTheme = currentTheme.includes('light') ? 'dark' : 'light';


        document.cookie = 'theme=' + newTheme + '; expires= 30; path=/';


        themeLink.setAttribute('href', `styles/${newTheme}.css`);


        var tagSpan1 = document.getElementById('tagSpan1');
        var tagSpan2 = document.getElementById('tagSpan2');
        tagSpan1.classList.remove('show');
        tagSpan2.classList.remove('show');


        var newTagSpan = newTheme === 'light' ? tagSpan1 : tagSpan2;
        newTagSpan.classList.add('show');
    }

}

</script>