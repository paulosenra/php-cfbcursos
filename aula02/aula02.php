<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 de PHP - Constantes e Variáveis</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #6C63FF;
            --secondary: #4D44DB;
            --accent: #FF6584;
            --dark: #2D3748;
            --light: #F7FAFC;
            --gray: #E2E8F0;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem 0;
            text-align: center;
            border-radius: 0 0 20px 20px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin: 0;
            font-size: 2.2rem;
        }
        
        h1 i {
            margin-right: 10px;
        }
        
        .content-box {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        h2 {
            color: var(--primary);
            border-bottom: 2px solid var(--gray);
            padding-bottom: 0.5rem;
            margin-top: 0;
        }
        
        .result-container {
            background-color: #F8F9FA;
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 0 8px 8px 0;
        }
        
        .code-block {
            font-family: 'Source Code Pro', monospace;
            background-color: #282C34;
            color: #ABB2BF;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            overflow-x: auto;
        }
        
        .variable {
            color: #E06C75;
            font-weight: bold;
        }
        
        .constant {
            color: #61AFEF;
            font-weight: bold;
        }
        
        .value {
            color: #98C379;
        }
        
        .comment {
            color: #5C6370;
            font-style: italic;
        }
        
        footer {
            text-align: center;
            padding: 1.5rem;
            color: var(--dark);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            header {
                padding: 1.5rem 0;
            }
            
            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-code"></i>Aula 2 - Variáveis e Constantes</h1>
        </div>
    </header>
    
    <div class="container">
        <div class="content-box">
            <h2><i class="fas fa-variable"></i> Trabalhando com Variáveis</h2>
            
            <div class="code-block">
                <span class="comment">// Variáveis</span><br>
                <span class="variable">$vnome</span> = <span class="value">"Paulo"</span>;<br>
                <span class="variable">$vnum</span> = <span class="value">10</span>;<br>
                <span class="variable">$vnum2</span> = <span class="value">20.5</span>;<br>
                <span class="variable">$soma</span> = <span class="value">0</span>;<br>
            </div>
            
            <h3>Resultado:</h3>
            <div class="result-container">
                <?php
                // Variáveis
                $vnome="Paulo";
                $vnum=10;
                $vnum2=20.5;
                $soma=0;

                echo "Nome: $vnome <br>";
                $vnome="Campos";
                echo "Nome: $vnome <br>";
                $vnome= "Samuel";
                echo "Nome: ".$vnome."<br>";
                $soma=10 + 20;
                echo "Soma: $soma<br>";
                ?>
            </div>
        </div>
        
        <div class="content-box">
            <h2><i class="fas fa-lock"></i> Trabalhando com Constantes</h2>
            
            <div class="code-block">
                <span class="comment">// Constantes</span><br>
                define (<span class="value">"cnome"</span>, <span class="value">"Bruno"</span>);<br>
                define(<span class="value">"ver"</span>, PHP_VERSION);<br>
                define(<span class="value">"dir"</span>, __DIR__);<br>
            </div>
            
            <h3>Resultado:</h3>
            <div class="result-container">
                <?php
                // Constantes
                define ("cnome", "Bruno");
                define("ver", PHP_VERSION);
                define("dir", __DIR__);

                echo "<br>";
                echo "Constante cnome: ".cnome."<br>";
                echo "Nome do arquivo: ".__FILE__."<br>";
                echo "Versão do PHP: ".ver."<br>";
                echo "Pasta: ".dir."<br>";
                echo "Versão do SO: ".PHP_OS."<br>";
                echo "Número da linha: ".__LINE__."<br>";
                ?>
            </div>
        </div>
    </div>
    
    <footer>
        Curso de PHP - <?php echo date('Y'); ?> | Aula sobre Variáveis e Constantes
    </footer>
</body>
</html>