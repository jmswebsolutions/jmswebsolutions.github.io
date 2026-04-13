<?php
/*
Template Name: LP Psicologia Profissional - JMS Web Solutions
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicologia Clínica | Equilíbrio e Bem-Estar</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #588157; /* Verde Terapêutico */
            --secondary: #344e41; /* Verde Escuro */
            --accent: #a3b18a;
            --bg: #f8f9fa;
            --text: #333d29;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        body { background-color: var(--bg); color: var(--text); line-height: 1.8; }

        header {
            padding: 20px 7%;
            display: flex; justify-content: space-between; align-items: center;
            background: #fff;
            position: fixed; width: 100%; top: 0; z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        .logo-header { font-family: 'Libre+Baskerville', serif; font-size: 1.4rem; color: var(--secondary); font-weight: 700; }
        .logo-header span { color: var(--primary); }
        .nav-links a { color: var(--secondary); text-decoration: none; margin-left: 25px; font-weight: 600; font-size: 0.9rem; transition: 0.3s; }
        .nav-links a:hover { color: var(--primary); }

        /* Hero */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(255,255,255,0.8), rgba(255,255,255,0.4)), url('https://images.unsplash.com/photo-1527137342181-19aab11a8ee1?q=80&w=1470&auto=format&fit=crop');
            background-size: cover; background-position: center;
            display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 0 7%;
        }
        .hero h1 { font-family: 'Libre Baskerville', serif; font-size: clamp(2.2rem, 6vw, 3.5rem); color: var(--secondary); margin-bottom: 20px; line-height: 1.2; }
        .hero p { max-width: 650px; font-size: 1.1rem; margin-bottom: 35px; color: #4a5d4a; }

        .btn {
            background: var(--primary); color: #fff; padding: 16px 40px;
            text-decoration: none; font-weight: 600; border-radius: 50px;
            display: inline-block; transition: 0.3s; border: none; cursor: pointer;
        }
        .btn:hover { background: var(--secondary); transform: translateY(-2px); box-shadow: 0 5px 15px rgba(88, 129, 87, 0.3); }

        /* Seções */
        section { padding: 100px 7%; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-family: 'Libre Baskerville', serif; font-size: 2.2rem; color: var(--secondary); }

        .service-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .card { background: #fff; padding: 40px; border-radius: 20px; text-align: center; border: 1px solid #e9ecef; transition: 0.3s; }
        .card:hover { transform: translateY(-10px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .card i { font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; }
        .card h3 { margin-bottom: 15px; color: var(--secondary); }

        /* Contato */
        .contact-area { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .form-container { background: #fff; padding: 45px; border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
        input, select, textarea { width: 100%; padding: 15px; margin-bottom: 15px; border: 1px solid #dee2e6; border-radius: 10px; font-size: 1rem; outline: none; }
        input:focus { border-color: var(--primary); }

        /* Footer Discreto */
        footer { padding: 50px 7%; background: #fff; text-align: center; border-top: 1px solid #eee; }
        .footer-nicho { font-family: 'Libre Baskerville', serif; font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary); }
        .footer-nicho span { color: var(--primary); }
        .footer-info { font-size: 0.85rem; color: #888; }
        .footer-info a { color: inherit; text-decoration: none; font-weight: 600; }
        .footer-info a:hover { color: var(--primary); }

        /* WhatsApp */
        .whatsapp-float {
            position: fixed; bottom: 30px; right: 30px; background: #25d366;
            width: 60px; height: 60px; border-radius: 50%; display: flex;
            align-items: center; justify-content: center; font-size: 30px; color: #fff; text-decoration: none; z-index: 1000;
        }

        @media (max-width: 992px) { .contact-area { grid-template-columns: 1fr; } header nav { display: none; } }
    </style>
</head>
<body>

<header>
    <div class="logo-header">PSICO<span>CLÍNICA</span></div>
    <nav class="nav-links">
        <a href="#inicio">Início</a>
        <a href="#especialidades">Especialidades</a>
        <a href="#agendamento">Agendamento</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <h1>Cuidar da mente é <span>cuidar da vida.</span></h1>
    <p>Apoio psicológico especializado para ajudar você a atravessar desafios, encontrar equilíbrio emocional e redescobrir sua força interior.</p>
    <a href="#agendamento" class="btn">Agendar uma Consulta</a>
</section>

<section id="especialidades">
    <div class="section-title"><h2>Especialidades Terapêuticas</h2></div>
    <div class="service-cards">
        <div class="card">
            <i class="fas fa-user"></i>
            <h3>Terapia Individual</h3>
            <p>Espaço seguro para autoconhecimento e tratamento de ansiedade, depressão e estresse.</p>
        </div>
        <div class="card">
            <i class="fas fa-users"></i>
            <h3>Terapia de Casal</h3>
            <p>Mediação de conflitos e fortalecimento dos laços afetivos através da comunicação.</p>
        </div>
        <div class="card">
            <i class="fas fa-brain"></i>
            <h3>TCC</h3>
            <p>Terapia Cognitivo-Comportamental focada na reestruturação de pensamentos e hábitos.</p>
        </div>
    </div>
</section>

<section id="agendamento" style="background: #f1f3f2;">
    <div class="contact-area">
        <div class="form-container">
            <h3 style="font-family: 'Libre Baskerville'; margin-bottom: 25px;">Marcar Sessão</h3>
            <form action="#">
                <input type="text" placeholder="Seu Nome Completo" required>
                <input type="tel" placeholder="Seu WhatsApp" required>
                <select required>
                    <option value="">Modalidade de Atendimento</option>
                    <option>Presencial (Porto Alegre)</option>
                    <option>Online (Vídeo Chamada)</option>
                </select>
                <textarea placeholder="Como posso ajudar você hoje?" rows="4"></textarea>
                <button type="submit" class="btn" style="width: 100%;">Enviar Solicitação</button>
            </form>
        </div>
        <div style="border-radius: 25px; overflow: hidden; height: 400px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110515.68817650736!2d-51.27210292728994!3d-30.040778107954932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199403487042a9%3A0x6334a17056649c0d!2sPorto%20Alegre%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <div class="footer-nicho">PSICO<span>CLÍNICA</span></div>
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