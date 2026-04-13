<?php
/*
Template Name: Artigo Blog Educativo - JMS
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Por que sua empresa é invisível no Google? | JMS Web Solutions</title>
    
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
            --text-muted: #94a3b8;
            --header-h: 80px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: var(--bg); 
            color: var(--text); 
            line-height: 1.8;
            overflow-x: hidden;
        }

        /* HEADER & NAVIGATION */
        header {
            height: var(--header-h);
            padding: 0 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(15, 17, 21, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2000;
            border-bottom: 1px solid #2d3139;
        }
        
        .logo { font-weight: 800; font-size: 1.2rem; color: var(--primary); letter-spacing: 1px; text-decoration: none; }

        .nav-menu { display: flex; align-items: center; }
        .nav-menu a { color: var(--text); text-decoration: none; margin-left: 25px; font-size: 0.85rem; font-weight: 500; transition: 0.3s; }
        .nav-menu a:hover { color: var(--primary); }

        .hamburger { display: none; cursor: pointer; flex-direction: column; gap: 5px; }
        .hamburger span { width: 25px; height: 2px; background: var(--text); transition: 0.3s; }

        /* HERO SECTION */
        .article-hero {
            padding: calc(var(--header-h) + 60px) 7% 40px;
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
        .article-hero h1 { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 800; line-height: 1.1; max-width: 1000px; margin: 0 auto 20px; }

        /* CONTENT */
        .content-wrapper { max-width: 850px; margin: 0 auto; padding: 0 7% 100px; }

        .featured-image {
            width: 100%;
            height: clamp(250px, 40vh, 450px);
            border-radius: 24px;
            background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80') center/cover;
            margin-bottom: 60px;
            border: 1px solid #2d3139;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .post-body { font-size: 1.1rem; color: #cbd5e1; }
        .post-body h2 { color: var(--text); font-size: 1.8rem; margin: 45px 0 20px; font-weight: 700; border-left: 4px solid var(--primary); padding-left: 20px; }
        .post-body p { margin-bottom: 25px; }
        .post-body strong { color: var(--text); }

        .info-card { background: var(--card-bg); border: 1px solid #2d3139; padding: 35px; border-radius: 20px; margin: 40px 0; }
        .info-card h4 { color: var(--primary); margin-bottom: 15px; font-size: 1.3rem; }

        /* CTA SECTION */
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

        /* FLOAT WHATSAPP */
        .whatsapp-float {
            position: fixed; width: 60px; height: 60px; bottom: 40px; right: 40px;
            background-color: var(--whatsapp); color: #FFF; border-radius: 50px;
            display: flex; align-items: center; justify-content: center;
            font-size: 30px; box-shadow: 2px 5px 15px rgba(0,0,0,0.3);
            z-index: 3000; text-decoration: none; transition: 0.3s;
        }
        .whatsapp-float:hover { transform: scale(1.1); background-color: #128C7E; }

        footer { padding: 60px 7%; border-top: 1px solid #2d3139; text-align: center; }

        /* MOBILE RESPONSIVITY */
        @media (max-width: 992px) {
            .hamburger { display: flex; }
            .nav-menu { 
                position: fixed; top: 0; right: -100%; width: 80%; height: 100vh; 
                background: var(--bg); flex-direction: column; justify-content: center; 
                transition: 0.4s; z-index: 1500; border-left: 1px solid #2d3139;
            }
            .nav-menu.active { right: 0; }
            .nav-menu a { margin: 15px 0; font-size: 1.1rem; }
            .whatsapp-float { bottom: 20px; right: 20px; width: 55px; height: 55px; }
        }
    </style>
</head>
<body>

<header>
    <a href="https://jmswebsolutions.com.br/" class="logo">JMS WEB SOLUTIONS</a>
    <div class="hamburger" id="mobile-menu">
        <span></span><span></span><span></span>
    </div>
    <nav class="nav-menu">
        <a href="https://jmswebsolutions.com.br/#portfolio">Trabalhos</a>
        <a href="https://jmswebsolutions.com.br/#segmentos">Soluções por Segmento</a>
        <a href="https://jmswebsolutions.com.br/#servicos">O que faço</a>
        <a href="https://jmswebsolutions.com.br/#blog">Blog</a>
        <a href="https://jmswebsolutions.com.br/#sobre">Sobre</a>
        <a href="https://wa.me/5551991345607" style="color: var(--primary); font-weight: bold;">Falar no WhatsApp</a>
    </nav>
</header>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<section class="article-hero">
    <span class="category-tag">Presença Digital e Lucratividade</span>
    <h1>Por que negócios invisíveis no Google estão perdendo clientes todos os dias sem saber</h1>
</section>

<div class="content-wrapper">
    <div class="featured-image"></div>

    <article class="post-body">
        <p>Você já parou para analisar o comportamento do seu cliente hoje? A disputa pela atenção agora acontece em uma tela de 6 polegadas.</p>

        <p>Quando alguém precisa de um serviço urgente em <strong>Porto Alegre</strong>, a primeira reação é abrir o Google. Se a sua empresa não aparece ali, para o mercado moderno, <strong>você é inexistente.</strong></p>

        <h2>1. O Custo Oculto da Invisibilidade</h2>
        <p>Estar fora do Google significa que você está <strong>ativamente enviando seus clientes para a concorrência.</strong> Cada busca sem sua presença fortalece quem já está no topo.</p>

        <div class="info-card">
            <h4>Você sabia?</h4>
            <p>Mais de 80% das buscas locais resultam em conversão em menos de 24 horas. O Google é uma rede de <strong>intenção</strong>, não apenas entretenimento.</p>
        </div>

        <h2>2. Por que o Instagram não é suficiente?</h2>
        <p>O Instagram é interrupção; o <strong>Google</strong> é solução. No buscador, o cliente já tem um problema e quer resolver agora. Um site profissional coloca você no momento exato da decisão de compra.</p>

        <div class="final-cta">
            <h3>Pare de dar vantagem para a sua concorrência.</h3>
            <p>O mercado digital em Porto Alegre não espera. Quem se posicionar primeiro agora dominará os próximos anos.</p>
            <a href="https://wa.me/5551991345607" class="btn">Solicitar Consultoria Gratuita</a>
        </div>
    </article>
</div>

<footer>
    <a href="https://jmswebsolutions.com.br/" class="logo">JMS WEB SOLUTIONS</a>
    <p style="color: #444; font-size: 0.8rem; margin-top: 20px;">&copy; <?php echo date('Y'); ?> JMS Web Solutions - Porto Alegre, RS.</p>
</footer>

<script>
    const menuBtn = document.getElementById('mobile-menu');
    const nav = document.querySelector('.nav-menu');

    menuBtn.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // Fechar menu ao clicar em um link
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => nav.classList.remove('active'));
    });
</script>

</body>
</html>