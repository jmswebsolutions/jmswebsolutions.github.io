<?php
/*
Template Name: LP Encanador Profissional - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encanador 24h | Soluções Hidráulicas Residenciais</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #0056b3; /* Azul Hidráulico */
            --secondary: #00aaff; /* Azul Água */
            --dark: #1e272e;
            --light: #f1f2f6;
            --text: #2f3542;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Open Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: #fff; color: var(--text); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .logo-header { font-family: 'Ubuntu', sans-serif; font-size: 1.5rem; color: var(--primary); text-transform: uppercase; }
        .logo-header span { color: var(--secondary); }
        .nav-links a { color: var(--dark); text-decoration: none; margin-left: 20px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,86,179,0.8), rgba(0,86,179,0.5)), url('https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Ubuntu', sans-serif; font-size: clamp(2rem, 7vw, 4rem); margin-bottom: 15px; }
        .hero p { max-width: 650px; font-size: 1.2rem; margin-bottom: 30px; font-weight: 300; }

        .btn {
            background: #fff; color: var(--primary); padding: 18px 40px;
            text-decoration: none; font-weight: 700; border-radius: 50px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .btn:hover { background: var(--secondary); color: #fff; transform: scale(1.05); }

        /* Seção Serviços */
        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Ubuntu', sans-serif; font-size: 2.5rem; color: var(--primary); }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .service-card { background: var(--light); padding: 40px; border-radius: 15px; text-align: center; transition: 0.3s; }
        .service-card:hover { transform: translateY(-10px); background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .service-card i { font-size: 3rem; color: var(--secondary); margin-bottom: 20px; }

        /* Contato & Mapa */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-box { background: #fff; padding: 40px; border-radius: 15px; border: 1px solid #eee; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ddd; outline: none; }

        /* Rodapé Discreto Padrão JMS */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Ubuntu', sans-serif; font-size: 1.3rem; margin-bottom: 10px; color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: #888; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; transition: 0.2s; }
        .footer-info a:hover { color: var(--secondary); }

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
    <div class="logo-header">HYDRO<span>FIX</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#contato">Solicitar Técnico</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Problemas com <span>Vazamentos?</span></h1>
    <p>Atendimento especializado em caça-vazamentos, reparos hidráulicos e instalações em Porto Alegre.</p>
    <a href="https://wa.me/5551991345607" class="btn"><i class="fas fa-tools"></i> Chamar Agora</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Serviços Profissionais</h2></div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-search-location"></i>
            <h3>Caça Vazamento</h3>
            <p>Localização precisa de vazamentos invisíveis com equipamentos de última geração.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-faucet"></i>
            <h3>Reparos em Geral</h3>
            <p>Conserto de descargas, torneiras, registros e encanamentos de PVC, PPR e Cobre.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-tint-slash"></i>
            <h3>Desentupimento</h3>
            <p>Serviço rápido e limpo para desentupimento de pias, ralos, vasos e esgoto.</p>
        </div>
    </div>
</section>

<section id="contato" style="background: #fafafa;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Ubuntu'; font-size: 1.8rem; margin-bottom: 25px; color: var(--primary);">Solicitar Orçamento Grátis</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="WhatsApp" required>
                <select required>
                    <option value="">Tipo de Emergência</option>
                    <option>Vazamento Visível</option>
                    <option>Infiltração</option>
                    <option>Entupimento</option>
                    <option>Instalação de Louças</option>
                </select>
                <textarea placeholder="O que está acontecendo?" rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%; border: none; background: var(--primary); color: #fff; cursor: pointer;">Enviar Pedido</button>
            </form>
        </div>
        <div style="border-radius: 15px; overflow: hidden; height: 420px; border: 1px solid #eee;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110550.320490159!2d-51.250394!3d-30.0118501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd4668ea5b%3A0x280e87d095908f51!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">HYDRO<span>FIX</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>