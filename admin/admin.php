<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Vidaloka&display=swap");

        * {
            font-family: "Vidaloka", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
        }

        :root {
            --blue: #2a2185;
            --white: #fff;
            --gray: #f5f5f5;
            --black1: #222;
            --black2: #999;
        }

        body {
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100%;
        }

        .navigation {
            position: fixed;
            width: 300px;
            height: 100%;
            background: #783b31;
            border-left: 10px solid #783b31;
            transition: 0.5s;
            overflow: hidden;
        }

        .navigation.active {
            width: 80px;
        }

        .navigation ul {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navigation ul li {
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .navigation ul li:hover,
        .navigation ul li.active {
            background-color: var(--white);
        }

        .navigation ul li:nth-child(1) {
            margin-bottom: 40px;
            pointer-events: none;
        }

        .navigation ul li a {
            position: relative;
            display: block;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: var(--white);
        }

        .navigation ul li:hover a,
        .navigation ul li.active a {
            color: var(--blue);
        }

        .navigation ul li a .icon {
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 75px;
            text-align: center;
        }

        .navigation ul li a .icon ion-icon {
            font-size: 1.75rem;
        }

        .navigation ul li a .title {
            position: relative;
            display: block;
            padding: 0 10px;
            height: 60px;
            line-height: 60px;
            text-align: start;
            white-space: nowrap;
        }

        .navigation ul li:hover a::before,
        .navigation ul li.active a::before {
            content: "";
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
        }

        .navigation ul li:hover a::after,
        .navigation ul li.active a::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background-color: red;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;
        }


        .main {
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background-color: var(--white);
            transition: 0.5s;
        }

        .main.active {
            width: calc(100% - 80px);
            left: 80px
        }

        .topbar {
            width: 100%;
            height: 60px;
            display: flex;
            /* justify-content: space-between; */
            align-items: center;
            padding: 0 10px;
        }

        .toggle {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            cursor: pointer;
        }

        .search {
            position: relative;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .search label {
            position: relative;
            width: 100%;
        }

        .search label input {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid var(--black2);
        }

        .search label ion-icon {
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 1.2rem;
        }

        @media (max-width: 991px) {
            .navigation {
                left: -300px;
            }

            .navigation.active {
                width: 300px;
                left: 0;
            }

            .main {
                width: 100%;
                left: 0;
            }

            .main.active {
                left: 300px;
            }
        }

        @media (max-width: 448px) {
            .navigation {
                width: 100%;
                left: -100%;
                z-index: 999;
            }

            .navigation.active {
                width: 100%;
                left: 0;
            }

            .toggle {
                z-index: 1000;
            }

            .main.active .toggle {
                color: #fff;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">bakery</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">User admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">User client</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </span>
                        <span class="title">Comment</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <div>
                <form action="">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Code</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>BMW</td>
                            <td>2tỏi</td>
                            <td>p246</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script>
        const list = document.querySelectorAll(".navigation li");
        const toggle = document.querySelector(".toggle");
        const navigation = document.querySelector(".navigation");
        const main = document.querySelector(".main");


        function activeLink() {
            list.forEach(item => {
                item.classList.remove("active");
            });
            this.classList.add("active");
        }

        list.forEach(item => item.addEventListener("click", activeLink));

        toggle.onclick = function () {
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        }
    </script>
</body>

</html>