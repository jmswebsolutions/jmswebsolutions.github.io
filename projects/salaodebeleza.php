<?php
/*
Template Name: LP Salão de Beleza Clean V2 - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio de Beleza | Transforme seu Visual</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #c19a6b; 
            --accent: #222222;
            --bg: #ffffff;
            --text-light: #666666;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg); color: #333; line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 1px solid #eee;
        }
        .logo-header { font-family: 'Prata', serif; font-size: 1.4rem; font-weight: 700; color: var(--accent); text-transform: uppercase; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: var(--accent); text-decoration: none; margin-left: 20px; font-weight: 600; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }

        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=1374&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Prata', serif; font-size: clamp(2.5rem, 8vw, 4rem); margin-bottom: 20px; text-transform: uppercase; }
        .hero p { max-width: 600px; margin-bottom: 35px; font-size: 1.1rem; }

        .btn {
            background: var(--primary); color: #fff; padding: 16px 40px;
            text-decoration: none; font-weight: 600; border-radius: 0px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            border: none; cursor: pointer; letter-spacing: 2px;
        }
        .btn:hover { background: var(--accent); transform: translateY(-2px); }

        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Prata', serif; font-size: 2.4rem; text-transform: uppercase; position: relative; padding-bottom: 15px; }
        .section-title h2::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 50px; height: 2px; background: var(--primary); }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .service-item { text-align: center; padding: 20px; transition: 0.3s; }
        .service-item i { font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; }
        .service-item h3 { font-family: 'Prata', serif; margin-bottom: 10px; font-size: 1.5rem; }
        .service-item p { color: var(--text-light); font-size: 0.95rem; }

        .contact-section { background: #fdfaf7; display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .form-box { padding: 40px; background: #fff; box-shadow: 0 5px 25px rgba(0,0,0,0.05); }
        input, select, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; outline: none; }

        /* Footer Discreto */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Prata', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; text-transform: uppercase; color: var(--accent); }
        .footer-nicho span { color: var(--primary); }
        .footer-info { font-size: 0.8rem; color: #999; letter-spacing: 1px; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 600; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; text-decoration: none; z-index: 1000;
        }

        @media (max-width: 992px) {
            .contact-section { grid-template-columns: 1fr; padding: 50px 7%; }
            header nav { display: none; }
        }
    </style>
</head>
<body>

<header>
    <div class="logo-header">STUDIO<span>BELEZA</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#agendamento">Agendamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Sua Beleza, <span>Nossa Arte.</span></h1>
    <p>Especialistas em cortes, coloração e tratamentos capilares que realçam sua personalidade.</p>
    <a href="#agendamento" class="btn">Marcar Horário</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Nossos Serviços</h2></div>
    <div class="services-grid">
        <div class="service-item">
            <i class="fas fa-scissors"></i>
            <h3>Corte Feminino</h3>
            <p>Visagismo aplicado para criar o corte perfeito para o seu rosto.</p>
        </div>
        <div class="service-item">
            <i class="fas fa-magic"></i>
            <h3>Coloração</h3>
            <p>Técnicas modernas de mechas, luzes e coloração global.</p>
        </div>
        <div class="service-item">
            <i class="fas fa-wind"></i>
            <h3>Tratamentos</h3>
            <p>Hidratação profunda e reconstrução capilar com as melhores marcas.</p>
        </div>
    </div>
</section>

<section id="agendamento" class="contact-section">
    <div class="form-box">
        <h2 style="font-family: 'Prata'; margin-bottom: 25px;">Agendar Atendimento</h2>
        <form action="#">
            <input type="text" placeholder="Nome Completo" required>
            <input type="tel" placeholder="WhatsApp" required>
            <select required>
                <option value="">Selecione o Serviço</option>
                <option>Corte / Escova</option>
                <option>Coloração / Mechas</option>
                <option>Tratamentos / Hidratação</option>
            </select>
            <button type="submit" class="btn" style="width: 100%;">Solicitar Orçamento</button>
        </form>
    </div>
    <div style="height: 400px; overflow: hidden; border: 1px solid #eee;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110565.48512595058!2d-51.25055819777174!3d-30.003222479577712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd4193da75%3A0x63311654817d9d0!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<footer>
    <div class="footer-nicho">STUDIO<span>BELEZA</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607?text=Olá! Gostaria de agendar um serviço no salão." class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>