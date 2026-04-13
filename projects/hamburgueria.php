<?php
/*
Template Name: LP Hamburgueria Gourmet - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Master | O Melhor Hambúrguer Artesanal</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #f37021; /* Laranja Burger */
            --secondary: #e31b23; /* Vermelho Ketchup */
            --dark: #121212;
            --bg-body: #1a1a1a;
            --text-light: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg-body); color: var(--text-light); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(18, 18, 18, 0.95);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 3px solid var(--primary);
        }
        .logo-header { font-family: 'Bangers', cursive; font-size: 2.2rem; color: var(--primary); letter-spacing: 2px; }
        .logo-header span { color: #fff; }
        .nav-links a { color: #fff; text-decoration: none; margin-left: 20px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1571091718767-18b5b1457add?q=80&w=1472&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Bangers', cursive; font-size: clamp(3rem, 10vw, 6rem); color: #fff; line-height: 1; margin-bottom: 10px; }
        .hero h1 span { color: var(--primary); }
        .hero p { font-size: 1.2rem; font-weight: 600; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 2px; }

        .btn {
            background: var(--primary); color: #fff; padding: 18px 45px;
            text-decoration: none; font-weight: 900; border-radius: 50px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            border: none; cursor: pointer; font-size: 1.1rem;
        }
        .btn:hover { background: var(--secondary); transform: scale(1.05); }

        /* Cardápio */
        section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Bangers', cursive; font-size: 3.5rem; color: var(--primary); letter-spacing: 3px; }

        .menu-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .menu-item { background: var(--dark); border-radius: 15px; overflow: hidden; border: 1px solid #333; transition: 0.3s; }
        .menu-item:hover { border-color: var(--primary); transform: translateY(-10px); }
        .menu-img { width: 100%; height: 200px; object-fit: cover; }
        .menu-info { padding: 25px; }
        .menu-info h3 { font-family: 'Bangers', cursive; font-size: 1.8rem; margin-bottom: 10px; color: var(--primary); }
        .price { color: var(--primary); font-size: 1.5rem; font-weight: 900; }

        /* Contato / Localização */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .info-box { background: var(--dark); padding: 40px; border-radius: 15px; border-left: 5px solid var(--primary); }
        .info-box h3 { margin-bottom: 20px; font-size: 1.5rem; text-transform: uppercase; }
        .social-icons { margin-top: 20px; }
        .social-icons a { font-size: 1.5rem; color: #fff; margin-right: 15px; transition: 0.3s; }
        .social-icons a:hover { color: var(--primary); }

        /* Footer Discreto Padrão JMS */
        footer { padding: 40px 7%; background: #000; text-align: center; border-top: 1px solid #222; }
        .footer-nicho { font-family: 'Bangers', cursive; font-size: 1.8rem; margin-bottom: 10px; color: var(--primary); letter-spacing: 2px; }
        .footer-info { font-size: 0.85rem; color: #777; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; transition: 0.2s; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; text-decoration: none; z-index: 1000;
        }

        @media (max-width: 992px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">BURGER<span>MASTER</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#cardapio">Cardápio</a>
        <a href="#contato">Onde Estamos</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>O BURGER <span>MONSTRO.</span></h1>
    <p>Pão Brioche, Carne 180g e Muito Bacon.</p>
    <a href="https://wa.me/5551991345607" class="btn"><i class="fas fa-motorcycle"></i> Pedir Agora</a>
</section>

<section id="cardapio">
    <div class="section-title"><h2>Nossos Clássicos</h2></div>
    <div class="menu-grid">
        <div class="menu-item">
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=600" class="menu-img" alt="Burger">
            <div class="menu-info">
                <h3>Bacon Supreme</h3>
                <p style="color: #aaa; margin-bottom: 15px;">Blend bovino, cheddar, tiras de bacon crocante e molho especial.</p>
                <span class="price">R$ 38,90</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?q=80&w=600" class="menu-img" alt="Burger">
            <div class="menu-info">
                <h3>Cheddar Melt</h3>
                <p style="color: #aaa; margin-bottom: 15px;">Cebola caramelizada no shoyu e uma cascata de queijo cheddar.</p>
                <span class="price">R$ 35,00</span>
            </div>
        </div>
    </div>
</section>

<section id="contato" style="background: #0d0d0d;">
    <div class="contact-area">
        <div class="info-box">
            <h3>Horário de Funcionamento</h3>
            <p>Terça a Domingo: 18:30 às 23:30</p>
            <p>Sexta e Sábado: 18:30 às 00:30</p>
            <br>
            <h3>Siga-nos</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
        <div style="border-radius: 15px; overflow: hidden; height: 400px; border: 2px solid #333;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.89531853683!2d-51.24285863266938!3d-30.033056157813872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd4d5f470d%3A0x633604f7c10d7a03!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">BURGER<span>MASTER</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>