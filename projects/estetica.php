<?php
/*
Template Name: LP Estética Clean - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estética Avançada | Realce sua Beleza Natural</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #d4a373; /* Dourado Soft */
            --secondary: #faedcd; /* Creme */
            --bg: #ffffff;
            --dark: #2d2d2d;
            --text-muted: #6c757d;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg); color: var(--dark); line-height: 1.6; }

        header {
            padding: 20px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(255, 255, 255, 0.95);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: 700; text-transform: uppercase; color: var(--primary); }
        .nav-links a { color: var(--dark); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }

        .hero {
            height: 85vh;
            background: linear-gradient(rgba(255,255,255,0.6), rgba(255,255,255,0.2)), url('https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.2rem, 8vw, 3.8rem); margin-bottom: 20px; color: var(--dark); }
        .hero span { color: var(--primary); }

        .btn {
            background: var(--primary); color: #fff; padding: 16px 40px;
            text-decoration: none; font-weight: 600; border-radius: 50px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            border: none; cursor: pointer;
        }
        .btn:hover { background: #bc8a5f; transform: translateY(-2px); box-shadow: 0 5px 15px rgba(212, 163, 115, 0.3); }

        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--dark); }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .service-card { background: #fffaf5; padding: 40px; border-radius: 20px; text-align: center; border: 1px solid #f0e1d1; transition: 0.3s; }
        .service-card:hover { transform: translateY(-10px); }
        .service-card i { font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; }
        .service-card h3 { font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 10px; }

        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-container { background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; }

        /* Footer Discreto solicitado */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 700; margin-bottom: 10px; text-transform: uppercase; color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: var(--text-muted); }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 600; transition: 0.2s; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; text-decoration: none; z-index: 1000;
        }

        @media (max-width: 768px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">BELLE<span>ESTÉTICA</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#procedimentos">Procedimentos</a>
        <a href="#agendamento">Agendamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Sua melhor versão <span>começa aqui.</span></h1>
    <p style="max-width: 600px; margin-bottom: 30px; color: #555;">Tecnologia avançada e cuidado humanizado para realçar sua beleza natural e renovar sua autoestima.</p>
    <a href="#agendamento" class="btn">Agendar Avaliação</a>
</section>

<section id="procedimentos">
    <div class="section-title"><h2>Nossos Procedimentos</h2></div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-sparkles"></i>
            <h3>Limpeza de Pele</h3>
            <p>Tratamento profundo para remoção de impurezas e hidratação intensa.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-magic"></i>
            <h3>Harmonização</h3>
            <p>Procedimentos minimamente invasivos para equilibrar as linhas do rosto.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-leaf"></i>
            <h3>Massagens Relax</h3>
            <p>Drenagem linfática e massagens modeladoras para o seu bem-estar.</p>
        </div>
    </div>
</section>

<section id="agendamento" style="background: #fafafa;">
    <div class="contact-area">
        <div class="form-container">
            <h3 style="font-family: 'Playfair Display'; margin-bottom: 25px;">Sua Consulta</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="WhatsApp (DDD)" required>
                <select required>
                    <option value="">Interesse Principal</option>
                    <option>Tratamentos Faciais</option>
                    <option>Tratamentos Corporais</option>
                    <option>Depilação a Laser</option>
                    <option>Outros</option>
                </select>
                <button type="submit" class="btn" style="width: 100%;">Solicitar Horário</button>
            </form>
        </div>
        <div style="border-radius: 20px; overflow: hidden; height: 350px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389542032!2d-51.24922935276333!3d-30.059512613143924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978fd448c347f%3A0xfa9905596677f950!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">BELLE<span>ESTÉTICA</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607?text=Olá! Gostaria de agendar uma avaliação estética." class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>