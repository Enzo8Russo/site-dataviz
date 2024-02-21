<style>
  .wrapper {
    position: fixed;
    top: 0;
    z-index: 10;
    right: -100%;
    height: 100%;
    width: 100%;
    background: var(--background-color);
    transition: all 0.6s ease-in-out;
}

#active:checked ~ .wrapper {
    right: 0;
}

.menu-btn {
    position: absolute;
    z-index: 11;
    right: 20px;
    top: 20px;
    height: 70px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.menu-btn span, .menu-btn:before, .menu-btn:after {
    content: "";
    position: absolute;
    top: calc(40% - 1px);
    left: 55%;
    width: 40%;
    border-bottom: 2px solid var(--color-font-size);
    transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.menu-btn:before {
    transform: translateY(-8px);
}

.menu-btn:after {
    transform: translateY(8px);
}

.close {
    z-index: 9;
    width: 100%;
    height: 100%;
    pointer-events: none;
    transition: background 0.6s;
}

#active:checked + .menu-btn span {
    transform: scaleX(0);
}

#active:checked + .menu-btn:before {
    transform: rotate(45deg);
    border-color: var(--color-font-size);
}

#active:checked + .menu-btn:after {
    transform: rotate(-45deg);
    border-color: var(--color-font-size);
}

.wrapper ul {
    position: absolute;
    top: 60%;
    left: 50%;
    height: 75%;
    transform: translate(-50%, -50%);
    list-style: none;
    text-align: center;
}

.wrapper ul li {
    height: 10%;
    margin: 15px 0;
}

.wrapper ul li a {
    text-decoration: none;
    font-size: 30px;
    padding: 5px 30px;
    color: var(--color-font-size);
    border-radius: 50px;
    line-height: 50px;
    margin: 5px 30px;
    opacity: 0;
    transition: all 0.3s ease;
    transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.menu-scan:hover {
    background-color: var(--background-color);
    border: 5px solid var(--color-font-size);
}

.input[type="checkbox"] {
    display: none;
}

#active:checked ~ .wrapper ul li a {
    opacity: 1;
}

.wrapper ul li a {
    transition: opacity 1.2s, transform 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: translateX(100px);
}

#active:checked ~ .wrapper ul li a {
    transform: none;
    transition-timing-function: ease, cubic-bezier(0.1, 1.3, 0.3, 1);
    transition-delay: 0.6s;
    transform: translateX(-100px);
}

@media screen and (max-width: 860px) {
    .wrapper ul li a {
        padding: 8px;
        font-size: 25px;
    }

    .wrapper ul li a.menu--boutton {
        font-size: 20px;
    }
}

</style>


<nav class="nav" style="background: #007ACC !important;">
  <a href="./index.php">
    <img class="logo" src="./img/logo.svg" alt="Accueil" width="50" height="50">
  </a>
  <div class="menu">
    <ul class="menu-list">
      <li class="menu-item"><a class="menu-link" href="./index.php">Accueil</a></li>
      <li class="menu-item"><a class="menu-link" href="./tableaux-de-donnees.php">Tableaux de Données</a></li>
      <li class="menu-item"><a class="menu-link" href="./nos-sources.php">Nos Sources</a></li>
    </ul>
  </div>
  <input class="input" type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
        <div class="wrapper">
          <ul style="width: 100%;">
            <li><a class="menu-scan" href="./index.php">Accueil</a></li>
            <li><a class="menu-scan" href="./tableaux-de-donnees.php">Tableaux de Données</a></li>
            <li><a class="menu-scan" href="./nos-sources.php">Nos Sources</a></li>
          </ul>
        </div>
</nav>
