# Rvops Design System

> Design system oficial da **Rvops** — plataforma brasileira de Revenue Operations que unifica Conversacional, Marketing, Vendas e CRM 360° em um único produto.

**Versão:** 2.3 · Maio 2026

---

## Arquivos

| Arquivo | Descrição |
|---|---|
| [`DESIGN.md`](./DESIGN.md) | Documentação completa — fonte de verdade para tokens, componentes e padrões |
| [`tokens.css`](./tokens.css) | Bloco `:root` com todos os custom properties `--rv-*` prontos para importar |
| [`design-system.php`](./design-system.php) | Página central com todos os tokens e componentes renderizados |
| [`brand.php`](./brand.php) | Página de identidade de marca |

---

## Como usar

### 1. Importar os tokens

```html
<link rel="stylesheet" href="tokens.css">
```

Ou via CSS:

```css
@import url('tokens.css');
```

### 2. Usar os custom properties

```css
.meu-componente {
  background: var(--rv-bg-2);
  color: var(--rv-text-on-dark-strong);
  border: 1px solid var(--rv-line-dark);
  border-radius: var(--rv-r-lg);
}

.meu-botao {
  background: var(--rv-grad-button);
  border-radius: var(--rv-r-button); /* sempre 4px */
  font-family: var(--rv-font-display);
  font-weight: 500;
}
```

### 3. Fontes

```html
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
```

---

## Princípios de design

- **Dark-first** — operadores ficam 8h/dia no CRM
- **Laranja como única cor de ação** — sem outros accents
- **Botões sempre `border-radius: 4px`** — nunca pill
- **Títulos `font-weight: 400`** — nunca 500+ em h1–h4
- **PT-BR primeiro**

---

## Paleta principal

| Token | Valor | Uso |
|---|---|---|
| `--rv-orange-cta` | `#FDB92E` | Botões, links, tags |
| `--rv-bg-1` | `#121212` | Canvas principal |
| `--rv-bg-2` | `#1E1E22` | Page background padrão |
| `--rv-bg-3` | `#222226` | Cards, footer, nav |
| `--rv-text-on-dark-strong` | `#FFFFFF` | Texto principal em dark |

---

## Agentes de IA

Ao gerar UI para Rvops, leia o `DESIGN.md` por completo. Os tokens `var(--rv-*)` são a única fonte de verdade — **nunca hardcode hex**.

```
"Use DESIGN.md. Crie [seção] para Rvops. Dark surface.
Títulos weight 400 + grad-title-mono. Stats: grad-title-mono.
Ícones: PNG rainbow fundo preto."
```

---

© 2026 Rvops Automação de Serviços Digitais · São Paulo, SP
