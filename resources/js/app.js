import "./bootstrap";

//inclusione css nel progetto
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

//process images, comprime le immagini
import.meta.glob(["../img/**"]);
