<div align="center">
    <p>
        <img src="./resources/images/main-logo.png">
        <a href="https://roots.io/sage/">
            <img alt="Sage" src="https://cdn.roots.io/app/uploads/logo-sage.svg" height="50">
        </a>
    </p>
    <p>
        <img src="https://img.shields.io/badge/wordpress-grey?style=for-the-badge&logo=wordpress">
        <img src="https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white">
    </p>
</div>
  
Tema per Wordpress realizzato con Sage 10 e basato su <a href="https://wp.ditsolution.net/techpros/">quello sviluppato da Template Monster</a>. Esiste anche la versione classica con puro CSS e PHP che puoi <a href="https://github.com/FabioLace/techpros-theme">trovare qui</a>.

# Informazioni
* PHP ^8.0
* Roots/acorn: ^3.2
* Node.js >= 16.0.0
  
### Dipendenze DEV

```sh
"@roots/bud": "^6.15.2",
"@roots/bud-sass": "^6.15.2",
"@roots/sage": "^6.15.2"
```

### Librerie usate
* <a href="https://animate.style/">Animate.css 4.1.1</a>
* <a href="https://getbootstrap.com/">Bootstrap 4.5.2</a> 
* <a href="https://fontawesome.com/">Fontawesome 6.4.2</a>
* <a href="https://swiperjs.com/">Swiper.js</a>

# Deploy
* Scarica la repo nella tua cartella "themes"
* Apri il terminale nella cartella del tema e lancia questi comandi:
```sh
composer require roots/acorn
composer install
yarn
yarn build
```

* Se vuoi usare npm, lancia questi comandi:
```sh
npm install
npm run build
```

* Da CMS attivi il tema

# Link utili
* <a href="https://roots.io/sage/docs/installation/">Documentazione di Sage</a>
