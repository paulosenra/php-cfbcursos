<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 de PHP - Introdução do PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Fira+Code:wght@400&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --dark: #1b263b;
            --light: #f8f9fa;
            --success: #4cc9f0;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
        }
        
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex: 1;
        }
        
        .code-box {
            background-color: #282c34;
            color: #abb2bf;
            padding: 1.5rem;
            border-radius: 8px;
            font-family: 'Fira Code', monospace;
            margin: 2rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
        
        .php-output {
            background-color: white;
            border-left: 4px solid var(--accent);
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 0 4px 4px 0;
        }
        
        .php-tag {
            color: #c678dd;
        }
        
        .php-comment {
            color: #5c6370;
            font-style: italic;
        }
        
        .php-echo {
            color: #e06c75;
        }
        
        .php-string {
            color: #98c379;
        }
        
        footer {
            text-align: center;
            padding: 1.5rem;
            background-color: var(--dark);
            color: white;
            margin-top: auto;
        }
        
        .highlight {
            color: var(--accent);
            font-weight: bold;
        }
        
        .transition {
            transition: all 0.3s ease;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="transition">
        <h1>Introdução ao PHP</h1>
        <p>Aula 1 - Fundamentos da Linguagem</p>
    </header>
    
    <div class="container">
        <div class="code-box">
            <span class="php-tag">&lt;?php</span><br>
            <span class="php-comment">//Comentário simples em PHP</span><br>
            <span class="php-comment">/*<br>
            &nbsp;* Comentário com linhas múltiplas<br>
            &nbsp;*/</span><br><br>
            
            <span class="php-echo">echo</span> <span class="php-string">'&lt;span class="highlight"&gt;Primeira linha em PHP&lt;/span&gt; &lt;br&gt;'</span>;<br>
            <span class="php-echo">echo</span> <span class="php-string">'Curso de PHP'</span>;<br>
            <span class="php-tag">?&gt;</span>
        </div>
        
        <div class="php-output">
            <?php
            echo '<span class="highlight">Primeira linha em PHP</span> <br>'; 
            echo 'Curso de PHP';
            ?>
        </div>
        
        <h2>Integração PHP com HTML</h2>
        <p>Texto escrito em HTML</p>
        
        <div class="php-output">
            <?php
            echo 'Texto escrito em PHP';
            ?>
        </div>
    </div>
    
    <footer>
        Curso de PHP - Todos os direitos reservados &copy; <?php echo date('Y'); ?>
    </footer>
</body>
</html>