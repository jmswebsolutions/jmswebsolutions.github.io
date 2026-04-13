<?php
/*
Template Name: Portfólio Profissional JMS
*/
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Cache-Control: no-store, no-cache, must-revalidate");
$ano = date('Y');
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Jonatan Marques | JMS Web Solutions - Cria&#231;&#227;o de Sites Profissionais</title>
<meta name="description" content="Web designer e Analista de Sistemas em Porto Alegre. Cria&#231;&#227;o de sites modernos, landing pages e solu&#231;&#245;es digitais focadas em clareza e resultados.">
<meta name="keywords" content="cria&#231;&#227;o de sites porto alegre,web designer porto alegre,landing page,jms web solutions,jonatan marques,sites profissionais,desenvolvedor de sites">
<meta name="author" content="Jonatan Marques">
<meta name="robots" content="index,follow">
<meta property="og:type" content="website">
<meta property="og:url" content="https://jmswebsolutions.com.br/">
<meta property="og:title" content="Jonatan Marques | JMS Web Solutions">
<meta property="og:description" content="Desenvolvimento de sites modernos e landing pages em Porto Alegre. Confira meu trabalho!">

<meta property="og:image" content="https://jmswebsolutions.com.br/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Jonatan Marques | JMS Web Solutions">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://jmswebsolutions.com.br/og-image.png">

<link rel="icon" type="image/png" href="logo.png">
<link rel="canonical" href="https://jmswebsolutions.com.br/">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
/* ══════════════════════════════════════════
   VARIÁVEIS
══════════════════════════════════════════ */
:root{
  --bg:#0f1115;--card-bg:#1a1d23;--primary:#ff5e14;
  --text:#ffffff;--text-muted:#94a3b8;
  --spacing:90px;--header-height:80px;--whatsapp:#25d366;
}

/* ══════════════════════════════════════════
   KEYFRAMES — ORIGINAIS
══════════════════════════════════════════ */
@keyframes pulse-whatsapp{
  0%{transform:scale(1);box-shadow:0 0 0 0 rgba(37,211,102,.7)}
  70%{transform:scale(1.05);box-shadow:0 0 0 15px rgba(37,211,102,0)}
  100%{transform:scale(1);box-shadow:0 0 0 0 rgba(37,211,102,0)}
}
@keyframes pulse-primary{
  0%{transform:scale(1)}
  50%{transform:scale(1.05);box-shadow:0 0 20px rgba(255,94,20,.4)}
  100%{transform:scale(1)}
}

/* ══════════════════════════════════════════
   KEYFRAMES — SCROLL ANIMATIONS
══════════════════════════════════════════ */
@keyframes fadeUp      {from{opacity:0;transform:translateY(60px)}   to{opacity:1;transform:translateY(0)}}
@keyframes fadeDown    {from{opacity:0;transform:translateY(-50px)}  to{opacity:1;transform:translateY(0)}}
@keyframes fadeLeft    {from{opacity:0;transform:translateX(-70px)}  to{opacity:1;transform:translateX(0)}}
@keyframes fadeRight   {from{opacity:0;transform:translateX(70px)}   to{opacity:1;transform:translateX(0)}}
@keyframes zoomIn      {from{opacity:0;transform:scale(.80)}         to{opacity:1;transform:scale(1)}}
@keyframes zoomFadeUp  {from{opacity:0;transform:scale(.9) translateY(40px)} to{opacity:1;transform:scale(1) translateY(0)}}
@keyframes lineGrow    {from{width:0}                                 to{width:50px}}
@keyframes sectionSlideUp{from{opacity:0;transform:translateY(80px)} to{opacity:1;transform:translateY(0)}}
@keyframes heroTitle   {from{opacity:0;transform:translateY(-30px) scale(.97)} to{opacity:1;transform:translateY(0) scale(1)}}
@keyframes heroPara    {from{opacity:0;transform:translateY(25px)}   to{opacity:1;transform:translateY(0)}}
@keyframes heroBtnIn   {from{opacity:0;transform:scale(.8)}          to{opacity:1;transform:scale(1)}}
@keyframes badgeSlide  {from{opacity:0;transform:translateX(-40px) scale(.95)} to{opacity:1;transform:translateX(0) scale(1)}}
@keyframes imgReveal   {from{opacity:0;transform:scale(.92) rotate(-1deg)} to{opacity:1;transform:scale(1) rotate(0deg)}}

/* ══════════════════════════════════════════
   SISTEMA DE REVEAL (SCROLL)
══════════════════════════════════════════ */
/* Estado padrão — invisível */
.rv{opacity:0}
/* Visível — a animação definida via classe é aplicada */
.rv.in{opacity:1}

/* Tipos de entrada */
.rv.in.rv-up       {animation:fadeUp       .8s  cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-down     {animation:fadeDown     .7s  cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-left     {animation:fadeLeft     .8s  cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-right    {animation:fadeRight    .8s  cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-zoom     {animation:zoomIn       .75s cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-zoomup   {animation:zoomFadeUp   .8s  cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-section  {animation:sectionSlideUp .9s cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-img      {animation:imgReveal    .9s  cubic-bezier(.22,1,.36,1) both}
.rv.in.rv-badge    {animation:badgeSlide   .85s cubic-bezier(.22,1,.36,1) both}

/* Linha decorativa */
.section-header .line{width:50px}
.section-header.in .line{animation:lineGrow .7s cubic-bezier(.22,1,.36,1) .35s both}

/* Delays escalonados */
.rv-d0 {animation-delay:.00s}.rv-d1 {animation-delay:.08s}.rv-d2 {animation-delay:.18s}
.rv-d3 {animation-delay:.28s}.rv-d4 {animation-delay:.38s}.rv-d5 {animation-delay:.48s}
.rv-d6 {animation-delay:.58s}.rv-d7 {animation-delay:.68s}.rv-d8 {animation-delay:.78s}
.rv-d9 {animation-delay:.88s}

/* ══════════════════════════════════════════
   BASE
══════════════════════════════════════════ */
html,body{overflow-x:hidden;width:100%}
*{margin:0;padding:0;box-sizing:border-box;scroll-behavior:smooth}
body{font-family:'Plus Jakarta Sans',sans-serif;background-color:var(--bg);color:var(--text);line-height:1.6}
::selection{background:transparent;color:inherit}

/* ══════════════════════════════════════════
   HEADER
══════════════════════════════════════════ */
header{
  padding:20px 7%;display:flex;justify-content:space-between;align-items:center;
  background:rgba(15,17,21,.95);backdrop-filter:blur(10px);
  position:fixed;top:0;left:0;width:100%;z-index:1100;
  border-bottom:1px solid #2d3139;
}
.logo{font-weight:800;font-size:1.2rem;color:var(--primary);letter-spacing:1px}
.nav-menu{display:flex;align-items:center}
.nav-menu a{color:var(--text);text-decoration:none;margin-left:30px;font-size:.9rem;font-weight:500;transition:.3s}
.nav-menu a:hover{color:var(--primary)}
.hamburger{display:none;cursor:pointer;flex-direction:column;gap:5px;z-index:1200}
.hamburger span{display:block;width:25px;height:3px;background:var(--text);transition:.3s}

/* ══════════════════════════════════════════
   HERO
══════════════════════════════════════════ */
.hero{
  padding:calc(var(--spacing) + var(--header-height)) 7% var(--spacing);
  text-align:center;min-height:75vh;
  display:flex;flex-direction:column;justify-content:center;align-items:center;
}
/* Hero animado diretamente no load — sem depender do observer */
.hero h1{
  font-size:3.2rem;margin-bottom:20px;font-weight:800;max-width:900px;line-height:1.2;
  animation:heroTitle .9s cubic-bezier(.22,1,.36,1) .1s both;
}
.hero p{
  color:var(--text-muted);font-size:1.1rem;max-width:600px;margin-bottom:40px;
  animation:heroPara .9s cubic-bezier(.22,1,.36,1) .3s both;
}
.btn{
  background:var(--primary);color:#fff;padding:18px 36px;border-radius:8px;
  text-decoration:none;font-weight:700;transition:.3s;display:inline-block;
  animation:heroBtnIn .7s cubic-bezier(.22,1,.36,1) .55s both, pulse-primary 2s 1.4s infinite ease-in-out;
}
.btn:hover{transform:translateY(-3px);box-shadow:0 10px 20px rgba(255,94,20,.3);animation:none}

/* ══════════════════════════════════════════
   SECTION HEADER
══════════════════════════════════════════ */
.section-header{text-align:center;margin-bottom:60px}
.section-header h2{font-size:2.2rem;margin-bottom:15px}
.section-header .line{height:3px;background:var(--primary);margin:0 auto}

/* ══════════════════════════════════════════
   PORTFOLIO
══════════════════════════════════════════ */
.portfolio{padding:var(--spacing) 7%;background:var(--card-bg)}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px}
.card{
  background:var(--bg);border-radius:12px;border:1px solid #2d3139;
  overflow:hidden;transition:border-color .35s,transform .35s,box-shadow .35s;
}
.card:hover{border-color:var(--primary);transform:translateY(-8px);box-shadow:0 20px 45px rgba(255,94,20,.18)}
.card-img{
  width:100%;height:200px;background:#2d3139;background-size:cover;background-position:center;
  transition:transform .5s ease;
}
.card:hover .card-img{transform:scale(1.06)}
.card-body{padding:25px}
.card-body h3{margin-bottom:10px;font-size:1.2rem}
.card-body p{color:var(--text-muted);font-size:.9rem;margin-bottom:20px}
.card-link{color:var(--primary);text-decoration:none;font-weight:600;font-size:.85rem;transition:letter-spacing .3s,opacity .3s}
.card-link:hover{letter-spacing:.6px;opacity:.85}

/* ══════════════════════════════════════════
   NICHOS
══════════════════════════════════════════ */
.niche-portfolio{padding:var(--spacing) 7%;background:var(--bg);overflow:hidden}
.swiper-container{
  display:flex;gap:20px;overflow-x:auto;padding:20px 0 40px;
  scroll-snap-type:x mandatory;scrollbar-width:thin;scrollbar-color:var(--primary) var(--bg);
}
.swiper-container::-webkit-scrollbar{height:6px}
.swiper-container::-webkit-scrollbar-thumb{background:var(--primary);border-radius:10px}
.niche-card{
  min-width:280px;scroll-snap-align:start;background:var(--card-bg);
  border-radius:12px;border:1px solid #2d3139;
  transition:border-color .35s,transform .35s,box-shadow .35s;
  text-align:center;overflow:hidden;
}
.niche-card:hover{border-color:var(--primary);transform:translateY(-6px);box-shadow:0 14px 35px rgba(255,94,20,.15)}
.niche-img{height:160px;background-size:cover;background-position:center;transition:transform .5s ease}
.niche-card:hover .niche-img{transform:scale(1.08)}
.niche-body{padding:20px}
.niche-body h4{font-size:1.1rem;margin-bottom:15px}

/* ══════════════════════════════════════════
   SERVIÇOS
══════════════════════════════════════════ */
.services{padding:var(--spacing) 7%}
.services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:40px}
.s-box{
  padding:40px;border-radius:12px;background:var(--card-bg);text-align:center;
  border:1px solid transparent;
  transition:border-color .35s,transform .35s,box-shadow .35s,background .35s;
}
.s-box:hover{
  border-color:var(--primary);transform:translateY(-8px);
  box-shadow:0 20px 45px rgba(255,94,20,.18);background:#1f2229;
}
.s-box h3{margin-bottom:15px;color:var(--primary);transition:letter-spacing .3s}
.s-box:hover h3{letter-spacing:.5px}

/* ══════════════════════════════════════════
   BLOG
══════════════════════════════════════════ */
.blog{padding:var(--spacing) 7%;background:var(--bg)}
.blog-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:25px}
.blog-card{
  background:var(--card-bg);border-radius:12px;padding:30px;border:1px solid #2d3139;
  transition:border-color .35s,transform .35s,box-shadow .35s;
  display:flex;flex-direction:column;justify-content:space-between;
}
.blog-card:hover{border-color:var(--primary);transform:translateY(-8px);box-shadow:0 20px 45px rgba(255,94,20,.18)}
.blog-card i{font-size:2rem;color:var(--primary);margin-bottom:20px;transition:transform .4s,color .3s}
.blog-card:hover i{transform:scale(1.25) rotate(-8deg);color:#ff7a3d}

/* ══════════════════════════════════════════
   SOBRE
══════════════════════════════════════════ */
.about{padding:var(--spacing) 7%;display:flex;align-items:center;gap:60px;flex-direction:row;flex-wrap:nowrap}
.about-img-container{display:flex;flex-direction:column;gap:20px;flex:0 0 45%;max-width:500px}
.about-img{width:100%}
.about-img img{
  width:100%;border-radius:20px;border:2px solid #2d3139;display:block;
  transition:transform .5s ease,box-shadow .5s ease,border-color .5s;
}
.about-img img:hover{transform:scale(1.03);box-shadow:0 24px 60px rgba(255,94,20,.25);border-color:var(--primary)}
.badge-google{
  background:#111317;border:2px solid #ff5e14;border-radius:15px;
  padding:15px 25px;display:flex;align-items:center;gap:20px;width:100%;
  transition:transform .35s,box-shadow .35s;
}
.badge-google:hover{transform:translateY(-4px);box-shadow:0 12px 30px rgba(255,94,20,.2)}
.badge-info .points{color:#fff;font-size:1.4rem;font-weight:800;display:block}
.badge-info .label{display:block;color:var(--primary);font-weight:700}
.badge-info .expert{display:block;color:var(--text-muted)}
.about-text{flex:1}
.about-text h2{font-size:2.2rem;margin-bottom:20px}
.about-text p{margin-bottom:15px;color:var(--text-muted)}

/* ══════════════════════════════════════════
   FOOTER
══════════════════════════════════════════ */
footer{padding:60px 7% 30px;border-top:1px solid #2d3139}
.footer-content{display:flex;justify-content:space-between;flex-wrap:wrap;gap:40px;margin-bottom:40px}
.footer-bottom{text-align:center;padding-top:30px;border-top:1px solid #1a1d23;color:#444;font-size:.8rem}
.social-links{display:flex;gap:15px;margin-top:15px}
.social-links a{
  width:40px;height:40px;background:#2d3139;color:#fff;
  display:flex;align-items:center;justify-content:center;
  border-radius:50%;text-decoration:none;transition:.35s;
}
.social-links a:hover{background:var(--primary);transform:translateY(-4px) scale(1.1)}

/* ══════════════════════════════════════════
   WHATSAPP FLOAT
══════════════════════════════════════════ */
.whatsapp-float{
  position:fixed;bottom:30px;right:30px;background-color:var(--whatsapp);
  color:#fff;width:60px;height:60px;border-radius:50px;text-align:center;
  font-size:30px;box-shadow:2px 2px 10px rgba(0,0,0,.2);z-index:1200;
  display:flex;align-items:center;justify-content:center;
  text-decoration:none;transition:.3s;animation:pulse-whatsapp 2s infinite;
}
.whatsapp-float:hover{transform:scale(1.12);background-color:#20ba5a;animation:none}

/* ══════════════════════════════════════════
   MOBILE
══════════════════════════════════════════ */
@media(max-width:768px){
  .hamburger{display:flex}
  .nav-menu{
    position:fixed;top:0;right:-110%;width:85%;height:100vh;
    background:var(--bg);flex-direction:column;justify-content:center;
    transition:.4s;border-left:1px solid #2d3139;z-index:1050;
  }
  .nav-menu.active{right:0}
  .nav-menu a{margin:15px 0;font-size:1.2rem}
  .hero h1{font-size:2.2rem}
  .hamburger.active span:nth-child(1){transform:rotate(45deg) translate(5px,6px)}
  .hamburger.active span:nth-child(2){opacity:0}
  .hamburger.active span:nth-child(3){transform:rotate(-45deg) translate(5px,-6px)}
  .about{flex-direction:column;gap:40px}
  .about-img-container{flex:1;max-width:100%}
}
</style>
</head>
<body>

<!-- ═══════ HEADER ═══════ -->
<header>
  <div class="logo">JMS WEB SOLUTIONS</div>
  <div class="hamburger" id="hbg"><span></span><span></span><span></span></div>
  <nav class="nav-menu" id="nmn">
    <a href="#portfolio">Trabalhos</a>
    <a href="#segmentos">Solu&#231;&#245;es por Segmento</a>
    <a href="#servicos">O que fa&#231;o</a>
    <a href="#blog">Blog</a>
    <a href="#sobre">Sobre</a>
    <a href="https://wa.me/5551991345607" style="color:var(--primary);font-weight:bold">Falar no WhatsApp</a>
  </nav>
</header>

<!-- ═══════ HERO ═══════ -->
<section class="hero" id="inicio">
  <h1>Cria&#231;&#227;o de Sites e Landing Pages Profissionais</h1>
  <p>Ajudo neg&#243;cios a constru&#237;rem uma presen&#231;a digital s&#243;lida com sites modernos, r&#225;pidos e pensados na experi&#234;ncia do seu cliente.</p>
  <a href="https://wa.me/5551991345607" class="btn" rel="nofollow">Solicitar um Or&#231;amento</a>
</section>

<!-- ═══════ PORTFOLIO ═══════ -->
<section class="portfolio rv rv-section" id="portfolio">
  <div class="section-header rv rv-up rv-d0">
    <h2>Cases em Destaque</h2>
    <div class="line"></div>
  </div>
  <div class="grid">
    <article class="card rv rv-left rv-d1">
      <div class="card-img" style="background-image:url('https://jmswebsolutions.com.br/jobs/imgs/3.png')"></div>
      <div class="card-body">
        <h3>Advocacia</h3>
        <p>Projeto focado em credibilidade e organiza&#231;&#227;o de &#225;reas de atua&#231;&#227;o.</p>
        <a href="https://jmswebsolutions.com.br/jobs/adv" target="_blank" class="card-link">VER PROJETO &#8594;</a>
      </div>
    </article>
    <article class="card rv rv-right rv-d2">
      <div class="card-img" style="background-image:url('https://jmswebsolutions.com.br/jobs/imgs/4.png')"></div>
      <div class="card-body">
        <h3>Cl&#237;nica Veterin&#225;ria</h3>
        <p>Interface amig&#225;vel para facilitar o agendamento e contato dos clientes.</p>
        <a href="https://jmswebsolutions.com.br/jobs/veter" target="_blank" class="card-link">VER PROJETO &#8594;</a>
      </div>
    </article>
  </div>
</section>

<!-- ═══════ NICHOS ═══════ -->
<section class="niche-portfolio rv rv-section" id="segmentos">
  <div class="section-header rv rv-up rv-d0">
    <h2>Solu&#231;&#245;es por Segmento</h2>
    <div class="line"></div>
  </div>
  <div class="swiper-container rv rv-zoomup rv-d2">
<?php
$niches=[
  ['Barbearia','https://images.pexels.com/photos/1319460/pexels-photo-1319460.jpeg?auto=compress&cs=tinysrgb&w=400','barbearia'],
  ['Restaurante','https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&w=400','restaurante'],
  ['Personal Trainer','https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg?auto=compress&cs=tinysrgb&w=400','personaltrainer'],
  ['Mec&#226;nica','https://images.pexels.com/photos/190574/pexels-photo-190574.jpeg?auto=compress&cs=tinysrgb&w=400','mecanica'],
  ['Est&#233;tica','https://images.pexels.com/photos/3985338/pexels-photo-3985338.jpeg?auto=compress&cs=tinysrgb&w=400','estetica'],
  ['Academia','https://images.pexels.com/photos/4144144/pexels-photo-4144144.jpeg?auto=compress&cs=tinysrgb&w=400','academia'],
  ['Advogado','https://images.pexels.com/photos/4427622/pexels-photo-4427622.jpeg?auto=compress&cs=tinysrgb&w=400','advogado'],
  ['Cafeteria','https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg?auto=compress&cs=tinysrgb&w=400','cafeteria'],
  ['Cl&#237;nica de Est&#233;tica','https://images.pexels.com/photos/3985330/pexels-photo-3985330.jpeg?auto=compress&cs=tinysrgb&w=400','clinicaestetica'],
  ['Contador','https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg?auto=compress&cs=tinysrgb&w=400','contador'],
  ['Corretor de Im&#243;veis','https://images.pexels.com/photos/7415057/pexels-photo-7415057.jpeg?auto=compress&cs=tinysrgb&w=400','corretordeimoveis'],
  ['Delivery de Comida','https://images.pexels.com/photos/1441122/pexels-photo-1441122.jpeg?auto=compress&cs=tinysrgb&w=400','deliverydecomida'],
  ['Eletricista','https://images.pexels.com/photos/8005397/pexels-photo-8005397.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop','eletricista'],
  ['Encanador','https://images.pexels.com/photos/6419128/pexels-photo-6419128.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&fit=crop','encanador'],
  ['Hamburgueria','https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=400','hamburgueria'],
  ['Imobili&#225;ria','https://images.pexels.com/photos/101808/pexels-photo-101808.jpeg?auto=compress&cs=tinysrgb&w=400','imobiliaria'],
  ['Lava Jato Automotivo','https://images.pexels.com/photos/372810/pexels-photo-372810.jpeg?auto=compress&cs=tinysrgb&w=400','lavajato_esteticaautomotiva'],
  ['Marido de Aluguel','https://images.pexels.com/photos/5691622/pexels-photo-5691622.jpeg?auto=compress&cs=tinysrgb&w=400','maridodealuguel'],
  ['Odontologista','https://images.pexels.com/photos/3779709/pexels-photo-3779709.jpeg?auto=compress&cs=tinysrgb&w=400','odontologista'],
  ['Psic&#243;logo','https://images.pexels.com/photos/4101143/pexels-photo-4101143.jpeg?auto=compress&cs=tinysrgb&w=400','psicologo'],
  ['Sal&#227;o de Beleza','https://images.pexels.com/photos/3993444/pexels-photo-3993444.jpeg?auto=compress&cs=tinysrgb&w=400','salaodebeleza'],
];
foreach($niches as $n){
  echo '<div class="niche-card"><div class="niche-img" style="background-image:url(\''.$n[1].'\')"></div><div class="niche-body"><h4>'.$n[0].'</h4><a href="https://jmswebsolutions.com.br/projects/'.$n[2].'.php" target="_blank" class="card-link">DEMO AO VIVO &#8594;</a></div></div>';
}
?>
  </div>
</section>

<!-- ═══════ SERVIÇOS ═══════ -->
<section class="services rv rv-section" id="servicos">
  <div class="section-header rv rv-up rv-d0">
    <h2>Como posso ajudar</h2>
    <div class="line"></div>
  </div>
  <div class="services-grid">
    <div class="s-box rv rv-left rv-d1">
      <h3>Sites Modernos</h3>
      <p>Layouts que se adaptam a qualquer tela e transmitem confian&#231;a aos seus clientes.</p>
    </div>
    <div class="s-box rv rv-up rv-d3">
      <h3>Landing Pages</h3>
      <p>P&#225;ginas objetivas, ideais para campanhas de an&#250;ncios e capta&#231;&#227;o de novos contatos.</p>
    </div>
    <div class="s-box rv rv-right rv-d5">
      <h3>Otimiza&#231;&#227;o e SEO</h3>
      <p>Configura&#231;&#227;o t&#233;cnica inicial para que seu site seja bem interpretado pelos buscadores.</p>
    </div>
  </div>
</section>

<!-- ═══════ BLOG ═══════ -->
<section class="blog rv rv-section" id="blog">
  <div class="section-header rv rv-up rv-d0">
    <h2>Dicas e Estrat&#233;gias Digitais</h2>
    <div class="line"></div>
  </div>
  <div class="blog-grid">
<?php
$posts=[
  ['fab fa-google',   'O Poder do Google para Neg&#243;cios',  'Entenda como aparecer nas buscas pode transformar o faturamento da sua empresa.',            'artigo-google'],
  ['fas fa-users-slash','Clientes sem Indica&#231;&#227;o?',   'Pare de depender apenas do boca a boca e crie uma m&#225;quina de vendas previs&#237;vel.','clientes-sem-indicacao'],
  ['fas fa-trophy',   'Concorrente em Primeiro?',              'Descubra o que o seu concorrente est&#225; fazendo para aparecer antes de voc&#234; no Google.','concorrente-primeiro'],
  ['fas fa-shield-alt','Credibilidade Digital',                'Um site profissional &#233; o seu cart&#227;o de visitas 2.0. Saiba como passar autoridade.','credibilidade-digital'],
  ['fas fa-scroll',   'O Fim da Panfletagem',                  'Por que investir em an&#250;ncios digitais &#233; muito mais barato e eficiente que papel.','fim-da-panfletagem'],
  ['fas fa-map-marked-alt','Perda de Lucro no Maps',           'Se sua empresa n&#227;o est&#225; no mapa, ela est&#225; perdendo dinheiro todos os dias.','perda-lucro-maps'],
  ['fas fa-bolt',     'Performance e Velocidade',              'Sites lentos matam convers&#245;es. Aprenda a import&#226;ncia de uma p&#225;gina ultra r&#225;pida.','performance-site-rapido'],
  ['fas fa-map-marker-alt','SEO Local Avan&#231;ado',          'Domine o Google Maps e apare&#231;a para quem est&#225; buscando por voc&#234; agora mesmo.','seo-local-maps'],
  ['fas fa-user-tie', 'Seu Vendedor 24 Horas',                 'Como um site bem estruturado trabalha para voc&#234; mesmo enquanto voc&#234; dorme.','vendedor-24h'],
];
$dirs=['rv-left','rv-up','rv-right'];
$dls =['rv-d1','rv-d2','rv-d3','rv-d4','rv-d5','rv-d6','rv-d7','rv-d8','rv-d9'];
foreach($posts as $i=>$p){
  $dir=$dirs[$i%3];
  $dl =$dls[$i%9];
  echo '<article class="blog-card rv '.$dir.' '.$dl.'"><i class="'.$p[0].'"></i><h3>'.$p[1].'</h3><p>'.$p[2].'</p><a href="https://jmswebsolutions.com.br/articles/'.$p[3].'.php" class="card-link">LER ARTIGO &#8594;</a></article>';
}
?>
  </div>
</section>

<!-- ═══════ SOBRE ═══════ -->
<section class="about rv rv-section" id="sobre">
  <div class="about-img-container rv rv-img rv-d1">
    <div class="about-img">
      <img src="https://jmswebsolutions.com.br/elegante.png" alt="Jonatan Marques">
    </div>
    <div class="badge-google rv rv-badge rv-d3">
      <img src="https://www.gstatic.com/images/branding/product/2x/maps_96dp.png" alt="Maps" style="width:45px;height:auto">
      <div class="badge-info">
        <span class="label">GOOGLE LOCAL GUIDE</span>
        <span class="points">N&#237;vel 7 | +14.300 Pontos</span>
        <span class="expert">Estrategista em Visibilidade Local</span>
      </div>
    </div>
  </div>
  <div class="about-text rv rv-right rv-d3">
    <h2>Ol&#225;, eu sou o Jonatan</h2>
    <p>Sou Web Designer e Analista de Sistemas. Atuo com a <strong>JMS Web Solutions</strong> entregando sites profissionais e landing pages para quem busca uma presen&#231;a digital de impacto.</p>
    <p>Diferente de grandes ag&#234;ncias, aqui voc&#234; fala diretamente com quem coloca a m&#227;o no c&#243;digo. Meu compromisso &#233; com a qualidade t&#233;cnica, o design moderno e a transpar&#234;ncia em cada etapa do seu projeto.</p>
    <br>
    <a href="https://wa.me/5551991345607" class="card-link" rel="nofollow">VAMOS CONVERSAR?</a>
  </div>
</section>

<!-- ═══════ FOOTER ═══════ -->
<footer>
  <div class="footer-content rv rv-up rv-d1">
    <div>
      <div class="logo">JMS WEB SOLUTIONS</div>
      <p style="color:var(--text-muted);margin-top:10px;max-width:300px">Cria&#231;&#227;o de sites e solu&#231;&#245;es digitais em Porto Alegre/RS.</p>
      <div class="social-links">
        <a href="https://www.linkedin.com/in/devjonatanm"       target="_blank" aria-label="LinkedIn">  <i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/jmswebsolutions/"    target="_blank" aria-label="Instagram"> <i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/jonatanmsd"           target="_blank" aria-label="Facebook">  <i class="fab fa-facebook-f"></i></a>
        <a href="https://wa.me/5551991345607"                   target="_blank" aria-label="WhatsApp">  <i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
    <div class="rv rv-right rv-d3">
      <h4 style="margin-bottom:15px">Contato</h4>
      <p style="color:var(--text-muted)">(51) 99134-5607</p>
      <p style="color:var(--text-muted)">jonatan@jmswebsolutions.com.br</p>
      <p style="color:var(--text-muted)">Porto Alegre - RS</p>
    </div>
  </div>
  <div class="footer-bottom rv rv-up rv-d5">&copy; <?php echo $ano; ?> JMS Web Solutions.</div>
</footer>

<a href="https://wa.me/5551991345607" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<script>
(function(){

/* ══════════════════════════════════════════
   PROTEÇÃO CONTRA CÓPIA
══════════════════════════════════════════ */
document.addEventListener("contextmenu",function(e){e.preventDefault();return false;});
document.addEventListener("keydown",function(e){
  var k=e.key||e.keyCode;
  if(e.ctrlKey&&(k==="u"||k==="U"||k===85)){e.preventDefault();return false;}
  if(e.ctrlKey&&e.shiftKey&&(k==="i"||k==="I"||k===73)){e.preventDefault();return false;}
  if(e.ctrlKey&&e.shiftKey&&(k==="j"||k==="J"||k===74)){e.preventDefault();return false;}
  if(e.ctrlKey&&e.shiftKey&&(k==="c"||k==="C"||k===67)){e.preventDefault();return false;}
  if(e.ctrlKey&&(k==="s"||k==="S"||k===83)){e.preventDefault();return false;}
  if(k==="F12"||k===123){e.preventDefault();return false;}
});
var _dt=false;
setInterval(function(){
  var o=window.outerWidth-window.innerWidth>160||window.outerHeight-window.innerHeight>160;
  if(o&&!_dt){
    _dt=true;
    document.body.innerHTML='<div style="display:flex;align-items:center;justify-content:center;height:100vh;background:#0f1115;color:#ff5e14;font-family:sans-serif;font-size:1.5rem;text-align:center;">Acesso restrito.</div>';
  }
  if(!o){_dt=false;}
},600);

/* ══════════════════════════════════════════
   MENU HAMBURGUER
══════════════════════════════════════════ */
var hbg=document.getElementById("hbg");
var nmn=document.getElementById("nmn");
hbg.addEventListener("click",function(){
  hbg.classList.toggle("active");
  nmn.classList.toggle("active");
});
document.querySelectorAll(".nav-menu a").forEach(function(l){
  l.addEventListener("click",function(){
    hbg.classList.remove("active");
    nmn.classList.remove("active");
  });
});

/* ══════════════════════════════════════════
   INTERSECTION OBSERVER — SCROLL ANIMATIONS
   Dispara tanto em .rv individuais quanto
   nos section-headers para animar a linha.
══════════════════════════════════════════ */
var obsOpts={threshold:0.10,rootMargin:"0px 0px -50px 0px"};

var obs=new IntersectionObserver(function(entries){
  entries.forEach(function(entry){
    if(entry.isIntersecting){
      entry.target.classList.add("in");
      obs.unobserve(entry.target);
    }
  });
},obsOpts);

/* Observa todos os elementos com classe .rv */
document.querySelectorAll(".rv").forEach(function(el){
  obs.observe(el);
});

/* Observer separado para section-header (aciona a animação da linha) */
var obsHdr=new IntersectionObserver(function(entries){
  entries.forEach(function(entry){
    if(entry.isIntersecting){
      entry.target.classList.add("in");
      obsHdr.unobserve(entry.target);
    }
  });
},{threshold:0.3});

document.querySelectorAll(".section-header").forEach(function(el){
  obsHdr.observe(el);
});

})();
</script>
</body>
</html>
<?php
$html=ob_get_clean();
$html=preg_replace('/<!--.*?-->/s','',$html);
$html=preg_replace('/\n\s+/','',$html);
echo $html;
?>