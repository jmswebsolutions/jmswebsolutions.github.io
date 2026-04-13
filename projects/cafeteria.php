<?php
/*
Template Name: LP Cafeteria Gourmet - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grão & Aroma | Cafeteria Especializada</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #6F4E37; /* Marrom Café */
            --accent: #C19A6B; /* Bege Dourado */
            --bg: #FDF8F5;
            --dark: #3E2723;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg); color: var(--dark); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(255, 255, 255, 0.95);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Playfair Display', serif; font-size: 1.6rem; color: var(--primary); }
        .logo-header span { color: var(--accent); }
        .nav-links a { color: var(--dark); text-decoration: none; margin-left: 20px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color: #fff; padding: 0 7%;
        }
        .hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.5rem, 8vw, 4rem); margin-bottom: 15px; }
        .hero p { max-width: 600px; font-size: 1.2rem; margin-bottom: 30px; font-weight: 300; }

        .btn {
            background: var(--primary); color: #fff; padding: 15px 35px;
            text-decoration: none; font-weight: 600; border-radius: 0;
            display: inline-block; transition: 0.3s; border: 1px solid var(--primary);
        }
        .btn:hover { background: transparent; color: #fff; border-color: #fff; }

        /* Menu / Destaques */
        section { padding: 80px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; font-family: 'Playfair Display', serif; font-size: 2.5rem; }

        .menu-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .menu-card { background: #fff; padding: 30px; border-radius: 5px; text-align: center; border-bottom: 4px solid var(--accent); transition: 0.3s; }
        .menu-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .menu-card i { font-size: 2.5rem; color: var(--primary); margin-bottom: 15px; }

        /* Contato */
        .contact-box { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; background: #fff; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
        input, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #eee; background: var(--bg); outline: none; }

        /* Footer Discreto JMS Web Solutions */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Playfair Display', serif; font-size: 1.4rem; color: var(--primary); margin-bottom: 10px; }
        .footer-info { font-size: 0.8rem; color: #999; letter-spacing: 1px; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 600; }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; z-index: 1000;
        }

        @media (max-width: 992px) { .contact-box { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">GRÃO & <span>AROMA</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#menu">Destaques</a>
        <a href="#contato">Localização</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Momentos que começam com um <span>Café.</span></h1>
    <p>Grãos selecionados, torra artesanal e um ambiente feito para você se sentir em casa.</p>
    <a href="https://wa.me/5551991345607" class="btn">Ver Cardápio Digital</a>
</section>

<section id="menu">
    <h2 class="section-title">Nossas Especialidades</h2>
    <div class="menu-grid">
        <div class="menu-card"><i class="fas fa-coffee"></i><h3>Espresso</h3><p>O clássico extraído com precisão para amantes do café puro.</p></div>
        <div class="menu-card"><i class="fas fa-mug-hot"></i><h3>Cappuccino</h3><p>Equilíbrio perfeito entre café, leite vaporizado e crema.</p></div>
        <div class="menu-card"><i class="fas fa-cookie"></i><h3>Doces Artesanais</h3><p>Bolos e tortas feitos diariamente para acompanhar sua xícara.</p></div>
    </div>
</section>

<section id="contato">
    <div class="contact-box">
        <div>
            <h2 style="font-family: 'Playfair Display'; margin-bottom: 20px;">Reserve sua Mesa</h2>
            <form action="#">
                <input type="text" placeholder="Seu Nome" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <textarea placeholder="Mensagem ou pedido especial" rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Enviar Solicitação</button>
            </form>
        </div>
        <div style="border: 1px solid #eee; overflow: hidden; height: 350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.611849742!2d-51.2490333792019!3d-30.06099144412239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978fd450942f7%3A0x773d40608518f8!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">GRÃO & <span>AROMA</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>