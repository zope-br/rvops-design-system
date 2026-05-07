<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rvops — Brand Guide</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
:root {
  --or: #FF7A00; --or-d: #DA6208; --or-l: #FFB066;
  --bg1: #121212; --bg2: #1E1E22; --bg3: #222226; --bg4: #2E2E32;
  --line: #2E2E32;
  --txt: #fff; --txt-m: #86868B;
  --gr-btn: linear-gradient(to right,#DA6208,#FF7A00,#DA6208);
  --gr-title-multi: linear-gradient(to right,#484747,#939393,#e9e9e9,#fffbf4,#727272);
  --gr-title-mono: linear-gradient(to right,#FFFFFF,#998B8B);
  --gr-brand: conic-gradient(from 90deg at 50% 50%,#F2C94C 0deg,#76C04E 60deg,#2D9CDB 120deg,#6E5BD3 180deg,#C84CA0 240deg,#EB5757 300deg,#F2994A 340deg,#F2C94C 360deg);
  --fn-d: "Poppins",system-ui,sans-serif;
  --fn-b: "DM Sans",system-ui,sans-serif;
  --fn-m: "JetBrains Mono",monospace;
  --r-btn: 4px; --r-input: 10px; --r-card: 16px; --r-xl: 24px;
  --sh-glow: 0 8px 32px rgba(255,122,0,.32);
  --sh-focus: 0 0 0 3px rgba(255,122,0,.40);
}
*,*::before,*::after { box-sizing: border-box; margin: 0; padding: 0; }
html { font-size: 16px; scroll-behavior: smooth; }
body { font-family: var(--fn-b); background: var(--bg1); color: var(--txt); line-height: 1.5; -webkit-font-smoothing: antialiased; }
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }

/* Layout */
.wrap { max-width: 860px; margin: 0 auto; padding: 0 32px; }
.section { border-top: 1px solid var(--line); padding: 64px 0; }

/* Nav */
.nav { position: sticky; top: 0; z-index: 100; background: rgba(18,18,18,.96); backdrop-filter: blur(10px); border-bottom: 1px solid var(--line); }
.nav-inner { display: flex; align-items: center; justify-content: space-between; height: 60px; max-width: 860px; margin: 0 auto; padding: 0 32px; }
.nav-logo img { height: 22px; display: block; }
.nav-links { display: flex; gap: 4px; }
.nav-links a { font-family: var(--fn-m); font-size: 11px; text-transform: uppercase; letter-spacing: .06em; color: var(--txt-m); padding: 5px 10px; border-radius: 6px; transition: color .15s, background .15s; }
.nav-links a:hover { color: var(--or); background: rgba(255,122,0,.07); }
.nav-tag { font-family: var(--fn-m); font-size: 11px; color: var(--txt-m); }

/* Hero */
.hero { padding: 80px 0 72px; position: relative; overflow: hidden; }
.hero::after { content: ""; position: absolute; right: -120px; top: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255,122,0,.15), transparent 60%); pointer-events: none; }
.hero-inner { position: relative; z-index: 1; }
.hero-pill { display: inline-flex; align-items: center; gap: 7px; font-family: var(--fn-m); font-size: 11px; text-transform: uppercase; letter-spacing: .08em; color: var(--txt-m); border: 1px solid var(--line); border-radius: 999px; padding: 5px 14px; background: var(--bg3); margin-bottom: 28px; }
.hero-pill .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--or); flex-shrink: 0; }
.hero h1 { font-family: var(--fn-d); font-size: clamp(32px,5vw,56px); font-weight: 400; line-height: 1.08; letter-spacing: -.025em; background: var(--gr-title-multi); -webkit-background-clip: text; background-clip: text; color: transparent; margin-bottom: 16px; }
.hero p { font-size: 17px; color: var(--txt-m); max-width: 560px; margin-bottom: 40px; line-height: 1.65; }
.hero-meta { display: flex; flex-wrap: wrap; gap: 20px 36px; padding-top: 28px; border-top: 1px solid var(--line); }
.hero-meta-item { display: flex; flex-direction: column; gap: 3px; }
.hero-meta-k { font-family: var(--fn-m); font-size: 10px; text-transform: uppercase; letter-spacing: .08em; color: var(--txt-m); }
.hero-meta-v { font-family: var(--fn-m); font-size: 13px; font-weight: 500; color: var(--txt); }

/* Section label */
.s-label { font-family: var(--fn-m); font-size: 10px; text-transform: uppercase; letter-spacing: .14em; color: var(--or); margin-bottom: 6px; }
.s-title { font-family: var(--fn-d); font-size: 20px; font-weight: 400; margin-bottom: 32px; letter-spacing: -.02em; display: flex; align-items: center; gap: 10px; }
.s-title::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: var(--or); flex-shrink: 0; }
.sub { font-family: var(--fn-m); font-size: 10px; text-transform: uppercase; letter-spacing: .1em; color: var(--txt-m); margin-bottom: 14px; }

/* Logo */
.logo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 32px; }
.logo-card { border-radius: var(--r-xl); padding: 32px 28px; }
.logo-card.dn { background: #181818; border: 1px solid #2E2E2E; }
.logo-card.dc { background: linear-gradient(135deg,#1a1060,#0a1a3a 60%,#0d2a1a); }
.logo-card.lb { background: #FFFFFF; border: 1px solid #E9E9E9; }
.logo-card.bo { background: var(--or); border: 0; }
.logo-card-lbl { font-family: var(--fn-m); font-size: 10px; font-weight: 400; text-transform: uppercase; letter-spacing: .1em; color: var(--or); margin-bottom: 16px; }
.logo-card.lb .logo-card-lbl { color: var(--or-d); }
.logo-card.bo .logo-card-lbl { color: #fff; }
.logo-card-fn { font-family: var(--fn-m); font-size: 10px; color: rgba(255,255,255,.35); margin-top: 10px; }
.logo-card.lb .logo-card-fn { color: #aaa; }
.logo-card.bo .logo-card-fn { color: rgba(255,255,255,.55); }

/* Clearspace */
.clearspace { display: flex; align-items: center; gap: 32px; background: #fff; border: 1px solid #E9E9E9; border-radius: var(--r-card); padding: 32px; }
.clearspace-logo { padding: 16px 40px; background: #fff; border-radius: 4px; position: relative; }
.clearspace-logo::after { content: ""; position: absolute; inset: 0; outline: 10px solid rgba(255,122,0,.14); border-radius: 4px; pointer-events: none; }
.clearspace-info h4 { font-family: var(--fn-d); font-size: 15px; font-weight: 400; color: #111; margin-bottom: 6px; }
.clearspace-info p { font-size: 13px; color: #666; line-height: 1.6; }

/* Colors */
.swatch-row { display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 28px; }
.swatch { display: flex; flex-direction: column; gap: 6px; }
.chip { height: 48px; border-radius: 8px; border: 1px solid var(--line); cursor: pointer; transition: transform .12s; }
.chip:hover { transform: scale(1.04); }
.chip.w80 { width: 80px; }
.chip.w120 { width: 120px; border: 0; }
.chip.no-border { border: 0; }
.swatch-name { font-family: var(--fn-m); font-size: 10px; color: var(--txt); }
.swatch-val { font-family: var(--fn-m); font-size: 10px; color: var(--txt-m); }
.swatch-role { font-size: 10px; color: var(--or); }

/* Typography */
.type-table { display: flex; flex-direction: column; }
.type-row { display: grid; grid-template-columns: 140px 1fr; gap: 20px; align-items: baseline; padding: 18px 0; border-bottom: 1px solid var(--line); }
.type-row:last-child { border-bottom: 0; }
.type-meta { font-family: var(--fn-m); font-size: 10px; color: var(--txt-m); text-transform: uppercase; letter-spacing: .06em; line-height: 1.6; }
.td { font-family: var(--fn-d); font-weight: 500; letter-spacing: -.02em; }
.tb { font-family: var(--fn-b); font-weight: 400; letter-spacing: 0; }
.tm { font-family: var(--fn-m); font-weight: 400; letter-spacing: 0; }

/* Buttons */
.btn { display: inline-flex; align-items: center; gap: 8px; font-family: var(--fn-b); font-weight: 500; font-size: 15px; height: 44px; padding: 0 22px; border-radius: var(--r-btn); border: 1px solid transparent; cursor: pointer; transition: all .15s; white-space: nowrap; text-decoration: none; }
.btn-primary { background: var(--gr-btn); color: #fff !important; }
.btn-primary:hover { filter: brightness(1.08); box-shadow: var(--sh-glow); color: #fff !important; }
.btn-secondary { background: var(--bg3); color: var(--txt) !important; border-color: var(--line); }
.btn-secondary:hover { border-color: var(--txt); color: var(--txt) !important; }
.btn-ghost { background: transparent; color: var(--or) !important; border-color: var(--or); }
.btn-ghost:hover { background: rgba(255,122,0,.08); color: var(--or) !important; }
.btn-text { background: transparent; color: var(--txt-m) !important; border-color: transparent; }
.btn-text:hover { color: var(--txt) !important; background: var(--bg3); }
.btn-sm { height: 32px; padding: 0 14px; font-size: 13px; }
.btn-lg { height: 52px; padding: 0 28px; font-size: 16px; }
.btn-icon { width: 40px; padding: 0; justify-content: center; border-color: var(--line); background: var(--bg3); color: var(--txt-m); }
.btn-icon:hover { color: var(--txt); border-color: var(--txt); }
.flex-wrap { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; }

/* Double-dash button classes — espelho do design-system.php */
.btn--primary { background: var(--gr-btn); color: #fff !important; }
.btn--primary:hover { filter: brightness(1.08); box-shadow: var(--sh-glow); color: #fff !important; }
.btn--secondary { background: var(--bg3); color: var(--txt) !important; border-color: var(--line); }
.btn--secondary:hover { border-color: var(--txt); color: var(--txt) !important; }
.btn--ghost { background: transparent; color: var(--or) !important; border-color: var(--or); }
.btn--ghost:hover { background: rgba(255,122,0,.08); color: var(--or) !important; }
.btn--text { background: transparent; color: var(--txt-m) !important; border-color: transparent; }
.btn--text:hover { color: var(--txt) !important; background: var(--bg3); }
.btn--sm { height: 32px; padding: 0 14px; font-size: 13px; }
.btn--lg { height: 52px; padding: 0 28px; font-size: 16px; }
.btn-link-icon { display: inline-flex; align-items: center; gap: 6px; color: var(--or) !important; font-family: var(--fn-d); font-size: 15px; font-weight: 500; text-decoration: none; background: none; border: none; cursor: pointer; padding: 0; transition: color .12s; }
.btn-link-icon:hover { color: var(--or-d) !important; }
.btn-link-icon.sm { font-size: 13px; }

/* Inputs */
.input { height: 44px; padding: 0 14px; border-radius: var(--r-input); border: 1px solid var(--line); background: var(--bg1); color: var(--txt); font-family: var(--fn-b); font-size: 15px; transition: all .15s; outline: 0; width: 100%; }
.input:focus { border-color: var(--or); box-shadow: var(--sh-focus); }
.input::placeholder { color: var(--txt-m); }
.field { display: flex; flex-direction: column; gap: 6px; }
.field label { font-size: 13px; font-weight: 500; color: var(--txt-m); }
.field-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; max-width: 600px; }

/* Tags */
.tag { display: inline-flex; align-items: center; gap: 5px; height: 24px; padding: 0 10px; border-radius: 999px; font-family: var(--fn-b); font-size: 11px; font-weight: 400; text-transform: uppercase; letter-spacing: .06em; }
.tag-n { background: var(--bg3); color: var(--txt-m); border: 1px solid var(--line); }
.tag-o { background: rgba(255,122,0,.14); color: var(--or-l); }
.tag-s { background: rgba(52,199,89,.14); color: #5dde7e; }
.tag-w { background: rgba(242,201,76,.14); color: #f2c94c; }
.tag-d { background: rgba(235,87,87,.14); color: #ff7b7b; }

/* Radius & Elevation */
.grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.radius-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 10px; }
.radius-cell { background: var(--bg2); border: 1px solid var(--line); height: 64px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; font-family: var(--fn-m); font-size: 10px; color: var(--txt-m); }
.radius-cell strong { font-size: 12px; color: var(--txt); }
.elev-list { display: flex; flex-direction: column; gap: 8px; }
.elev-cell { background: var(--bg3); border-radius: var(--r-card); height: 72px; display: flex; align-items: center; justify-content: center; gap: 12px; font-family: var(--fn-m); font-size: 11px; color: var(--txt-m); cursor: pointer; transition: box-shadow .2s ease, transform .2s ease; }
.elev-cell strong { font-size: 12px; color: var(--txt); }

/* Icons */
.icon-demo { display: flex; flex-direction: column; align-items: center; gap: 10px; }
.icon-wrap { width: 72px; height: 72px; display: flex; align-items: center; justify-content: center; border-radius: 16px; }
.icon-wrap.support { background: var(--bg2); border: 1px solid var(--line); }
.icon-label { font-family: var(--fn-m); font-size: 11px; color: var(--txt-m); text-transform: uppercase; letter-spacing: .08em; text-align: center; }
.icon-desc { font-size: 12px; color: var(--txt-m); text-align: center; max-width: 100px; line-height: 1.4; }
.icon-note { background: var(--bg3); border: 1px solid var(--line); border-radius: 16px; padding: 16px 20px; font-size: 14px; color: var(--txt-m); line-height: 1.6; margin-bottom: 20px; }
.icon-note strong { color: var(--txt); }

/* Footer */
.footer { border-top: 1px solid var(--line); padding: 36px 0; }
.footer-inner { max-width: 860px; margin: 0 auto; padding: 0 32px; display: flex; align-items: center; justify-content: space-between; }
.footer-inner p { font-family: var(--fn-m); font-size: 11px; color: var(--txt-m); }

@media(max-width:680px) {
  .logo-grid, .field-grid, .grid-2, .radius-grid { grid-template-columns: 1fr; }
  .type-row { grid-template-columns: 1fr; gap: 8px; }
  .clearspace { flex-direction: column; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav class="nav">
  <div class="nav-inner">
    <div class="nav-logo">
      <img src="../i/logo/logo-revops-branca.svg" alt="Rvops" height="22">
    </div>
    <div class="nav-links">
      <a href="#logo">Logo</a>
      <a href="#cores">Cores</a>
      <a href="#type">Tipografia</a>
      <a href="#comp">Componentes</a>
      <a href="#icons">Ícones</a>
    </div>
    <span class="nav-tag">Brand Guide Rvops</span>
  </div>
</nav>

<!-- HERO -->
<div class="hero">
  <div class="wrap hero-inner">
    <div class="hero-pill"><span class="dot"></span> rvops · brand mandated</div>
    <h1>Brand da Rvops</h1>
    <p>Uma cor de ação (#FF7A00), base neutra escura, branco e cinza como apoio. Poppins no display, DM Sans no corpo.</p>
    <div class="hero-meta">
      <div class="hero-meta-item"><span class="hero-meta-k">Surface</span><span class="hero-meta-v">dark-first</span></div>
      <div class="hero-meta-item"><span class="hero-meta-k">Ação</span><span class="hero-meta-v">#FF7A00</span></div>
      <div class="hero-meta-item"><span class="hero-meta-k">Display</span><span class="hero-meta-v">Poppins 400 (headings)</span></div>
      <div class="hero-meta-item"><span class="hero-meta-k">Body</span><span class="hero-meta-v">DM Sans 400</span></div>
      <div class="hero-meta-item"><span class="hero-meta-k">Mono</span><span class="hero-meta-v">JetBrains Mono</span></div>
      <div class="hero-meta-item"><span class="hero-meta-k">Radius botão</span><span class="hero-meta-v">4 px — sempre</span></div>
    </div>
  </div>
</div>

<!-- LOGO -->
<section class="section" id="logo">
  <div class="wrap">
    <p class="s-label">§ 1</p>
    <h2 class="s-title">Logo & Marca</h2>
    <p style="font-size:14px;color:var(--txt-m);margin-bottom:32px;line-height:1.65">Wordmark <strong style="color:var(--txt)">rvops</strong> em caixa baixa. Quatro variações para cada contexto de superfície — fundo escuro neutro, escuro com cor, fundo claro e laranja da marca.</p>

    <div class="logo-grid">
      <div class="logo-card dn">
        <p class="logo-card-lbl">Fundo escuro neutro</p>
        <img src="../i/logo/logo-revops-branca.svg" alt="Logo branca" style="height:36px">
        <p class="logo-card-fn">Logo_white_color · padrão do site</p>
      </div>
      <div class="logo-card dc">
        <p class="logo-card-lbl">Fundo escuro com cores</p>
        <img src="../i/logo/logo-revops-branca.svg" alt="Logo totalmente branca" style="height:36px;filter:brightness(0) invert(1)">
        <p class="logo-card-fn">Logo_white · foto ou gradiente</p>
      </div>
      <div class="logo-card lb">
        <p class="logo-card-lbl">Fundo claro</p>
        <img src="../i/logo/logo-rvops-branca-footer.svg" alt="Logo preta flat" style="height:36px;filter:brightness(0)">
        <p class="logo-card-fn">Logo_black · fundo branco/cinza</p>
      </div>
      <div class="logo-card bo">
        <p class="logo-card-lbl">Fundo laranja da marca</p>
        <img src="../i/logo/logo-revops-branca.svg" alt="Logo inteira branca" style="height:36px;filter:brightness(0) invert(1)">
        <p class="logo-card-fn">Logo_white · banners / CTAs</p>
      </div>
    </div>

    <p class="sub" style="margin-top:40px;margin-bottom:16px">Clear Space — mínimo = altura da letra "r"</p>
    <div class="clearspace">
      <div class="clearspace-logo">
        <img src="../i/logo/logo-rvops-branca-footer.svg" alt="Logo" style="height:36px;filter:brightness(0)">
      </div>
      <div class="clearspace-info">
        <h4>Margem mínima = altura do "r"</h4>
        <p>Nenhum elemento (texto, ícone, borda) pode invadir a zona de espaço livre. A faixa laranja translúcida marca o limite visual.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORES -->
<section class="section" id="cores">
  <div class="wrap">
    <p class="s-label">§ 2</p>
    <h2 class="s-title">Cores & Tokens</h2>

    <p class="sub">Orange — única cor de ação</p>
    <div class="swatch-row" style="margin-bottom:32px">
      <div class="swatch">
        <div class="chip w80" style="background:#FF7A00"></div>
        <div class="swatch-name">--rv-orange</div>
        <div class="swatch-val">#FF7A00</div>
        <div class="swatch-role">primary action</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#DA6208"></div>
        <div class="swatch-name">--rv-orange-deep</div>
        <div class="swatch-val">#DA6208</div>
        <div class="swatch-role">hover / gradient stop</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#FFB066"></div>
        <div class="swatch-name">--rv-orange-light</div>
        <div class="swatch-val">#FFB066</div>
        <div class="swatch-role">tag text</div>
      </div>
    </div>

    <p class="sub">Backgrounds</p>
    <div class="swatch-row" style="margin-bottom:32px">
      <div class="swatch">
        <div class="chip w80" style="background:#121212"></div>
        <div class="swatch-name">--rv-bg-1</div>
        <div class="swatch-val">#121212</div>
        <div class="swatch-role">canvas</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#1E1E22"></div>
        <div class="swatch-name">--rv-bg-2</div>
        <div class="swatch-val">#1E1E22</div>
        <div class="swatch-role">page default</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#222226"></div>
        <div class="swatch-name">--rv-bg-3</div>
        <div class="swatch-val">#222226</div>
        <div class="swatch-role">card / footer</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#2E2E32"></div>
        <div class="swatch-name">--rv-bg-4</div>
        <div class="swatch-val">#2E2E32</div>
        <div class="swatch-role">hover surface</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#FFFFFF;border-color:#ddd"></div>
        <div class="swatch-name">--rv-bg-light</div>
        <div class="swatch-val">#FFFFFF</div>
        <div class="swatch-role">auth / pricing</div>
      </div>
    </div>

    <p class="sub">Semântica</p>
    <div class="swatch-row" style="margin-bottom:32px">
      <div class="swatch">
        <div class="chip w80" style="background:#34C759"></div>
        <div class="swatch-name">--rv-success</div>
        <div class="swatch-val">#34C759</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#F2C94C"></div>
        <div class="swatch-name">--rv-warning</div>
        <div class="swatch-val">#F2C94C</div>
      </div>
      <div class="swatch">
        <div class="chip w80" style="background:#EB5757"></div>
        <div class="swatch-name">--rv-danger</div>
        <div class="swatch-val">#EB5757</div>
      </div>
    </div>

    <p class="sub">Gray ramp</p>
    <div class="swatch-row" style="margin-bottom:32px">
      <div class="swatch"><div class="chip" style="width:48px;background:#F4F4F5"></div><div class="swatch-val">50</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#E9E9E9"></div><div class="swatch-val">100</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#C9C9CC"></div><div class="swatch-val">200</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#939393"></div><div class="swatch-val">300</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#86868B"></div><div class="swatch-val">400</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#727272"></div><div class="swatch-val">500</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#484747"></div><div class="swatch-val">600</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#2E2E32"></div><div class="swatch-val">700</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#222226"></div><div class="swatch-val">800</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#1E1E22"></div><div class="swatch-val">900</div></div>
      <div class="swatch"><div class="chip" style="width:48px;background:#121212"></div><div class="swatch-val">950</div></div>
    </div>

    <p class="sub">Gradients mandatórios</p>
    <div class="swatch-row">
      <div class="swatch">
        <div class="chip no-border" style="width:160px;background:linear-gradient(to right,#DA6208,#FF7A00,#DA6208)"></div>
        <div class="swatch-name">--rv-grad-button</div>
        <div class="swatch-role">CTA button · único</div>
      </div>
      <div class="swatch">
        <div class="chip no-border" style="width:160px;background:linear-gradient(to right,#484747,#939393,#e9e9e9,#fffbf4,#727272)"></div>
        <div class="swatch-name">--rv-grad-title-multi</div>
        <div class="swatch-role">H1 — hero metálico</div>
      </div>
      <div class="swatch">
        <div class="chip no-border" style="width:160px;background:linear-gradient(to right,#FFFFFF,#998B8B)"></div>
        <div class="swatch-name">--rv-grad-title-mono</div>
        <div class="swatch-role">H2–H4, stats</div>
      </div>
    </div>
  </div>
</section>

<!-- TIPOGRAFIA -->
<section class="section" id="type">
  <div class="wrap">
    <p class="s-label">§ 3</p>
    <h2 class="s-title">Tipografia</h2>
    <p style="font-size:13px;color:var(--txt-m);margin-bottom:28px;line-height:1.6">
      <strong style="color:var(--txt)">Poppins</strong>: display e headings. Peso: <strong style="color:var(--txt)">400 sempre</strong> (500 apenas em eyebrows/labels de UI). <br>
      <strong style="color:var(--txt)">DM Sans</strong>: body, labels, UI (400). <br>
      <strong style="color:var(--txt)">JetBrains Mono</strong>: código, tokens, timestamps.</p>

    <div class="type-table">
      <div class="type-row">
        <div class="type-meta">display / h1<br>64–72px / <strong style="color:var(--txt)">400</strong><br>lh 1.2 · −0.025em<br><span style="color:var(--or);font-size:9px">grad-title-multi</span></div>
        <div class="td" style="font-size:clamp(32px,5vw,54px);font-weight:400;letter-spacing:-.025em;line-height:1.2;background:var(--gr-title-multi);-webkit-background-clip:text;background-clip:text;color:transparent">Receita previsível.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">h2<br>48px / <strong style="color:var(--txt)">400</strong><br>lh 1.2 · −0.02em<br><span style="color:var(--txt-m);font-size:9px">grad-title-mono</span></div>
        <div class="td" style="font-size:32px;font-weight:400;letter-spacing:-.02em;line-height:1.2;background:var(--gr-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent">Quando a receita anda junta.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">h3 / h4<br>24–32px / <strong style="color:var(--txt)">400</strong><br>lh 1.4 · −0.015em<br><span style="color:var(--txt-m);font-size:9px">grad-title-mono</span></div>
        <div class="td" style="font-size:22px;font-weight:400;letter-spacing:-.015em;line-height:1.4;background:var(--gr-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent">Marketing · Vendas · Atendimento</div>
      </div>
      <div class="type-row">
        <div class="type-meta">eyebrow<br>12px / 500<br>+0.18em upper</div>
        <div class="td" style="font-size:12px;font-weight:500;text-transform:uppercase;letter-spacing:.18em;color:var(--or)">Plataforma · Rvops</div>
      </div>
      <div class="type-row">
        <div class="type-meta">body-lg<br>18px / 400<br>lh 1.5 · DM Sans</div>
        <div class="tb" style="font-size:18px;color:var(--txt-m);line-height:1.5">Receita previsível, do primeiro toque ao fechamento. Marketing, vendas e atendimento no mesmo CRM.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">body<br>15–16px / 400<br>lh 1.5 · DM Sans</div>
        <div class="tb" style="font-size:15px;color:var(--txt-m);line-height:1.5">Texto padrão para parágrafos, descrições e conteúdo de UI. DM Sans, legível em qualquer tamanho de tela.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">mono<br>12–13px / 400<br>JetBrains Mono</div>
        <div class="tm" style="font-size:13px;color:var(--txt-m)">--rv-orange: #FF7A00; · v2.3.0 · mai 2026</div>
      </div>
    </div>
  </div>
</section>

<!-- COMPONENTES -->
<section class="section" id="comp">
  <div class="wrap">
    <p class="s-label">§ 4</p>
    <h2 class="s-title">Componentes</h2>

    <!-- Botões -->
    <p class="sub" style="margin-bottom:16px">Botões — border-radius: 4px sempre · font-weight: 500</p>
    <div style="display:flex;flex-direction:column;gap:0;border:1px solid var(--line);border-radius:16px;overflow:hidden;margin-bottom:32px">
      <!-- header -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;padding:10px 20px;background:var(--bg4);border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:var(--txt-m)">Tipo</span>
        <span style="font-family:var(--fn-m);font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:var(--txt-m)">Exemplo</span>
        <span style="font-family:var(--fn-m);font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:var(--txt-m)">Contexto de uso</span>
      </div>
      <!-- primary lg -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--or)">primary · lg</span>
        <div><button class="btn btn--primary btn--lg">Solicitar demo</button></div>
        <span style="font-size:13px;color:var(--txt-m)">CTA principal — hero, seção de destaque</span>
      </div>
      <!-- primary md -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--or)">primary · md</span>
        <div><button class="btn btn--primary">Solicitar demo</button></div>
        <span style="font-size:13px;color:var(--txt-m)">CTA padrão — páginas de produto, CTAs inline</span>
      </div>
      <!-- primary sm nav -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--or)">primary · sm</span>
        <div><button class="btn btn--primary btn--sm" style="text-transform:uppercase;letter-spacing:.08em;font-size:11px">Demonstração</button></div>
        <span style="font-size:13px;color:var(--txt-m)">Nav e headers — sm + uppercase + letter-spacing</span>
      </div>
      <!-- secondary -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--txt-m)">secondary</span>
        <div><button class="btn btn--secondary">Ver preços</button></div>
        <span style="font-size:13px;color:var(--txt-m)">Alternativa ao CTA — CTAs duplos lado a lado</span>
      </div>
      <!-- ghost -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--txt-m)">ghost</span>
        <div><button class="btn btn--ghost">Agendar conversa</button></div>
        <span style="font-size:13px;color:var(--txt-m)">Opção secundária em pricing, banners, hero</span>
      </div>
      <!-- text -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--txt-m)">text</span>
        <div><button class="btn btn--text">Saiba mais</button></div>
        <span style="font-size:13px;color:var(--txt-m)">Ações terciárias — menus, listas, tabelas</span>
      </div>
      <!-- link ícone -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px;border-bottom:1px solid var(--line)">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--txt-m)">link</span>
        <div><a class="btn-link-icon" href="#">Conhecer o módulo <i class="fa-solid fa-angle-right" style="font-size:13px"></i></a></div>
        <span style="font-size:13px;color:var(--txt-m)">Cards, pillars, seções informativas</span>
      </div>
      <!-- link sm -->
      <div style="display:grid;grid-template-columns:120px 1fr 1fr;align-items:center;padding:14px 20px">
        <span style="font-family:var(--fn-m);font-size:11px;color:var(--txt-m)">link · sm</span>
        <div><a class="btn-link-icon sm" href="#">Ver todos os recursos <i class="fa-solid fa-angle-right" style="font-size:11px"></i></a></div>
        <span style="font-size:13px;color:var(--txt-m)">Rodapé de seção, links auxiliares</span>
      </div>
    </div>

    <!-- Inputs -->
    <p class="sub" style="margin-bottom:14px">Inputs — border-radius: 10px</p>
    <div class="field-grid" style="margin-bottom:32px">
      <div class="field">
        <label>Nome completo</label>
        <input class="input" type="text" placeholder="Ex.: Henrique Silva">
      </div>
      <div class="field">
        <label>E-mail</label>
        <input class="input" type="email" placeholder="you@empresa.com">
      </div>
    </div>

    <!-- Tags -->
    <p class="sub" style="margin-bottom:14px">Badges / Tags — pill (999px)</p>
    <div class="flex-wrap" style="margin-bottom:40px">
      <span class="tag tag-n">Neutro</span>
      <span class="tag tag-o">Beta</span>
      <span class="tag tag-s">✓ Ativo</span>
      <span class="tag tag-w">⚠ Pendente</span>
      <span class="tag tag-d">✗ Bloqueado</span>
      <span class="tag tag-n">v2.1.0</span>
    </div>

    <!-- Radius + Elevation -->
    <div class="grid-2" style="gap:40px">
      <div>
        <p class="sub" style="margin-bottom:14px">Border Radius</p>
        <div class="radius-grid">
          <div class="radius-cell" style="border-radius:4px"><strong>4px</strong>button</div>
          <div class="radius-cell" style="border-radius:6px"><strong>6px</strong>sm</div>
          <div class="radius-cell" style="border-radius:10px"><strong>10px</strong>input</div>
          <div class="radius-cell" style="border-radius:16px"><strong>16px</strong>card</div>
          <div class="radius-cell" style="border-radius:24px"><strong>24px</strong>xl</div>
          <div class="radius-cell" style="border-radius:999px"><strong>pill</strong>tags</div>
        </div>
        <p style="font-size:11px;color:var(--txt-m);margin-top:10px">Botão <strong style="color:var(--txt)">sempre 4px</strong>. Nunca pill.</p>
      </div>
      <div>
        <p class="sub" style="margin-bottom:14px">Elevação</p>
        <div class="elev-list">
          <div class="elev-cell" style="box-shadow:0 1px 2px rgba(0,0,0,.30)" onmouseenter="this.style.boxShadow='0 4px 12px rgba(0,0,0,.5)';this.style.transform='translateY(-2px)'" onmouseleave="this.style.boxShadow='0 1px 2px rgba(0,0,0,.30)';this.style.transform=''"><strong>sh-1</strong> hairline</div>
          <div class="elev-cell" style="box-shadow:0 4px 12px rgba(0,0,0,.32)" onmouseenter="this.style.boxShadow='0 8px 24px rgba(0,0,0,.55)';this.style.transform='translateY(-2px)'" onmouseleave="this.style.boxShadow='0 4px 12px rgba(0,0,0,.32)';this.style.transform=''"><strong>sh-2</strong> card hover</div>
          <div class="elev-cell" style="box-shadow:0 12px 32px rgba(0,0,0,.40)" onmouseenter="this.style.boxShadow='0 20px 48px rgba(0,0,0,.65)';this.style.transform='translateY(-3px)'" onmouseleave="this.style.boxShadow='0 12px 32px rgba(0,0,0,.40)';this.style.transform=''"><strong>sh-3</strong> dropdown</div>
          <div class="elev-cell" style="box-shadow:0 8px 32px rgba(255,122,0,.32)" onmouseenter="this.style.boxShadow='0 12px 48px rgba(255,122,0,.55)';this.style.transform='translateY(-3px)'" onmouseleave="this.style.boxShadow='0 8px 32px rgba(255,122,0,.32)';this.style.transform=''"><strong>sh-glow</strong> CTA glow</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ÍCONES -->
<section class="section" id="icons">
  <div class="wrap">
    <p class="s-label">§ 5</p>
    <h2 class="s-title">Iconografia</h2>
    <div class="icon-note">
      O site usa <strong>três famílias de ícone</strong> com contextos distintos. Nunca misturar estilos na mesma seção.
    </div>

    <p class="sub" style="margin-bottom:12px">Tipo 1 · Features — PNG circular sobre fundo escuro</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:28px">
      <div class="icon-demo">
        <div class="icon-wrap" style="background:var(--bg1);border-radius:14px;border:1px solid var(--line)">
          <img src="../i/icons/icone-coex-1.png" alt="Feature" style="width:44px;height:44px;object-fit:contain">
        </div>
        <div class="icon-label">Feature 1</div>
        <div class="icon-desc">PNG circular<br>fundo escuro</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:var(--bg1);border-radius:14px;border:1px solid var(--line)">
          <img src="../i/icons/icone-coex-2.png" alt="Feature" style="width:44px;height:44px;object-fit:contain">
        </div>
        <div class="icon-label">Feature 2</div>
        <div class="icon-desc">Usado em seções<br>de features</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:var(--bg1);border-radius:14px;border:1px solid var(--line)">
          <img src="../i/icons/icone-coex-3.png" alt="Feature" style="width:44px;height:44px;object-fit:contain">
        </div>
        <div class="icon-label">Feature 3</div>
        <div class="icon-desc">35–44px<br>sobre bg-1 ou bg-2</div>
      </div>
    </div>

    <p class="sub" style="margin-bottom:12px">Tipo 2 · Seções informativas — PNG monocromático</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:28px">
      <div class="icon-demo">
        <div class="icon-wrap support">
          <i class="fa-solid fa-headset" style="font-size:26px;color:rgba(255,255,255,.6)" aria-hidden="true"></i>
        </div>
        <div class="icon-label">Produtos</div>
        <div class="icon-desc">PNG simples<br>seções informativas</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap support">
          <i class="fa-regular fa-copy" style="font-size:26px;color:rgba(255,255,255,.6)" aria-hidden="true"></i>
        </div>
        <div class="icon-label">Recursos</div>
        <div class="icon-desc">Sem cor de brand<br>traço leve</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap support">
          <i class="fa-solid fa-arrow-pointer" style="font-size:26px;color:rgba(255,255,255,.6)" aria-hidden="true"></i>
        </div>
        <div class="icon-label">Suporte</div>
        <div class="icon-desc">Monochrome<br>menu / helpers</div>
      </div>
    </div>

    <p class="sub" style="margin-bottom:12px">Tipo 3 · Produtos — PNG rainbow sobre fundo preto</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap">
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px">
          <img src="../i/icons/icon-conversacional.png" alt="Conversacional" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">Conversacional</div>
        <div class="icon-desc">Rainbow gradient<br>sobre fundo preto</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px">
          <img src="../i/icons/icon-marketing.png" alt="Marketing" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">Marketing</div>
        <div class="icon-desc">PNG 48–64px<br>nav + pilares</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px">
          <img src="../i/icons/icon-sales.png" alt="Vendas" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">Vendas</div>
        <div class="icon-desc">Restrito ao nav<br>e pilares de produto</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px">
          <img src="../i/icons/icone-crm.png" alt="CRM" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">CRM</div>
        <div class="icon-desc">Mesmo estilo<br>em todos os produtos</div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-inner">
    <img src="../i/logo/logo-revops-branca.svg" alt="Rvops" style="height:20px;opacity:.4">
    <p>Brand Guide · v2.3 · mai 2026</p>
  </div>
</footer>

</body>
</html>
