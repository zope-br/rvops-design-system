# DESIGN.md — Rvops

> Especificação de design para agentes de IA e humanos construindo UI da **Rvops** —
> plataforma brasileira de Revenue Operations que unifica Conversacional,
> Marketing, Vendas e CRM 360º em um único produto.
>
> **Leia este arquivo por completo antes de gerar qualquer UI.**
> Cada token, componente e padrão abaixo é a fonte de verdade.
> Nunca invente cores, fontes ou valores — use sempre `var(--rv-*)`.

---

## 1. Fundamentos de marca

### 1.1 Voz

Direto, confiante, plain-spoken. **PT-BR primeiro.** Fala em resultados, nunca em buzzwords.

| ✅ Escreva assim | ❌ Não escreva assim |
|---|---|
| "Funil de vendas em uma tela." | "Solução inovadora de ponta a ponta." |
| "Conecte WhatsApp em 4 minutos." | "Revolucione seu atendimento agora." |
| "18× mais rápido." | "Performance acima do mercado." |
| PT-BR primeiro, EN no `/en/` | Misturar idiomas na mesma frase |

### 1.2 Promessa

> Receita previsível, do primeiro toque ao fechamento.
> Marketing, vendas e atendimento no mesmo CRM.

### 1.3 Audiência

SMB e mid-market revenue teams no Brasil — operadores que alternam entre chat, dashboards e campanhas dezenas de vezes por dia.

### 1.4 Personalidade

Pragmático > vistoso. **Dark-first** — operadores ficam 8h/dia no CRM. Laranja aparece apenas onde existe ação: botões CTA, ícones-chave, gradiente de marca. Todo o resto é neutro.

---

## 2. Logo

Wordmark **rvops** em caixa baixa. O "o" carrega o gradiente arco-íris da marca — **nunca** substitua pelo laranja CTA.

| Arquivo | Uso |
|---|---|
| `Logo_white_color.png` | Fundo escuro **neutro** (preto, grafite). Padrão. |
| `Logo_white.png` | Fundo escuro **com cor** (foto, gradiente, ilustração). Totalmente branca. |
| `Logo_black_color.png` | Fundo claro (branco, cinza muito claro). |
| `Logo_black.png` | Mono — impressão, embossing, baixo contraste. |

**URLs de produção:**
- Header: `https://rvops.com/i/logo/logo-revops-branca.svg`
- Footer: `https://rvops.com/i/logo/logo-rvops-branca-footer.svg`

**Clear space.** Margem mínima = altura da letra `r` do wordmark, em todos os lados.

**Nunca:** logo branca sobre laranja sólido. Wordmark recolorido. Distorcer proporções.

---

## 3. Tokens de cor

A paleta é **estrita**. Existe exatamente **uma cor de ação** (laranja) e **uma base neutra escura**. Sem teal, mint, navy, magenta ou qualquer outro accent.

### 3.1 Primário — laranja

```css
--rv-orange:        #FF7A00;
--rv-orange-deep:   #DA6208;
--rv-orange-light:  #FFB066;
--rv-grad-button:   linear-gradient(to right, #DA6208, #FF7A00, #DA6208);
--rv-grad-icon:     linear-gradient(135deg, #DA6208 0%, #FF7A00 50%, #FFB066 100%);
```

### 3.2 Backgrounds

```css
--rv-bg-1:          #121212;
--rv-bg-2:          #1E1E22;
--rv-bg-3:          #222226;
--rv-bg-4:          #2E2E32;  /* hover surface, borders */
--rv-bg-light:      #FFFFFF;
--rv-bg-light-soft: #F4F4F5;
```

### 3.3 Texto

```css
--rv-text-on-dark:        #86868B;
--rv-text-on-dark-strong: #FFFFFF;
--rv-text-on-light:       #000000;
```

### 3.4 Gradientes de título

```css
--rv-grad-title-multi: linear-gradient(to right, #484747, #939393, #E9E9E9, #FFFBF4, #727272);
/* H1 (hero principal) — metálico escuro-para-claro */

--rv-grad-title-mono:  linear-gradient(to right, #FFFFFF, #998B8B);
--rv-degrade-text:     linear-gradient(to right, #FFFFFF, #998B8B); /* alias de --rv-grad-title-mono — usado via classe .degrade-text */
/* H2, H3, H4 e números de stat — branco para cinza */
```

> **Nunca laranja em títulos.**
> H1 → `--rv-grad-title-multi` · H2–H4 e stats → `--rv-grad-title-mono` (ou `.degrade-text`)

### 3.5 Brand rainbow gradient — uso restrito

```css
--rv-grad-brand: conic-gradient(from 90deg at 50% 50%,
  #F2C94C 0deg, #76C04E 60deg, #2D9CDB 120deg,
  #6E5BD3 180deg, #C84CA0 240deg, #EB5757 300deg,
  #F2994A 340deg, #F2C94C 360deg);

--rv-grad-brand-linear: linear-gradient(90deg,
  #F2994A, #F2C94C, #76C04E, #2D9CDB, #6E5BD3, #C84CA0, #EB5757);
```

**Permitido apenas em:** wordmark "o", app icon, ícones de produto PNG (§8.1), redes sociais, texto decorativo footer.
**Proibido em:** botões, body copy, ícones de apoio, backgrounds amplos.

### 3.6 Gray ramp (12 steps)

```css
--rv-gray-50:#F4F4F5;  --rv-gray-100:#E9E9E9; --rv-gray-200:#C9C9CC;
--rv-gray-300:#939393; --rv-gray-400:#86868B; --rv-gray-500:#727272;
--rv-gray-600:#484747; --rv-gray-700:#2E2E32; --rv-gray-800:#222226;
--rv-gray-900:#1E1E22; --rv-gray-950:#121212;
--rv-line-dark:#2E2E32; --rv-line-light:#E9E9E9;
```

### 3.7 Semântico

```css
--rv-success: #34C759;
--rv-warning: #F2C94C;
--rv-danger:  #EB5757;
```

---

## 4. Tipografia

- **Poppins** — display, headings h1–h6, eyebrows. Peso padrão: **400** (não 500+ exceto eyebrows e labels de UI).
- **DM Sans** — body, labels, tabular data, UI geral. Peso: **400**.
- **JetBrains Mono** — código, IDs, tokens, timestamps.

```css
--rv-font-display: "Poppins", system-ui, sans-serif;
--rv-font-body:    "DM Sans", system-ui, sans-serif;
--rv-font-mono:    "JetBrains Mono", monospace;
```

### 4.1 Escala marketing

| Token | Size | Weight | Line-height | Tracking | Uso |
|---|---|---|---|---|---|
| `display` | 72px | **400** | 1.1 | −0.025em | Hero principal |
| `h1` | 64px | **400** | 1.2 | −0.025em | Page title — **`--rv-grad-title-multi`** (metálico) |
| `h2` | 48px | **400** | 1.2 | −0.02em | Section opener — **`--rv-grad-title-mono`** |
| `h3` | 32px | **400** | 1.4 | −0.015em | Subsection — **`--rv-grad-title-mono`** |
| `h4` | 24px | **400** | 1.4 | −0.01em | Card title — **`--rv-grad-title-mono`** |
| `h5` | 18px | **400** | 1.5 | 0 | Subtítulo menor |
| `h6` | 16px | **400** | 1.5 | 0 | Label de grupo |
| `body-lg` | 18px | 400 | 1.5 | 0 | Lead paragraph |
| `body` | 16px | 400 | 1.5 | 0 | Default body |
| `eyebrow` | 12px | 500 | 1.4 | +0.18em uppercase | Acima de títulos, cor `--rv-orange` |

> **Regra de cor:** H1 usa **`--rv-grad-title-multi`** (metálico escuro→claro). H2, H3, H4 usam **`--rv-grad-title-mono`** (branco→cinza). Todos via `background-clip: text`. Nunca laranja sólido em títulos.

### 4.2 Line-height padrão

```css
h1, h2       { line-height: 1.2; font-weight: 400; }
h3, h4       { line-height: 1.4; font-weight: 400; }
h5, h6       { line-height: 1.5; font-weight: 400; }
p, span, a, strong { line-height: 1.5; font-weight: 400; }
/* Exceção: classes .cinza, .text-muted e similares mantêm seus pesos */
```

> **Nunca usar font-weight 600 em títulos.** Nunca 700+ exceto ênfase editorial explícita em corpo de texto.

---

## 5. Espaçamento & Layout

### 5.1 Grid de 4 pontos

```css
--rv-sp-1:4px; --rv-sp-2:8px; --rv-sp-3:12px; --rv-sp-4:16px;
--rv-sp-5:20px; --rv-sp-6:24px; --rv-sp-8:32px; --rv-sp-10:40px;
--rv-sp-12:48px; --rv-sp-16:64px; --rv-sp-20:80px; --rv-sp-24:96px;
```

Container: `1200px`. Wide: `1320px`. Grid: 12 cols, gap 24px.
Ritmo vertical: seções respiram em **80–96px** em desktop.

### 5.2 Border radius

```css
--rv-r-button: 4px;   /* botões — NUNCA pill, NUNCA > 8px */
--rv-r-xs:     4px;
--rv-r-sm:     6px;
--rv-r-md:     10px;  /* inputs */
--rv-r-lg:     16px;  /* cards */
--rv-r-xl:     24px;  /* hero containers */
--rv-r-pill:   999px; /* avatars, tags */
```

> **Botão Rvops é sempre 4px. Imutável.**

### 5.3 Elevação

```css
--rv-sh-1:     0 1px 2px rgba(0,0,0,.30);
--rv-sh-2:     0 4px 12px rgba(0,0,0,.32);
--rv-sh-3:     0 12px 32px rgba(0,0,0,.40);
--rv-sh-4:     0 24px 64px rgba(0,0,0,.50);
--rv-sh-glow:  0 8px 32px rgba(255,122,0,.32);
--rv-sh-focus: 0 0 0 3px rgba(255,122,0,.40);
```

---

## 6. Componentes

### 6.1 Button

```css
.rv-btn-primary {
  background: var(--rv-grad-button);
  color: #FFFFFF;
  font: 500 15px/1 var(--rv-font-display);   /* buttons usam font-weight 500 */
  height: 44px; padding: 0 22px;
  border-radius: 4px; /* imutável */
  border: 1px solid transparent;
}
.rv-btn-primary:hover { filter: brightness(1.08); box-shadow: var(--rv-sh-glow); }
```

Variantes: `primary` · `secondary` · `ghost` (border + texto laranja) · `text` · `nav-cta` (38h, 14px, laranja gradient).
Sizes: sm 32h · md 44h · lg 52h.

> **Botão de nav (Demonstração):** usa o mesmo padrão `primary` com altura 38px — verificar que o botão no menu coincide com a classe `.btn.sm.action-2` do css-rvops.

### 6.1.1 Links inline orange (sem caixa de botão)

Links laranja em texto corrido usam apenas `color: var(--rv-orange)` e **sempre terminam com** `<i class="fa-solid fa-angle-right f-16" aria-hidden="true"></i>`. Nunca usar `→` ou `↗` como caractere literal nesses links.

### 6.2 Input

```css
.rv-input {
  height: 44px; padding: 0 14px;
  border-radius: 10px; border: 1px solid var(--rv-line);
  background: var(--rv-page-bg); color: var(--rv-text);
  font: 400 15px var(--rv-font-body);
}
.rv-input:focus { border-color: var(--rv-orange); box-shadow: var(--rv-sh-focus); outline: 0; }
```

### 6.3 Card

```css
.rv-card {
  background: var(--rv-surface-raised); border: 1px solid var(--rv-line);
  border-radius: 16px; padding: 24px;
  transition: transform 200ms, box-shadow 200ms, border-color 200ms;
}
.rv-card:hover { transform: translateY(-2px); box-shadow: var(--rv-sh-2); border-color: rgba(255,122,0,.3); }
```

### 6.4 Badge / Tag

Pill 999px. DM Sans 600, 11px, uppercase, tracking +0.06em. H 24px.

### 6.5 Nav — Marketing

68–72h sticky. Background `rgba(18,18,18,.94)` + `backdrop-filter: saturate(140%) blur(12px)`.
Logo `https://rvops.com/i/logo/logo-revops-branca.svg` (24–26h).
Links: Poppins 500, 14px, branco → laranja no hover.
CTA pair: text (Login) + primary (Demonstração). Radius 4px.

### 6.6 Accordion

Dois estilos — nunca misturar na mesma página.

**Variante Produtos** (seta `▶` rotaciona 90° ao abrir) — padrão da página conversacional:

```css
.acc-prod-trigger {
  display: flex; align-items: center; gap: 12px; padding: 16px 20px;
  background: var(--rv-bg-3); border: 1px solid var(--rv-line);
  border-radius: var(--rv-r-md);
  font: 400 14px var(--rv-font-display); color: var(--rv-text);
  border: none; width: 100%; cursor: pointer;
  transition: background 350ms var(--rv-ease), border-color 350ms var(--rv-ease);
}
.acc-prod-trigger:hover { background: var(--rv-bg-4); border-color: rgba(255,122,0,.3); }
.acc-prod-trigger.is-open { border-color: rgba(255,122,0,.3); }
.acc-prod-arrow { font-size: 14px; color: var(--rv-orange); transition: transform 350ms var(--rv-ease); }
.acc-prod-trigger.is-open .acc-prod-arrow { transform: rotate(90deg); }
.acc-prod-panel { max-height: 0; overflow: hidden; transition: max-height 350ms var(--rv-ease); }
.acc-prod-panel.is-open { max-height: 240px; padding: 14px 20px 18px 44px; }
```

**Variante Demo** (`+` rotaciona para `×`, "Abrir/fechar todos"):

```css
.acc-demo { border: 1px solid var(--rv-line); border-radius: var(--rv-r-lg); overflow: hidden; }
.acc-demo-btn {
  width: 100%; background: none; border: none; padding: 16px 20px;
  display: flex; justify-content: space-between; align-items: center;
  font: 400 14px var(--rv-font-display); color: var(--rv-text); cursor: pointer;
}
.acc-demo-btn::after { content: '+'; font-size: 18px; color: var(--rv-text-muted); transition: transform 350ms var(--rv-ease), color 120ms; }
.acc-demo-btn.open::after { transform: rotate(45deg); color: var(--rv-orange); }
.acc-demo-panel { max-height: 0; overflow: hidden; font-size: 14px; color: var(--rv-text-muted); transition: max-height 350ms var(--rv-ease); }
.acc-demo-panel.open { max-height: 120px; }
```

### 6.7 Tabs

**Lateral** (grid 220px + 1fr, border-left laranja no ativo):

```css
.tabs-lat-wrap { display: grid; grid-template-columns: 220px 1fr; gap: 24px; }
.tab-lat-btn {
  padding: 12px 16px; border: none; border-left: 2px solid transparent;
  background: none; border-radius: var(--rv-r-md);
  font: 400 14px var(--rv-font-display); color: var(--rv-text-muted); cursor: pointer;
  transition: background 280ms var(--rv-ease), color 280ms var(--rv-ease);
}
.tab-lat-btn.active { border-left-color: var(--rv-orange); background: var(--rv-surface-raised); color: var(--rv-text); }
.tab-lat-panel { display: none; padding: 24px; background: var(--rv-surface-raised); border-radius: var(--rv-r-lg); }
.tab-lat-panel.active { display: block; }
```

**Horizontal** (border-bottom laranja no ativo):

```css
.tabs-hz-nav { list-style: none; display: flex; border-bottom: 1px solid var(--rv-line); }
.tab-hz {
  padding: 12px 20px; border-bottom: 2px solid transparent; margin-bottom: -1px;
  font: 400 14px var(--rv-font-display); color: var(--rv-text-muted); cursor: pointer;
  transition: color 280ms var(--rv-ease), border-color 280ms var(--rv-ease);
}
.tab-hz.active { color: var(--rv-text); border-bottom-color: var(--rv-orange); }
.tabs-hz-content { display: none; font-size: 15px; color: var(--rv-text-muted); }
.tabs-hz-content.active { display: block; }
/* h4 dentro do conteúdo usa grad-title-mono, font-weight 400 */
```

### 6.8 Breadcrumb

```css
.breadcrumb { display: flex; align-items: center; gap: 6px; list-style: none; font-size: 13px; color: var(--rv-text-muted); }
.breadcrumb a { color: var(--rv-text); transition: color 120ms; }
.breadcrumb a:hover { color: var(--rv-orange); }
.breadcrumb .sep { opacity: .4; }
.breadcrumb .current { color: var(--rv-text); font-weight: 500; }
```

Separador: `›`. Último item usa `.current` (sem `<a>`).

### 6.9 Pricing Card

```css
.price-card {
  background: var(--rv-bg-3); border: 1px solid var(--rv-line-dark);
  border-radius: 20px; padding: 28px; display: flex; flex-direction: column; gap: 14px; position: relative;
}
.price-card.popular { border-color: var(--rv-orange); box-shadow: var(--rv-sh-glow); }
.popular-pill {
  position: absolute; top: -12px; left: 24px;
  background: var(--rv-grad-button); color: #fff; padding: 4px 12px;
  border-radius: 999px; font: 600 10px var(--rv-font-display); text-transform: uppercase; letter-spacing: .06em;
}
.price-card .amount { font: 600 40px/1 var(--rv-font-display); color: #fff; letter-spacing: -0.02em; }
.price-card li { font-size: 13px; color: #fff; padding-left: 22px; position: relative; }
.price-card li::before { /* checkmark laranja: border-left + border-bottom rotacionado -45deg */ }
```

Variante popular: badge `.popular-pill` com `--rv-grad-button`, posição `top: -12px`.

### 6.10 CTA — quatro variantes

**Banner** — centralizado, glow radial laranja no centro:

```css
.cta-banner {
  background: var(--rv-bg-1); border: 1px solid var(--rv-line-dark);
  border-radius: var(--rv-r-xl); padding: 64px; text-align: center; overflow: hidden;
}
/* h2/h3 usa grad-title-mono, font-weight 400 */
/* ::after — radial-gradient rgba(255,122,0,.12) centrado */
```

**Split** — texto + placeholder de imagem, 50/50:

```css
.cta-split {
  background: var(--rv-surface); border: 1px solid var(--rv-line);
  border-radius: var(--rv-r-xl); padding: 40px;
  display: grid; grid-template-columns: 1fr 1fr; gap: 32px; align-items: center;
}
/* h3 usa grad-title-mono, 32px font-weight 400 */
```

**Amber** — linha laranja 3px no topo, border com opacidade:

```css
.cta-amber {
  background: var(--rv-surface); border: 1px solid rgba(255,122,0,.2);
  border-radius: var(--rv-r-xl); padding: 48px; text-align: center;
}
.cta-amber::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: var(--rv-grad-button); }
```

**WhatsApp Split** — idêntico ao Split, mas com botão verde:

```css
.btn-wa {
  display: inline-flex; align-items: center; gap: 8px;
  height: 44px; padding: 0 22px; background: #25D366; color: #fff;
  border: none; border-radius: 4px; font: 600 15px var(--rv-font-body); cursor: pointer;
}
.btn-wa:hover { filter: brightness(1.08); }
```

### 6.11 Stat Box — grid 4 colunas

Variante compacta para seções internas (diferente do `.stat-card` da §7.4):

```css
.stat-box-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.stat-box { background: var(--rv-surface); border: 1px solid var(--rv-line); border-radius: var(--rv-r-lg); padding: 24px 20px; }
.stat-box-num {
  font-size: 56px; line-height: 1; font-weight: 400; font-family: var(--rv-font-display);
  background: var(--rv-grad-title-mono); -webkit-background-clip: text; background-clip: text; color: transparent;
  margin-bottom: 8px;
}
.stat-box-label { font-size: 14px; font-weight: 400; font-family: var(--rv-font-display); color: var(--rv-text); margin-bottom: 4px; }
.stat-box-desc { font-size: 13px; color: var(--rv-text-muted); line-height: 1.5; }
```

Mobile: colapsa para 2 colunas em `max-width: 768px`.

### 6.12 Toast

Feedback efêmero de ação (ex: "Copiado!"). Aparece fixed no bottom-center.

```css
.toast {
  position: fixed; bottom: 24px; left: 50%;
  transform: translateX(-50%) translateY(12px);
  background: var(--rv-bg-3); border: 1px solid var(--rv-line-dark);
  font: 12px var(--rv-font-mono); padding: 10px 18px;
  border-radius: var(--rv-r-pill); box-shadow: var(--rv-sh-3);
  opacity: 0; pointer-events: none; z-index: 9999;
  transition: all 200ms var(--rv-ease);
}
.toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }
.toast-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--rv-success); }
```

---

## 7. Padrões de página

### 7.1 Hero

60/40 desktop. `eyebrow` → `h1 (grad-title-mono, weight 400)` → `body-lg` → `CTA pair` → `trust line`.
Bg `--rv-bg-1`. Glow radial laranja top-right.

### 7.2 Logo strip de clientes

**Carrossel (padrão da home):** animação `translateX` infinita, 22s, pausa no hover. Logos em pills bg `--rv-bg-3`, border `--rv-line-dark`, radius 12px, h 52px. Imagens: grayscale + brightness 1.4, full color no hover.

Logos disponíveis em `https://rvops.com/i/clientes-home/`:
`2.png` (Solides) · `9.png` (Doctoralia) · `3.png` (Suno) · `16.png` (Eletromidia) · `8.png` (Loja Integrada) · `6.png` (Minimal) · `15.png` (Estacio) · `1.png` (Cartão de Todos) · `11.png` (Autoglass) · `logo-nord-investimentos.png` · `logo--softplan.png` · `logo-allp-fit.png` · `logo-300-franchising.png` · `logo--unisa.png`

**Grid:** 7 colunas, gap 10px.

### 7.3 Feature pillars

Card bg `--rv-bg-3`, border `--rv-line-dark`, radius 20px. Ícone: PNG rainbow/preto 48–56px (§8.1). Título do card (h4): `--rv-grad-title-mono`, `font-weight: 400`.

### 7.4 Stats showcase

```css
.stat {
  font: 400 64px/1 var(--rv-font-display);
  background: var(--rv-grad-title-mono); /* BRANCO → CINZA, nunca laranja */
  -webkit-background-clip: text; background-clip: text; color: transparent;
}
```

### 7.5 Testimonial

Card bg `--rv-bg-3`, radius 24px. Grid 60/40: quote + stat-box.
Stat-box bg `--rv-bg-1`. Número: `--rv-grad-title-mono`.

### 7.6 Footer

Bg `--rv-bg-3` (#222226) — **sempre, sem exceção**.
Logo: `https://rvops.com/i/logo/logo-rvops-branca-footer.svg`.
Grid 5 colunas: brand + Produto + Compare + Empresa + Atendimento.
Links: `rgba(255,255,255,.55)`. Hairline: `rgba(255,255,255,.08)`.
Copyright: "© 2026 Rvops Automação de Serviços Digitais · Av. Brig. Faria Lima, 1811 · São Paulo, SP".

### 7.7 Pairing de superfície

| Surface | Background | Texto | Texto forte | Border |
|---|---|---|---|---|
| Marketing dark | `--rv-bg-1` | `--rv-text-on-dark` | `--rv-text-on-dark-strong` | `--rv-line-dark` |
| Marketing light | `--rv-bg-light` | `--rv-gray-500` | `--rv-text-on-light` | `--rv-line-light` |
| Footer | `--rv-bg-3` | `rgba(255,255,255,.55)` | `#FFFFFF` | `rgba(255,255,255,.08)` |

---

## 8. Iconografia

O site usa **três famílias de ícone** com contextos distintos. Nunca misturar estilos na mesma seção.

### 8.1 Produto — PNG rainbow sobre fundo preto

PNG 48–64px. Fundo `#000`. Traço/fill com gradiente arco-íris.
**Uso:** nav de soluções, pilares de produto, destaques editoriais.

URLs de produção:
- `https://rvops.com/i/icons/icon-conversacional.png`
- `https://rvops.com/i/icons/icon-marketing.png`
- `https://rvops.com/i/icons/icon-sales.png`
- `https://rvops.com/i/icons/icone-crm.png`
- `https://rvops.com/i/icons/icone-ia-menu.png`

**Nunca recolorir. Nunca usar outline monocromático neste papel.**

### 8.2 Features — PNG circular sobre fundo escuro

PNG 35–44px. Fundo `--rv-bg-1` ou `--rv-bg-2`, border `--rv-line-dark`, radius 14px.
**Uso:** seções de features/benefícios de produto (ex: CoEx, Spread).

URLs de produção:
- `https://rvops.com/i/icons/icone-coex-1.png` … `icone-coex-7.png`
- `https://rvops.com/i/icons/icone-spread-1.png` … `icone-spread-13.png`

### 8.3 Apoio / Menu — PNG monocromático

PNG simples, sem cor de brand, traço leve.
**Uso:** menu de navegação, listas auxiliares, helpers, tooltips.

URLs de produção:
- `https://rvops.com/i/icons/icone-menu-produtos.png`
- `https://rvops.com/i/icons/icone-menu-recursos.png`
- `https://rvops.com/i/icons/icone-menu-suporte.png`
- (demais `icone-menu-*.png`)

Status indicators: sempre **filled dots**, nunca outlined.

---

## 9. Motion

```css
--rv-ease:    cubic-bezier(0.2, 0.7, 0.1, 1);
--rv-dur-1:   120ms;  /* hover, focus */
--rv-dur-2:   200ms;  /* card lift, modal */
--rv-dur-3:   320ms;  /* section reveal */
--rv-dur-nav: 180ms;  /* transições de nav */
--rv-dur-tab: 280ms;  /* transições de tabs */
--rv-dur-acc: 350ms;  /* transições de accordion */
```

Nunca > 600ms. Sempre respeitar `prefers-reduced-motion`.

---

## 10. Do / Don't

### ✅ Do

- Poppins para headings, DM Sans para corpo.
- `--rv-orange` como única cor de ação.
- Rainbow: wordmark "o", ícones PNG de produto, app icon, social.
- Dark-first — light apenas em login, pricing, blog.
- Botões: 4px de raio. Sempre. `font-weight: 500`.
- Whitespace 80–96px entre seções.
- Números de stat: `--rv-grad-title-mono` (branco→cinza). `font-weight: 400`.
- H1: `--rv-grad-title-multi` + `font-weight: 400`. H2–H4: `--rv-grad-title-mono` + `font-weight: 400`.
- Footer: sempre `--rv-bg-3`.
- Logo correta em cada contexto (ver §2).
- `var(--rv-*)` — nunca hardcode hex.
- Links orange sem box: terminar com `<i class="fa-solid fa-angle-right">`.
- Accordion e tabs: transition ≥ 280ms para accordion-demo, 350ms para accordion-produtos.

### ❌ Don't

- Rainbow em body copy, separadores ou ícones de apoio.
- Outros accents além do laranja.
- Botões pill (radius > 8px).
- Recolorir wordmark.
- `--rv-grad-button` (laranja) em números de stat ou títulos.
- Títulos em weight 500 ou 600. Padrão é **400**.
- Títulos em weight 700+ sem ênfase editorial explícita.
- Ícones de produto em outline monocromático.
- Texto < 14px em UI geral.
- `→`, `↗`, `↓` como texto literal em links — usar o ícone FA.
- Nav com botão "Demonstração" diferente do padrão `.btn.sm.action-2`.

---

## 11. Contrato para agentes de IA

1. Importar `:root` completo (§3–5) via `var(--rv-*)`.
2. Fontes: Poppins (300–800), DM Sans (variable), JetBrains Mono.
3. HTML semântico: `<header>`, `<main>`, `<section>`, `<footer>`.
4. Declarar surface — seguir pairing §7.7.
5. CTA: `--rv-grad-button` + `border-radius: 4px`.
6. Footer: `--rv-bg-3` + `logo-rvops-branca-footer.svg`.
7. Rainbow: apenas nos 5 usos de §3.5.
8. Ícones de produto: PNG rainbow fundo preto (§8.1).
9. Stat numbers: `--rv-grad-title-mono`, nunca laranja.
10. Títulos: weight **400**. Nunca 500+ em h1–h4.
11. PT-BR primeiro.

---

## 12. Arquivos

| Arquivo | Conteúdo |
|---|---|
| `DESIGN.md` | Este arquivo — fonte de verdade |
| `tokens.css` | Bloco `:root` com todos os `--rv-*` |
| `design-system.php` | Página central — todos os tokens e componentes |

---

## 13. Prompts prontos

**Nova seção:**
> "Use DESIGN.md. Crie [Features/Pricing/Stats] para Rvops. Dark surface.
> Títulos weight 400 + grad-title-mono. Stats: grad-title-mono. Ícones: PNG rainbow fundo preto."

**Navbar:**
> "Use DESIGN.md. Sticky 68h. Bg rgba(18,18,18,.94) blur(12px).
> Logo logo-revops-branca.svg. Links Poppins 500 14px. Login + Demonstração."

**Hero:**
> "Use DESIGN.md. Bg --rv-bg-1. H1 grad-title-mono weight 400. CTA pair."

**Footer:**
> "Use DESIGN.md. Bg --rv-bg-3. Logo logo-rvops-branca-footer.svg.
> 5 colunas. Links rgba(255,255,255,.55)."

---

_Versão 2.3 · maio 2026 · rvops.com/ui · awesome-design-md_
