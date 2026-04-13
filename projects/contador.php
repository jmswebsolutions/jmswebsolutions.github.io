<?php
/*
Template Name: LP Contabilidade Estratégica - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excelência Contábil | Gestão e Consultoria Tributária</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Lexend:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #0f172a; /* Azul Marinho Profundo */
            --accent: #2563eb; /* Azul Royal Moderno */
            --bg-light: #f8fafc;
            --white: #ffffff;
            --text-main: #334155;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--white); color: var(--text-main); line-height: 1.6; }

        header {
            padding: 18px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 1px 10px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Lexend', sans-serif; font-size: 1.4rem; color: var(--primary); font-weight: 700; }
        .logo-header span { color: var(--accent); }
        .nav-links a { color: var(--primary); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; }

        /* Hero Section */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.6)), url('https://images.unsplash.com/photo-1554224155-169746991c99?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Lexend', sans-serif; font-size: clamp(2.2rem, 6vw, 3.5rem); margin-bottom: 20px; line-height: 1.2; }
        .hero p { max-width: 750px; font-size: 1.15rem; margin-bottom: 35px; opacity: 0.9; font-weight: 300; }

        .btn {
            background: var(--accent); color: #fff; padding: 16px 40px;
            text-decoration: none; font-weight: 600; border-radius: 4px;
            display: inline-block; transition: 0.3s; border: none; cursor: pointer;
        }
        .btn:hover { background: var(--primary); transform: translateY(-3px); }

        /* Serviços Contábeis */
        section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Lexend', sans-serif; font-size: 2.2rem; color: var(--primary); }

        .service-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .service-card { padding: 45px; border-radius: 8px; border: 1px solid #e2e8f0; background: var(--bg-light); transition: 0.3s; }
        .service-card:hover { background: #fff; box-shadow: 0 15px 35px rgba(0,0,0,0.06); border-color: var(--accent); }
        .service-card i { font-size: 2.5rem; color: var(--accent); margin-bottom: 20px; }
        .service-card h3 { margin-bottom: 15px; color: var(--primary); font-family: 'Lexend', sans-serif; }

        /* Contato & Agendamento */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .form-box { background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        input, select, textarea { width: 100%; padding: 14px; margin-bottom: 15px; border: 1px solid #cbd5e1; border-radius: 4px; outline: none; background: #fff; }

        /* Footer Padrão JMS Web Solutions */
        footer { padding: 45px 7%; background: #fff; text-align: center; border-top: 1px solid #f1f5f9; }
        .footer-nicho { font-family: 'Lexend', sans-serif; font-size: 1.4rem; color: var(--primary); margin-bottom: 10px; font-weight: 700; }
        .footer-nicho span { color: var(--accent); }
        .footer-info { font-size: 0.85rem; color: #64748b; letter-spacing: 0.5px; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; transition: 0.2s; }
        .footer-info a:hover { color: var(--accent); }

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
    <div class="logo-header">PRIME<span>CONTÁBIL</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#servicos">Serviços</a>
        <a href="#contato">Fale Conosco</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Contabilidade que <span>impulsiona seu negócio.</span></h1>
    <p>Gestão contábil moderna, planejamento tributário e abertura de empresas com foco total em rentabilidade e segurança.</p>
    <a href="#contato" class="btn">Solicitar Diagnóstico Gratuito</a>
</section>

<section id="servicos">
    <div class="section-title"><h2>Soluções para sua Empresa</h2></div>
    <div class="service-grid">
        <div class="service-card">
            <i class="fas fa-rocket"></i>
            <h3>Abertura de Empresas</h3>
            <p>Processo ágil e descomplicado para formalizar seu negócio no regime tributário mais econômico.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-chart-line"></i>
            <h3>Gestão Contábil</h3>
            <p>Balanços mensais, controle de fluxo de caixa e relatórios estratégicos para sua tomada de decisão.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-file-invoice-dollar"></i>
            <h3>Planejamento Tributário</h3>
            <p>Análise profunda para reduzir legalmente sua carga de impostos e aumentar o lucro líquido.</p>
        </div>
    </div>
</section>

<section id="contato" style="background: #fdfdfd;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Lexend'; font-size: 1.8rem; margin-bottom: 25px; color: var(--primary);">Agendar Consultoria</h3>
            <form action="#">
                <input type="text" placeholder="Nome do Responsável" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select required>
                    <option value="">Serviço de Interesse</option>
                    <option>Abertura de ME/Empresa</option>
                    <option>Migração de Escritório</option>
                    <option>Consultoria Tributária</option>
                    <option>Imposto de Renda</option>
                </select>
                <textarea placeholder="Fale um pouco sobre sua necessidade ou empresa..." rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Solicitar Atendimento</button>
            </form>
        </div>
        <div style="border-radius: 8px; overflow: hidden; height: 460px; border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110565.48512595058!2d-51.25055819777174!3d-30.003222479577712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd4193da75%3A0x63311654817d9d0!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr6" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">PRIME<span>CONTÁBIL</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>