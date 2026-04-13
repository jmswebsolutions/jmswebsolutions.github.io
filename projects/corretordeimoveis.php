<?php
/*
Template Name: LP Corretor de Imóveis Premium - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria Imobiliária | Encontre seu Lar</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #0a192f; /* Azul Marinho Luxo */
            --accent: #c5a059; /* Dourado */
            --bg-light: #f9f9f9;
            --white: #ffffff;
            --text: #333;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--white); color: var(--text); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(255, 255, 255, 0.98);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Playfair Display', serif; font-size: 1.5rem; color: var(--primary); font-weight: 700; }
        .logo-header span { color: var(--accent); }
        .nav-links a { color: var(--primary); text-decoration: none; margin-left: 25px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; }

        /* Hero com Busca */
        .hero {
            height: 90vh;
            background: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.5)), url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1473&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.5rem, 8vw, 4rem); margin-bottom: 20px; }
        .hero p { font-size: 1.2rem; margin-bottom: 40px; font-weight: 300; }

        .search-box {
            background: #fff; padding: 25px; border-radius: 8px; display: flex; gap: 15px; width: 100%; max-width: 900px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2); flex-wrap: wrap;
        }
        .search-box select, .search-box input { flex: 1; padding: 12px; border: 1px solid #ddd; border-radius: 4px; outline: none; min-width: 150px; }

        .btn {
            background: var(--accent); color: #fff; padding: 15px 35px;
            text-decoration: none; font-weight: 700; border-radius: 4px;
            display: inline-block; transition: 0.3s; border: none; cursor: pointer; text-transform: uppercase;
        }
        .btn:hover { background: #b08d48; transform: translateY(-2px); }

        /* Vitrine de Imóveis */
        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--primary); }

        .property-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .property-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: 0.3s; border: 1px solid #eee; }
        .property-card:hover { transform: translateY(-10px); }
        .property-img { width: 100%; height: 230px; object-fit: cover; }
        .property-content { padding: 25px; }
        .property-price { color: var(--accent); font-size: 1.5rem; font-weight: 700; display: block; margin-bottom: 10px; }
        .property-info { display: flex; justify-content: space-between; font-size: 0.9rem; color: #777; border-top: 1px solid #eee; padding-top: 15px; margin-top: 15px; }

        /* Contato */
        .contact-area { display: grid; grid-template-columns: 1fr 1.2fr; gap: 50px; }
        .form-box { background: var(--bg-light); padding: 45px; border-radius: 12px; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border: 1px solid #ddd; outline: none; border-radius: 4px; }

        /* Footer Discreto JMS Web Solutions */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Playfair Display', serif; font-size: 1.4rem; color: var(--primary); margin-bottom: 10px; font-weight: 700; }
        .footer-nicho span { color: var(--accent); }
        .footer-info { font-size: 0.85rem; color: #999; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; transition: 0.2s; }
        .footer-info a:hover { color: var(--accent); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; z-index: 1000;
        }

        @media (max-width: 992px) { .contact-area { grid-template-columns: 1fr; } .search-box { flex-direction: column; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">INVEST<span>REALTY</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#imoveis">Imóveis</a>
        <a href="#contato">Fale Conosco</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Onde seus sonhos ganham um <span>novo endereço.</span></h1>
    <p>Consultoria especializada em imóveis de alto padrão e investimentos seguros em Porto Alegre.</p>
    <div class="search-box">
        <select><option>Tipo de Imóvel</option><option>Apartamento</option><option>Casa</option><option>Terreno</option></select>
        <select><option>Cidade</option><option>Porto Alegre</option><option>Gramado</option><option>Canoas</option></select>
        <button class="btn" style="width: auto;">Buscar</button>
    </div>
</section>

<section id="imoveis">
    <div class="section-title"><h2>Destaques da Semana</h2></div>
    <div class="property-grid">
        <div class="property-card">
            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=600" class="property-img">
            <div class="property-content">
                <span class="property-price">R$ 1.250.000</span>
                <h3>Cobertura no Moinhos de Vento</h3>
                <p style="font-size: 0.85rem; color: #777;">Três suítes, vista panorâmica e acabamento em mármore.</p>
                <div class="property-info">
                    <span><i class="fas fa-bed"></i> 3 Dorms</span>
                    <span><i class="fas fa-car"></i> 2 Vagas</span>
                    <span><i class="fas fa-vector-square"></i> 180m²</span>
                </div>
            </div>
        </div>
        <div class="property-card">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600" class="property-img">
            <div class="property-content">
                <span class="property-price">R$ 890.000</span>
                <h3>Casa em Condomínio Fechado</h3>
                <p style="font-size: 0.85rem; color: #777;">Segurança 24h, piscina privativa e área gourmet completa.</p>
                <div class="property-info">
                    <span><i class="fas fa-bed"></i> 4 Dorms</span>
                    <span><i class="fas fa-car"></i> 3 Vagas</span>
                    <span><i class="fas fa-vector-square"></i> 250m²</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contato" style="background: #fff;">
    <div class="contact-area">
        <div class="form-box">
            <h2 style="font-family: 'Playfair Display'; margin-bottom: 25px; color: var(--primary);">Consultoria Personalizada</h2>
            <form action="#">
                <input type="text" placeholder="Seu Nome" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select><option>Interesse em:</option><option>Comprar</option><option>Vender</option><option>Avaliação</option></select>
                <textarea placeholder="Fale sobre o imóvel que você procura..." rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Quero falar com um corretor</button>
            </form>
        </div>
        <div style="border-radius: 12px; overflow: hidden; height: 450px; border: 1px solid #eee;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389531853!2d-51.249219!3d-30.067768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd43296099%3A0xc3b83962d3714b9a!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1700000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">INVEST<span>REALTY</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>