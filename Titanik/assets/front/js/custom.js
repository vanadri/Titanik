function set_active(val) {
  sessionStorage.setItem("nav_link_clicked", val);
}

function toggle_login_daftar(val) {
  let form_login = document.getElementById("form_login");
  let form_daftar = document.getElementById("form_daftar");

  switch(val) {
    case "daftar":
      form_login.style.display = "none";
      form_daftar.style.display = "block";
      break;
    case "login":
      form_login.style.display = "block";
      form_daftar.style.display = "none";
      break;
  }
}

function toggle_wishlist(elem) {
  elem.classList.toggle("bi-heart-fill");
  elem.classList.toggle("text-danger");
  elem.classList.toggle("bi-heart");
}

document.onreadystatechange = ()=> {
  // HIDE FORM DAFTAR
  let form_daftar = document.getElementById("form_daftar");
  form_daftar.style.display = "none";

  // NAVBAR ACTIVE STATE
  let nav_link_clicked = sessionStorage.getItem("nav_link_clicked");
  let nav_link = document.querySelectorAll("#mainNavbar .navbar-nav .nav-item .nav-link");

  if (!nav_link_clicked) {
    nav_link[0].classList.add("active");
  } else {
    switch(nav_link_clicked) {
      case "beranda":
        nav_link[0].classList.add("active");
        nav_link[1].classList.remove("active");
        nav_link[2].classList.remove("active");
        break;
      case "artikel":
        nav_link[0].classList.remove("active");
        nav_link[1].classList.add("active");
        nav_link[2].classList.remove("active");
        break;
      case "belanja":
        nav_link[0].classList.remove("active");
        nav_link[1].classList.remove("active");
        nav_link[2].classList.add("active");
        break;
      default:
        break;
    }
  }

  // CLAMP LIST ARTIKEL
  let judul_artikel = document.getElementsByClassName("judul_artikel");
  let body_artikel = document.getElementsByClassName("body_artikel");
  let judul_artikel_length = judul_artikel.length;
  let body_artikel_length = body_artikel.length;

  for(let i = 0; i < judul_artikel_length; i++) {
    $clamp(judul_artikel[i], {clamp: 2});
  }

  for(let i = 0; i < body_artikel_length; i++) {
    $clamp(body_artikel[i], {clamp: 3});
  }
}