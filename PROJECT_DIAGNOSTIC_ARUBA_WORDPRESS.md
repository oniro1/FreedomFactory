# Diagnostica progetto — Aruba WordPress
> Audit tecnico · Versione 2.1 · Aggiornato: 25/05/2026  
> Scope: `www.studiolegalefreedomfactory.it/` (cartella locale Windows)

---

## 1. Stato generale

Il progetto è un sito per uno studio legale (Freedom Factory) che usa un approccio a **immagini wrapped**: ogni pagina interna è un PNG definitivo 1:1 con il design grafico, servito dentro un container scalato via JS. Esiste un'installazione WordPress reale (database attivo su `31.11.39.188`, child theme `astrachild-astra-child`, plugin Elementor, Astra).

### Architettura attuale (scelta definitiva)
Il progetto adotta un **doppio binario statico + PHP thin wrapper**:

- **HTML files** (`root/*.html`) — source of truth. Pagine complete autonome: DOCTYPE, head, mobile menu, image-wrap, OCR, cookie banner. Funzionano come sito statico standalone e sono il riferimento per ogni modifica di contenuto.
- **PHP thin wrappers** (`root/*.php`) — 8 righe ciascuno: `include __DIR__ . '/[page].html'; exit;`. Serviti da Apache senza passare per WordPress, abilitano routing su Aruba.
- **PHP templates** (`child theme/*.php`) — variante con `include ABSPATH . '[page].html'; exit;`. Assegnabili come WordPress Page Template dal pannello admin.
- **Child theme** (`astrachild-astra-child`) — gestisce homepage via `front-page.php` e carica assets WordPress (main.css, pages.css, mockup-pages.css, ocr-overlays.js).

---

## 2. Percentuale di completamento

**Il progetto è circa al 92% verso una pubblicazione su Aruba WordPress.**

| Area | Stato | % |
|---|---|---|
| Design / immagini definitive | ✅ Completo | 100% |
| HTML statico navigabile | ✅ Completo | 100% |
| PHP thin wrappers (root) | ✅ Completo | 100% |
| PHP templates (child theme) | ✅ Completo | 100% |
| Child theme integrazione | ✅ CSS/JS/assets copiati | 95% |
| Immagini ottimizzate (WebP) | ✅ 34MB → 10MB (-71%) | 100% |
| OCR / testo selezionabile (6 pagine) | ✅ Collegato e funzionante | 100% |
| OCR dati per note-legali/privacy/cookies | ❌ Dati non ancora generati | 0% |
| Blog (link esterno) | ⚠️ Disabilitato, URL non definito | 30% |
| Sicurezza pre-deploy | ✅ ver.php eliminato | 95% |
| Hotspot interni alle immagini | ⚠️ Solo nav overlay, nessun hotspot | 40% |
| SEO / testo selezionabile | ⚠️ OCR su 6 pagine, 3 mancanti | 65% |
| Homepage cookie banner | ✅ Completo — una volta sola, allineato email | 100% |
| Email studio in homepage | ✅ Visibile desktop + mobile, coperta da cookie | 100% |
| GitHub push | ⚠️ In sospeso (bash timeout) | 0% |

---

## 3. Come visualizzare in locale

### Sito statico (raccomandato, niente PHP)
```powershell
cd "C:\Users\aless\Desktop\Avvocato Moffa\www.studiolegalefreedomfactory.it"
python -m http.server 8080
```
Poi apri `http://localhost:8080/studio.html` — gli HTML funzionano direttamente.

### Con PHP (per testare i thin wrapper .php)
Richiede PHP installato (XAMPP o simile):
```powershell
php -S localhost:8080
```
Poi naviga su `http://localhost:8080/studio.php`.

---

## 4. Architettura file

### HTML files (source of truth)
| File | Stato | OCR | WebP |
|---|---|---|---|
| `index.html` | ✅ Homepage con cookie banner + email | n/a | n/a |
| `index-nocookie.html` | ✅ Copia di riferimento (= index.html senza banner attivo) | n/a | n/a |
| `index-original.html` | ✅ Backup dell'index originale pre-sprint | n/a | n/a |
| `studio.html` | ✅ Completo | ✅ Collegato | ✅ |
| `professionisti.html` | ✅ Completo | ✅ Collegato | ✅ |
| `settori.html` | ✅ Completo (scrollable) | ✅ Collegato | ✅ |
| `metodo.html` | ✅ Completo | ✅ Collegato | ✅ |
| `tariffe.html` | ✅ Completo | ✅ Collegato | ✅ |
| `sedi.html` | ✅ Completo | ✅ Collegato | ✅ |
| `note-legali.html` | ✅ Completo | ❌ Dati OCR mancanti | ✅ |
| `privacy-policy.html` | ✅ Completo (scrollable) | ❌ Dati OCR mancanti | ✅ |
| `cookies.html` | ✅ Completo | ❌ Dati OCR mancanti | ✅ |
| `blog.html` | ⚠️ Link disabilitato (#) | n/a | n/a |

### PHP thin wrappers (root — accesso diretto, bypassa WP)
Tutti i 9 file hanno il formato:
```php
<?php /* Template Name: X */ include __DIR__ . '/[page].html'; exit; ?>
```

### PHP templates (child theme — assegnabili da WP admin)
Tutti i 9 file hanno il formato:
```php
<?php /* Template Name: X */ include ABSPATH . '[page].html'; exit; ?>
```

---

## 5. Immagini

### Desktop (`assets/pages/desktop/`)
| Pagina | PNG originale | WebP ottimizzato | Risparmio |
|---|---|---|---|
| studio | 438 KB | 402 KB | 8% |
| professionisti | 6,404 KB | 498 KB | 92% |
| settori | 1,440 KB | 1,221 KB | 15% |
| metodo | 602 KB | 559 KB | 7% |
| tariffe | 552 KB | 511 KB | 7% |
| sedi | 7,348 KB | 644 KB | 91% |
| note-legali | 280 KB | 230 KB | 18% |
| privacy-policy | 1,832 KB | 1,735 KB | 5% |
| cookies | 372 KB | 334 KB | 10% |

### Mobile (`assets/pages/mobile/`)
Tutti presenti in WebP. `privacy-policy` mobile ridimensionata da 804×23502 → 560×16383 (limite WebP).

**Totale: 34 MB PNG → 10 MB WebP (-71%)**

---

## 6. Sistema OCR

Il sistema OCR consente la selezione del testo sovrapposto alle immagini (per SEO e accessibilità).

### Componenti
- `js/ocr-overlays.js` — script che posiziona parole selezionabili sopra l'immagine
- `assets/ocr/overlays.json` — coordinate OCR per parola
- `style/mockup-pages.css` — CSS per il layer OCR

### Integrazione nelle pagine
Le 6 pagine con dati OCR hanno nella loro struttura HTML:
- `<link rel="stylesheet" href="./style/mockup-pages.css" />`
- Classe `mockup-page page-[nome]` sul `.viewport-wrapper`
- Classe `mockup-stage` sul `.page-img-wrap`
- Classe `mockup-art` sull'`<img>` desktop
- `<div class="selectable-text-layer"></div>` dentro `.page-img-wrap`
- `<script src="./js/ocr-overlays.js" defer></script>` prima di `</html>`

### Stato dati
| Pagina | Parole desktop | Parole mobile | Collegato |
|---|---|---|---|
| studio | 175 | 176 | ✅ |
| professionisti | 63 | 120 | ✅ |
| settori | 586 | 577 | ✅ |
| metodo | 249 | 240 | ✅ |
| tariffe | 220 | 217 | ✅ |
| sedi | 101 | 104 | ✅ |
| note-legali | ❌ | ❌ | ❌ |
| privacy-policy | ❌ | ❌ | ❌ |
| cookies | ❌ | ❌ | ❌ |

---

## 7. Homepage — sistema cookie banner + email

### Comportamento
- **Cookie banner**: mostrato solo al primo accesso al sito. Dopo aver cliccato "Accetto", il flag `cookiesAccepted: true` viene scritto in `localStorage` e il banner non viene più mostrato su nessuna pagina.
- **Email studio** (`Info@studiolegalefreedomfactory.it`): visibile nell'area in basso della homepage. Il cookie banner la copre esattamente finché non viene accettato.

### Posizionamento banner
Il banner usa `position: fixed` con `bottom/left/width` calcolati dinamicamente da `alignCookieBanner()` in `index.html`:
- **Desktop**: il banner si allinea orizzontalmente alla `.studio-email` (tronca ai bordi sinistro/destro dell'elemento email, non copre copyright né privacy policy)
- **Mobile**: il banner si allinea alla `.studio-email-mobile`
- **Scroll**: quando l'email scorre fuori viewport (in qualsiasi direzione), il banner si riposiziona in full-width a `bottom: 0`

```javascript
function alignCookieBanner() {
  const isMobile = window.innerWidth <= 440;
  const emailEl = isMobile
    ? document.querySelector('.studio-email-mobile')
    : document.querySelector('.studio-email:not(.studio-email-mobile)');
  const banner = document.querySelector('.cookie-banner');
  const rect = emailEl.getBoundingClientRect();
  const fromBottom = window.innerHeight - rect.bottom;
  if (fromBottom < 0 || rect.bottom < 0) {
    banner.style.bottom = '0px'; banner.style.left = '0px'; banner.style.width = '100%';
    return;
  }
  banner.style.bottom = fromBottom + 'px';
  banner.style.left   = rect.left + 'px';
  banner.style.width  = rect.width + 'px';
}
```

### Layout email
- **Desktop**: in griglia CSS, riga `"copyright studio-email privacy"` — centrata tra copyright e privacy policy
- **Mobile**: `div.studio-email-mobile` posizionato nel DOM subito dopo `div.social-mobile`, testo piano senza box

### Design banner
Sfondo nero pieno (`background-color: #000`), layout a riga singola (`flex-direction: row`), testo + bottoni in una sola linea.

### Come resettare il cookie (dev/test)
```javascript
localStorage.removeItem('cookiesAccepted'); location.reload();
```

---

## 8. Child theme — stato attuale

### `functions.php` — enqueue completo
```
ff-main-style       → style/main.css
ff-pages-style      → style/pages.css
ff-mockup-style     → style/mockup-pages.css
ff-main-script      → js/main.js
ff-ocr-overlays     → js/ocr-overlays.js
custom-script       → js/custom.js (con file_exists guard, bug get_template_directory_uri corretto)
```

### File presenti nel child theme
```
astrachild-astra-child/
├── style/
│   ├── main.css
│   ├── pages.css          ← aggiunto
│   └── mockup-pages.css   ← aggiunto
├── js/
│   ├── main.js
│   ├── custom.js
│   └── ocr-overlays.js    ← aggiunto
├── assets/
│   ├── pages/
│   │   ├── desktop/*.webp ← aggiunti (9 file)
│   │   └── mobile/*.webp  ← aggiunti (9 file)
│   ├── ocr/overlays.json  ← aggiunto
│   └── [altri asset precedenti]
├── [studio|professionisti|settori|metodo|tariffe|sedi|note-legali|privacy-policy|cookies].php ← aggiunti
├── front-page.php
├── functions.php
└── style.css
```

---

## 8. Sicurezza

| Issue | Stato |
|---|---|
| `ver.php` (phpinfo pubblico) | ✅ Eliminato |
| `xmlrpc.php` attivo | ⚠️ Raccomandato disabilitare via .htaccess |
| `readme.html` WordPress core visibile | ⚠️ Bloccare via .htaccess |

Per disabilitare xmlrpc e readme, aggiungere in `.htaccess`:
```apache
<Files xmlrpc.php>
  Order Deny,Allow
  Deny from all
</Files>
<Files readme.html>
  Order Deny,Allow
  Deny from all
</Files>
```

---

## 10. Problemi aperti

### 🔴 Da fare per il launch

1. **Blog URL**: definire l'URL del blog esterno e sostituire `href="#"` (cerca `pointer-events:none` nei menu di tutti gli HTML). Attualmente il link BLOG è visivamente disabilitato (opacity 0.4).

2. **GitHub push**: completare il push su `https://github.com/oniro1/FreedomFactory.git` — i tentativi via bash hanno dato timeout. Farlo manualmente con GitHub Desktop o terminale:
   ```bash
   cd "C:\Users\aless\Desktop\Avvocato Moffa\www.studiolegalefreedomfactory.it"
   git add -A
   git commit -m "Homepage: email reveal, cookie banner alignment, mobile layout"
   git push origin main
   ```

### 🟡 Miglioramenti consigliati

3. **OCR dati mancanti**: generare overlay.json per `note-legali`, `privacy-policy`, `cookies` e collegare nelle rispettive pagine HTML.

4. **Hotspot interni**: mappare aree cliccabili interne alle immagini (email avvocati, numeri telefono, indirizzi sedi) via `page-nav-overlay` esteso o OCR layer.

5. **Disabilitare xmlrpc.php e readme.html** via .htaccess (sicurezza).

6. **robots.txt + sitemap XML**: nessun file presente.

7. **Test su Aruba staging**: prima del deploy live, verificare che:
   - I PHP thin wrapper in root vengano eseguiti correttamente da Apache
   - I path `./assets/pages/desktop/[page].webp` si risolvano dalla root del dominio
   - Il child theme WP page template (ABSPATH) trovi correttamente gli HTML in root
   - La homepage `index.html` non venga interferita da WordPress
   - Il `alignCookieBanner()` si comporti correttamente dopo `scaleLayout()` sul server

---

## 11. Checklist pre-deploy

- [x] Tutte le 9 inner page HTML complete con image-wrap
- [x] Tutti i PHP thin wrapper in root (8 righe, `include __DIR__`)
- [x] Tutti i PHP template nel child theme (`include ABSPATH`, `exit`)
- [x] WebP per tutte le immagini desktop e mobile
- [x] OCR collegato su 6 pagine
- [x] `ver.php` eliminato
- [x] Blog link disabilitato in attesa URL
- [x] `functions.php` corretto (tutti gli asset enqueued, bug custom.js risolto)
- [x] Homepage: email studio visibile (`Info@studiolegalefreedomfactory.it`) — desktop + mobile
- [x] Cookie banner: una sola volta per sito (localStorage), layout riga singola, sfondo nero pieno
- [x] Cookie banner: allineato esattamente sull'email, tronca ai bordi (non copre copyright/privacy)
- [x] Cookie banner: si riposiziona full-width quando l'email scorre fuori schermo
- [x] `index-original.html` — backup dell'index originale
- [x] `index-nocookie.html` — copia di riferimento
- [ ] GitHub push completato
- [ ] Definire URL blog esterno
- [ ] Generare dati OCR per note-legali, privacy-policy, cookies
- [ ] Disabilitare xmlrpc.php via .htaccess
- [ ] Test finale su Aruba

---

*Versione 2.1 — aggiornata dopo sprint homepage del 25/05/2026*  
*Modifiche sessione: email studio aggiunta · cookie banner redesign (riga singola, sfondo pieno) · allineamento dinamico banner su email (desktop + mobile) · scroll fallback full-width · localStorage una sola volta per sito · index.html sostituito con versione aggiornata · backup index-original.html creato*
