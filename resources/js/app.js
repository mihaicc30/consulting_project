import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const number_format = (price) => {
    const formattedPrice = new Intl.NumberFormat("en-GB", {
        style: "currency",
        currency: "GBP",
    }).format(parseFloat(price));
    return formattedPrice;
};

