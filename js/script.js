const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const header = $("#header");
const footer = $("#footer");

const app = {
  render: function () {
    const headerHtml = `
            <header class="header">

                <a href="./index.html" class="logo"> <i class="fas fa-bread-slice"></i> bakery </a>

                <nav class="navbar">
                    <a href="./index.html">home</a>
                    <a href="./about.html">about</a>
                    <a href="./product.html">product</a>
                    <a href="./order.html">Check Out</a>
                </nav>

                <div class="icons">
                    <div id="cart-btn" class="fas fa-shopping-cart"></div>
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>

            </header>
            <div class="cart-items-container">

            <div id="close-form" class="fas fa-times"></div>
            <h3 class="title">checkout</h3>

            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-1.jpg" alt="">
                <div class="content">
                    <h3>bakery item 1</h3>
                    <div class="price">$45.99/-</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-2.jpg" alt="">
                <div class="content">
                    <h3>bakery item 2</h3>
                    <div class="price">$15.99/-</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-3.jpg" alt="">
                <div class="content">
                    <h3>bakery item 3</h3>
                    <div class="price">$29.99/-</div>
                </div>
            </div>

            <a href="#" class="btn"> checkout </a>

        </div>`;
    header.innerHTML = headerHtml;

    const footerHtml = `
            <div class="box-container">

                <div class="box">
                    <h3>address</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.54073011904!2d106.36556425709519!3d10.754618132789961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2sHo%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2s!4v1685588215674!5m2!1sen!2s"
                        width="300" height="200" style="border-radius: 10px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="box">
                    <h3>E-mail</h3>
                    <a href="#" class="link">ninjashub4@gmail.com</a>
                    <a href="#" class="link">ninjashub4@gmail.com</a>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <h3>call us</h3>
                    <p>+61 (2) 1478 2369</p>
                    <p>+61 (2) 1478 2369</p>
                </div>

                <div class="box">
                    <h3> opening hours</h3>
                    <p>Monday - Friday: 9:00 - 23:00 <br> Saturday: 8:00 - 24:00 </p>
                </div>

            </div>`;
    footer.innerHTML = footerHtml;
  },

  handleClick: function () {
    const cart = $(".cart-items-container");
    const menu = $("#menu-btn");
    const navbar = $(".header .navbar");

    menu.onclick = () => {
      menu.classList.toggle("fa-times");
      navbar.classList.toggle("active");
    };

    $("#cart-btn").onclick = () => {
      cart.classList.add("active");
    };

    $("#close-form").onclick = () => {
      cart.classList.remove("active");
    };

    var swiper = new Swiper(".home-slider", {
      grabCursor: true,
      loop: true,
      cnteredSlides: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  },

  start: function () {
    this.render();

    this.handleClick();
  },
};

app.start();
