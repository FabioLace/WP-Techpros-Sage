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
  
Tema per Wordpress realizzato con Sage 10 e basato su <a href="https://wp.ditsolution.net/techpros/">quello sviluppato da Template Monster</a>. Perché Sage 10? Puoi gestire il tuo tema come se fosse un app di Laravel: gestisci i pacchetti e le dipendenze con composer e npm, inoltre puoi usare le Blade per realizzare le tue viste.

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
* Apri il terminale nella cartella del tema e lancia 'sti comandi:
```sh
composer require roots/acorn #Dovrebbe già esserci nel composer.lock, ma nel caso eseguilo non si sa mai
composer install
yarn
yarn build
```

* Se vuoi usare npm e fare come cazzo ti pare, lancia questi comandi:
```sh
npm install
npm run build
```

* Da CMS attivi il tema

# Da sapere
* Non è completamente integrato con il CMS, perché la maggior parte delle cose è scritta direttamente su file HTML e le immagini sono presenti negli assets. SE VUOI lascerò alcune righe commentate che potranno essere utili nel sostituire i testi/immagini con quello che vuoi tu, ma dovrai poi installare il famoso plugin <a href="https://wordpress.org/plugins/advanced-custom-fields/">Advanced Custom Fields</a> nel tuo progetto principale.
* Realizzato su Ubuntu 22.04.3 LTS (MacOS === 💩)
* Testato sui motori Quantum e Blink, non su WebKit perché è da gay e Safari fa cagare
* Testato su Wordpress 6.2.2 e 6.3
* È responsive fino alla vastità del cazzo che te ne frega

# Link utili
* <a href="https://roots.io/sage/docs/installation/">Documentazione di Sage</a>
