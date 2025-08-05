<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Leonardo Distributors, Inc.</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Huninn&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


        <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS + Popper -->

<!-- Font Awesome (for the envelope icon) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- AOS Animation CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">





</head>

<body>
  <div id="app">
    <example-component></example-component>
    {{-- <router-view/> --}}
  </div>

  <!-- Load jQuery (needed for modals) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Load Bootstrap bundle once (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Your Vue app -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  

  <!-- Navbar toggle and link click handlers -->
  {{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
      const navbarCollapse = document.querySelector("#navbarSupportedContent");
      const navbarToggler = document.querySelector(".navbar-toggler");

      // Close menu when any nav link is clicked
      document.querySelectorAll(".nav-link").forEach(link => {
        link.addEventListener("click", () => {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse && navbarCollapse.classList.contains("show")) {
            bsCollapse.hide();
          }
        });
      });

      // Toggle behavior for manual close/open by clicking toggler
      navbarToggler.addEventListener("click", () => {
        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
        bsCollapse.toggle();
      });
    });
  </script>

  <!-- Toggle card example -->
  <script>
    document.getElementById('toggleCardBtn')?.addEventListener('click', function () {
      const card = document.getElementById('flipCard');
      card.classList.toggle('flip');

      this.innerHTML = card.classList.contains('flip') 
        ? '<i class="bi bi-chevron-left"></i>' 
        : '<i class="bi bi-chevron-right"></i>';
    });
  </script> --}}

<script>
document.addEventListener('DOMContentLoaded', function () {
    const menu = document.getElementById('navbarNav');
    const menuOpenBtn = document.getElementById('menuOpenBtn');
    const menuCloseBtn = document.getElementById('menuCloseBtn');
    const collapse = new bootstrap.Collapse(menu, { toggle: false });

    // Open menu
    // menuOpenBtn.addEventListener('click', () => {
    //     collapse.show();
    //     menuOpenBtn.classList.add('d-none');
    //     menuCloseBtn.classList.remove('d-none');
    // });

    // Close menu
    menuCloseBtn.addEventListener('click', () => {
        collapse.hide();
        menuCloseBtn.classList.add('d-none');
        menuOpenBtn.classList.remove('d-none');
    });

    // Sync button icons on actual collapse state
    menu.addEventListener('hide.bs.collapse', () => {
        menuCloseBtn.classList.add('d-none');
        menuOpenBtn.classList.remove('d-none');
    });

    menu.addEventListener('show.bs.collapse', () => {
        menuOpenBtn.classList.add('d-none');
        menuCloseBtn.classList.remove('d-none');
    });

    // Close menu & set active link when any nav-link is clicked
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            collapse.hide();
            menuCloseBtn.classList.add('d-none');
            menuOpenBtn.classList.remove('d-none');

            // Set active state
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });
    });
});



 document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
      let current = "";

      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 100; // adjust for navbar height
        const sectionHeight = section.offsetHeight;

        if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
          current = section.getAttribute("id");
        }
      });

      navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href") === `#${current}`) {
          link.classList.add("active");
        }
      });
    });
  });






</script>



 <script>
    AOS.init({
      duration: 1000, // Optional: animation duration in ms
      once: false      // Optional: animate only once when scrolling down
    });
  </script>

    



</body>





</html>
