<?php
/*
Template Name: LP Clínica Estética Premium - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica de Estética Avançada | Tecnologia & Beleza</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #c5a992; /* Champagne Gold */
            --secondary: #2c3e50; /* Slate Blue */
            --bg-light: #fdfbf9;
            --text: #333;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg-light); color: var(--text); line-height: 1.6; }

        header {
            padding: 20px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(255, 255, 255, 0.98);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 1px solid rgba(197, 169, 146, 0.3);
        }
        .logo-header { font-family: 'Cinzel', serif; font-size: 1.4rem; color: var(--secondary); letter-spacing: 2px; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: var(--secondary); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }

        .hero {
            height: 85vh;
            background: linear-gradient(rgba(255,255,255,0.4), rgba(255,255,255,0.4)), url('https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Cinzel', serif; font-size: clamp(2rem, 6vw, 3.5rem); color: var(--secondary); margin-bottom: 20px; line-height: 1.2; }
        .hero span { color: var(--primary); }

        .btn {
            background: var(--secondary); color: #fff; padding: 16px 45px;
            text-decoration: none; font-weight: 600; border-radius: 0;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            letter-spacing: 2px; border: 1px solid var(--secondary);
        }
        .btn:hover { background: transparent; color: var(--secondary); }

        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Cinzel', serif; font-size: 2.2rem; color: var(--secondary); text-transform: uppercase; }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .service-card { background: #fff; padding: 45px; border: 1px solid #eee; text-align: center; transition: 0.4s; }
        .service-card:hover { border-color: var(--primary); transform: translateY(-5px); }
        .service-card i { font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; }
        .service-card h3 { font-family: 'Cinzel', serif; margin-bottom: 15px; font-size: 1.2rem; color: var(--secondary); }

        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-box { background: #fff; padding: 40px; border: 1px solid #eee; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border: 1px solid #ddd; outline: none; }
        input:focus { border-color: var(--primary); }

        /* Rodapé Discreto Padrão JMS */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Cinzel', serif; font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary); letter-spacing: 2px; }
        .footer-info { font-size: 0.85rem; color: #888; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 600; transition: 0.2s; }
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
    <div class="logo-header">VIVANT<span>ESTÉTICA</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#procedimentos">Procedimentos</a>
        <a href="#agendamento">Agendamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Ciência a serviço da sua <span>Beleza.</span></h1>
    <p style="max-width: 650px; margin-bottom: 35px; color: #555;">Harmonização facial, tratamentos a laser e protocolos exclusivos desenvolvidos para realçar sua essência com naturalidade.</p>
    <a href="#agendamento" class="btn">Agendar Avaliação</a>
</section>

<section id="procedimentos">
    <div class="section-title"><h2>Procedimentos de Elite</h2></div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-magic"></i>
            <h3>Harmonização Facial</h3>
            <p>Protocolos personalizados para equilibrar e rejuvenescer as linhas do seu rosto.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-microchip"></i>
            <h3>Lifting a Laser</h3>
            <p>Tecnologia de ponta para estímulo de colágeno e firmeza da pele sem cortes.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-gem"></i>
            <h3>Skinbooster</h3>
            <p>Hidratação profunda que devolve o brilho e a elasticidade imediata da derme.</p>
        </div>
    </div>
</section>

<section id="agendamento" style="background: #f8f8f8;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Cinzel'; margin-bottom: 25px; color: var(--secondary);">Solicitar Avaliação</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="WhatsApp" required>
                <select required>
                    <option value="">Área de Interesse</option>
                    <option>Facial</option>
                    <option>Corporal</option>
                    <option>Depilação a Laser</option>
                </select>
                <button type="submit" class="btn" style="width: 100%;">Quero ser Atendida</button>
            </form>
        </div>
        <div style="height: 400px; overflow: hidden; border: 1px solid #eee;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110543.14918731005!2d-51.24649667798782!3d-30.01569477033282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199026405785f7%3A0xe5a3c99026210f8!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">VIVANT<span>ESTÉTICA</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>