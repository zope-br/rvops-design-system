<!doctype html>
<html lang="pt-BR" data-theme="dark">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rvops — Design System</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Head (Bootstrap/css-rvops before DS styles) -->
  <?php include_once('../parts/head.php'); ?>
  <!-- Códigos Head -->
  <?php include_once('../parts/codes.php'); ?>
<style>
:root{
  --rv-orange:#FF7A00; --rv-orange-deep:#DA6208; --rv-orange-light:#FFB066;
  --rv-grad-button:linear-gradient(to right,#DA6208,#FF7A00,#DA6208);
  --rv-grad-icon:linear-gradient(135deg,#DA6208 0%,#FF7A00 50%,#FFB066 100%);
  --rv-grad-title-mono:linear-gradient(to right,#FFFFFF,#998B8B);
  --rv-grad-title-multi:linear-gradient(to right,#484747,#939393,#e9e9e9,#fffbf4,#727272);
  --rv-grad-brand:conic-gradient(from 90deg at 50% 50%,#F2C94C 0deg,#76C04E 60deg,#2D9CDB 120deg,#6E5BD3 180deg,#C84CA0 240deg,#EB5757 300deg,#F2994A 340deg,#F2C94C 360deg);
  --rv-grad-brand-linear:linear-gradient(90deg,#F2994A,#F2C94C,#76C04E,#2D9CDB,#6E5BD3,#C84CA0,#EB5757);
  --rv-bg-1:#121212; --rv-bg-2:#1E1E22; --rv-bg-3:#222226; --rv-bg-4:#2E2E32;
  --rv-bg-light:#FFFFFF; --rv-bg-light-soft:#F4F4F5;
  --rv-text-on-dark:#86868B; --rv-text-on-dark-strong:#FFFFFF; --rv-text-on-light:#000000;
  --rv-gray-50:#F4F4F5; --rv-gray-100:#E9E9E9; --rv-gray-200:#C9C9CC;
  --rv-gray-300:#939393; --rv-gray-400:#86868B; --rv-gray-500:#727272;
  --rv-gray-600:#484747; --rv-gray-700:#2E2E32; --rv-gray-800:#222226;
  --rv-gray-900:#1E1E22; --rv-gray-950:#121212;
  --rv-line-dark:#2E2E32; --rv-line-light:#E9E9E9;
  --rv-success:#34C759; --rv-warning:#F2C94C; --rv-danger:#EB5757;
  --rv-font-display:"Poppins",system-ui,sans-serif;
  --rv-font-body:"DM Sans",system-ui,sans-serif;
  --rv-font-mono:"JetBrains Mono",monospace;
  --rv-r-button:4px; --rv-r-xs:4px; --rv-r-sm:6px; --rv-r-md:10px;
  --rv-r-lg:16px; --rv-r-xl:24px; --rv-r-pill:999px;
  --rv-sh-1:0 1px 2px rgba(0,0,0,.30);
  --rv-sh-2:0 4px 12px rgba(0,0,0,.32);
  --rv-sh-3:0 12px 32px rgba(0,0,0,.40);
  --rv-sh-glow:0 8px 32px rgba(255,122,0,.32);
  --rv-sh-focus:0 0 0 3px rgba(255,122,0,.40);
  --rv-ease:cubic-bezier(.2,.7,.1,1);
  --rv-dur-1:120ms; --rv-dur-2:200ms; --rv-dur-3:320ms;
  --rv-page-bg:var(--rv-bg-1); --rv-surface:var(--rv-bg-2);
  --rv-surface-raised:var(--rv-bg-3); --rv-text:var(--rv-text-on-dark-strong);
  --rv-text-muted:var(--rv-text-on-dark); --rv-line:var(--rv-line-dark);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{font-size:16px;scroll-behavior:smooth;background:#121212}
body{font-family:var(--rv-font-body);color:var(--rv-text-on-dark-strong);background:#121212;line-height:1.5;-webkit-font-smoothing:antialiased}
a{text-decoration:none;color:inherit}
img{max-width:100%;display:block}
h1,h2{font-family:var(--rv-font-display);font-weight:400;letter-spacing:-0.02em;line-height:1.2}
h3,h4{font-family:var(--rv-font-display);font-weight:400;letter-spacing:-0.015em;line-height:1.4}
h5,h6{font-family:var(--rv-font-display);font-weight:400;letter-spacing:-0.01em;line-height:1.5}
p{line-height:1.5}
a,span,strong{line-height:1.5}
code,pre{font-family:var(--rv-font-mono)}
.container{max-width:1200px;margin:0 auto;padding:0 32px}


/* ---- DS NAV (internal section nav) ---- */
/* Rvops nav: sticky via CSS (sticky-headings.js não carregado nesta página) */
.header_3.sticky_index{position:sticky;top:0;z-index:200;background:rgba(18,18,18,.96);backdrop-filter:saturate(140%) blur(12px)}
.ds-nav-bar{position:sticky;top:45px;z-index:100;background:color-mix(in srgb,var(--rv-page-bg) 92%,transparent);backdrop-filter:blur(8px);border-bottom:1px solid var(--rv-line)}
.ds-nav-bar-inner{display:flex;align-items:center;justify-content:space-between;height:52px;max-width:1200px;margin:0 auto;padding:0 32px}
.ds-nav-bar-links{display:flex;gap:2px}
.ds-nav-bar-links a{font-size:12px;font-weight:500;color:var(--rv-text-muted);padding:5px 10px;border-radius:var(--rv-r-xs);transition:all var(--rv-dur-1)}
.ds-nav-bar-links a:hover,.ds-nav-bar-links a.active{color:var(--rv-orange);background:rgba(255,122,0,.08)}
.ds-nav-bar-actions{display:flex;align-items:center;gap:8px}
.ds-version{font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)}

/* ---- HERO ---- */
.ds-hero{background:var(--rv-bg-1);padding:80px 0 72px;position:relative;overflow:hidden}
.ds-hero::after{content:"";position:absolute;right:-200px;top:-200px;width:700px;height:700px;background:radial-gradient(circle,rgba(255,122,0,.18),transparent 60%);pointer-events:none}
.ds-hero-inner{position:relative;z-index:1}
.hero-eyebrow{display:inline-flex;align-items:center;gap:8px;font-family:var(--rv-font-mono);font-size:11px;font-weight:500;text-transform:uppercase;letter-spacing:.1em;color:var(--rv-text-muted);border:1px solid var(--rv-line-dark);border-radius:999px;padding:5px 12px;background:var(--rv-bg-3);margin-bottom:24px}
.hero-eyebrow .dot{width:6px;height:6px;border-radius:50%;background:var(--rv-success)}
.ds-hero h1{font-size:clamp(36px,5vw,64px);font-weight:400;line-height:1.3;letter-spacing:-0.025em;max-width:820px;margin-bottom:18px;background:var(--rv-grad-title-multi);-webkit-background-clip:text;background-clip:text;color:transparent}
[data-theme="light"] .ds-hero h1{background:linear-gradient(to right,#000,#555);-webkit-background-clip:text;background-clip:text;color:transparent}
.ds-hero p{font-size:18px;color:var(--rv-text-muted);max-width:600px;margin-bottom:36px;line-height:1.65}
.hero-cta{display:flex;gap:12px;flex-wrap:wrap;align-items:center;margin-bottom:48px}
.hero-meta{display:flex;flex-wrap:wrap;gap:24px 40px;padding-top:32px;border-top:1px solid var(--rv-line)}
.hero-meta-item{display:flex;flex-direction:column;gap:3px}
.hero-meta-key{font-family:var(--rv-font-mono);font-size:10px;text-transform:uppercase;letter-spacing:.08em;color:var(--rv-text-muted)}
.hero-meta-val{font-family:var(--rv-font-mono);font-size:13px;font-weight:500;color:var(--rv-text)}

/* command */
.command{display:inline-flex;align-items:center;gap:10px;background:var(--rv-bg-3);border:1px solid var(--rv-line-dark);border-radius:var(--rv-r-md);padding:10px 14px;font-family:var(--rv-font-mono);font-size:13px;color:#e8e8ec;cursor:pointer;transition:border-color var(--rv-dur-1)}
.command:hover{border-color:rgba(255,122,0,.4)}
.command .prompt{color:var(--rv-orange);font-weight:600;user-select:none}
.command.copied .copy-lbl::before{content:"✓ ";color:var(--rv-success)}

/* ---- SECTIONS ---- */
.ds-section{border-top:1px solid var(--rv-line);padding:72px 0}
.ds-section-label{font-family:var(--rv-font-mono);font-size:10px;text-transform:uppercase;letter-spacing:.14em;color:var(--rv-orange);margin-bottom:6px}
.ds-section-title{font-size:24px;font-weight:400;color:var(--rv-text);margin-bottom:40px;letter-spacing:-0.02em;display:flex;align-items:center;gap:12px}
.ds-section-title::before{content:"";width:6px;height:6px;border-radius:50%;background:var(--rv-orange);flex-shrink:0}
.grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:12px}
.flex-wrap{display:flex;flex-wrap:wrap;gap:12px;align-items:flex-start}
@media(max-width:900px){.grid-2,.grid-3,.grid-4{grid-template-columns:1fr}}

/* ---- BASE COMPONENTS ---- */
.btn{display:inline-flex;align-items:center;gap:8px;font-family:var(--rv-font-body);font-weight:500;font-size:15px;height:44px;padding:0 22px;border-radius:var(--rv-r-button);border:1px solid transparent;cursor:pointer;transition:all var(--rv-dur-1) var(--rv-ease);white-space:nowrap;text-decoration:none}
.btn--primary{background:var(--rv-grad-button);color:#fff!important}
.btn--primary:hover{filter:brightness(1.08);box-shadow:var(--rv-sh-glow);color:#fff!important}
.btn--secondary{background:var(--rv-surface-raised);color:var(--rv-text)!important;border-color:var(--rv-line)}
.btn--secondary:hover{border-color:var(--rv-text);color:var(--rv-text)!important}
.btn--ghost{background:transparent;color:var(--rv-orange)!important;border-color:var(--rv-orange)}
.btn--ghost:hover{background:rgba(255,122,0,.08);color:var(--rv-orange)!important}
.btn--text{background:transparent;color:var(--rv-text-muted)!important;border-color:transparent}
.btn--text:hover{color:var(--rv-text)!important;background:var(--rv-surface-raised)}
.btn-link-icon{display:inline-flex;align-items:center;gap:6px;color:var(--rv-orange)!important;font-family:var(--rv-font-display);font-size:15px;font-weight:500;text-decoration:none;background:none;border:none;cursor:pointer;padding:0;transition:color var(--rv-dur-1)}
.btn-link-icon:hover{color:var(--rv-orange-deep)!important}
.btn-link-icon.sm{font-size:13px}
.btn--sm{height:32px;padding:0 14px;font-size:13px}
.btn--lg{height:52px;padding:0 28px;font-size:16px}
.btn--icon{width:40px;padding:0;justify-content:center;border:1px solid var(--rv-line);background:var(--rv-surface-raised);color:var(--rv-text-muted)}
.btn--icon:hover{color:var(--rv-text);border-color:var(--rv-text)}
.input{height:44px;padding:0 14px;border-radius:var(--rv-r-md);border:1px solid var(--rv-line);background:var(--rv-page-bg);color:var(--rv-text);font-family:var(--rv-font-body);font-size:15px;transition:all var(--rv-dur-1);outline:0;width:100%}
.input:focus{border-color:var(--rv-orange);box-shadow:var(--rv-sh-focus)}
.input::placeholder{color:var(--rv-text-muted)}
.field{display:flex;flex-direction:column;gap:6px}
.field label{font-size:13px;font-weight:500;color:var(--rv-text-muted)}
.tag{max-width: fit-content; display:inline-flex;align-items:center;gap:6px;height:24px;padding:0 10px;border-radius:var(--rv-r-pill);font-family:var(--rv-font-body);font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.06em}
.tag--neutral{background:var(--rv-surface);color:var(--rv-text-muted);border:1px solid var(--rv-line)}
.tag--orange{background:rgba(255,122,0,.14);color:var(--rv-orange-light)}
.tag--success{background:rgba(52,199,89,.14);color:#5dde7e}
.tag--warning{background:rgba(242,201,76,.14);color:#f2c94c}
.tag--danger{background:rgba(235,87,87,.14);color:#ff7b7b}
[data-theme="light"] .tag--orange{color:var(--rv-orange-deep)}
[data-theme="light"] .tag--success{color:#0d8a3a;background:rgba(52,199,89,.12)}
[data-theme="light"] .tag--warning{color:#8a6a00}
[data-theme="light"] .tag--danger{color:#a82020;background:rgba(235,87,87,.10)}
.card{display:block;background:var(--rv-surface-raised);border:1px solid var(--rv-line);border-radius:var(--rv-r-lg);padding:28px;transition:transform 280ms var(--rv-ease),box-shadow 280ms var(--rv-ease),border-color 280ms var(--rv-ease)}
.card:hover{transform:translateY(-4px);box-shadow:var(--rv-sh-3),0 0 0 1px rgba(255,122,0,.2);border-color:rgba(255,122,0,.4)}
.card-label{font-family:var(--rv-font-mono);font-size:10px;font-weight:500;text-transform:uppercase;letter-spacing:.08em;color:var(--rv-text-muted);margin-bottom:16px}

/* ---- COLORS ---- */
.swatch-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(88px,1fr));gap:12px}
.swatch{display:flex;flex-direction:column;gap:8px}
.swatch-chip{height:56px;border-radius:var(--rv-r-md);border:1px solid var(--rv-line);position:relative;cursor:pointer;transition:transform var(--rv-dur-1)}
.swatch-chip:hover{transform:scale(1.04)}
.swatch-chip.brand-grad{background:var(--rv-grad-brand);border:0}
.swatch-chip.orange-grad{background:var(--rv-grad-button);border:0}
.swatch-chip.title-grad{background:var(--rv-grad-title-multi);border:0}
.swatch-name{font-family:var(--rv-font-mono);font-size:11px;font-weight:500;color:var(--rv-text)}
.swatch-val{font-family:var(--rv-font-mono);font-size:10px;color:var(--rv-text-muted)}
.swatch-role{font-size:10px;color:var(--rv-orange)}

/* ---- TYPOGRAPHY ---- */
.type-specimen{display:flex;flex-direction:column}
.type-row{display:grid;grid-template-columns:160px 1fr;gap:20px;align-items:baseline;padding:20px 0;border-bottom:1px solid var(--rv-line)}
.type-row:last-child{border-bottom:0}
.type-meta{font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.08em;line-height:1.6}
.type-sample{font-family:var(--rv-font-display);font-weight:500;letter-spacing:-0.02em;color:var(--rv-text)}
.type-sample.body-font{font-family:var(--rv-font-body);font-weight:400;letter-spacing:0}
.type-sample.mono-font{font-family:var(--rv-font-mono);font-weight:400;letter-spacing:0}

/* ---- SPACING ---- */
.scale{display:flex;flex-direction:column;gap:8px}
.scale-row{display:flex;align-items:center;gap:12px;font-family:var(--rv-font-mono);font-size:12px}
.scale-key{width:80px;color:var(--rv-text-muted)}
.scale-bar{height:12px;background:var(--rv-orange);border-radius:2px}
.scale-val{color:var(--rv-text)}
.radii{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
.radius-cell{background:var(--rv-surface);border:1px solid var(--rv-line);height:72px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px;font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)}
.radius-cell strong{font-size:13px;color:var(--rv-text)}
.elev-cell{background:var(--rv-surface-raised);border-radius:var(--rv-r-lg);height:80px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px;font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);cursor:pointer;transition:box-shadow var(--rv-dur-2),transform var(--rv-dur-2)}
.elev-cell strong{font-size:12px;color:var(--rv-text)}

/* ---- LOGO SECTION ---- */
.logo-var-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
.logo-var-card{border-radius:var(--rv-r-xl);padding:40px;position:relative;overflow:hidden}
.logo-var-card.dark-neutral{background:#181818;border:1px solid #2E2E2E}
.logo-var-card.dark-colored{background:linear-gradient(135deg,#1a1060 0%,#0a1a3a 60%,#0d2a1a 100%);border:0}
.logo-var-card.light-bg{background:#FFFFFF;border:1px solid #E9E9E9}
.logo-var-card.brand-orange{background:var(--rv-orange);border:0}
.logo-var-label{font-family:var(--rv-font-mono);font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:.12em;color:var(--rv-orange);margin-bottom:20px}
.logo-var-card.dark-colored .logo-var-label,.logo-var-card.dark-neutral .logo-var-label{color:var(--rv-orange)}
.logo-var-card.light-bg .logo-var-label{color:var(--rv-orange-deep)}
.logo-var-card.brand-orange .logo-var-label{color:#fff}
.logo-var-filename{font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);margin-top:12px}
.logo-var-card.dark-colored .logo-var-filename,.logo-var-card.dark-neutral .logo-var-filename{color:rgba(255,255,255,.4)}
.logo-var-card.brand-orange .logo-var-filename{color:rgba(255,255,255,.55)}
.logo-var-desc{font-size:13px;color:var(--rv-text-muted);margin-top:12px;line-height:1.55}
.logo-var-card.dark-colored .logo-var-desc,.logo-var-card.dark-neutral .logo-var-desc{color:rgba(255,255,255,.5)}
.logo-var-card.light-bg .logo-var-desc{color:var(--rv-gray-500)}
.logo-var-card.brand-orange .logo-var-desc{color:rgba(255,255,255,.85)}
/* SVG wordmark rvops */
.rv-wm{display:block}
/* Clear space demo */
.clearspace-wrap{background:#fff;border:1px solid var(--rv-line-light);border-radius:var(--rv-r-lg);padding:40px;display:flex;align-items:center;gap:40px;margin-bottom:32px}
.clearspace-logo-wrap{position:relative;display:inline-block}
.clearspace-zone{position:absolute;top:0;right:0;bottom:0;left:0;outline:8px solid rgba(255,122,0,.18);border-radius:2px;pointer-events:none}
.clearspace-info{flex:1}
.clearspace-info h4{font-size:16px;font-weight:600;color:var(--rv-text-on-light);margin-bottom:8px}
.clearspace-info p{font-size:14px;color:var(--rv-gray-500);line-height:1.6}
/* App icon previews */
.app-icon-grid{display:flex;gap:20px;flex-wrap:wrap}
.app-icon{width:100px;height:100px;border-radius:22px;display:flex;align-items:center;justify-content:center;overflow:hidden}
.app-icon.dark-bg{background:#000}
.app-icon.light-bg{background:#fff;box-shadow:0 2px 12px rgba(0,0,0,.12)}
.app-icon-ring{width:64px;height:64px;border-radius:50%;background:var(--rv-grad-brand);display:flex;align-items:center;justify-content:center}
.app-icon-ring-inner{width:40px;height:40px;border-radius:50%}

/* ---- ICONOGRAPHY ---- */
.icon-row{display:flex;gap:32px;flex-wrap:wrap}
.icon-demo{display:flex;flex-direction:column;align-items:center;gap:10px}
.icon-wrap{width:64px;height:64px;display:flex;align-items:center;justify-content:center;border-radius:16px}
.icon-wrap.support{background:var(--rv-surface);border:1px solid var(--rv-line)}
.icon-label{font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.08em;text-align:center}
.icon-desc{font-size:12px;color:var(--rv-text-muted);text-align:center;max-width:120px;line-height:1.4}
.icon-style-note{background:var(--rv-surface-raised);border:1px solid var(--rv-line);border-radius:var(--rv-r-lg);padding:20px 24px;font-size:14px;color:var(--rv-text-muted);line-height:1.6;margin-top:24px}
.icon-style-note strong{color:var(--rv-text)}

/* ---- MARKETING COMPONENTS ---- */
.mktg-nav-preview{display:flex;align-items:center;gap:28px;padding:16px 24px;background:rgba(18,18,18,.92);backdrop-filter:blur(12px);border:1px solid var(--rv-line-dark);border-radius:var(--rv-r-xl)}
.mktg-nav-preview .logo-text{font-family:var(--rv-font-display);font-weight:700;font-size:17px;color:#fff}
.mktg-nav-preview ul{list-style:none;display:flex;gap:22px;flex:1}
.mktg-nav-preview ul a{color:var(--rv-text-on-dark-strong);font-family:var(--rv-font-display);font-size:14px;font-weight:500}
.mktg-nav-preview ul a:hover{color:var(--rv-orange)}
.mktg-nav-preview .spacer{flex:1}
.hero-preview{background:var(--rv-bg-1);border:1px solid var(--rv-line-dark);border-radius:var(--rv-r-xl);padding:48px;position:relative;overflow:hidden;margin-bottom:32px}
.hero-preview::after{content:"";position:absolute;right:-100px;top:-100px;width:400px;height:400px;background:radial-gradient(circle,rgba(255,122,0,.18),transparent 60%);pointer-events:none}
.hero-preview .ey{font-family:var(--rv-font-display);font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.18em;color:var(--rv-orange);margin-bottom:14px}
.hero-preview h2{font-family:var(--rv-font-display);font-size:40px;font-weight:400;line-height:1.08;letter-spacing:-0.025em;margin-bottom:16px;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent;max-width:640px}
.hero-preview p{font-size:17px;color:var(--rv-text-on-dark);max-width:480px;margin-bottom:28px;line-height:1.6}
.hero-preview .cta-pair{display:flex;gap:12px;align-items:center;margin-bottom:24px}
.hero-preview .trust{font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-gray-400)}
/* Feature pillar */
.pillar{background:var(--rv-bg-3);border:1px solid var(--rv-line-dark);border-radius:20px;padding:28px;display:flex;flex-direction:column;gap:14px;transition:all var(--rv-dur-2) var(--rv-ease)}
.pillar:hover{border-color:rgba(255,122,0,.4);box-shadow:var(--rv-sh-3);transform:translateY(-2px)}
.pillar .ic{width:56px;height:56px;border-radius:14px;background:#000;display:flex;align-items:center;justify-content:center}
.pillar .ic img{width:44px;height:44px;object-fit:contain}
.pillar h4{font-family:var(--rv-font-display);font-size:19px;font-weight:400;letter-spacing:-0.01em;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent}
.pillar p{color:var(--rv-text-on-dark);font-size:14px;line-height:1.6}
.pillar .lk{color:var(--rv-orange);font-size:13px;font-weight:600;font-family:var(--rv-font-display);margin-top:auto}
/* Logo carousel strip */
.client-section{background:var(--rv-bg-2);border-radius:var(--rv-r-lg);padding:36px 28px}
.client-tabs{display:flex;gap:8px;margin-bottom:28px}
.client-tab{font-family:var(--rv-font-body);font-size:13px;font-weight:500;padding:7px 16px;border-radius:var(--rv-r-md);background:transparent;border:1px solid var(--rv-line-dark);color:var(--rv-text-muted);cursor:pointer;transition:all var(--rv-dur-1)}
.client-tab.active{background:var(--rv-bg-3);color:var(--rv-text-on-dark-strong);border-color:rgba(255,122,0,.3)}
.client-carousel{overflow:hidden;position:relative}
.client-carousel-track{display:flex;gap:16px;animation:logoScroll 22s linear infinite}
.client-carousel-track:hover{animation-play-state:paused}
.logo-pill{height:52px;min-width:120px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.logo-pill img{height:26px;width:auto;object-fit:contain;opacity:.7;filter:grayscale(100%) brightness(1.4);transition:all var(--rv-dur-2)}
.logo-pill img:hover{opacity:1;filter:none}
.client-grid-panel{display:none;grid-template-columns:repeat(7,1fr);gap:10px}
.client-grid-panel.active{display:grid}
.logo-pill-grid{height:52px;display:flex;align-items:center;justify-content:center;}
.logo-pill-grid img{height:22px;width:auto;object-fit:contain;opacity:.6;filter:grayscale(100%) brightness(1.4);transition:all var(--rv-dur-2)}
.logo-pill-grid img:hover{opacity:1;filter:none}
@keyframes logoScroll{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
/* Stat card */
.stat-card{background:var(--rv-bg-3);border:1px solid var(--rv-line-dark);border-radius:20px;padding:32px}
.stat-card .stat{font-family:var(--rv-font-display);font-size:64px;font-weight:400;line-height:1;letter-spacing:-0.03em;margin-bottom:10px;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent}
.stat-card h4{font-family:var(--rv-font-display);font-size:19px;font-weight:400;margin-bottom:8px;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent}
.stat-card p{color:var(--rv-text-on-dark);font-size:14px;line-height:1.6}
/* Pricing */
.price-card{background:var(--rv-bg-3);border:1px solid var(--rv-line-dark);border-radius:20px;padding:28px;display:flex;flex-direction:column;gap:14px;position:relative}
.price-card.popular{border-color:var(--rv-orange);box-shadow:var(--rv-sh-glow)}
.price-card .popular-pill{position:absolute;top:-12px;left:24px;background:var(--rv-grad-button);color:#fff;padding:4px 12px;border-radius:999px;font-family:var(--rv-font-display);font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:.06em}
.price-card h4{font-family:var(--rv-font-display);font-size:20px;font-weight:400;color:#fff}
.price-card .amount{font-family:var(--rv-font-display);font-size:40px;font-weight:400;color:#fff;line-height:1;letter-spacing:-0.02em}
.price-card .amount small{font-family:var(--rv-font-body);font-size:14px;color:var(--rv-text-on-dark);font-weight:400}
.price-card ul{list-style:none;display:flex;flex-direction:column;gap:8px}
.price-card li{font-size:13px;color:#fff;padding-left:22px;position:relative}
.price-card li::before{content:'';position:absolute;left:0;top:6px;width:12px;height:7px;border-left:2px solid var(--rv-orange);border-bottom:2px solid var(--rv-orange);transform:rotate(-45deg)}
.price-card .desc{font-size:13px;color:var(--rv-text-on-dark)}
/* Testimonial */
.testi-card{background:var(--rv-bg-3);border:1px solid var(--rv-line-dark);border-radius:24px;padding:40px;display:grid;grid-template-columns:1fr 200px;gap:32px;align-items:center}
.testi-quote{font-family:var(--rv-font-display);font-size:22px;line-height:1.4;font-weight:400;color:#fff;margin-bottom:20px;letter-spacing:-0.01em}
.testi-author{display:flex;gap:12px;align-items:center}
.testi-avatar{width:44px;height:44px;border-radius:999px;background:var(--rv-grad-icon);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:600;font-family:var(--rv-font-display);font-size:15px}
.testi-name{font-weight:400;color:#fff;font-family:var(--rv-font-display);font-size:14px}
.testi-role{font-size:12px;color:var(--rv-gray-400)}
.testi-stat{background:var(--rv-bg-1);border:1px solid var(--rv-line-dark);border-radius:16px;padding:24px;text-align:center}
.testi-stat .num{font-family:var(--rv-font-display);font-size:48px;font-weight:400;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent;letter-spacing:-0.02em;line-height:1}
.testi-stat .lbl{font-size:12px;color:var(--rv-text-on-dark);margin-top:8px;line-height:1.4}
/* CTA banner */
.cta-banner{background:var(--rv-bg-1);border:1px solid var(--rv-line-dark);border-radius:var(--rv-r-xl);padding:64px;text-align:center;position:relative;overflow:hidden}
.cta-banner::after{content:"";position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:600px;height:600px;background:radial-gradient(circle,rgba(255,122,0,.12),transparent 60%);pointer-events:none}
.cta-banner h2{font-family:var(--rv-font-display);font-size:34px;font-weight:400;margin-bottom:12px;letter-spacing:-0.02em;position:relative;z-index:1;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent}
.cta-banner p{font-size:16px;color:var(--rv-text-on-dark);margin-bottom:28px;position:relative;z-index:1}
.cta-banner .btns{display:flex;gap:12px;justify-content:center;position:relative;z-index:1;flex-wrap:wrap}
/* Footer */
.site-footer{background:var(--rv-bg-3);border-top:1px solid var(--rv-line-dark);padding:56px 0 32px}
.footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:40px;margin-bottom:48px}
.footer-brand p{font-size:14px;color:var(--rv-text-on-dark);line-height:1.65;margin-top:16px;max-width:260px}
.footer-brand .wordmark{font-family:var(--rv-font-display);font-size:22px;font-weight:700;color:#fff}
.site-footer h5{font-family:var(--rv-font-display);font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:#fff;margin-bottom:14px}
.site-footer ul{list-style:none;display:flex;flex-direction:column;gap:10px}
.site-footer ul a{font-size:14px;color:rgba(255,255,255,.55);transition:color var(--rv-dur-1)}
.site-footer ul a:hover{color:#fff}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;padding-top:24px;border-top:1px solid rgba(255,255,255,.08);font-size:12px;color:rgba(255,255,255,.35);font-family:var(--rv-font-mono);flex-wrap:wrap;gap:8px}
.footer-logo img{height:22px;opacity:.7;display:block}
/* Do/Don't */
.dd-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.dd-box{border-radius:var(--rv-r-lg);padding:24px}
.dd-box.do{background:rgba(52,199,89,.06);border:1px solid rgba(52,199,89,.2)}
.dd-box.dont{background:rgba(235,87,87,.06);border:1px solid rgba(235,87,87,.2)}
.dd-head{font-family:var(--rv-font-display);font-size:14px;font-weight:600;margin-bottom:14px;display:flex;align-items:center;gap:8px}
.dd-box.do .dd-head{color:#5dde7e}
.dd-box.dont .dd-head{color:#ff7b7b}
.dd-list{display:flex;flex-direction:column;gap:8px}
.dd-item{font-size:14px;color:var(--rv-text-muted);display:flex;align-items:flex-start;gap:8px;line-height:1.5}
.dd-box.do .dd-item::before{content:"✓";color:#5dde7e;flex-shrink:0}
.dd-box.dont .dd-item::before{content:"✗";color:#ff7b7b;flex-shrink:0}
/* Toast */
.toast{position:fixed;bottom:24px;left:50%;transform:translateX(-50%) translateY(12px);background:var(--rv-bg-3);border:1px solid var(--rv-line-dark);color:var(--rv-text);font-family:var(--rv-font-mono);font-size:12px;padding:10px 18px;border-radius:var(--rv-r-pill);box-shadow:var(--rv-sh-3);opacity:0;transition:all var(--rv-dur-2) var(--rv-ease);pointer-events:none;z-index:9999;display:flex;align-items:center;gap:8px}
.toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
.toast-dot{width:6px;height:6px;border-radius:50%;background:var(--rv-success)}

  /* ——— Breadcrumb ——— */
  .breadcrumb{display:flex;align-items:center;gap:6px;font-size:13px;color:var(--rv-text-muted);padding:0!important;margin:0!important;list-style:none;background:transparent!important;border-radius:0!important}
  .breadcrumb a{color:var(--rv-text);text-decoration:none;transition:color var(--rv-dur-1)}
  .breadcrumb a:hover{color:var(--rv-orange)}
  .breadcrumb .sep{opacity:.4}
  .breadcrumb .current{color:var(--rv-text);font-weight:500}
  /* ——— Accordeon Produtos ——— */
  .acc-prod{display:flex;flex-direction:column;gap:6px}
  .acc-prod-trigger{display:flex;align-items:center;gap:12px;padding:16px 20px;background:var(--rv-bg-3);border:1px solid var(--rv-line);border-radius:var(--rv-r-md);font-family:var(--rv-font-display);font-size:14px;font-weight:400;color:var(--rv-text);cursor:pointer;transition:background 350ms var(--rv-ease),border-color 350ms var(--rv-ease);user-select:none;border:none;text-align:left;width:100%}
  .acc-prod-trigger:hover{background:var(--rv-bg-4);border-color:rgba(255,122,0,.3)}
  .acc-prod-trigger.is-open{background:var(--rv-bg-3);border-color:rgba(255,122,0,.3)}
  .acc-prod-arrow{font-size:13px;color:var(--rv-orange);transition:transform 350ms var(--rv-ease);display:inline-block;flex-shrink:0;width:16px}
  .acc-prod-trigger.is-open .acc-prod-arrow{transform:rotate(90deg)}
  .acc-prod-panel{padding:0 20px 0 44px;font-size:14px;color:var(--rv-text-muted);line-height:1.7;max-height:0;overflow:hidden;transition:max-height 350ms var(--rv-ease),padding 350ms var(--rv-ease)}
  .acc-prod-panel.is-open{max-height:240px;padding:14px 20px 18px 44px}
  /* ——— Accordeon Demo ——— */
  .acc-demo-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px}
  .acc-demo-head span{font-family:var(--rv-font-display);font-size:16px;font-weight:400;color:var(--rv-text)}
  .acc-demo{border:1px solid var(--rv-line);border-radius:var(--rv-r-lg);overflow:hidden}
  .acc-demo-item{border-bottom:1px solid var(--rv-line)}
  .acc-demo-item:last-child{border-bottom:none}
  .acc-demo-btn{width:100%;background:none;border:none;padding:16px 20px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;color:var(--rv-text);font-family:var(--rv-font-display);font-size:14px;font-weight:400;text-align:left;transition:background var(--rv-dur-1)}
  .acc-demo-btn::after{content:'+';font-size:18px;color:var(--rv-text-muted);flex-shrink:0;transition:transform 350ms var(--rv-ease),color var(--rv-dur-1)}
  .acc-demo-btn:hover{background:var(--rv-surface-raised)}
  .acc-demo-btn.open::after{transform:rotate(45deg);color:var(--rv-orange)}
  .acc-demo-panel{max-height:0;overflow:hidden;font-size:14px;color:var(--rv-text-muted);line-height:1.7;transition:max-height 350ms var(--rv-ease)}
  .acc-demo-panel.open{max-height:120px}
  .acc-demo-panel p{padding:0 20px 16px}
  /* ——— Tabs lateral ——— */
  .tabs-lat-wrap{display:grid;grid-template-columns:220px 1fr;gap:24px}
  .tab-lat-nav{display:flex;flex-direction:column;gap:4px}
  .tab-lat-btn{padding:12px 16px;background:none;border:none;border-radius:var(--rv-r-md);font-family:var(--rv-font-display);font-size:14px;font-weight:500;color:var(--rv-text-muted);text-align:left;cursor:pointer;transition:background 280ms var(--rv-ease),color 280ms var(--rv-ease);border-left:2px solid transparent}
  .tab-lat-btn:hover{background:var(--rv-surface-raised);color:var(--rv-text)}
  .tab-lat-btn.active{border-left-color:var(--rv-orange);background:var(--rv-surface-raised);color:var(--rv-text);font-weight:600}
  .tab-lat-panel{display:none;padding:24px;background:var(--rv-surface-raised);border-radius:var(--rv-r-lg);font-size:15px;color:var(--rv-text-muted);line-height:1.7}
  .tab-lat-panel.active{display:block}
  /* ——— Tabs horizontal ——— */
  .tabs-hz-nav{list-style:none;display:flex;gap:0;border-bottom:1px solid var(--rv-line);margin-bottom:24px;padding:0}
  .tab-hz{padding:12px 20px;font-family:var(--rv-font-display);font-size:14px;font-weight:400;color:var(--rv-text-muted);cursor:pointer;border-bottom:2px solid transparent;margin-bottom:-1px;transition:color 280ms var(--rv-ease),border-color 280ms var(--rv-ease);user-select:none}
  .tab-hz:hover{color:var(--rv-text)}
  .tab-hz.active{color:var(--rv-text);border-bottom-color:var(--rv-orange)}
  .tabs-hz-content{display:none;font-size:15px;color:var(--rv-text-muted);line-height:1.7}
  .tabs-hz-content.active{display:block}
  .tabs-hz-content h4{font-family:var(--rv-font-display);font-size:22px;font-weight:400;margin-bottom:12px;color:var(--rv-text);letter-spacing:-.01em;background:var(--rv-grad-title-mono);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
  /* ——— CTA Split ——— */
  .cta-split{background:var(--rv-surface);border:1px solid var(--rv-line);border-radius:var(--rv-r-xl);padding:40px;display:grid;grid-template-columns:1fr 1fr;gap:32px;align-items:center;margin-bottom:24px}
  .cta-split-text h3{font-family:var(--rv-font-display);font-size:32px;font-weight:400;letter-spacing:-.02em;margin-bottom:12px;background:var(--rv-grad-title-mono);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
  .cta-split-text p{font-size:16px;color:var(--rv-text-muted);margin-bottom:24px}
  .cta-split-img{background:var(--rv-surface-raised);border-radius:var(--rv-r-lg);height:200px;display:flex;align-items:center;justify-content:center;color:var(--rv-text-muted);font-size:14px}
  /* ——— CTA Amber ——— */
  .cta-amber{background:var(--rv-surface);border:1px solid rgba(255,122,0,.2);border-radius:var(--rv-r-xl);padding:48px;text-align:center;position:relative;overflow:hidden;margin-bottom:24px}
  .cta-amber::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--rv-grad-button)}
  .cta-amber h3{font-family:var(--rv-font-display);font-size:34px;font-weight:400;letter-spacing:-.02em;margin-bottom:12px;background:var(--rv-grad-title-mono);-webkit-background-clip:text;background-clip:text;color:transparent}
  .cta-amber p{font-size:16px;color:var(--rv-text-muted);margin-bottom:32px}
  /* ——— CTA WhatsApp ——— */
  .cta-wa{background:var(--rv-surface);border:1px solid var(--rv-line);border-radius:var(--rv-r-xl);padding:40px;display:grid;grid-template-columns:1fr 1fr;gap:32px;align-items:center;margin-bottom:24px}
  .cta-wa h3{font-family:var(--rv-font-display);font-size:30px;font-weight:400;letter-spacing:-.02em;margin-bottom:12px;background:var(--rv-grad-title-mono);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
  .cta-wa p{font-size:15px;color:var(--rv-text-muted);margin-bottom:20px}
  .cta-wa-btns{display:flex;gap:12px;flex-wrap:wrap}
  .cta-wa-img{background:var(--rv-surface-raised);border-radius:var(--rv-r-lg);height:180px;display:flex;align-items:center;justify-content:center;color:var(--rv-text-muted);font-size:14px}
  .btn-wa{display:inline-flex;align-items:center;gap:8px;height:44px;padding:0 22px;background:#25D366;color:#fff;border:none;border-radius:4px;font-family:var(--rv-font-body);font-size:15px;font-weight:600;cursor:pointer;transition:filter var(--rv-dur-1)}
  .btn-wa:hover{filter:brightness(1.08)}
  /* ——— Tokens CSS block ——— */
  .code-block{background:var(--rv-surface);border:1px solid var(--rv-line);border-radius:var(--rv-r-md);padding:20px 24px;font-family:var(--rv-font-mono);font-size:13px;color:var(--rv-text-muted);overflow-x:auto;line-height:1.8}
  .tk-prop{color:var(--rv-gray-300)}
  .tk-val{color:var(--rv-orange)}
  .tk-str{color:var(--rv-success)}
  .tk-cmt{color:var(--rv-text-muted);font-style:italic}
  /* ——— Stat boxes 4-col ——— */
  .stat-box-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:32px}
  .stat-box{background:var(--rv-surface);border:1px solid var(--rv-line);border-radius:var(--rv-r-lg);padding:24px 20px}
  .stat-box-num{font-family:var(--rv-font-display);font-size:56px;font-weight:400;line-height:1;background:var(--rv-grad-title-mono);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:8px}
  .stat-box-label{font-family:var(--rv-font-display);font-size:14px;font-weight:400;color:var(--rv-text);margin-bottom:4px}
  .stat-box-desc{font-size:13px;color:var(--rv-text-muted);line-height:1.5}
  @media(max-width:768px){
    .tabs-lat-wrap{grid-template-columns:1fr}
    .cta-split,.cta-wa{grid-template-columns:1fr}
    .stat-box-grid{grid-template-columns:repeat(2,1fr)}
  }

html,body{background:#121212!important}
</style>
</head>
<body>

  <!-- Códigos body -->
  <?php include_once('../parts/codes-body.php'); ?>

  <!-- Mobile menu -->
  <?php include_once('../parts/mobile-menu.php'); ?>

  <header class="header_3 sticky_index">
      <!-- Menu-->
      <nav class="header_menu_3">
          <?php include_once('../parts/nav-main.php'); ?>
      </nav>

      <!-- Mobile logo -->
      <?php include_once('../parts/mobile-logo.php'); ?>
  </header>


<!-- DS section nav -->
<div class="ds-nav-bar" id="dsNavBar">
  <div class="ds-nav-bar-inner">
    <div class="ds-nav-bar-links">
      <a href="#cores">Cores</a>
      <a href="#logo">Logo</a>
      <a href="#typography">Tipografia</a>
      <a href="#componentes-atomicos">Componentes Atômicos</a>
      <a href="#componentes-site">Componentes de Site</a>
      <!--<a href="#marketing">Marketing</a>-->
      <a href="#motion">Motion</a>
      <!--<a href="#rules">Regras</a>-->
      <a href="#tokens-css">Tokens CSS</a>
    </div>
    <div class="ds-nav-bar-actions">
      <span class="ds-version">v2.1 · mai 2026</span>
    </div>
  </div>
</div>

<!-- ====================================================
     HERO
     ==================================================== -->
<div class="ds-hero">
  <div class="container ds-hero-inner">
    <div class="hero-eyebrow"><span class="dot"></span> Design System</div>
    <h1>Design System da Rvops.</h1>
    <p>Tokens, componentes e padrões para o site marketing da Rvops, uma única cor de ação (#FF7A00), base neutra escura, branco e cinza como apoio.</p>
    <div class="hero-cta">
      <a class="btn btn--primary btn--lg" href="#tokens">Veja os Tokens</a>
      <a class="btn btn--secondary btn--lg" href="#componentes-atomicos">Ver componentes ↓</a>
      <!--<div class="command" id="copyCmd" title="Clique para copiar">
        <span class="prompt">$</span>
        <span id="cmdText">npx getdesign@latest add rvops</span>
        <span class="copy-lbl" style="font-size:11px;color:var(--rv-text-muted)">Copiar</span>
      </div>-->
    </div>
    <div class="hero-meta">
      <div class="hero-meta-item"><span class="hero-meta-key">Surface padrão</span><span class="hero-meta-val">dark-first</span></div>
      <div class="hero-meta-item"><span class="hero-meta-key">Cor de ação</span><span class="hero-meta-val">#FF7A00</span></div>
      <div class="hero-meta-item"><span class="hero-meta-key">Display font</span><span class="hero-meta-val">Poppins</span></div>
      <div class="hero-meta-item"><span class="hero-meta-key">Body font</span><span class="hero-meta-val">DM Sans</span></div>
      <div class="hero-meta-item"><span class="hero-meta-key">Radius botão</span><span class="hero-meta-val">4 px — sempre</span></div>
    </div>
  </div>
</div>

<!-- ====================================================
     COLORS
     ==================================================== -->
<section class="ds-section" id="cores">
  <div class="container">
    <p class="ds-section-label">§ 1</p>
    <h2 class="ds-section-title">Cores & Tokens</h2>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Orange — única cor de ação</p>
    <div class="swatch-grid" style="max-width:380px;margin-bottom:36px">
      <div class="swatch"><div class="swatch-chip" style="background:#FF7A00" data-copy="#FF7A00"></div><div class="swatch-name">--rv-orange</div><div class="swatch-val">#FF7A00</div><div class="swatch-role">primary action</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#DA6208" data-copy="#DA6208"></div><div class="swatch-name">--rv-orange-deep</div><div class="swatch-val">#DA6208</div><div class="swatch-role">hover/stop</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#FFB066" data-copy="#FFB066"></div><div class="swatch-name">--rv-orange-light</div><div class="swatch-val">#FFB066</div><div class="swatch-role">tag text</div></div>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Backgrounds</p>
    <div class="swatch-grid" style="max-width:520px;margin-bottom:36px">
      <div class="swatch"><div class="swatch-chip" style="background:#121212" data-copy="#121212"></div><div class="swatch-name">--rv-bg-1</div><div class="swatch-val">#121212</div><div class="swatch-role">canvas</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#1E1E22" data-copy="#1E1E22"></div><div class="swatch-name">--rv-bg-2</div><div class="swatch-val">#1E1E22</div><div class="swatch-role">page default</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#222226" data-copy="#222226"></div><div class="swatch-name">--rv-bg-3</div><div class="swatch-val">#222226</div><div class="swatch-role">card/footer</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#FFFFFF;border:1px solid #ddd" data-copy="#FFFFFF"></div><div class="swatch-name">--rv-bg-light</div><div class="swatch-val">#FFFFFF</div><div class="swatch-role">auth/pricing</div></div>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Semântica (status de UI)</p>
    <div class="swatch-grid" style="max-width:300px;margin-bottom:36px">
      <div class="swatch"><div class="swatch-chip" style="background:#34C759" data-copy="#34C759"></div><div class="swatch-name">--rv-success</div><div class="swatch-val">#34C759</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#F2C94C" data-copy="#F2C94C"></div><div class="swatch-name">--rv-warning</div><div class="swatch-val">#F2C94C</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#EB5757" data-copy="#EB5757"></div><div class="swatch-name">--rv-danger</div><div class="swatch-val">#EB5757</div></div>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Gray ramp (12 steps)</p>
    <div class="swatch-grid" style="margin-bottom:36px">
      <div class="swatch"><div class="swatch-chip" style="background:#F4F4F5"></div><div class="swatch-name">gray-50</div><div class="swatch-val">#F4F4F5</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#E9E9E9"></div><div class="swatch-name">gray-100</div><div class="swatch-val">#E9E9E9</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#C9C9CC"></div><div class="swatch-name">gray-200</div><div class="swatch-val">#C9C9CC</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#939393"></div><div class="swatch-name">gray-300</div><div class="swatch-val">#939393</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#86868B"></div><div class="swatch-name">gray-400</div><div class="swatch-val">#86868B</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#727272"></div><div class="swatch-name">gray-500</div><div class="swatch-val">#727272</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#484747"></div><div class="swatch-name">gray-600</div><div class="swatch-val">#484747</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#2E2E32"></div><div class="swatch-name">gray-700</div><div class="swatch-val">#2E2E32</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#222226"></div><div class="swatch-name">gray-800</div><div class="swatch-val">#222226</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#1E1E22"></div><div class="swatch-name">gray-900</div><div class="swatch-val">#1E1E22</div></div>
      <div class="swatch"><div class="swatch-chip" style="background:#121212"></div><div class="swatch-name">gray-950</div><div class="swatch-val">#121212</div></div>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Gradientes mandatórios</p>
    <div style="display:flex;flex-direction:column;gap:20px;max-width:720px">
      <div style="display:flex;align-items:center;gap:20px">
        <div class="swatch-chip orange-grad" style="width:160px;flex-shrink:0"></div>
        <div>
          <div class="swatch-name" style="margin-bottom:2px">--rv-grad-button</div>
          <div class="swatch-val" style="margin-bottom:2px">linear-gradient(→ #DA6208, #FF7A00, #DA6208)</div>
          <div class="swatch-role">Botão CTA — único uso. Nunca aplicar em texto.</div>
        </div>
      </div>
      <div style="display:flex;align-items:center;gap:20px">
        <div class="swatch-chip title-grad" style="width:160px;flex-shrink:0"></div>
        <div>
          <div class="swatch-name" style="margin-bottom:2px">--rv-grad-title-multi</div>
          <div class="swatch-val" style="margin-bottom:2px">linear-gradient(→ #484747, #939393, #e9e9e9, #fffbf4, #727272)</div>
          <div class="swatch-role">H1 — hero principal. Metálico escuro-para-claro.</div>
        </div>
      </div>
      <div style="display:flex;align-items:center;gap:20px">
        <div class="swatch-chip" style="width:160px;flex-shrink:0;background:linear-gradient(to right,#FFFFFF,#998B8B)"></div>
        <div>
          <div class="swatch-name" style="margin-bottom:2px">--rv-grad-title-mono / .degrade-text</div>
          <div class="swatch-val" style="margin-bottom:2px">linear-gradient(→ #FFFFFF, #998B8B)</div>
          <div class="swatch-role">H2–H4, stats e títulos de seção. Alias via classe .degrade-text.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     LOGO & BRAND
     ==================================================== -->
<section class="ds-section" id="logo">
  <div class="container">
    <p class="ds-section-label">§ 2</p>
    <h2 class="ds-section-title">Logo & Marca</h2>
    <p style="font-size:15px;color:var(--rv-text-muted);margin-bottom:8px;max-width:680px">Wordmark <strong style="color:var(--rv-text)">rvops</strong> em caixa baixa. Quatro variações, cada uma para um contexto de superfície — fundo escuro neutro, escuro com cor, fundo claro e laranja da marca.</p>
    <p style="font-family:var(--rv-font-mono);font-size:11px;text-transform:uppercase;letter-spacing:.12em;color:var(--rv-orange);margin-bottom:24px;margin-top:28px">Wordmark · 4 variações oficiais</p>

    <div class="logo-var-grid" style="margin-bottom:16px">
      <!-- Dark neutral -->
      <div class="logo-var-card dark-neutral">
        <p class="logo-var-label">Use em fundo escuro neutro</p>
        <img src="../i/logo/logo-revops-branca.svg" alt="Logo white color" style="height:44px">
        <p class="logo-var-filename">Logo_white_color.png</p>
        <p class="logo-var-desc">Versão padrão para fundos escuros sem outras cores competindo (preto, grafite). Letras em branco, "o" no gradiente da marca.</p>
      </div>
      <!-- Dark colored -->
      <div class="logo-var-card dark-colored">
        <p class="logo-var-label">Use em fundo escuro com cores</p>
        <img src="../i/logo/logo-revops-branca.svg" alt="Logo white" style="height:44px;filter:brightness(0) invert(1)">
        <p class="logo-var-filename">Logo_white.png</p>
        <p class="logo-var-desc">Use a versão totalmente branca quando o fundo já carrega cor (foto, gradiente, ilustração). O "o" colorido brigaria com o ambiente.</p>
      </div>
      <!-- Light bg -->
      <div class="logo-var-card light-bg">
        <p class="logo-var-label" style="color:var(--rv-orange-deep)">Use em fundo claro</p>
        <img src="../i/logo/logo-rvops-branca-footer.svg" alt="Logo preta flat" style="height:44px;filter:brightness(0)">
        <p class="logo-var-filename" style="color:var(--rv-gray-400)">Logo_black.png</p>
        <p class="logo-var-desc" style="color:var(--rv-gray-500)">Padrão para fundos brancos ou cinzas muito claros. Versão preta sólida, sem gradiente.</p>
      </div>
      <!-- Brand orange -->
      <div class="logo-var-card brand-orange">
        <p class="logo-var-label">Use em fundo laranja da marca</p>
        <img src="../i/logo/logo-revops-branca.svg" alt="Logo inteira branca" style="height:44px;filter:brightness(0) invert(1)">
        <p class="logo-var-filename">Logo_white.png</p>
        <p class="logo-var-desc">Logo inteira branca sobre o laranja da marca. Use em banners, CTAs e cards de destaque.</p>
      </div>
    </div>

    <!-- Clear space -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;text-transform:uppercase;letter-spacing:.12em;color:var(--rv-orange);margin-bottom:20px;margin-top:48px">Clear Space</p>
    <div class="clearspace-wrap">
      <div class="clearspace-logo-wrap">
        <div style="padding:20px 48px;background:#fff;border-radius:4px;position:relative">
          <div style="position:absolute;top:0;left:0;right:0;bottom:0;outline:12px solid rgba(255,122,0,.15);pointer-events:none;border-radius:4px"></div>
          <img src="../i/logo/logo-rvops-branca-footer.svg" alt="Logo" style="height:40px;filter:brightness(0)">
        </div>
      </div>
      <div class="clearspace-info">
        <h4 style="font-family:var(--rv-font-display);font-size:16px;font-weight:600;color:var(--rv-text-on-light);margin-bottom:8px">Margem mínima = altura da letra "r"</h4>
        <p style="font-size:14px;color:var(--rv-gray-500);line-height:1.6">Reserve pelo menos a altura do <strong style="color:var(--rv-text-on-light)">r</strong> do wordmark como espaço livre em todos os lados. Nenhum elemento — texto, ícone, borda, foto — pode invadir essa zona. A faixa laranja translúcida marca o limite.</p>
      </div>
    </div>

    <!-- Do / Don't logo -->
    <div class="dd-grid" style="margin-top:24px">
      <div class="dd-box do">
        <div class="dd-head">✓ Logo — Use assim</div>
        <div class="dd-list">
          <div class="dd-item">Logo branca em fundo escuro neutro</div>
          <div class="dd-item">Logo preta em fundo branco/cinza claro</div>
          <div class="dd-item">Logo totalmente branca em foto ou gradiente</div>
          <div class="dd-item">Clear space respeitado em todos os lados</div>
          <div class="dd-item">Contraste mínimo 4.5:1</div>
        </div>
      </div>
      <div class="dd-box dont">
        <div class="dd-head">✗ Logo — Não faça</div>
        <div class="dd-list">
          <div class="dd-item">Logo com "o" colorido sobre fundo branco</div>
          <div class="dd-item">Recolorir o wordmark para outro tom de laranja</div>
          <div class="dd-item">Distorcer proporções do wordmark</div>
          <div class="dd-item">Usar outra fonte para recriar o wordmark</div>
          <div class="dd-item">Colocar elementos dentro do clear space</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     TYPOGRAPHY
     ==================================================== -->
<section class="ds-section" id="typography">
  <div class="container">
    <p class="ds-section-label">§ 3</p>
    <h2 class="ds-section-title">Tipografia</h2>
    <p style="font-size:14px;color:var(--rv-text-muted);margin-bottom:32px">Poppins — display + headings (peso 300–800). DM Sans — body, labels, UI. JetBrains Mono — código, tokens, timestamps. <strong style="color:var(--rv-text)">Títulos usam font-weight 400</strong>, não 700+, exceto quando explicitamente bold.</p>

    <div class="type-specimen">
      <div class="type-row">
        <div class="type-meta">display<br>72px / 400<br>−0.025em</div>
        <div class="type-sample" style="font-size:52px;font-weight:400;letter-spacing:-0.025em;line-height:1.04">Receita previsível.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">h1<br>64px / 400<br>−0.025em<br>grad-title-multi</div>
        <div class="type-sample" style="font-size:44px;font-weight:400;letter-spacing:-0.025em;line-height:1.3;background:linear-gradient(to right,#484747,#939393,#e9e9e9,#fffbf4,#727272);-webkit-background-clip:text;background-clip:text;color:transparent">Tudo que gera receita.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">h2<br>48px / 400<br>−0.02em<br>grad-title-mono</div>
        <div class="type-sample" style="font-size:36px;font-weight:400;letter-spacing:-0.02em;background:linear-gradient(to right,#fff,#998b8b);-webkit-background-clip:text;background-clip:text;color:transparent">Quando a receita anda junta.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">h3<br>32px / 400<br>−0.015em<br>grad-title-mono</div>
        <div class="type-sample" style="font-size:26px;font-weight:400;letter-spacing:-0.015em;background:linear-gradient(to right,#fff,#998b8b);-webkit-background-clip:text;background-clip:text;color:transparent">Conversacional · Marketing · Vendas</div>
      </div>
      <div class="type-row">
        <div class="type-meta">h4<br>24px / 400<br>−0.01em</div>
        <div class="type-sample" style="font-size:20px;font-weight:400;letter-spacing:-0.01em">CRM 360º — funil de vendas em uma tela.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">body-lg<br>18px / 400</div>
        <div class="type-sample body-font" style="font-size:18px;font-weight:400;color:var(--rv-text-muted)">Receita previsível, do primeiro toque ao fechamento. Marketing, vendas e atendimento no mesmo CRM.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">body<br>16px / 400</div>
        <div class="type-sample body-font" style="font-size:16px;font-weight:400;color:var(--rv-text-muted)">Texto padrão para parágrafos, descrições e conteúdo de UI geral. DM Sans, legível em qualquer tamanho.</div>
      </div>
      <div class="type-row">
        <div class="type-meta">eyebrow<br>12px / 600<br>+0.18em uppercase</div>
        <div class="type-sample" style="font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:0.18em;color:var(--rv-orange)">Plataforma · Revenue Operations · PT-BR</div>
      </div>
      <div class="type-row">
        <div class="type-meta">mono<br>13px / 400<br>JetBrains Mono</div>
        <div>
          <div class="type-sample mono-font" style="font-size:13px;font-weight:400;color:var(--rv-orange);margin-bottom:6px">--rv-orange: #FF7A00;</div>
          <div class="type-sample mono-font" style="font-size:13px;font-weight:400;color:var(--rv-text-muted)">O sistema processa dados em tempo real.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SPACING
     ==================================================== -->
<section class="ds-section">
  <div class="container">
    <p class="ds-section-label">§ 4</p>
    <h2 class="ds-section-title">Spacing, Radius & Elevação</h2>
    <div class="grid-3" style="gap:40px">
      <div>
        <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">4-point grid</p>
        <div class="scale">
          <div class="scale-row"><span class="scale-key">--rv-sp-1</span><div class="scale-bar" style="width:4px"></div><span class="scale-val">4px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-2</span><div class="scale-bar" style="width:8px"></div><span class="scale-val">8px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-4</span><div class="scale-bar" style="width:16px"></div><span class="scale-val">16px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-6</span><div class="scale-bar" style="width:24px"></div><span class="scale-val">24px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-8</span><div class="scale-bar" style="width:32px"></div><span class="scale-val">32px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-12</span><div class="scale-bar" style="width:48px"></div><span class="scale-val">48px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-16</span><div class="scale-bar" style="width:64px"></div><span class="scale-val">64px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-20</span><div class="scale-bar" style="width:80px"></div><span class="scale-val">80px</span></div>
          <div class="scale-row"><span class="scale-key">--rv-sp-24</span><div class="scale-bar" style="width:96px"></div><span class="scale-val">96px</span></div>
        </div>
      </div>
      <div>
        <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Border Radius</p>
        <div class="radii" style="grid-template-columns:1fr 1fr">
          <div class="radius-cell" style="border-radius:4px"><strong>4px</strong>button</div>
          <div class="radius-cell" style="border-radius:6px"><strong>6px</strong>sm</div>
          <div class="radius-cell" style="border-radius:10px"><strong>10px</strong>input</div>
          <div class="radius-cell" style="border-radius:16px"><strong>16px</strong>card</div>
          <div class="radius-cell" style="border-radius:24px"><strong>24px</strong>xl</div>
          <div class="radius-cell" style="border-radius:999px"><strong>pill</strong>tags</div>
        </div>
        <p style="font-size:12px;color:var(--rv-text-muted);margin-top:12px;line-height:1.5">Botão <strong style="color:var(--rv-text)">sempre 4px</strong>. Nunca pill.</p>
      </div>
      <div>
        <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">Elevação</p>
        <div style="display:flex;flex-direction:column;gap:10px">
          <div class="elev-cell" onmouseenter="this.style.boxShadow='0 4px 12px rgba(0,0,0,.5)';this.style.transform='translateY(-2px)'" onmouseleave="this.style.boxShadow='0 1px 2px rgba(0,0,0,.30)';this.style.transform=''"><strong>sh-1</strong>hairline</div>
          <div class="elev-cell" onmouseenter="this.style.boxShadow='0 8px 24px rgba(0,0,0,.55)';this.style.transform='translateY(-2px)'" onmouseleave="this.style.boxShadow='0 4px 12px rgba(0,0,0,.32)';this.style.transform=''"><strong>sh-2</strong>card hover</div>
          <div class="elev-cell" onmouseenter="this.style.boxShadow='0 20px 48px rgba(0,0,0,.65)';this.style.transform='translateY(-3px)'" onmouseleave="this.style.boxShadow='0 12px 32px rgba(0,0,0,.40)';this.style.transform=''"><strong>sh-3</strong>dropdown</div>
          <div class="elev-cell" onmouseenter="this.style.boxShadow='0 12px 48px rgba(255,122,0,.55)';this.style.transform='translateY(-3px)'" onmouseleave="this.style.boxShadow='0 8px 32px rgba(255,122,0,.32)';this.style.transform=''"><strong>sh-glow</strong>CTA glow</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     BASE COMPONENTS
     ==================================================== -->
<section class="ds-section" id="componentes-atomicos">
  <div class="container">
    <p class="ds-section-label">§ 5</p>
    <h2 class="ds-section-title">Componentes Atômicos</h2>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:20px">§ 6.1 · Botões — border-radius: 4px sempre</p>
    <div style="display:flex;flex-direction:column;gap:0;max-width:820px;border:1px solid var(--rv-line);border-radius:var(--rv-r-lg);overflow:hidden;margin-bottom:32px">
      <!-- row header -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;gap:0;padding:10px 20px;background:var(--rv-bg-4);border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:var(--rv-text-muted)">Tipo</span>
        <span style="font-family:var(--rv-font-mono);font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:var(--rv-text-muted)">Exemplo</span>
        <span style="font-family:var(--rv-font-mono);font-size:10px;text-transform:uppercase;letter-spacing:.1em;color:var(--rv-text-muted)">Contexto de uso</span>
      </div>
      <!-- primary lg -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-orange)">primary · lg</span>
        <div><button class="btn btn--primary btn--lg">Solicitar demo</button></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">CTA principal — hero, seção de destaque</span>
      </div>
      <!-- primary md -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-orange)">primary · md</span>
        <div><button class="btn btn--primary">Solicitar demo</button></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">CTA padrão — páginas de produto, CTAs inline</span>
      </div>
      <!-- primary sm nav -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-orange)">primary · sm</span>
        <div><button class="btn btn--primary btn--sm" style="text-transform:uppercase;letter-spacing:.08em;font-size:11px">Demonstração</button></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">Nav e headers — sm + uppercase + letter-spacing</span>
      </div>
      <!-- secondary -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)">secondary</span>
        <div><button class="btn btn--secondary">Ver preços</button></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">Alternativa ao CTA — CTAs duplos lado a lado</span>
      </div>
      <!-- ghost -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)">ghost</span>
        <div><button class="btn btn--ghost">Agendar conversa</button></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">Opção secundária em pricing, banners, hero</span>
      </div>
      <!-- text -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)">text</span>
        <div><button class="btn btn--text">Saiba mais</button></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">Ações terciárias — menus, listas, tabelas</span>
      </div>
      <!-- link ícone -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px;border-bottom:1px solid var(--rv-line)">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)">link</span>
        <div><a class="btn-link-icon" href="#">Conhecer o módulo <i class="fa-solid fa-angle-right" style="font-size:13px"></i></a></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">Cards, pillars, seções informativas</span>
      </div>
      <!-- link sm -->
      <div style="display:grid;grid-template-columns:130px 1fr 1fr;align-items:center;gap:0;padding:14px 20px">
        <span style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted)">link · sm</span>
        <div><a class="btn-link-icon sm" href="#">Ver todos os recursos <i class="fa-solid fa-angle-right" style="font-size:11px"></i></a></div>
        <span style="font-size:13px;color:var(--rv-text-muted)">Rodapé de seção, links auxiliares</span>
      </div>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.2 · Input (radius: 10px)</p>
    <div class="grid-2" style="max-width:680px;margin-bottom:32px">
      <div class="field"><label>Nome completo</label><input class="input" type="text" placeholder="Ex.: Henrique Silva"></div>
      <div class="field"><label>Domínio</label><input class="input" type="text" placeholder="empresa.rvops.com"></div>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.4 · Badge / Tag (pill)</p>
    <div class="flex-wrap" style="margin-bottom:32px">
      <span class="tag tag--neutral">Neutro</span>
      <span class="tag tag--orange">Beta</span>
      <span class="tag tag--success">✓ Ativo</span>
      <span class="tag tag--warning">⚠ Pendente</span>
      <span class="tag tag--danger">✗ Bloqueado</span>
      <span class="tag tag--success">↑ 32%</span>
      <span class="tag tag--neutral">v2.1.0</span>
      <span class="tag tag--orange">PT-BR</span>
    </div>

    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.3 · Card (radius: 16px)</p>
    <div class="grid-3" style="margin-bottom:32px">
      <div class="card">
        <span class="tag tag--orange" style="margin-bottom:12px">Conversacional</span>
        <h4 style="font-size:18px;margin-bottom:8px;font-weight:400">Atendimento via WhatsApp</h4>
        <p style="font-size:14px;color:var(--rv-text-muted)">Roteie conversas, automatize respostas e converta dentro do mesmo CRM.</p>
        <div style="display:flex;align-items:center;gap:8px;margin-top:14px;font-size:12px;color:var(--rv-text-muted);font-family:var(--rv-font-mono)"><span style="width:6px;height:6px;border-radius:50%;background:var(--rv-success);flex-shrink:0"></span>99.9% uptime · 32 ms p95</div>
      </div>
      <div class="card">
        <span class="tag tag--neutral" style="margin-bottom:12px">Marketing</span>
        <h4 style="font-size:18px;margin-bottom:8px;font-weight:400">Automação de campanhas</h4>
        <p style="font-size:14px;color:var(--rv-text-muted)">Fluxos de nutrição, lead scoring e segmentação no mesmo CRM de vendas.</p>
      </div>
      <div class="card">
        <span class="tag tag--success" style="margin-bottom:12px">Vendas</span>
        <h4 style="font-size:18px;margin-bottom:8px;font-weight:400">Funil kanban</h4>
        <p style="font-size:14px;color:var(--rv-text-muted)">Previsão e priorização automática. Tarefas que fecham negócio.</p>
      </div>
    </div>

    <!-- Iconography -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:20px">§ 8 · Iconografia — três estilos do site</p>
    <div class="icon-style-note">
      O site usa <strong>três famílias de ícone</strong> com contextos distintos. Nunca misturar estilos na mesma seção.
    </div>

    <!-- Tipo 1: Features -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin:20px 0 12px">Tipo 1 · Features — PNG circular sobre fundo escuro</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:24px">
      <div class="icon-demo">
        <div class="icon-wrap" style="background:var(--rv-bg-1);border-radius:14px;width:72px;height:72px;border:1px solid var(--rv-line)">
          <img src="../i/icons/icone-coex-1.png" alt="Feature" style="width:44px;height:44px;object-fit:contain">
        </div>
        <div class="icon-label">Feature 1</div>
        <div class="icon-desc">PNG circular<br>fundo escuro</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:var(--rv-bg-1);border-radius:14px;width:72px;height:72px;border:1px solid var(--rv-line)">
          <img src="../i/icons/icone-coex-2.png" alt="Feature" style="width:44px;height:44px;object-fit:contain">
        </div>
        <div class="icon-label">Feature 2</div>
        <div class="icon-desc">Usado em seções<br>de features</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:var(--rv-bg-1);border-radius:14px;width:72px;height:72px;border:1px solid var(--rv-line)">
          <img src="../i/icons/icone-coex-3.png" alt="Feature" style="width:44px;height:44px;object-fit:contain">
        </div>
        <div class="icon-label">Feature 3</div>
        <div class="icon-desc">35–44px<br>sobre bg-1 ou bg-2</div>
      </div>
    </div>

    <!-- Tipo 2: Seções informativas -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin:0 0 12px">Tipo 2 · Seções informativas — PNG monocromático</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:24px">
      <div class="icon-demo">
        <div class="icon-wrap support" style="width:72px;height:72px">
          <i class="fa-solid fa-headset f-26 text-white op-6" aria-hidden="true"></i>
        </div>
        <div class="icon-label">Produtos</div>
        <div class="icon-desc">PNG simples<br>seções informativas</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap support" style="width:72px;height:72px">
          <i class="fa-regular fa-copy f-26 text-white op-6" aria-hidden="true"></i>
        </div>
        <div class="icon-label">Recursos</div>
        <div class="icon-desc">Sem cor de brand<br>traço leve</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap support" style="width:72px;height:72px">
          <i class="fa-solid fa-arrow-pointer f-26 text-white op-6" aria-hidden="true"></i>
        </div>
        <div class="icon-label">Suporte</div>
        <div class="icon-desc">Monochrome<br>menu / helpers</div>
      </div>
    </div>

    <!-- Tipo 3: Produtos (rainbow) -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin:0 0 12px">Tipo 3 · Produtos — PNG rainbow sobre fundo preto</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap">
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px;width:72px;height:72px">
          <img src="../i/icons/icon-conversacional.png" alt="Conversacional" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">Conversacional</div>
        <div class="icon-desc">Rainbow gradient<br>sobre fundo preto</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px;width:72px;height:72px">
          <img src="../i/icons/icon-marketing.png" alt="Marketing" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">Marketing</div>
        <div class="icon-desc">PNG 48–64px<br>nav + pilares</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px;width:72px;height:72px">
          <img src="../i/icons/icon-sales.png" alt="Vendas" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">Vendas</div>
        <div class="icon-desc">Restrito ao nav<br>e pilares de produto</div>
      </div>
      <div class="icon-demo">
        <div class="icon-wrap" style="background:#000;border-radius:14px;width:72px;height:72px">
          <img src="../i/icons/icone-crm.png" alt="CRM" style="width:52px;height:52px;object-fit:contain">
        </div>
        <div class="icon-label">CRM</div>
        <div class="icon-desc">Mesmo estilo<br>em todos os produtos</div>
      </div>
    </div>

    
  </div>
</section>

<!-- ====================================================
     WEBSITE COMPONENTS
     ==================================================== -->
<section class="ds-section" id="componentes-site">
  <div class="container">
    <p class="ds-section-label">§ 6</p>
    <h2 class="ds-section-title">Componentes de Site</h2>

    <!-- Hero -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.1 · Hero section</p>
    <div class="hero-preview" style="margin-bottom:32px">
      <div class="ey">Revenue Operations · PT-BR · BSP Meta Oficial</div>
      <h2>Receita previsível, do primeiro toque ao fechamento.</h2>
      <p>Marketing, vendas e atendimento no mesmo CRM. Sem duplicar ferramenta, sem perder contexto.</p>
      <div class="cta-pair">
        <button class="btn btn--primary">Solicitar demo</button>
        <button class="btn btn--ghost">Ver preços</button>
      </div>
      <div class="trust">Solides · Doctoralia · Suno · Eletromidia · Loja Integrada +500</div>
    </div>

    <!-- Feature pillars with real icons -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.2 · Feature pillars — ícones de produto</p>
    <div class="grid-3" style="margin-bottom:32px">
      <div class="pillar">
        <div class="ic"><img src="../i/icons/icon-conversacional.png" alt="Conversacional"></div>
        <h4>Conversacional</h4>
        <p>Inbox unificado. WhatsApp, e-mail, chat — roteamento automático com bot + humano.</p>
        <span class="lk">Conhecer o módulo →</span>
      </div>
      <div class="pillar">
        <div class="ic"><img src="../i/icons/icon-marketing.png" alt="Marketing"></div>
        <h4>Marketing</h4>
        <p>Automações de nutrição, lead scoring e campanhas integradas ao funil de vendas.</p>
        <span class="lk">Conhecer o módulo →</span>
      </div>
      <div class="pillar">
        <div class="ic"><img src="../i/icons/icon-sales.png" alt="Vendas"></div>
        <h4>Vendas</h4>
        <p>Funil kanban com previsão e priorização automática. Tarefas que fecham negócio.</p>
        <span class="lk">Conhecer o módulo →</span>
      </div>
    </div>

    <!-- Stats -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.3 · Stats — números em grad-title-mono (branco → cinza)</p>
    <div class="stat-box-grid">
      <div class="stat-box">
        <div class="stat-box-num">37%</div>
        <div class="stat-box-label">Aumento em conversão</div>
        <div class="stat-box-desc">Aumento médio após 3 meses de uso</div>
      </div>
      <div class="stat-box">
        <div class="stat-box-num">2×</div>
        <div class="stat-box-label">Redução no ciclo</div>
        <div class="stat-box-desc">De vendas com automação de follow-up</div>
      </div>
      <div class="stat-box">
        <div class="stat-box-num">98%</div>
        <div class="stat-box-label">Satisfação</div>
        <div class="stat-box-desc">De aprovação entre clientes ativos</div>
      </div>
      <div class="stat-box">
        <div class="stat-box-num">500+</div>
        <div class="stat-box-label">Empresas</div>
        <div class="stat-box-desc">Altamente escaladas com RevOps</div>
      </div>
    </div>

    <!-- Logo strip — carousel + grid tabs -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.4 · Logo grid clientes</p>
    <div class="client-section" style="margin-bottom:32px">
      <p style="font-size:13px;color:var(--rv-text-muted);margin-bottom:16px;font-family:var(--rv-font-display)">Empresas altamente escaladas com RevOps</p>
      <div class="client-tabs">
        <button class="client-tab active" onclick="switchClientView('carousel', this)">Carrossel (home)</button>
        <button class="client-tab" onclick="switchClientView('grid', this)">Grid</button>
      </div>
      <!-- Carousel view -->
      <div id="client-carousel-view" class="client-carousel">
        <div class="client-carousel-track" id="carouselTrack">
          <div class="logo-pill"><img src="../i/clientes-home/2.png" alt="Solides"></div>
          <div class="logo-pill"><img src="../i/clientes-home/9.png" alt="Doctoralia"></div>
          <div class="logo-pill"><img src="../i/clientes-home/3.png" alt="Suno"></div>
          <div class="logo-pill"><img src="../i/clientes-home/16.png" alt="Eletromidia"></div>
          <div class="logo-pill"><img src="../i/clientes-home/8.png" alt="Loja Integrada"></div>
          <div class="logo-pill"><img src="../i/clientes-home/6.png" alt="Minimal"></div>
          <div class="logo-pill"><img src="../i/clientes-home/15.png" alt="Estacio"></div>
          <div class="logo-pill"><img src="../i/clientes-home/1.png" alt="Cartão de Todos"></div>
          <div class="logo-pill"><img src="../i/clientes-home/11.png" alt="Autoglass"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo-nord-investimentos.png" alt="Nord"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo--softplan.png" alt="Softplan"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo-allp-fit.png" alt="Allp Fit"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo-300-franchising.png" alt="300 Franchising"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo--unisa.png" alt="Unisa"></div>
          <!-- duplicate for seamless loop -->
          <div class="logo-pill"><img src="../i/clientes-home/2.png" alt="Solides"></div>
          <div class="logo-pill"><img src="../i/clientes-home/9.png" alt="Doctoralia"></div>
          <div class="logo-pill"><img src="../i/clientes-home/3.png" alt="Suno"></div>
          <div class="logo-pill"><img src="../i/clientes-home/16.png" alt="Eletromidia"></div>
          <div class="logo-pill"><img src="../i/clientes-home/8.png" alt="Loja Integrada"></div>
          <div class="logo-pill"><img src="../i/clientes-home/6.png" alt="Minimal"></div>
          <div class="logo-pill"><img src="../i/clientes-home/15.png" alt="Estacio"></div>
          <div class="logo-pill"><img src="../i/clientes-home/1.png" alt="Cartão de Todos"></div>
          <div class="logo-pill"><img src="../i/clientes-home/11.png" alt="Autoglass"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo-nord-investimentos.png" alt="Nord"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo--softplan.png" alt="Softplan"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo-allp-fit.png" alt="Allp Fit"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo-300-franchising.png" alt="300 Franchising"></div>
          <div class="logo-pill"><img src="../i/clientes-home/logo--unisa.png" alt="Unisa"></div>
        </div>
      </div>
      <!-- Grid view -->
      <div id="client-grid-view" class="client-grid-panel">
        <div class="logo-pill-grid"><img src="../i/clientes-home/2.png" alt="Solides"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/9.png" alt="Doctoralia"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/3.png" alt="Suno"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/16.png" alt="Eletromidia"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/8.png" alt="Loja Integrada"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/6.png" alt="Minimal"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/15.png" alt="Estacio"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/1.png" alt="Cartão de Todos"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/11.png" alt="Autoglass"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/logo-nord-investimentos.png" alt="Nord"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/logo--softplan.png" alt="Softplan"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/logo-allp-fit.png" alt="Allp Fit"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/logo-300-franchising.png" alt="300 Franchising"></div>
        <div class="logo-pill-grid"><img src="../i/clientes-home/logo--unisa.png" alt="Unisa"></div>
      </div>
    </div>

    <!-- Pricing -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.5 · Pricing</p>
    <div class="grid-3" style="margin-bottom:32px">
      <div class="price-card">
        <h4>Starter</h4><p class="desc">Para times saindo da planilha.</p>
        <div class="amount">R$ 99<small> /usuário/mês</small></div>
        <ul><li>Inbox WhatsApp + e-mail</li><li>Funil de vendas básico</li><li>Até 1.000 contatos</li></ul>
        <button class="btn btn--ghost" style="width:100%;justify-content:center;height:40px;font-size:14px">Começar agora</button>
      </div>
      <div class="price-card popular">
        <div class="popular-pill">Mais escolhido</div>
        <h4>Growth</h4><p class="desc">CRM + automação para escalar.</p>
        <div class="amount">R$ 249<small> /usuário/mês</small></div>
        <ul><li>Tudo do Starter</li><li>Automações & chatbot</li><li>Lead scoring</li><li>Contatos ilimitados</li></ul>
        <button class="btn btn--primary" style="width:100%;justify-content:center;height:40px;font-size:14px">Começar agora</button>
      </div>
      <div class="price-card">
        <h4>Scale</h4><p class="desc">Para operações com volume e SLA.</p>
        <div class="amount" style="font-size:26px">Sob consulta</div>
        <ul><li>Tudo do Growth</li><li>Voz + URA omnichannel</li><li>SSO avançado</li><li>CSM dedicado</li></ul>
        <button class="btn btn--ghost" style="width:100%;justify-content:center;height:40px;font-size:14px">Falar com vendas</button>
      </div>
    </div>

    <!-- Testimonial -->
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.6 · Testimonial</p>
    <div style="margin-bottom:32px">
      <div class="testi-card">
        <div>
          <p class="testi-quote">"Em três meses, juntamos quatro ferramentas em uma. O time de vendas voltou a vender."</p>
          <div class="testi-author">
            <div class="testi-avatar">HS</div>
            <div><div class="testi-name">Henrique Silva</div><div class="testi-role">Head of Revenue · Foods &amp; Inc</div></div>
          </div>
        </div>
        <div class="testi-stat"><div class="num">5min</div><div class="lbl">Tempo médio de<br>primeira resposta</div></div>
      </div>
    </div>

    <!-- Accordeons -->
    <hr style="border:none;border-top:1px solid var(--rv-line);margin:40px 0">
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:24px">§ 6.7 · Accordeons</p>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-bottom:40px">
      <div>
        <p style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">Estilo Produtos — seta rotaciona</p>
        <div class="acc-prod">
          <button class="acc-prod-trigger is-open" onclick="toggleAccProd(this)">
            <i class="fas fa-angle-right acc-prod-arrow" aria-hidden="true"></i>
            Descrição do Produto
          </button>
          <div class="acc-prod-panel is-open">Facilite a comunicação com seus clientes de forma eficaz integrando suas contas do WhatsApp, Instagram e chat do site. Todas as conversas em um só lugar, com gestão simplificada e atendimento ágil.</div>
          <button class="acc-prod-trigger" onclick="toggleAccProd(this)">
            <i class="fas fa-angle-right acc-prod-arrow" aria-hidden="true"></i>
            Recursos
          </button>
          <div class="acc-prod-panel">Histórico de conversas, envio de mensagens em massa, gestão de atendentes, chatbot integrado entre canais e relatórios de atendimento customizados.</div>
          <button class="acc-prod-trigger" onclick="toggleAccProd(this)">
            <i class="fas fa-angle-right acc-prod-arrow" aria-hidden="true"></i>
            Integrações
          </button>
          <div class="acc-prod-panel">WhatsApp Business API, Instagram Direct, chat do site e mais de 3.000 ferramentas via Zapier. Conexão nativa com o CRM de vendas.</div>
        </div>
      </div>
      <div>
        <p style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">Estilo Demo — "Abrir/Fechar todos"</p>
        <div class="acc-demo-head">
          <span>Perguntas frequentes</span>
          <button class="btn btn--sm btn--ghost" onclick="toggleAllAccDemo(this)">Abrir todos</button>
        </div>
        <div class="acc-demo">
          <div class="acc-demo-item">
            <button class="acc-demo-btn" onclick="toggleAccDemo(this)">Lorem ipsum dolor sit amet</button>
            <div class="acc-demo-panel"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse imperdiet lorem aliquet commodo.</p></div>
          </div>
          <div class="acc-demo-item">
            <button class="acc-demo-btn" onclick="toggleAccDemo(this)">Vivamus nunc nunc dolor consectetur</button>
            <div class="acc-demo-panel"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse imperdiet lorem aliquet commodo.</p></div>
          </div>
          <div class="acc-demo-item">
            <button class="acc-demo-btn" onclick="toggleAccDemo(this)">Mauris non maximus nibh lorem ipsum</button>
            <div class="acc-demo-panel"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse imperdiet lorem aliquet commodo.</p></div>
          </div>
          <div class="acc-demo-item">
            <button class="acc-demo-btn" onclick="toggleAccDemo(this)">Suspendisse imperdiet lorem aliquet</button>
            <div class="acc-demo-panel"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse imperdiet lorem aliquet commodo.</p></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabs -->
    <hr style="border:none;border-top:1px solid var(--rv-line);margin:40px 0">
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:24px">§ 6.8 · Tabs</p>
    <p style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">Tabs lateral (vertical)</p>
    <div class="tabs-lat-wrap" style="margin-bottom:32px">
      <div class="tab-lat-nav">
        <button class="tab-lat-btn active" onclick="changeTabLat(0)">Conversacional</button>
        <button class="tab-lat-btn" onclick="changeTabLat(1)">Marketing</button>
        <button class="tab-lat-btn" onclick="changeTabLat(2)">Vendas</button>
        <button class="tab-lat-btn" onclick="changeTabLat(3)">Inteligência Artificial</button>
        <button class="tab-lat-btn" onclick="changeTabLat(4)">CRM 360°</button>
      </div>
      <div class="tab-lat-panels">
        <div class="tab-lat-panel active" id="tlat0">Plataforma de atendimento multicanal com WhatsApp, email, chat e Instagram. Chatbots sem código, triagem automática e caixa de entrada unificada para toda a equipe.</div>
        <div class="tab-lat-panel" id="tlat1">Automação de marketing, landing pages, email marketing e nutrição de leads integrada ao pipeline de vendas. Capture, qualifique e converta com menos esforço manual.</div>
        <div class="tab-lat-panel" id="tlat2">Funil de vendas visual, automação de follow-up, propostas e contratos. Visão completa de cada negócio em andamento com relatórios em tempo real.</div>
        <div class="tab-lat-panel" id="tlat3">Agentes de IA que qualificam leads, respondem objeções e agendam reuniões. Integração nativa com WhatsApp e CRM para operações totalmente automatizadas.</div>
        <div class="tab-lat-panel" id="tlat4">Visão 360° do cliente consolidando marketing, atendimento e vendas em um único registro. Histórico completo de interações, negócios e documentos.</div>
      </div>
    </div>
    <p style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">Tabs horizontal (border-bottom)</p>
    <div style="margin-bottom:40px">
      <ul class="tabs-hz-nav">
        <li class="tab-hz active" onclick="changeTabHz(0)">Integração</li>
        <li class="tab-hz" onclick="changeTabHz(1)">Automação</li>
        <li class="tab-hz" onclick="changeTabHz(2)">Relatórios</li>
        <li class="tab-hz" onclick="changeTabHz(3)">Suporte</li>
      </ul>
      <div class="tabs-hz-content active" id="thz0"><h4>Integrações nativas</h4>Conecte WhatsApp Business API, HubSpot, RD Station, Google Ads, Facebook Ads e mais de 3.000 ferramentas via Zapier. Sem código, em minutos.</div>
      <div class="tabs-hz-content" id="thz1"><h4>Automação de ponta a ponta</h4>Crie fluxos que movem leads pelo funil automaticamente — desde a captura até o fechamento — com gatilhos por comportamento, tempo ou estágio.</div>
      <div class="tabs-hz-content" id="thz2"><h4>Relatórios em tempo real</h4>Dashboards de revenue com MRR, churn, conversão por estágio e performance individual de vendedores. Tudo em um painel unificado.</div>
      <div class="tabs-hz-content" id="thz3"><h4>Suporte em português</h4>Time de sucesso dedicado, onboarding guiado e central de ajuda em PT-BR. SLA garantido em todos os planos.</div>
    </div>

    <!-- Breadcrumb -->
    <hr style="border:none;border-top:1px solid var(--rv-line);margin:40px 0">
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px">§ 6.9 · Breadcrumb</p>
    <nav class="breadcrumb" style="margin-bottom:40px">
      <a href="#">Rvops</a>
      <span class="sep">›</span>
      <a href="#">Produtos</a>
      <span class="sep">›</span>
      <a href="#">Conversacional</a>
      <span class="sep">›</span>
      <span class="current">Chatbot</span>
    </nav>

    <!-- CTAs -->
    <hr style="border:none;border-top:1px solid var(--rv-line);margin:40px 0">
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:var(--rv-text-muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:24px">§ 6.10 · CTAs</p>
    <p style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">CTA Banner — texto + imagem</p>
    <div class="cta-banner mb-20">
      <h2>Sua receita merece um único lugar.</h2>
      <p>Comece em 2 minutos. Migramos seus contatos por você.</p>
      <div class="btns">
        <button class="btn btn--primary btn--lg">Solicitar demo</button>
        <button class="btn btn--ghost btn--lg">Agendar uma conversa</button>
      </div>
    </div>
    <br>
    <p class="pt-15" style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">Split — texto + imagem</p>
    <div class="cta-split">
      <div class="cta-split-text">
        <h3>Tudo que gera receita,<br>em um só lugar.</h3>
        <p>Plataforma de RevOps com marketing, conversas e vendas integradas. Solicite uma demonstração ao vivo.</p>
        <button class="btn btn--primary btn--lg">Solicitar demo</button>
      </div>
      <div class="cta-split-img">Imagem do produto</div>
    </div>
    <p style="font-size:12px;color:var(--rv-text-muted);margin-bottom:12px;font-family:var(--rv-font-mono)">Split + WhatsApp</p>
    <div class="cta-wa" style="margin-bottom:0">
      <div>
        <h3>Fale com um especialista<br>em RevOps agora.</h3>
        <p>Tire dúvidas sobre implantação, preços e planos. Resposta em menos de 5 minutos.</p>
        <div class="cta-wa-btns">
          <button class="btn btn--primary">Solicitar demo</button>
          <button class="btn-wa">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp
          </button>
        </div>
      </div>
      <div class="cta-wa-img">Imagem suporte</div>
    </div>
  </div>
</section>


<!-- ====================================================
     MOTION
     ==================================================== -->
<section class="ds-section" id="motion">
  <div class="container">
    <p class="ds-section-label">§ 8</p>
    <h2 class="ds-section-title">Motion</h2>
    <p style="font-size:14px;color:var(--rv-text-muted);margin-bottom:28px">Passe o mouse para sentir as durações. Nunca &gt; 600ms em product UI. Sempre respeitar <code style="font-family:var(--rv-font-mono);font-size:12px">prefers-reduced-motion</code>.</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:24px">
      <div style="width:90px;height:90px;border-radius:var(--rv-r-md);border:1px solid var(--rv-line);background:var(--rv-surface-raised);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;font-family:var(--rv-font-mono);font-size:10px;color:var(--rv-text-muted);cursor:pointer;transition:all var(--rv-dur-1) var(--rv-ease)">
        <span style="font-size:14px;font-weight:600;color:var(--rv-text)">120ms</span>dur-1<br>hover, focus
      </div>
      <div style="width:90px;height:90px;border-radius:var(--rv-r-md);border:1px solid var(--rv-line);background:var(--rv-surface-raised);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;font-family:var(--rv-font-mono);font-size:10px;color:var(--rv-text-muted);cursor:pointer;transition:all var(--rv-dur-2) var(--rv-ease)">
        <span style="font-size:14px;font-weight:600;color:var(--rv-text)">200ms</span>dur-2<br>card lift
      </div>
      <div style="width:90px;height:90px;border-radius:var(--rv-r-md);border:1px solid var(--rv-line);background:var(--rv-surface-raised);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;font-family:var(--rv-font-mono);font-size:10px;color:var(--rv-text-muted);cursor:pointer;transition:all var(--rv-dur-3) var(--rv-ease)">
        <span style="font-size:14px;font-weight:600;color:var(--rv-text)">320ms</span>dur-3<br>reveal
      </div>
    </div>
    <div style="background:var(--rv-surface-raised);border:1px solid var(--rv-line);border-radius:var(--rv-r-md);padding:20px 24px;font-family:var(--rv-font-mono);font-size:13px;color:var(--rv-text-muted)">
      --rv-ease: cubic-bezier(.2,.7,.1,1);<br>
      --rv-dur-1: 120ms; &nbsp;/* hover, focus */<br>
      --rv-dur-2: 200ms; &nbsp;/* card lift, modal open */<br>
      --rv-dur-3: 320ms; &nbsp;/* page section reveal */
    </div>
  </div>
</section>


</section>



<!-- ====================================================
     TOKENS CSS
     ==================================================== -->
<section class="ds-section" id="tokens-css">
  <div class="container">
    <p class="ds-section-label">§ 9</p>
    <h2 class="ds-section-title">Tokens CSS</h2>
    <p style="font-size:14px;color:var(--rv-text-muted);margin-bottom:24px">Referência rápida dos principais tokens. Arquivo completo em <code style="font-family:var(--rv-font-mono);font-size:12px">design/tokens.css</code>.</p>

    <div class="code-block">
<span class="tk-cmt">/* Backgrounds */</span><br>
<span class="tk-prop">--rv-bg-1:</span>            <span class="tk-val">#121212</span>; <span class="tk-cmt">/* canvas / page default */</span><br>
<span class="tk-prop">--rv-bg-2:</span>            <span class="tk-val">#1E1E22</span>; <span class="tk-cmt">/* surface */</span><br>
<span class="tk-prop">--rv-bg-3:</span>            <span class="tk-val">#222226</span>; <span class="tk-cmt">/* footer, cards */</span><br>
<span class="tk-prop">--rv-bg-4:</span>            <span class="tk-val">#2E2E32</span>; <span class="tk-cmt">/* hover surface, borders */</span><br>
<br>
<span class="tk-cmt">/* Laranja */</span><br>
<span class="tk-prop">--rv-orange:</span>          <span class="tk-val">#FF7A00</span>; <span class="tk-cmt">/* única cor de ação */</span><br>
<span class="tk-prop">--rv-orange-deep:</span>     <span class="tk-val">#DA6208</span>; <span class="tk-cmt">/* hover / gradient stop */</span><br>
<span class="tk-prop">--rv-grad-button:</span>     <span class="tk-str">linear-gradient(to right, #DA6208, #FF7A00, #DA6208)</span>; <span class="tk-cmt">/* botões CTA — único uso */</span><br>
<br>
<span class="tk-cmt">/* Gradientes de título — nunca laranja */</span><br>
<span class="tk-prop">--rv-grad-title-multi:</span> <span class="tk-str">linear-gradient(to right, #484747, #939393, #e9e9e9, #fffbf4, #727272)</span>; <span class="tk-cmt">/* H1 — metálico */</span><br>
<span class="tk-prop">--rv-grad-title-mono:</span>  <span class="tk-str">linear-gradient(to right, #FFFFFF, #998B8B)</span>; <span class="tk-cmt">/* H2–H4, stats */</span><br>
<span class="tk-prop">--rv-degrade-text:</span>     <span class="tk-str">linear-gradient(to right, #FFFFFF, #998B8B)</span>; <span class="tk-cmt">/* alias de grad-title-mono via .degrade-text */</span><br>
<br>
<span class="tk-cmt">/* Tipografia */</span><br>
<span class="tk-prop">--rv-font-display:</span>    <span class="tk-str">"Poppins", system-ui, sans-serif</span>; <span class="tk-cmt">/* headings, botões */</span><br>
<span class="tk-prop">--rv-font-body:</span>       <span class="tk-str">"DM Sans", system-ui, sans-serif</span>; <span class="tk-cmt">/* body, labels, UI */</span><br>
<span class="tk-prop">--rv-font-mono:</span>       <span class="tk-str">"JetBrains Mono", monospace</span>; <span class="tk-cmt">/* código, tokens, timestamps */</span><br>
<br>
<span class="tk-cmt">/* Border radius — botão é SEMPRE 4px */</span><br>
<span class="tk-prop">--rv-r-button:</span>        <span class="tk-val">4px</span>;<br>
<span class="tk-prop">--rv-r-md:</span>            <span class="tk-val">10px</span>; <span class="tk-cmt">/* inputs */</span><br>
<span class="tk-prop">--rv-r-lg:</span>            <span class="tk-val">16px</span>; <span class="tk-cmt">/* cards */</span><br>
<span class="tk-prop">--rv-r-xl:</span>            <span class="tk-val">24px</span>; <span class="tk-cmt">/* hero containers */</span><br>
<span class="tk-prop">--rv-r-pill:</span>          <span class="tk-val">999px</span>; <span class="tk-cmt">/* avatars, tags */</span><br>
<br>
<span class="tk-cmt">/* Motion */</span><br>
<span class="tk-prop">--rv-ease:</span>            <span class="tk-str">cubic-bezier(.2,.7,.1,1)</span>;<br>
<span class="tk-prop">--rv-dur-1:</span>           <span class="tk-val">120ms</span>; <span class="tk-cmt">/* hover, focus */</span><br>
<span class="tk-prop">--rv-dur-2:</span>           <span class="tk-val">200ms</span>; <span class="tk-cmt">/* card lift, modal open */</span><br>
<span class="tk-prop">--rv-dur-3:</span>           <span class="tk-val">320ms</span>; <span class="tk-cmt">/* page section reveal */</span><br>
<span class="tk-prop">--rv-dur-tab:</span>         <span class="tk-val">280ms</span>; <span class="tk-cmt">/* transições de tabs */</span><br>
<span class="tk-prop">--rv-dur-acc:</span>         <span class="tk-val">350ms</span>; <span class="tk-cmt">/* transições de accordion */</span><br>
<br>
<span class="tk-cmt">/* Semântico */</span><br>
<span class="tk-prop">--rv-success:</span>         <span class="tk-val">#34C759</span>;<br>
<span class="tk-prop">--rv-warning:</span>         <span class="tk-val">#F2C94C</span>;<br>
<span class="tk-prop">--rv-danger:</span>          <span class="tk-val">#EB5757</span>;
    </div>
  </div>
</section>

<!-- REAL RVOPS FOOTER -->
<footer style="background:var(--rv-bg-3);border-top:1px solid var(--rv-line-dark);padding:32px 0;text-align:center">
  <div class="container">
    <img src="../i/logo/logo-rvops-branca-footer.svg" alt="rvops" style="height:22px;margin:0 auto 16px;opacity:.6">
    <p style="font-family:var(--rv-font-mono);font-size:11px;color:rgba(255,255,255,.3)">Rvops Design System · mai 2026 · <a href="https://rvops.com/ui" style="color:var(--rv-orange)">rvops.com/ui</a></p>
  </div>
</footer>


<script>
// Navs scroll
const siteNav = document.getElementById('siteNav');
const dsNav = document.getElementById('dsNavBar');
window.addEventListener('scroll', () => {
  if (siteNav) siteNav.classList.toggle('scrolled', window.scrollY > 8);
}, { passive: true });

// Toast
const toast = document.getElementById('toast');
const toastMsg = document.getElementById('toastMsg');
let toastTimer;
function showToast(msg) {
  toastMsg.textContent = msg;
  toast.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove('show'), 1800);
}

// Copy command
const copyCmdEl = document.getElementById('copyCmd');
if (copyCmdEl) copyCmdEl.addEventListener('click', function() {
  const txt = document.getElementById('cmdText').textContent;
  navigator.clipboard.writeText(txt).then(() => {
    this.classList.add('copied');
    showToast('Comando copiado!');
    setTimeout(() => this.classList.remove('copied'), 1800);
  });
});

// Copy swatches
document.querySelectorAll('.swatch-chip[data-copy]').forEach(chip => {
  chip.title = 'Clique para copiar';
  chip.style.cursor = 'pointer';
  chip.addEventListener('click', () => {
    navigator.clipboard.writeText(chip.dataset.copy).then(() => showToast('Copiado: ' + chip.dataset.copy));
  });
});

// Active ds nav link
const sections = document.querySelectorAll('section[id]');
const dsLinks = document.querySelectorAll('.ds-nav-bar-links a');
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      dsLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + e.target.id));
    }
  });
}, { threshold: 0.25 });
sections.forEach(s => obs.observe(s));

// Client logo tabs
function switchClientView(view, btn) {
  document.querySelectorAll('.client-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  const carousel = document.getElementById('client-carousel-view');
  const grid = document.getElementById('client-grid-view');
  if (view === 'carousel') {
    carousel.style.display = 'block';
    grid.style.display = 'none';
  } else {
    carousel.style.display = 'none';
    grid.style.display = 'grid';
  }
}
// Motion boxes hover
document.querySelectorAll('[style*="transition:all"]').forEach(el => {
  el.addEventListener('mouseenter', () => {
    el.style.transform = 'translateY(-3px)';
    el.style.boxShadow = 'var(--rv-sh-glow)';
    el.style.borderColor = 'rgba(255,122,0,.4)';
  });
  el.addEventListener('mouseleave', () => {
    el.style.transform = '';
    el.style.boxShadow = '';
    el.style.borderColor = '';
  });
});

// Accordion Produtos
function toggleAccProd(trigger) {
  const panel = trigger.nextElementSibling;
  const isOpen = trigger.classList.contains('is-open');
  document.querySelectorAll('.acc-prod-trigger').forEach(t => {
    t.classList.remove('is-open');
    t.nextElementSibling.classList.remove('is-open');
  });
  if (!isOpen) {
    trigger.classList.add('is-open');
    panel.classList.add('is-open');
  }
}

// Accordion Demo
function toggleAccDemo(btn) {
  const panel = btn.nextElementSibling;
  const isOpen = btn.classList.contains('open');
  btn.classList.toggle('open', !isOpen);
  panel.classList.toggle('open', !isOpen);
}
function toggleAllAccDemo(btn) {
  const items = btn.closest('div').nextElementSibling.querySelectorAll('.acc-demo-btn');
  const anyOpen = [...items].some(b => b.classList.contains('open'));
  items.forEach(b => {
    b.classList.toggle('open', !anyOpen);
    b.nextElementSibling.classList.toggle('open', !anyOpen);
  });
  btn.textContent = anyOpen ? 'Abrir todos' : 'Fechar todos';
}

// Tabs lateral
function changeTabLat(idx) {
  document.querySelectorAll('.tab-lat-btn').forEach((b, i) => b.classList.toggle('active', i === idx));
  document.querySelectorAll('.tab-lat-panel').forEach((p, i) => p.classList.toggle('active', i === idx));
}

// Tabs horizontal
function changeTabHz(idx) {
  document.querySelectorAll('.tab-hz').forEach((t, i) => t.classList.toggle('active', i === idx));
  document.querySelectorAll('.tabs-hz-content').forEach((c, i) => c.classList.toggle('active', i === idx));
}

</script>

  <!-- JS -->
    <script defer src="../js/jquery-3.3.1.min.js"></script>
    <script defer src="../js/sticky-headings.js"></script>
    <script defer src="../js/script.js"></script>
    <!-- JS menu -->
    <script defer src="../js/menu.js"></script>
</body>
</html>
