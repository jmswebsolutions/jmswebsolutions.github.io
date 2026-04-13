<?php
/*
Template Name: Artigo Blog - Fim da Panfletagem (FIX IMAGEM)
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Fim da Panfletagem: Por que investir no Google é mais barato que papel | JMS Web Solutions</title>
    
    <link rel="icon" type="image/png" href="https://jmswebsolutions.com.br/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg: #0f1115;
            --card-bg: #1a1d23;
            --primary: #ff5e14;
            --whatsapp: #25d366;
            --text: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: var(--bg); 
            color: var(--text); 
            line-height: 1.8;
        }

        header {
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(15, 17, 21, 0.95);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid #2d3139;
        }
        
        .logo { font-weight: 800; font-size: 1.2rem; color: var(--primary); letter-spacing: 1px; text-decoration: none; }
        .nav-menu { display: flex; align-items: center; }
        .nav-menu a { color: var(--text); text-decoration: none; margin-left: 25px; font-size: 0.85rem; font-weight: 500; }

        .article-hero {
            padding: 100px 7% 40px;
            text-align: center;
            background: radial-gradient(circle at top, #1a1d23 0%, #0f1115 100%);
        }
        .category-tag {
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.75rem;
            margin-bottom: 20px;
            display: block;
        }
        .article-hero h1 { font-size: 3.2rem; font-weight: 800; line-height: 1.1; max-width: 1000px; margin: 0 auto 20px; }

        .content-wrapper { max-width: 850px; margin: 0 auto; padding: 0 7% 100px; }

        /* --- CONTAINER DA IMAGEM --- */
        .featured-img-box {
            width: 100%;
            margin: 40px 0 60px;
            display: block;
        }
        .featured-img-box img {
            width: 100%;
            height: auto;
            border-radius: 24px;
            border: 1px solid #2d3139;
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
            display: block;
        }

        .post-body { font-size: 1.1rem; color: #cbd5e1; }
        .post-body h2 { color: var(--text); font-size: 1.8rem; margin: 45px 0 20px; font-weight: 700; border-left: 4px solid var(--primary); padding-left: 20px; }

        .info-card { background: var(--card-bg); border: 1px solid #2d3139; padding: 35px; border-radius: 20px; margin: 40px 0; }
        .info-card h4 { color: var(--primary); margin-bottom: 15px; }

        .final-cta {
            background: linear-gradient(135deg, #1a1d23 0%, #0f1115 100%);
            border: 2px solid var(--primary);
            padding: 60px 40px;
            border-radius: 30px;
            text-align: center;
            margin-top: 80px;
        }
        .btn {
            background: var(--primary);
            color: white;
            padding: 18px 45px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 800;
            display: inline-block;
            transition: 0.3s;
            margin-top: 30px;
            text-transform: uppercase;
        }
        .btn:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(255, 94, 20, 0.4); }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: var(--whatsapp);
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.3s;
        }

        footer { padding: 60px 7%; border-top: 1px solid #2d3139; text-align: center; }

        @media (max-width: 992px) {
            .nav-menu { display: none; }
            .article-hero h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<header>
    <a href="https://jmswebsolutions.com.br/" class="logo">JMS WEB SOLUTIONS</a>
    <nav class="nav-menu" id="nav-menu">
        <a href="https://jmswebsolutions.com.br/#portfolio">Trabalhos</a>
        <a href="https://jmswebsolutions.com.br/#segmentos">Soluções por Segmento</a>
        <a href="https://jmswebsolutions.com.br/#servicos">O que faço</a>
        <a href="https://jmswebsolutions.com.br/#blog">Blog</a>
        <a href="https://jmswebsolutions.com.br/#sobre">Sobre</a>
        <a href="https://wa.me/5551991345607" style="color: var(--primary); font-weight: bold;">Falar no WhatsApp</a>
    </nav>
</header>

<section class="article-hero">
    <span class="category-tag">Marketing de Retorno</span>
    <h1>O Fim da Panfletagem: Por que investir no Google é mais barato que papel</h1>
</section>

<div class="content-wrapper">
    <div class="featured-img-box">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=1200&q=80" alt="Marketing Digital vs Papel">
    </div>

    <article class="post-body">
        <p>Você ainda gasta centenas de reais imprimindo milheiros de panfletos em <strong>Porto Alegre</strong>? Pare um pouco e observe: quantos desses papéis terminam no chão ou na lixeira sem serem lidos?</p>

        <p>Na <strong>JMS Web Solutions</strong>, ajudamos você a parar de "empurrar" e começar a ser "encontrado" por quem já quer comprar.</p>

        <h2>1. Alcance Cirúrgico</h2>
        <p>Ao investir em um site, você atinge o público certo. Enquanto o panfleto é entregue ao acaso, o seu site aparece exatamente para quem digitou o que você vende no Google.</p>

        <div class="info-card">
            <h4>Fato Real</h4>
            <p>O custo por cliente no digital chega a ser 60% menor do que em mídias físicas. É mais eficiência para o seu bolso.</p>
        </div>

        <h2>2. Ativo Permanente</h2>
        <p>Um panfleto dura segundos. Seu site funciona 24h por dia, todos os dias do ano. Ele é o seu melhor vendedor, sempre pronto para converter um visitante em uma mensagem no WhatsApp.</p>

        <div class="final-cta">
            <h3>Chega de jogar dinheiro no lixo.</h3>
            <p>Comece a investir onde seus clientes realmente estão.</p>
            <a href="https://wa.me/5551991345607" class="btn">Mudar para o Digital Agora</a>
        </div>
    </article>
</div>

<footer>
    <a href="https://jmswebsolutions.com.br/" class="logo">JMS WEB SOLUTIONS</a>
    <p style="color: #444; font-size: 0.8rem; margin-top: 20px;">&copy; <?php echo date('Y'); ?> JMS Web Solutions.</p>
</footer>

</body>
</html>