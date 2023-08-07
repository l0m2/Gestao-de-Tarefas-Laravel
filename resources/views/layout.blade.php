<!doctype html>
<html lang="pt-br">
  <head>
    <title>@yield('titulo')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="styles.css">
   @yield('styles')
  </head>
  <body>
    <header>
       <h1 class="logo">GESTAO-TAREFAS</h1>
       @yield('nav')
  </header>
<main>
  @yield('conteudo')

</main>
<footer>

  <div class="footer-content">
       <div class="footer-content">
            <div class="footer-info">
                <h3>Leopoldo Jacob Matsinhe</h3>
                <p>Endereço: Mocambique, Maputo</p>
                <p>Telefone: (+258) 849155311</p>
                <p>Email: <a href="lmatsinhe378@gmail.com" target="_blank">lmatsinhe378@gmail.com</a></p>
                <p>LinkedIn: <a href="https://www.linkedin.com/in/leopoldo-jacob-matsinhe-06a35a27b/" target="_blank">LinkedIn Profile</a></p>
                <p>GitHub: <a href="https://github.com/l0m2/" target="_blank">GitHub Profile</a></p>
            </div>
        </div>
</div>

      </footer>
  </body>
</html>