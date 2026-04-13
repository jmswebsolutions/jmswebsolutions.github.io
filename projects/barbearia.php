<?php
/*
Template Name: Landing Page Barbearia Premium
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Heritage | Estilo e Tradição</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --gold: #c5a059;
            --gold-dark: #a38243;
            --dark: #0a0a0a;
            --dark-light: #161616;
            --text: #ffffff;
            --text-muted: #a0a0a0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        body { background-color: var(--dark); color: var(--text); line-height: 1.6; overflow-x: hidden; }
        
        h1, h2, h3, .logo { font-family: 'Cinzel', serif; }

        /* Header */
        header {
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(10, 10, 10, 0.95);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 1px solid rgba(197, 160, 89, 0.2);
        }
        .logo { color: var(--gold); font-size: 1.5rem; font-weight: 700; letter-spacing: 2px; }
        nav a { color: var(--text); text-decoration: none; margin-left: 25px; font-size: 0.9rem; transition: 0.3s; text-transform: uppercase; }
        nav a:hover { color: var(--gold); }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80') center/cover;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-size: clamp(2.5rem, 8vw, 4.5rem); color: var(--gold); margin-bottom: 20px; }
        .hero p { font-size: 1.2rem; max-width: 700px; margin-bottom: 35px; color: var(--text-muted); }

        /* Buttons */
        .btn-gold {
            background: var(--gold); color: var(--dark); padding: 15px 35px;
            text-decoration: none; font-weight: 700; border-radius: 4px;
            transition: 0.3s; display: inline-block; text-transform: uppercase;
        }
        .btn-gold:hover { background: var(--gold-dark); transform: translateY(-3px); }

        /* Services */
        .section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-size: 2.5rem; color: var(--gold); margin-bottom: 10px; }
        .section-title div { width: 60px; height: 3px; background: var(--gold); margin: 0 auto; }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .service-card {
            background: var(--dark-light); padding: 40px; border-radius: 8px;
            border: 1px solid rgba(197, 160, 89, 0.1); text-align: center; transition: 0.3s;
        }
        .service-card:hover { border-color: var(--gold); transform: translateY(-10px); }
        .service-card i { font-size: 3rem; color: var(--gold); margin-bottom: 20px; }
        .price { color: var(--gold); font-size: 1.5rem; font-weight: 700; display: block; margin-top: 15px; }

        /* Booking Form */
        .booking { background: var(--dark-light); border-radius: 15px; padding: 50px; border: 1px solid rgba(197, 160, 89, 0.2); }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        input, select, textarea {
            background: #222; border: 1px solid #333; padding: 12px;
            color: white; border-radius: 5px; width: 100%;
        }
        input:focus { border-color: var(--gold); outline: none; }

        /* Map & Info */
        .contact-container { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .map-box { border-radius: 15px; overflow: hidden; height: 400px; border: 1px solid var(--gold); }

        /* Footer */
        footer { padding: 50px 7%; background: #050505; text-align: center; border-top: 1px solid #1a1a1a; }
        .social-icons { margin: 20px 0; }
        .social-icons a { color: var(--gold); font-size: 1.5rem; margin: 0 15px; transition: 0.3s; }
        .social-icons a:hover { color: white; }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px;
            color: white; text-decoration: none; z-index: 1000; box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        @media (max-width: 768px) {
            .form-grid, .contact-container { grid-template-columns: 1fr; }
            header nav { display: none; }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">HERITAGE BARBER</div>
    <nav>
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#agendamento">Agendamento</a>
        <a href="#localizacao">Onde Estamos</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>ESTILO É UMA QUESTÃO DE ESCOLHA.</h1>
    <p>A experiência clássica de barbearia com o toque moderno que você merece. Venha cuidar do seu visual com os melhores especialistas de Porto Alegre.</p>
    <a href="#agendamento" class="btn-gold">Agende seu horário</a>
</section>

<section class="section" id="servicos">
    <div class="section-title">
        <h2>Nossos Serviços</h2>
        <div></div>
    </div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-cut"></i>
            <h3>Corte de Cabelo</h3>
            <p>Do clássico ao degrade moderno, finalizado com produtos premium.</p>
            <span class="price">R$ 50,00</span>
        </div>
        <div class="service-card">
            <i class="fas fa-razor"></i>
            <h3>Barba Completa</h3>
            <p>Toalha quente, navalha e óleos essenciais para sua pele.</p>
            <span class="price">R$ 40,00</span>
        </div>
        <div class="service-card">
            <i class="fas fa-user-tie"></i>
            <h3>Combo Heritage</h3>
            <p>Cabelo + Barba + Sobrancelha com desconto exclusivo.</p>
            <span class="price">R$ 80,00</span>
        </div>
    </div>
</section>

<section class="section" id="agendamento" style="background: var(--dark);">
    <div class="section-title">
        <h2>Agende seu Horário</h2>
        <p>Escolha o serviço e o melhor momento para você.</p>
    </div>
    <div class="booking">
        <form action="#">
            <div class="form-grid">
                <input type="text" placeholder="Seu Nome Completo" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select required>
                    <option value="">Selecione o Serviço</option>
                    <option value="corte">Corte de Cabelo</option>
                    <option value="barba">Barba</option>
                    <option value="combo">Combo Completo</option>
                </select>
                <input type="date" required>
            </div>
            <textarea placeholder="Alguma observação especial?" rows="4" style="margin-top:20px;"></textarea>
            <button type="submit" class="btn-gold" style="width: 100%; border: none; margin-top: 20px; cursor: pointer;">Confirmar Agendamento</button>
        </form>
    </div>
</section>

<section class="section" id="localizacao">
    <div class="contact-container">
        <div>
            <h2 style="font-family: 'Cinzel'; color: var(--gold); margin-bottom: 20px;">Onde Estamos</h2>
            <p><i class="fas fa-map-marker-alt" style="color: var(--gold); margin-right: 10px;"></i> Av. Assis Brasil, Sarandi - Porto Alegre/RS</p>
            <p><i class="fas fa-clock" style="color: var(--gold); margin-right: 10px;"></i> Seg a Sáb: 09h às 20h</p>
            <p><i class="fas fa-phone" style="color: var(--gold); margin-right: 10px;"></i> (51) 99134-5607</p>
            
            <div class="social-icons" style="text-align: left;">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.7!2d-51.1!3d-30.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAwJzAwLjAiUyA1McKwMDYnMDAuMCJX!5e0!3m2!1spt-BR!2sbr!4v1600000000000" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="logo">HERITAGE BARBER</div>
    <p style="color: var(--text-muted); margin-top: 15px;">&copy; <?php echo date('Y'); ?> Criado por JMS Web Solutions. Todos os direitos reservados.</p>
</footer>

<a href="https://wa.me/5551991345607?text=Olá! Gostaria de agendar um horário." class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>