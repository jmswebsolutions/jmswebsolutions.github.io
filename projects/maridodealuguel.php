<?php
/*
Template Name: LP Marido de Aluguel Pro - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repara Tudo | Marido de Aluguel Profissional</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@700&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #f37021; /* Laranja Ferramenta */
            --dark: #262626;
            --light: #f9f9f9;
            --text: #333;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        body { background-color: #fff; color: var(--text); line-height: 1.6; }

        header {
            padding: 15px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Saira Condensed', sans-serif; font-size: 1.8rem; color: var(--dark); text-transform: uppercase; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: var(--dark); text-decoration: none; margin-left: 20px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; }

        /* Hero */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1581244277943-fe4a9c777189?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Saira Condensed', sans-serif; font-size: clamp(2.2rem, 8vw, 4.5rem); margin-bottom: 15px; letter-spacing: 1px; }
        .hero h1 span { color: var(--primary); }
        .hero p { max-width: 650px; font-size: 1.2rem; margin-bottom: 30px; font-weight: 300; }

        .btn {
            background: var(--primary); color: #fff; padding: 18px 45px;
            text-decoration: none; font-weight: 800; border-radius: 4px;
            display: inline-block; text-transform: uppercase; transition: 0.3s;
            border: none; cursor: pointer;
        }
        .btn:hover { background: var(--dark); transform: translateY(-3px); }

        /* Serviços */
        section { padding: 90px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Saira Condensed', sans-serif; font-size: 2.8rem; color: var(--dark); border-bottom: 6px solid var(--primary); display: inline-block; }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .service-card { background: var(--light); padding: 40px; border-radius: 8px; border-bottom: 4px solid #ddd; transition: 0.3s; }
        .service-card:hover { transform: scale(1.03); border-color: var(--primary); background: #fff; box-shadow: 0 15px 30px rgba(0,0,0,0.05); }
        .service-card i { font-size: 2.8rem; color: var(--primary); margin-bottom: 20px; }
        .service-card h3 { font-family: 'Saira Condensed', sans-serif; font-size: 1.6rem; margin-bottom: 10px; }

        /* Agendamento & Contato */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .form-box { background: var(--dark); padding: 40px; border-radius: 8px; color: #fff; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #444; background: #333; color: #fff; outline: none; }

        /* Footer Padrão JMS */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Saira Condensed', sans-serif; font-size: 1.5rem; color: var(--dark); margin-bottom: 10px; font-weight: 700; }
        .footer-info { font-size: 0.85rem; color: #777; }
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
    <div class="logo-header">REPARA<span>TUDO</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#contato">Solicitar Visita</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>REPAROS E <span>PEQUENAS REFORMAS.</span></h1>
    <p>Montagem de móveis, instalações elétricas, hidráulicas e serviços gerais com a confiança que seu lar merece.</p>
    <a href="https://wa.me/5551991345607" class="btn"><i class="fas fa-calendar-alt"></i> Agendar Horário</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Soluções para o seu Lar</h2></div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-hammer"></i>
            <h3>Montagem de Móveis</h3>
            <p>Montagem técnica de guarda-roupas, estantes, racks e móveis de escritório com precisão.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-lightbulb"></i>
            <h3>Instalações Gerais</h3>
            <p>Troca de resistência de chuveiro, instalação de cortinas, quadros, suportes de TV e prateleiras.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-faucet"></i>
            <h3>Manutenção Hidráulica</h3>
            <p>Conserto de vazamentos, troca de sifão, torneiras e reparos rápidos em descargas.</p>
        </div>
    </div>
</section>

<section id="contato" style="background: #f4f4f4;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Saira Condensed'; font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Solicitar Orçamento</h3>
            <form action="#">
                <input type="text" placeholder="Seu Nome" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select required>
                    <option value="">O que você precisa?</option>
                    <option>Pequenos Reparos</option>
                    <option>Montagem de Móveis</option>
                    <option>Hidráulica / Elétrica</option>
                    <option>Instalação de Itens</option>
                </select>
                <textarea placeholder="Liste as tarefas que deseja realizar..." rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Enviar Pedido</button>
            </form>
        </div>
        <div style="border-radius: 8px; overflow: hidden; height: 430px; border: 1px solid #ddd;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110595.39572635907!2d-51.24912752179612!3d-30.0045155913214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977d66668389b%3A0xc070e6c3104523e1!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v17100000000008" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">REPARA<span>TUDO</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>