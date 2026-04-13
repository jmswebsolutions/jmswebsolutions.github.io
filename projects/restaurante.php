<?php
/*
Template Name: Landing Page Restaurante Gourmet
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Fusion | Experiência Gastronômica Única</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #a2d24b; /* Verde Lima Fresh */
            --bg: #0d0e11;
            --card-bg: #16181d;
            --text: #ffffff;
            --text-muted: #94a3b8;
            --font-title: 'Playfair Display', serif;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg); color: var(--text); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(13, 14, 17, 0.95); backdrop-filter: blur(10px);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 1px solid #2d3139;
        }
        .logo { font-family: var(--font-title); font-size: 1.8rem; color: var(--primary); }
        nav a { color: var(--text); text-decoration: none; margin-left: 25px; font-size: 0.9rem; font-weight: 600; transition: 0.3s; }
        nav a:hover { color: var(--primary); }

        /* Hero */
        .hero {
            height: 100vh;
            background: linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.2)), url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&q=80');
            background-size: cover; background-position: center;
            display: flex; align-items: center; padding: 0 7%;
        }
        .hero-content { max-width: 600px; }
        .hero-content h1 { font-family: var(--font-title); font-size: 4rem; line-height: 1.1; margin-bottom: 20px; }
        .hero-content span { color: var(--primary); }

        .btn {
            background: var(--primary); color: #000; padding: 15px 35px;
            text-decoration: none; font-weight: 800; border-radius: 50px;
            display: inline-block; transition: 0.3s; text-transform: uppercase;
        }
        .btn:hover { transform: scale(1.05); box-shadow: 0 0 20px rgba(162, 210, 75, 0.4); }

        /* Cardápio */
        .section { padding: 100px 7%; }
        .section-header { text-align: center; margin-bottom: 60px; }
        .section-header h2 { font-family: var(--font-title); font-size: 2.8rem; margin-bottom: 10px; }
        .grid-menu { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .menu-item {
            background: var(--card-bg); padding: 20px; border-radius: 20px;
            display: flex; align-items: center; gap: 20px; border: 1px solid #2d3139;
        }
        .menu-item img { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; }
        .menu-info h3 { font-size: 1.1rem; margin-bottom: 5px; }
        .menu-info p { font-size: 0.85rem; color: var(--text-muted); }
        .price { color: var(--primary); font-weight: 800; font-size: 1.2rem; }

        /* Reserva & Badge */
        .reservation-area { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .form-reserva { background: var(--card-bg); padding: 40px; border-radius: 25px; border: 1px solid #2d3139; }
        input, select {
            width: 100%; padding: 12px; margin-bottom: 15px;
            background: #0d0e11; border: 1px solid #2d3139; color: #fff; border-radius: 8px;
        }

        /* Badge Google Local Guide Estilizado */
        .badge-google {
            margin-top: 30px; background: #111317; border: 2px solid var(--primary);
            border-radius: 15px; padding: 20px; display: flex; align-items: center; gap: 20px;
        }
        .badge-info .label { color: var(--primary); font-size: 0.75rem; font-weight: 800; text-transform: uppercase; }
        .badge-info .points { display: block; font-size: 1.2rem; font-weight: 800; }
        .badge-info .expert { color: var(--text-muted); font-size: 0.85rem; }

        .map-box { height: 350px; border-radius: 20px; overflow: hidden; margin-top: 40px; border: 1px solid #2d3139; }

        footer { padding: 60px 7%; background: #050505; text-align: center; border-top: 1px solid #1a1d23; }
        .social-links a { color: var(--primary); font-size: 1.5rem; margin: 0 10px; transition: 0.3s; }
        
        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px;
            color: white; text-decoration: none; z-index: 1000; box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.8rem; }
            .reservation-area { grid-template-columns: 1fr; }
            nav { display: none; }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">BISTRO FUSION</div>
    <nav>
        <a href="#inicio">Início</a>
        <a href="#menu">Cardápio</a>
        <a href="#reservas">Reservas</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <div class="hero-content">
        <h1>Sabor que Desperta <span>Sentidos.</span></h1>
        <p style="color: var(--text-muted); margin-bottom: 30px; font-size: 1.1rem;">Alta gastronomia com ingredientes selecionados e um ambiente preparado para seus melhores momentos.</p>
        <a href="#reservas" class="btn">Reservar uma Mesa</a>
    </div>
</section>

<section class="section" id="menu">
    <div class="section-header">
        <h2>Nosso Cardápio</h2>
        <p style="color: var(--text-muted);">As especialidades do Chef</p>
    </div>
    <div class="grid-menu">
        <div class="menu-item">
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=100&q=80" alt="Prato">
            <div class="menu-info">
                <h3>Salmão Grelhado Heritage</h3>
                <p>Acompanha risoto de limão siciliano.</p>
                <span class="price">R$ 78,00</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=100&q=80" alt="Prato">
            <div class="menu-info">
                <h3>Pizza Trufada Premium</h3>
                <p>Mix de cogumelos e azeite de trufas brancas.</p>
                <span class="price">R$ 65,00</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=100&q=80" alt="Prato">
            <div class="menu-info">
                <h3>Costela ao Barbecue</h3>
                <p>Assada por 12 horas, derrete na boca.</p>
                <span class="price">R$ 89,00</span>
            </div>
        </div>
    </div>
</section>

<section class="section" id="reservas" style="background: #111317;">
    <div class="reservation-area">
        <div class="form-reserva">
            <h2 style="font-family: var(--font-title); font-size: 2.2rem; margin-bottom: 25px;">Reserve sua Mesa</h2>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="email" placeholder="E-mail" required>
                <div style="display: flex; gap: 10px;">
                    <input type="date" required>
                    <select required>
                        <option value="">Horário</option>
                        <option>19:00</option><option>20:00</option><option>21:00</option>
                    </select>
                </div>
                <input type="number" placeholder="Número de Pessoas" min="1" required>
                <button type="submit" class="btn" style="width: 100%; border: none; cursor: pointer;">Solicitar Reserva</button>
            </form>
        </div>
        <div>
            <h2 style="font-family: var(--font-title); font-size: 2.2rem; margin-bottom: 15px;">Localização</h2>
            <p style="color: var(--text-muted);"><i class="fas fa-map-marker-alt" style="color: var(--primary);"></i> Rua Gastronômica, 123 - Porto Alegre/RS</p>
            <p style="color: var(--text-muted); margin-bottom: 20px;"><i class="fas fa-phone" style="color: var(--primary);"></i> (51) 99134-5607</p>
            
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.6038504!2d-51.246452!3d-30.011802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977936a213e5d%3A0xc3124430e793910f!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1700000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="logo">BISTRO FUSION</div>
    <div class="social-links" style="margin: 20px 0;">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
    <p style="color: var(--text-muted); font-size: 0.8rem;">© <?php echo date('Y'); ?> Desenvolvido por <strong>JMS Web Solutions</strong>. Porto Alegre/RS.</p>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>