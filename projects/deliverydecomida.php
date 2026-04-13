<?php
/*
Template Name: LP Delivery Express - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Express | Peça sua Comida Favorita</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #ea1d2c; /* Vermelho Delivery Clássico */
            --yellow: #ffc107;
            --bg-light: #f7f7f7;
            --dark: #2d2d2d;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg-light); color: var(--dark); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: var(--white);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Fredoka', sans-serif; font-size: 1.8rem; color: var(--primary); font-weight: 600; }
        .logo-header span { color: var(--yellow); }
        .nav-links a { color: var(--dark); text-decoration: none; margin-left: 20px; font-weight: 700; font-size: 0.9rem; }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Fredoka', sans-serif; font-size: clamp(2.5rem, 8vw, 4rem); color: var(--primary); margin-bottom: 15px; }
        .hero p { font-size: 1.2rem; max-width: 600px; margin-bottom: 30px; font-weight: 600; }

        .btn-order {
            background: var(--primary); color: #fff; padding: 18px 40px;
            text-decoration: none; font-weight: 700; border-radius: 12px;
            display: inline-block; transition: 0.3s; box-shadow: 0 10px 20px rgba(234, 29, 44, 0.2);
        }
        .btn-order:hover { background: #c01623; transform: scale(1.05); }

        /* Categorias / Destaques */
        section { padding: 80px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; font-family: 'Fredoka', sans-serif; font-size: 2.5rem; color: var(--dark); }

        .cards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; }
        .food-card { background: var(--white); border-radius: 20px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; text-align: center; padding-bottom: 25px; }
        .food-card:hover { transform: translateY(-10px); }
        .food-card img { width: 100%; height: 200px; object-fit: cover; }
        .food-card h3 { margin: 20px 0 10px; font-family: 'Fredoka', sans-serif; font-size: 1.5rem; }
        .food-card .price { color: var(--primary); font-weight: 700; font-size: 1.3rem; display: block; margin-bottom: 15px; }

        /* Contato / Local */
        .delivery-info { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .info-panel { background: var(--white); padding: 40px; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; }
        .info-panel h2 { font-family: 'Fredoka', sans-serif; color: var(--primary); margin-bottom: 20px; }
        .social-row a { font-size: 2rem; color: var(--primary); margin-right: 20px; transition: 0.3s; }

        /* Footer Discreto JMS Web Solutions */
        footer { padding: 40px 7%; background: var(--white); text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Fredoka', sans-serif; font-size: 1.5rem; font-weight: 600; color: var(--primary); margin-bottom: 10px; }
        .footer-nicho span { color: var(--yellow); }
        .footer-info { font-size: 0.85rem; color: #777; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; z-index: 1000;
        }

        @media (max-width: 992px) { .delivery-info { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">DELIVERY<span>EXPRESS</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#cardapio">Destaques</a>
        <a href="#local">Onde Estamos</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Fome de quê <span>hoje?</span></h1>
    <p>Os melhores pratos da região, quentinhos e entregues na porta da sua casa em tempo recorde.</p>
    <a href="https://wa.me/5551991345607" class="btn-order"><i class="fas fa-shopping-cart"></i> Fazer Pedido Agora</a>
</section>

<section id="cardapio">
    <h2 class="section-title">Mais Pedidos</h2>
    <div class="cards-grid">
        <div class="food-card">
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=500" alt="Salada">
            <h3>Marmita Fit</h3>
            <span class="price">R$ 22,90</span>
            <a href="#" class="btn-order" style="padding: 10px 25px; font-size: 0.9rem;">Adicionar</a>
        </div>
        <div class="food-card">
            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=500" alt="Pizza">
            <h3>Pizza Artesanal</h3>
            <span class="price">R$ 45,00</span>
            <a href="#" class="btn-order" style="padding: 10px 25px; font-size: 0.9rem;">Adicionar</a>
        </div>
        <div class="food-card">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=500" alt="Costela">
            <h3>Prato Executivo</h3>
            <span class="price">R$ 28,00</span>
            <a href="#" class="btn-order" style="padding: 10px 25px; font-size: 0.9rem;">Adicionar</a>
        </div>
    </div>
</section>

<section id="local" style="background: #fff;">
    <div class="delivery-info">
        <div class="info-panel">
            <h2>Tempo de Entrega</h2>
            <p><i class="fas fa-clock"></i> Média de 30 a 50 minutos.</p>
            <p><i class="fas fa-map-marker-alt"></i> Atendemos toda a região de Porto Alegre.</p>
            <br>
            <h3>Acompanhe</h3>
            <div class="social-row">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-messenger"></i></a>
            </div>
        </div>
        <div style="border-radius: 20px; overflow: hidden; height: 350px; border: 1px solid #eee;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389542127!2d-51.249101!3d-30.0116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978fd4ed24273%3A0xf598e9836553531!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1700000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">DELIVERY<span>EXPRESS</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>