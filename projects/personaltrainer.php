<?php
/*
Template Name: LP Personal Trainer Minimal - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Trainer | Alta Performance</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #ff5e14; /* Laranja Energético */
            --bg: #0a0a0b;
            --card: #141416;
            --text: #ffffff;
            --text-muted: #a1a1aa;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg); color: var(--text); line-height: 1.6; overflow-x: hidden; }

        /* Header */
        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(10, 10, 11, 0.98);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 2px solid var(--primary);
        }
        .logo-header { font-family: 'Oswald', sans-serif; font-size: 1.5rem; text-transform: uppercase; letter-spacing: 1px; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: #fff; text-decoration: none; margin-left: 20px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Oswald', sans-serif; font-size: clamp(2.5rem, 8vw, 4.5rem); text-transform: uppercase; line-height: 1; margin-bottom: 20px; }
        .hero span { color: var(--primary); }

        .btn {
            background: var(--primary); color: #fff; padding: 18px 40px;
            text-decoration: none; font-weight: 800; border-radius: 4px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
        }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(255, 94, 20, 0.4); }

        /* Serviços/Planos */
        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Oswald', sans-serif; font-size: 2.5rem; text-transform: uppercase; }

        .plans-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; }
        .plan-card { background: var(--card); padding: 45px 30px; border-radius: 12px; border: 1px solid #26262a; text-align: center; }
        .plan-card h3 { font-family: 'Oswald', sans-serif; font-size: 1.8rem; margin-bottom: 15px; color: var(--primary); }
        .price { font-size: 2.5rem; font-weight: 800; display: block; margin-bottom: 20px; }

        /* Contato */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-container { background: var(--card); padding: 40px; border-radius: 12px; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; background: #0a0a0b; border: 1px solid #2d2d31; color: #fff; border-radius: 5px; }

        /* Footer Discreto */
        footer { padding: 40px 7%; background: #050505; text-align: center; border-top: 1px solid #1a1a1d; }
        .footer-nicho { font-family: 'Oswald', sans-serif; font-size: 1.4rem; font-weight: 700; margin-bottom: 10px; text-transform: uppercase; }
        .footer-nicho span { color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: var(--text-muted); }
        .footer-info a { color: inherit; text-decoration: none; transition: 0.2s; font-weight: 600; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff;
        }

        @media (max-width: 768px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">TRAINER<span>PRO</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#planos">Planos</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Domine seu <span>Corpo.</span></h1>
    <p style="max-width: 600px; margin-bottom: 30px; font-size: 1.1rem;">Consultoria fitness personalizada para quem busca resultados reais com base em ciência e biomecânica.</p>
    <a href="#contato" class="btn">Agendar Avaliação</a>
</section>

<section id="planos">
    <div class="section-title"><h2>Planos de Treino</h2></div>
    <div class="plans-grid">
        <div class="plan-card">
            <h3>Online</h3>
            <span class="price">R$ 149</span>
            <p style="color: var(--text-muted);">App exclusivo, treinos em vídeo e suporte semanal via WhatsApp.</p>
        </div>
        <div class="plan-card" style="border-color: var(--primary);">
            <h3>Presencial</h3>
            <span class="price">R$ 399</span>
            <p style="color: var(--text-muted);">Acompanhamento individual, correção postural e avaliação física mensal.</p>
        </div>
    </div>
</section>

<section id="contato" style="background: #0f0f11;">
    <div class="contact-area">
        <div class="form-container">
            <h3 style="font-family: 'Oswald'; margin-bottom: 20px; text-transform: uppercase;">Mude seu Shape</h3>
            <form action="#">
                <input type="text" placeholder="Seu Nome" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select>
                    <option>Emagrecimento</option>
                    <option>Hipertrofia</option>
                    <option>Condicionamento</option>
                </select>
                <button type="submit" class="btn" style="width: 100%; border: none; cursor: pointer;">Enviar Pedido</button>
            </form>
        </div>
        <div style="border-radius: 12px; overflow: hidden; height: 350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389542032!2d-51.24922935276333!3d-30.059512613143924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978fd448c347f%3A0xfa9905596677f950!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">TRAINER<span>PRO</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>