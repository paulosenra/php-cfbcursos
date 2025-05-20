<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 de PHP - Trabalhando com Arrays</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Fira+Code:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --accent: #f72585;
            --dark: #212529;
            --light: #f8f9fa;
            --gray: #e9ecef;
            --success: #4cc9f0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2.5rem 0;
            text-align: center;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin: 0;
            font-size: 2.3rem;
        }
        
        h1 i {
            margin-right: 15px;
        }
        
        .section {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }
        
        h2 {
            color: var(--primary);
            margin-top: 0;
            display: flex;
            align-items: center;
        }
        
        h2 i {
            margin-right: 10px;
            color: var(--accent);
        }
        
        .code-block {
            font-family: 'Fira Code', monospace;
            background-color: #282c34;
            color: #abb2bf;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            overflow-x: auto;
        }
        
        .array-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 1.5rem 0;
        }
        
        .array-box {
            background: var(--gray);
            border-radius: 8px;
            padding: 1rem;
            flex: 1;
            min-width: 200px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .array-box h3 {
            margin-top: 0;
            color: var(--secondary);
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
        }
        
        .array-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px dashed #dee2e6;
        }
        
        .array-key {
            font-weight: bold;
            color: var(--primary);
        }
        
        .array-value {
            color: var(--dark);
        }
        
        .result-box {
            background-color: #f8f9fa;
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 0 8px 8px 0;
        }
        
        .divider {
            border: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--primary), transparent);
            margin: 2rem 0;
        }
        
        footer {
            text-align: center;
            padding: 1.5rem;
            background-color: var(--dark);
            color: white;
            margin-top: 2rem;
        }
        
        .php-comment {
            color: #5c6370;
            font-style: italic;
        }
        
        .php-array {
            color: #e06c75;
        }
        
        .php-string {
            color: #98c379;
        }
        
        .php-number {
            color: #d19a66;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            header {
                padding: 1.8rem 0;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .array-box {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-layer-group"></i>Trabalhando com Arrays em PHP</h1>
            <p>Aula 3 - Vetores e Matrizes</p>
        </div>
    </header>
    
    <div class="container">
        <div class="section">
            <h2><i class="fas fa-bars"></i> Arrays Indexados</h2>
            
            <div class="code-block">
                <span class="php-comment">// Arrays indexados</span><br>
                <span class="php-array">$vet</span> = array(<span class="php-number">7</span>);<br><br>
                
                <span class="php-array">$vet</span>[<span class="php-number">0</span>] = <span class="php-string">"Carro"</span>;<br>
                <span class="php-array">$vet</span>[<span class="php-number">1</span>] = <span class="php-string">"Avião"</span>;<br>
                <span class="php-array">$vet</span>[<span class="php-number">2</span>] = <span class="php-string">"Navio"</span>;<br>
                <span class="php-array">$vet</span>[<span class="php-number">3</span>] = <span class="php-string">"Moto"</span>;<br>
                <span class="php-array">$vet</span>[<span class="php-number">4</span>] = <span class="php-string">"Onibus"</span>;<br>
                <span class="php-array">$vet</span>[<span class="php-number">5</span>] = <span class="php-number">123456</span>;<br>
                <span class="php-array">$vet</span>[<span class="php-number">6</span>] = <span class="php-array">$vet2</span>[<span class="php-string">"nome"</span>];
            </div>
            
            <div class="array-container">
                <div class="array-box">
                    <h3>Vetor $vet</h3>
                    <?php
                    $vet=array(7);
                    $vet[0]="Carro";
                    $vet[1]="Avião";
                    $vet[2]="Navio";
                    $vet[3]="Moto";
                    $vet[4]="Onibus";
                    $vet[5]=123456;
                    $vet[6]=$vet2["nome"];
                    
                    for($i=0; $i<count($vet); $i++) {
                        echo '<div class="array-item">';
                        echo '<span class="array-key">Índice '.$i.'</span>';
                        echo '<span class="array-value">'.$vet[$i].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            
            <div class="result-box">
                <?php
                $i=6;
                echo "Elemento de índice $i = ".$vet[$i];
                ?>
            </div>
        </div>
        
        <div class="section">
            <h2><i class="fas fa-key"></i> Arrays Associativos</h2>
            
            <div class="code-block">
                <span class="php-comment">// Array associativo</span><br>
                <span class="php-array">$vet2</span> = array(<br>
                &nbsp;&nbsp;<span class="php-string">"nome"</span> => <span class="php-string">"Paulo"</span>,<br>
                &nbsp;&nbsp;<span class="php-string">"cidade"</span> => <span class="php-string">"BH"</span>,<br>
                &nbsp;&nbsp;<span class="php-string">"curso"</span> => <span class="php-string">"PHP"</span><br>
                );
            </div>
            
            <div class="array-container">
                <div class="array-box">
                    <h3>Vetor $vet2</h3>
                    <?php
                    $vet2=array("nome"=>"Paulo","cidade"=>"BH","curso"=>"PHP");
                    
                    foreach($vet2 as $key => $value) {
                        echo '<div class="array-item">';
                        echo '<span class="array-key">'.$key.'</span>';
                        echo '<span class="array-value">'.$value.'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            
            <div class="result-box">
                <?php
                echo "Nome: ".$vet2["nome"]." - Cidade: ".$vet2["cidade"]." - Curso: ".$vet2["curso"];
                ?>
            </div>
        </div>
        
        <div class="section">
            <h2><i class="fas fa-table"></i> Matriz (Array Multidimensional)</h2>
            
            <div class="code-block">
                <span class="php-comment">// Matriz</span><br>
                <span class="php-array">$mat</span> = array(<br>
                &nbsp;&nbsp;array(<span class="php-string">"Carro1"</span>, <span class="php-number">65000</span>),<br>
                &nbsp;&nbsp;array(<span class="php-string">"Carro2"</span>, <span class="php-number">35000</span>),<br>
                &nbsp;&nbsp;array(<span class="php-string">"Carro3"</span>, <span class="php-number">50000</span>)<br>
                );
            </div>
            
            <div class="array-container">
                <div class="array-box">
                    <h3>Matriz $mat</h3>
                    <?php
                    $mat=array(
                        array("Carro1",65000),
                        array("Carro2",35000),
                        array("Carro3",50000)
                    );
                    
                    foreach($mat as $index => $car) {
                        echo '<div class="array-item">';
                        echo '<span class="array-key">'.$car[0].'</span>';
                        echo '<span class="array-value">R$ '.number_format($car[1], 2, ',', '.').'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            
            <div class="result-box">
                <?php
                echo "Carro A: ".$mat[0][0]." - Valor: ".number_format($mat[0][1], 2, ',', '.')."<br>";
                echo "Carro B: ".$mat[1][0]." - Valor: ".number_format($mat[1][1], 2, ',', '.')."<br>";
                echo "Carro C: ".$mat[2][0]." - Valor: ".number_format($mat[2][1], 2, ',', '.')."<hr>";
                ?>
            </div>
        </div>
    </div>
    
    <footer>
        Curso de PHP - <?php echo date('Y'); ?> | Aula sobre Arrays e Matrizes
    </footer>
</body>
</html>