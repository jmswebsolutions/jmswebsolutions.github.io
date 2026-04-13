<?php
/*
Template Name: LP Eletricista Profissional - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletricista 24h | Serviços Elétricos Residenciais e Comerciais</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #ffcc00; /* Amarelo Energia */
            --dark: #1a1a1a;
            --gray: #f4f4f4;
            --text: #333;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
        body { background-color: #fff; color: var(--text); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: var(--dark);
            position: fixed; width: 100%; top: 0; z-index: 1000;
        }
        .logo-header { font-family: 'Kanit', sans-serif; font-size: 1.5rem; color: var(--primary); text-transform: uppercase; }
        .logo-header span { color: #fff; }
        .nav-links a { color: #fff; text-decoration: none; margin-left: 20px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1621905251918-48416bd8575a?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Kanit', sans-serif; font-size: clamp(2rem, 7vw, 4rem); margin-bottom: 15px; line-height: 1.1; }
        .hero h1 span { color: var(--primary); }
        .hero p { max-width: 600px; font-size: 1.2rem; margin-bottom: 30px; }

        .btn {
            background: var(--primary); color: var(--dark); padding: 18px 40px;
            text-decoration: none; font-weight: 900; border-radius: 5px;
            display: inline-block; text-transform: uppercase; transition: 0.3s; border: none; cursor: pointer;
        }
        .btn:hover { background: #fff; transform: translateY(-3px); }

        /* Serviços */
        section { padding: 80px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Kanit', sans-serif; font-size: 2.5rem; text-transform: uppercase; border-bottom: 5px solid var(--primary); display: inline-block; padding-bottom: 10px; }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; }
        .service-card { background: var(--gray); padding: 40px; border-radius: 10px; transition: 0.3s; border-left: 5px solid var(--primary); }
        .service-card:hover { transform: translateY(-5px); background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .service-card i { font-size: 2.5rem; color: var(--dark); margin-bottom: 20px; }

        /* Contato */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-box { background: var(--dark); padding: 40px; border-radius: 10px; color: #fff; }
        input, select, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #444; background: #2a2a2a; color: #fff; outline: none; }

        /* Rodapé Discreto JMS Web Solutions */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Kanit', sans-serif; font-size: 1.3rem; margin-bottom: 10px; color: var(--dark); }
        .footer-info { font-size: 0.85rem; color: #888; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; }
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
    <div class="logo-header">VOLT<span>SOLUÇÕES</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#contato">Solicitar Orçamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Soluções Elétricas <span>Seguras e Rápidas.</span></h1>
    <p>Manutenção, instalações e quadros elétricos com garantia técnica para sua casa ou empresa.</p>
    <a href="https://wa.me/5551991345607" class="btn"><i class="fas fa-bolt"></i> Chamar no WhatsApp</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>O que fazemos</h2></div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-plug"></i>
            <h3>Instalações</h3>
            <p>Tomadas, chuveiros, luminárias e ventiladores de teto instalados com total segurança.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-tools"></i>
            <h3>Manutenção</h3>
            <p>Reparo de curtos-circuitos, fiação antiga e troca de disjuntores para evitar acidentes.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-industry"></i>
            <h3>Industrial</h3>
            <p>Projetos de entrada de energia, quadros de comando e manutenção em condomínios.</p>
        </div>
    </div>
</section>

<section id="contato" style="background: #f9f9f9;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Kanit'; font-size: 1.8rem; margin-bottom: 25px; color: var(--primary);">Solicite um Orçamento</h3>
            <form action="#">
                <input type="text" placeholder="Seu Nome" required>
                <input type="tel" placeholder="WhatsApp para contato" required>
                <select required>
                    <option value="">Tipo de Serviço</option>
                    <option>Instalação Geral</option>
                    <option>Reparo de Curto</option>
                    <option>Quadro de Disjuntores</option>
                    <option>Outros</option>
                </select>
                <textarea placeholder="Descreva brevemente o problema..." rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Enviar Pedido</button>
            </form>
        </div>
        <div style="border-radius: 10px; overflow: hidden; height: 400px; border: 1px solid #ddd;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110515.253013898!2d-51.25055376176378!3d-30.04111317183353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978fd44747f01%3A0x18f8799443f348d3!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1700000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">VOLT<span>SOLUÇÕES</span></div>
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