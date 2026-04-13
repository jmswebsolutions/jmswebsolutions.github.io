<?php
/*
Template Name: LP Odontologia Premium - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorriso & Saúde | Odontologia Especializada</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lora:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #0077b6; /* Azul Saúde */
            --secondary: #00b4d8;
            --dark: #023e8a;
            --light: #f8f9fa;
            --text: #333;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        body { background-color: #fff; color: var(--text); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Lora', serif; font-size: 1.5rem; color: var(--dark); font-weight: 700; }
        .logo-header span { color: var(--secondary); }
        .nav-links a { color: var(--text); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 85vh;
            background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.1)), url('https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Lora', serif; font-size: clamp(2rem, 6vw, 3.5rem); color: var(--dark); max-width: 600px; margin-bottom: 20px; line-height: 1.2; }
        .hero p { max-width: 500px; margin-bottom: 30px; font-size: 1.1rem; color: #555; }

        .btn {
            background: var(--primary); color: #fff; padding: 15px 35px;
            text-decoration: none; font-weight: 600; border-radius: 5px;
            display: inline-block; transition: 0.3s; border: none; cursor: pointer; text-transform: uppercase;
        }
        .btn:hover { background: var(--dark); transform: translateY(-2px); }

        /* Serviços */
        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-family: 'Lora', serif; font-size: 2.5rem; color: var(--dark); }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        .service-card { padding: 40px; border-radius: 15px; background: var(--light); border: 1px solid #eee; text-align: center; transition: 0.3s; }
        .service-card:hover { border-color: var(--secondary); background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .service-card i { font-size: 2.5rem; color: var(--secondary); margin-bottom: 20px; }

        /* Contato / Agendamento */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-container { background: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); }
        input, select, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; outline: none; }

        /* Footer Discreto solicitado */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Lora', serif; font-size: 1.3rem; font-weight: 700; margin-bottom: 10px; color: var(--dark); }
        .footer-info { font-size: 0.85rem; color: #888; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 600; }
        .footer-info a:hover { color: var(--primary); }

        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; z-index: 1000;
        }

        @media (max-width: 768px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">DENTAL<span>PRIME</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Tratamentos</a>
        <a href="#contato">Agendamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Transformando sorrisos com <span>tecnologia e carinho.</span></h1>
    <p>Atendimento especializado em implantes, ortodontia e estética dental para você sorrir com confiança.</p>
    <a href="#contato" class="btn">Agendar Avaliação</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Nossas Especialidades</h2></div>
    <div class="services-grid">
        <div class="service-card"><i class="fas fa-tooth"></i><h3>Implantes</h3><p>Devolva a funcionalidade e a estética do seu sorriso com precisão.</p></div>
        <div class="service-card"><i class="fas fa-align-center"></i><h3>Aparelhos</h3><p>Alinhamento dental moderno, incluindo opções invisíveis e rápidas.</p></div>
        <div class="service-card"><i class="fas fa-smile-beam"></i><h3>Clareamento</h3><p>Técnicas avançadas para um sorriso branco e brilhante em pouco tempo.</p></div>
    </div>
</section>

<section id="contato" style="background: #f1f8ff;">
    <div class="contact-area">
        <div class="form-container">
            <h3 style="margin-bottom: 20px; color: var(--dark);">Marcar Consulta</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="WhatsApp" required>
                <select required>
                    <option value="">Selecione o Tratamento</option>
                    <option>Avaliação Geral</option>
                    <option>Estética / Clareamento</option>
                    <option>Implantes</option>
                    <option>Ortodontia</option>
                </select>
                <button type="submit" class="btn" style="width: 100%;">Solicitar Contato</button>
            </form>
        </div>
        <div style="border-radius: 15px; overflow: hidden; height: 380px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110595.03158434725!2d-51.2176985!3d-30.0330562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199cd2d28650af%3A0x1a365a3880c30f40!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">DENTAL<span>PRIME</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>