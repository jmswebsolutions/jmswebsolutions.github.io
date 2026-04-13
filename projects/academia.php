<?php
/*
Template Name: LP Academia Pro - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Fitness | Supere Seus Limites</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #d4ff00; /* Amarelo Neon */
            --dark: #000000;
            --card-bg: #111111;
            --text-light: #ffffff;
            --text-gray: #a0a0a0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--dark); color: var(--text-light); line-height: 1.6; overflow-x: hidden; }

        header {
            padding: 20px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(0, 0, 0, 0.9);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 2px solid var(--primary);
        }
        .logo-header { font-family: 'Bebas Neue', cursive; font-size: 2rem; letter-spacing: 2px; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: #fff; text-decoration: none; margin-left: 25px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }

        .hero {
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Bebas Neue', cursive; font-size: clamp(3.5rem, 10vw, 6rem); line-height: 0.9; margin-bottom: 20px; }
        .hero span { color: var(--primary); }

        .btn {
            background: var(--primary); color: #000; padding: 18px 45px;
            text-decoration: none; font-weight: 900; border-radius: 4px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            border: none; cursor: pointer; font-size: 1rem;
        }
        .btn:hover { background: #fff; transform: scale(1.05); }

        section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Bebas Neue', cursive; font-size: 3.5rem; letter-spacing: 2px; }

        .grid-plans { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .plan-card { background: var(--card-bg); padding: 50px 30px; border-radius: 8px; border: 1px solid #222; text-align: center; transition: 0.3s; }
        .plan-card:hover { border-color: var(--primary); transform: translateY(-10px); }
        .plan-card h3 { font-family: 'Bebas Neue', cursive; font-size: 2.5rem; margin-bottom: 15px; color: var(--primary); }
        .price { font-size: 3rem; font-weight: 900; margin-bottom: 20px; display: block; }
        .price span { font-size: 1rem; color: var(--text-gray); }

        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-box { background: var(--card-bg); padding: 40px; border-radius: 8px; }
        input, select, textarea { width: 100%; padding: 15px; margin-bottom: 15px; background: #000; border: 1px solid #333; color: #fff; border-radius: 4px; }

        footer { padding: 40px 7%; background: #000; text-align: center; border-top: 1px solid #222; }
        .footer-nicho { font-family: 'Bebas Neue', cursive; font-size: 1.8rem; margin-bottom: 10px; color: var(--text-light); }
        .footer-nicho span { color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: var(--text-gray); }
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
    <div class="logo-header">IRON<span>FITNESS</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#planos">Planos</a>
        <a href="#local">Localização</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>SEM DESCULPAS. <br><span>SÓ RESULTADOS.</span></h1>
    <p style="max-width: 600px; margin-bottom: 35px; color: #ddd;">A melhor infraestrutura de Porto Alegre com equipamentos de última geração e acompanhamento profissional qualificado.</p>
    <a href="#agendar" class="btn">Matricule-se Agora</a>
</section>

<section id="planos">
    <div class="section-title"><h2>Nossos Planos</h2></div>
    <div class="grid-plans">
        <div class="plan-card">
            <h3>Basic</h3>
            <span class="price">R$ 99<span>/mês</span></span>
            <ul style="list-style: none; color: var(--text-gray); margin-bottom: 30px;">
                <li>Musculação Completa</li>
                <li>Área de Cardio</li>
                <li>Horário Livre</li>
            </ul>
            <a href="#" class="btn" style="padding: 12px 30px;">Escolher</a>
        </div>
        <div class="plan-card" style="border-color: var(--primary);">
            <h3>Black</h3>
            <span class="price">R$ 149<span>/mês</span></span>
            <ul style="list-style: none; color: var(--text-gray); margin-bottom: 30px;">
                <li>Musculação + Aulas Coletivas</li>
                <li>Acesso a todas as unidades</li>
                <li>Leve um amigo 4x/mês</li>
            </ul>
            <a href="#" class="btn" style="padding: 12px 30px;">Escolher</a>
        </div>
    </div>
</section>

<section id="local" style="background: #080808;">
    <div class="contact-area">
        <div class="form-box" id="agendar">
            <h3 style="font-family: 'Bebas Neue'; font-size: 2.5rem; margin-bottom: 25px;">Agende uma Visita</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select required>
                    <option value="">Unidade de Interesse</option>
                    <option>Porto Alegre - Centro</option>
                    <option>Porto Alegre - Sarandi</option>
                </select>
                <button type="submit" class="btn" style="width: 100%;">Quero Treinar</button>
            </form>
        </div>
        <div style="border-radius: 8px; overflow: hidden; height: 400px; border: 2px solid #222;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110553.3039665476!2d-51.25055271810507!3d-30.01258607191763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978fd43296c99%3A0x5044304833e3450!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">IRON<span>FITNESS</span></div>
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