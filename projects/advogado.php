<?php
/*
Template Name: LP Advocacia Especializada - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocacia Estratégica | Soluções Jurídicas</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Lora:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #0a1e36; /* Azul Petróleo Escuro */
            --accent: #b89a67; /* Dourado Envelhecido */
            --bg: #f4f4f2;
            --text: #2c3e50;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg); color: var(--text); line-height: 1.7; }

        header {
            padding: 20px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            border-bottom: 3px solid var(--accent);
        }
        .logo-header { font-family: 'Cinzel', serif; font-size: 1.4rem; color: var(--primary); letter-spacing: 1px; }
        .logo-header span { color: var(--accent); }
        .nav-links a { color: var(--primary); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }

        /* Hero */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(10, 30, 54, 0.85), rgba(10, 30, 54, 0.7)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%; color: #fff;
        }
        .hero h1 { font-family: 'Cinzel', serif; font-size: clamp(2rem, 6vw, 3.5rem); margin-bottom: 20px; border-bottom: 2px solid var(--accent); padding-bottom: 15px; }
        .hero p { max-width: 750px; font-family: 'Lora', serif; font-size: 1.2rem; font-style: italic; margin-bottom: 35px; opacity: 0.9; }

        .btn {
            background: var(--accent); color: #fff; padding: 18px 45px;
            text-decoration: none; font-weight: 600; border-radius: 0;
            display: inline-block; text-transform: uppercase; transition: 0.3s; letter-spacing: 2px;
        }
        .btn:hover { background: #fff; color: var(--primary); }

        /* Áreas de Atuação */
        section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Cinzel', serif; font-size: 2.2rem; color: var(--primary); position: relative; }
        .section-title h2::after { content: ''; display: block; width: 60px; height: 3px; background: var(--accent); margin: 15px auto; }

        .grid-law { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .law-card { background: #fff; padding: 45px; border-radius: 0; border: 1px solid #e0e0e0; transition: 0.4s; }
        .law-card:hover { border-color: var(--accent); box-shadow: 0 15px 40px rgba(0,0,0,0.05); }
        .law-card i { font-size: 2.5rem; color: var(--accent); margin-bottom: 25px; }
        .law-card h3 { font-family: 'Cinzel', serif; font-size: 1.3rem; margin-bottom: 15px; color: var(--primary); }

        /* Contato & Agendamento */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .form-box { background: var(--primary); padding: 50px; color: #fff; }
        input, select, textarea { width: 100%; padding: 15px; margin-bottom: 20px; border: none; background: rgba(255,255,255,0.1); color: #fff; border-bottom: 1px solid var(--accent); outline: none; }
        ::placeholder { color: rgba(255,255,255,0.6); }

        /* Footer Discreto JMS Web Solutions */
        footer { padding: 40px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Cinzel', serif; font-size: 1.2rem; margin-bottom: 10px; color: var(--primary); font-weight: 700; }
        .footer-info { font-size: 0.75rem; color: #999; letter-spacing: 1px; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 700; }
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
    <div class="logo-header">JUSTITIA<span>ADVOCACIA</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#atuacao">Áreas de Atuação</a>
        <a href="#contato">Agendar Consulta</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Excelência e Rigor na <span>Defesa dos seus Direitos.</span></h1>
    <p>Atuação jurídica estratégica com foco em resultados, ética e transparência para pessoas físicas e jurídicas.</p>
    <a href="#contato" class="btn">Solicitar Análise de Caso</a>
</section>

<section id="atuacao">
    <div class="section-title"><h2>Especialidades Jurídicas</h2></div>
    <div class="grid-law">
        <div class="law-card">
            <i class="fas fa-gavel"></i>
            <h3>Direito Civil</h3>
            <p>Resolução de conflitos contratuais, responsabilidade civil e direitos de propriedade com foco preventivo.</p>
        </div>
        <div class="law-card">
            <i class="fas fa-users"></i>
            <h3>Família e Sucessões</h3>
            <p>Inventários, divórcios e planejamento sucessório conduzidos com a sensibilidade e o sigilo necessários.</p>
        </div>
        <div class="law-card">
            <i class="fas fa-briefcase"></i>
            <h3>Direito do Trabalho</h3>
            <p>Assessoria completa para empresas e trabalhadores, garantindo o cumprimento fiel da legislação vigente.</p>
        </div>
    </div>
</section>

<section id="contato" style="background: #fff;">
    <div class="contact-area">
        <div class="form-box">
            <h3 style="font-family: 'Cinzel'; font-size: 1.8rem; margin-bottom: 30px; color: var(--accent);">Agendar Atendimento</h3>
            <form action="#">
                <input type="text" placeholder="Nome Completo" required>
                <input type="tel" placeholder="WhatsApp" required>
                <select required>
                    <option value="">Área de Interesse</option>
                    <option>Cível</option>
                    <option>Trabalhista</option>
                    <option>Família</option>
                    <option>Empresarial</option>
                </select>
                <textarea placeholder="Resumo do caso (opcional)" rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Enviar Solicitação</button>
            </form>
        </div>
        <div style="border: 1px solid #eee; overflow: hidden; height: 480px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110565.48512595058!2d-51.25055819777174!3d-30.003222479577712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977fd4193da75%3A0x63311654817d9d0!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr5" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">JUSTITIA<span>ADVOCACIA</span></div>
    <div class="footer-info">
        © 2026 Desenvolvido por 
        <a href="https://jmswebsolutions.com.br/" target="_blank">JMS Web Solutions</a>. 
        Porto Alegre/RS.
    </div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

</body>
</html>