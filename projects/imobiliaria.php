<?php
/*
Template Name: LP Imobiliária Corporativa - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Imóveis | Sua Conquista, Nosso Compromisso</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #1a2a44; /* Azul Corporativo */
            --accent: #2e5a88; /* Azul Médio */
            --silver: #e5e7eb;
            --text-dark: #1f2937;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Outfit', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--white); color: var(--text-dark); line-height: 1.6; }

        header {
            padding: 18px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .logo-header { font-family: 'Playfair Display', serif; font-size: 1.6rem; color: var(--primary); font-weight: 700; }
        .logo-header span { color: var(--accent); }
        .nav-links a { color: var(--text-dark); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.9rem; transition: 0.3s; }
        .nav-links a:hover { color: var(--accent); }

        /* Hero */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(26, 42, 68, 0.8), rgba(26, 42, 68, 0.5)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.2rem, 6vw, 3.8rem); margin-bottom: 20px; line-height: 1.2; }
        .hero p { max-width: 700px; font-size: 1.1rem; margin-bottom: 35px; opacity: 0.9; }

        .btn {
            background: var(--accent); color: #fff; padding: 16px 40px;
            text-decoration: none; font-weight: 600; border-radius: 4px;
            display: inline-block; transition: 0.3s; border: none; cursor: pointer; text-transform: uppercase;
        }
        .btn:hover { background: var(--primary); transform: translateY(-3px); }

        /* Vitrine de Imóveis */
        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--primary); }

        .property-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .card { background: #fff; border-radius: 8px; overflow: hidden; border: 1px solid #eee; transition: 0.3s; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.08); }
        .card img { width: 100%; height: 220px; object-fit: cover; }
        .card-body { padding: 25px; }
        .badge { background: var(--primary); color: #fff; padding: 4px 12px; font-size: 0.75rem; border-radius: 4px; text-transform: uppercase; }
        .price { font-size: 1.6rem; font-weight: 700; color: var(--accent); margin: 15px 0; display: block; }
        .features { display: flex; gap: 15px; font-size: 0.85rem; color: #666; padding-top: 15px; border-top: 1px solid #f3f4f6; }

        /* Contato & Agendamento */
        .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .form-container { background: #f8fafc; padding: 40px; border-radius: 8px; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border: 1px solid #e2e8f0; border-radius: 4px; outline: none; }

        /* Footer Discreto Padrão JMS */
        footer { padding: 45px 7%; background: #fff; text-align: center; border-top: 1px solid #f1f5f9; }
        .footer-nicho { font-family: 'Playfair Display', serif; font-size: 1.4rem; color: var(--primary); margin-bottom: 10px; font-weight: 700; }
        .footer-info { font-size: 0.85rem; color: #64748b; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; }
        .footer-info a:hover { color: var(--accent); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; z-index: 1000;
        }

        @media (max-width: 992px) { .contact-grid { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">ELITE<span>IMÓVEIS</span></div>
    <nav class="nav-links">
        <a href="#inicio">Home</a>
        <a href="#lancamentos">Lançamentos</a>
        <a href="#venda">Venda seu Imóvel</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Excelência Imobiliária em <span>Porto Alegre.</span></h1>
    <p>Atendimento exclusivo e as melhores oportunidades de investimento nos bairros mais nobres da capital gaúcha.</p>
    <a href="#contato" class="btn">Agendar Consultoria</a>
</section>

<section id="lancamentos">
    <div class="section-title"><h2>Destaques Premium</h2></div>
    <div class="property-grid">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=600" alt="Apartamento">
            <div class="card-body">
                <span class="badge">Venda</span>
                <span class="price">R$ 1.450.000</span>
                <h3 style="margin-bottom: 10px;">Luxo no Bela Vista</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">3 suítes, 3 vagas e infraestrutura completa de lazer.</p>
                <div class="features">
                    <span><i class="fas fa-expand"></i> 142m²</span>
                    <span><i class="fas fa-bed"></i> 3 Suítes</span>
                    <span><i class="fas fa-parking"></i> 3 Vagas</span>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=600" alt="Casa">
            <div class="card-body">
                <span class="badge">Lançamento</span>
                <span class="price">R$ 2.100.000</span>
                <h3 style="margin-bottom: 10px;">Mansão em Ipanema</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">Vista definitiva para o Guaíba e arquitetura moderna.</p>
                <div class="features">
                    <span><i class="fas fa-expand"></i> 310m²</span>
                    <span><i class="fas fa-bed"></i> 4 Suítes</span>
                    <span><i class="fas fa-parking"></i> 4 Vagas</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contato" style="background: #fff;">
    <div class="contact-grid">
        <div class="form-container">
            <h3 style="font-family: 'Playfair Display'; font-size: 1.8rem; margin-bottom: 25px;">Fale com um Especialista</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select required>
                    <option value="">Tipo de Interesse</option>
                    <option>Comprar Imóvel</option>
                    <option>Alugar Imóvel</option>
                    <option>Vender meu Imóvel</option>
                </select>
                <textarea placeholder="Como podemos ajudar você hoje?" rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Enviar Mensagem</button>
            </form>
        </div>
        <div style="border-radius: 8px; overflow: hidden; height: 450px; border: 1px solid #eee;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.74411132644!2d-51.24641957255861!3d-30.033056199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979ad2291244f%3A0xf67308731f822971!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">ELITE<span>IMÓVEIS</span></div>
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