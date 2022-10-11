document.getElementById("year").innerHTML = new Date().getFullYear();

function buy(product_name, product_price) {
    const message = `Halo saya mau beli ${product_name} - ${product_price}`;
    const whatsapp = `https://wa.me/6282311457280?text=${message}`;
    open(whatsapp, "_blank");
}

function chat(){
    const message = "Halo min, saya mau tanya nih";
    const whatsapp = `https://wa.me/6282311457280?text=${message}`;
    open(whatsapp, "_blank");
}

function topFunction(){
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
}

function baju() {
    const baju = document.querySelector('#baju');
    baju.classList.remove('baju');
}