<?php
/*
Template Name: LP Estética Automotiva Pro - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon Detail | Estética Automotiva Premium</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #007bff; /* Azul Elétrico */
            --dark-bg: #0f0f0f;
            --card-bg: #1a1a1a;
            --text-light: #ffffff;
            --text-gray: #b0b0b0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--dark-bg); color: var(--text-light); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(0, 0, 0, 0.95);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 2px solid var(--primary);
        }
        .logo-header { font-family: 'Orbitron', sans-serif; font-size: 1.5rem; color: var(--primary); letter-spacing: 2px; }
        .logo-header span { color: #fff; }
        .nav-links a { color: #fff; text-decoration: none; margin-left: 25px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }

        /* Hero Section */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1601362840469-51e4d8d59085?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Orbitron', sans-serif; font-size: clamp(2.5rem, 8vw, 4.5rem); margin-bottom: 15px; }
        .hero h1 span { color: var(--primary); }
        .hero p { max-width: 700px; font-size: 1.2rem; color: var(--text-gray); margin-bottom: 35px; }

        .btn {
            background: var(--primary); color: #fff; padding: 18px 45px;
            text-decoration: none; font-weight: 700; border-radius: 4px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            border: none; cursor: pointer;
        }
        .btn:hover { background: #fff; color: var(--primary); transform: scale(1.05); }

        /* Serviços */
        section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Orbitron', sans-serif; font-size: 2.5rem; letter-spacing: 2px; }

        .grid-services { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .service-card { background: var(--card-bg); padding: 40px; border-radius: 8px; border: 1px solid #333; transition: 0.3s; }
        .service-card:hover { border-color: var(--primary); transform: translateY(-10px); }
        .service-card i { font-size: 3rem; color: var(--primary); margin-bottom: 20px; }
        .service-card h3 { margin-bottom: 15px; font-size: 1.4rem; }

        /* Agendamento e Mapa */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-box { background: var(--card-bg); padding: 40px; border-radius: 8px; }
        input, select, textarea { width: 100%; padding: 15px; margin-bottom: 15px; background: #000; border: 1px solid #333; color: #fff; }

        /* Rodapé Discreto Padrão JMS */
        footer { padding: 40px 7%; background: #000; text-align: center; border-top: 1px solid #222; }
        .footer-nicho { font-family: 'Orbitron', sans-serif; font-size: 1.2rem; margin-bottom: 10px; color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: var(--text-gray); }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; transition: 0.2s; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; z-index: 1000;
        }

        @media (max-width: 992px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">CARBON<span>DETAIL</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#agendamento">Agendamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>PROTEÇÃO E <span>BRILHO IMPECÁVEL.</span></h1>
    <p>Especialistas em Vitrificação Cerâmica, Polimento Técnico e Detalhamento Interno para quem exige perfeição.</p>
    <a href="#agendamento" class="btn">Agendar Avaliação</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Nossas Soluções</h2></div>
    <div class="grid-services">
        <div class="service-card">
            <i class="fas fa-gem"></i>
            <h3>Vitrificação</h3>
            <p>Proteção duradoura contra raios UV, riscos leves e agentes químicos. Brilho espelhado por anos.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-car-crash"></i>
            <h3>Polimento Técnico</h3>
            <p>Remoção de imperfeições, hologramas e revitalização total da pintura original.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-vacuum"></i>
            <h3>Higienização Interna</h3>
            <p>Limpeza profunda de estofados, couro e oxisanitização do ar-condicionado.</p>
        </div>
    </div>
</section>

<section id="agendamento" style="background: #0a0a0a;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Orbitron'; margin-bottom: 25px;">Agende seu horário</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="WhatsApp" required>
                <select required>
                    <option value="">Selecione o Serviço</option>
                    <option>Lavagem Detalhada</option>
                    <option>Polimento e Brilho</option>
                    <option>Vitrificação 9H</option>
                    <option>Limpeza de Couro</option>
                </select>
                <button type="submit" class="btn" style="width: 100%;">Solicitar Orçamento</button>
            </form>
        </div>
        <div style="border-radius: 8px; overflow: hidden; height: 400px; border: 2px solid #222;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110565.8037380965!2d-51.24905186214041!3d-30.007283454238586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979ad23485d53%3A0x28634839804b9e28!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">CARBON<span>DETAIL</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>