
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="header-right-section">
          <div class="logo">
            <img
              class="header-image"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Apple-logo.png/600px-Apple-logo.png"
            />
          </div>
          <div class="header-meta">
            <div class="header-title">Lacanism</div>
            <div class="header-description">Lorem ipsum dolores</div>
          </div>
          <ul class="list">
            <li class="item">
              <div class="name">alpha</div>
              <div class="bar"></div>
            </li>
            <li class="item">
              <div class="name">bravo</div>
              <div class="bar"></div>
            </li>
            <li class="item">
              <div class="name">charlie</div>
              <div class="bar"></div>
            </li>
            <li class="item">
              <div class="name">delta</div>
              <div class="bar"></div>
            </li>
            <li class="item">
              <div class="name">echo</div>
              <div class="bar"></div>
            </li>
            <li class="item">
              <div class="name">foxtrot</div>
              <div class="bar"></div>
            </li>
          </ul>
        </div>
        <div class="header-search-section">
          <form class="header-form" action="">
            <input class="header-field" type="text" />
            <input class="header-button" type="submit" />
          </form>
        </div>
      </div>
    </div>

    <script>
      const navbar = document.querySelector(".container");
      const list = document.querySelector(".list");
      const items = document.querySelectorAll(".item");
      const logo = document.querySelector(".logo");
      window.addEventListener("scroll", () => {
        if (window.scrollY > 0) {
          navbar.classList.add("navbar2");
          list.classList.add("list2");
          logo.classList.add("logo-disappear");
        } else {
          if (list.classList.contains("list2")) {
            list.classList.remove("list2");
            navbar.classList.remove("navbar2");
            logo.classList.remove("logo-disappear");
          }
        }
      });
      console.log(Array.from(items));

      Array.from(items).forEach((e) => {
        e.addEventListener("mouseover", () => {
          const bar = e.querySelector(".bar");
          bar.classList.add("bar-mouseover");
        });
      });

      Array.from(items).forEach((e) => {
        e.addEventListener("mouseout", () => {
          const bar = e.querySelector(".bar");
          bar.classList.remove("bar-mouseover");
        });
      });

      // ------------------------

      navbar.addEventListener("mouseover", () => {
        if (navbar.classList.contains("navbar2")) {
          navbar.classList.remove("navbar2");
          list.classList.remove("list2");
          logo.classList.remove("logo-disappear");
        }
      });

      navbar.addEventListener("mouseout", () => {
        if (!navbar.classList.contains("navbar2") && window.scrollY != 0) {
          navbar.classList.add("navbar2");
          list.classList.add("list2");
          logo.classList.add("logo-disappear");
        }
      });
    </script>
  </body>
</html>


<?php
echo "hello world";

?>