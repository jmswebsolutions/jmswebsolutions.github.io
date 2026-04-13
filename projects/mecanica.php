<?php
/*
Template Name: LP Mecânica Clean - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Automotivo Pro | Manutenção de Confiança</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700;800&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #e63946;
            --dark: #121212;
            --gray: #1e1e1e;
            --text-muted: #8d99ae;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--dark); color: #fff; line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(18, 18, 18, 0.98);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 2px solid var(--primary);
        }
        .logo-header { font-family: 'Barlow', sans-serif; font-size: 1.5rem; font-weight: 800; text-transform: uppercase; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: #fff; text-decoration: none; margin-left: 20px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }

        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1486006920555-c77dcf18193c?q=80&w=1566&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Barlow', sans-serif; font-size: clamp(2.5rem, 8vw, 4rem); text-transform: uppercase; margin-bottom: 20px; }
        .hero span { color: var(--primary); }

        .btn {
            background: var(--primary); color: #fff; padding: 16px 35px;
            text-decoration: none; font-weight: 800; border-radius: 4px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
        }
        .btn:hover { background: #b91c1c; transform: translateY(-2px); }

        section { padding: 80px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Barlow', sans-serif; font-size: 2.2rem; text-transform: uppercase; }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        .service-card { background: var(--gray); padding: 35px; border-radius: 6px; }
        .service-card i { font-size: 2rem; color: var(--primary); margin-bottom: 15px; }

        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-container { background: var(--gray); padding: 40px; border-radius: 8px; }
        input, select, textarea { width: 100%; padding: 12px; margin-bottom: 15px; background: #121212; border: 1px solid #333; color: #fff; border-radius: 4px; }

        /* Rodapé Discreto */
        footer { padding: 40px 7%; background: #0a0a0a; text-align: center; border-top: 1px solid #222; }
        .footer-nicho { font-family: 'Barlow', sans-serif; font-size: 1.4rem; font-weight: 800; margin-bottom: 15px; text-transform: uppercase; }
        .footer-nicho span { color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: var(--text-muted); }
        .footer-info a { color: inherit; text-decoration: none; transition: 0.2s; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; text-decoration: none;
        }

        @media (max-width: 768px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">OFICINA<span>PRO</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Mecânica de <span>Precisão.</span></h1>
    <p style="max-width: 600px; margin-bottom: 30px;">Cuidado especializado para quem não abre mão da segurança e do desempenho automotivo.</p>
    <a href="#contato" class="btn">Agendar Agora</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Serviços</h2></div>
    <div class="services-grid">
        <div class="service-card"><i class="fas fa-tools"></i><h3>Manutenção Geral</h3><p>Reparos em suspensão, freios e motor com garantia de qualidade.</p></div>
        <div class="service-card"><i class="fas fa-check-double"></i><h3>Revisão 30 Itens</h3><p>Check-up completo para garantir que sua viagem seja tranquila.</p></div>
        <div class="service-card"><i class="fas fa-bolt"></i><h3>Injeção Eletrônica</h3><p>Diagnóstico computadorizado para máxima eficiência do motor.</p></div>
    </div>
</section>

<section id="contato" style="background: #161616;">
    <div class="contact-area">
        <div class="form-container">
            <h3>Orçamento Rápido</h3>
            <form action="#"><input type="text" placeholder="Seu Nome" required><input type="tel" placeholder="WhatsApp" required><textarea placeholder="Qual o problema do veículo?" rows="4"></textarea><button type="submit" class="btn" style="width: 100%; border: none; cursor: pointer;">Enviar Pedido</button></form>
        </div>
        <div style="border-radius: 8px; overflow: hidden; height: 350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110595.3958937105!2d-51.24921960249495!3d-30.012117502758414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd4fd13f17%3A0xc3f8379201a403d!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1700000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">OFICINA<span>PRO</span></div>
    <div class="footer-info">
        © <?php echo date('Y'); ?> Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>