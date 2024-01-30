# Laravel Template

## Creazione

-   installazione di npm (`npm install`)

-   installazione di SASS (`npm i --save-dev sass`)

-   rinomino i file correttamente (da css a sass) anche in vite.config.js (dove creo anche un alias)

-   importo il file scss nel progetto (`import "~resources/scss/app.scss";`) in app.js

-   includo nell' head il file app.js (`@vite('resources/js/app.js')`)

-   indichiamo dove prendere le img (`import.meta.glob(["../img/**"]);`) in app.js

-   nel template si vede come usare le img in html e scss

-   installo Bootstrap (`npm i --save bootstrap @popperjs/core`)

-   aggiungo la costante path (`import path from "path";`) in vite.config.js

-   do un alias a bootsrap (`"~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),`)

-   importo il css di Bootstrap (`@import "~bootstrap/scss/bootstrap";`) in app.scss

-   importo il js di Bootsrap (`import * as bootstrap from "bootstrap";`) in app.js

## Utilizzo

-   usare questo template in fase di creazione di una nuova repository

-   clonare il progetto (`git clone ...`)

-   runnare il comando `composer install`

-   copiare il file '.env.example' e creare un file uguale '.env'

-   generare 'app key' via bottone o tramite `php artisan key:generate`

-   runnare su un altro terminale `npm install`
