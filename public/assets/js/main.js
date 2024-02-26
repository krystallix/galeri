/**
* Template Name: PhotoFolio
* Updated: Jan 09 2024 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/


document.addEventListener('DOMContentLoaded', () => {
  "use strict";
  
  /**
  * Preloader
  */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      setTimeout(() => {
        preloader.classList.add('loaded');
      }, 1000);
      setTimeout(() => {
        preloader.remove();
      }, 2000);
    });
  }
  
  /**
  * Mobile nav toggle
  */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');
  
  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });
  
  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }
  
  /**
  * Hide mobile nav on same-page/hash links
  */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {
    
    if (!navbarlink.hash) return;
    
    let section = document.querySelector(navbarlink.hash);
    if (!section) return;
    
    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });
    
  });
  
  /**
  * Toggle mobile nav dropdowns
  */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');
  
  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');
        
        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });
  
  /**
  * Scroll top button
  */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }
  
  /**
  * Initiate glightbox
  */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });
  
  /**
  * Init swiper slider with 1 slide at once in desktop view
  */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });
  
  /**
  * Init swiper slider with 3 slides at once in desktop view
  */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },
      
      1200: {
        slidesPerView: 3,
      }
    }
  });
  
  /**
  * Animation on scroll function and init
  */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });
});

/*--------------------------------------------------------------
# TAMBAH FOTO === PREVIEW IMG SEBELUM UPLOAD
--------------------------------------------------------------*/
function previewImg() {
  const foto = document.querySelector('#foto');
  const imgPreview = document.querySelector('.img-preview');
  
  const fileFoto = new FileReader();
  fileFoto.readAsDataURL(foto.files[0]);
  
  fileFoto.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}

/*--------------------------------------------------------------
# PROFILE ADMIN
--------------------------------------------------------------*/
// const profile = document.querySelector('.main-header .navbar-nav .nav-item .my-profile');
// const imgProfile = profile.querySelector('img');
// const dropdownProfile = profile.querySelector('.profile-option');

// imgProfile.addEventListener('click', function () {
//     dropdownProfile.classList.toggle('show');
// })

// window.addEventListener('click', function (e) {
//   if(e.target !== imgProfile) {
//       if(e.target !== dropdownProfile) {
//           if(dropdownProfile.classList.contains('show')) {
//               dropdownProfile.classList.remove('show');
//           }
//       }
//   }
// })

const profile = document.querySelector('.header .my-profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-option');

imgProfile.addEventListener('click', function () {
  dropdownProfile.classList.toggle('show');
})

window.addEventListener('click', function (e) {
  if(e.target !== imgProfile) {
    if(e.target !== dropdownProfile) {
      if(dropdownProfile.classList.contains('show')) {
        dropdownProfile.classList.remove('show');
      }
    }
  }
})

/*--------------------------------------------------------------
# SHOW HIDE PASSWORD
--------------------------------------------------------------*/
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener("click", function () {
  //toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  
  //toggle the icon
  this.classList.toggle("bi-eye");
});


/*--------------------------------------------------------------
# GANTI PASSWORD
--------------------------------------------------------------*/
const gantiPassword = document.getElementById('ganti-password')
const inputPassword = document.getElementById('input-password')
const batalGanti    = document.getElementById('batal-ganti')
// const passwordLama = document.getElementById('password-lama').value

gantiPassword.onclick = () => {
  
  inputPassword.style.display = "flex";
  batalGanti.style.display = "flex";
  batalGanti.style.justifyContent = "center";
  // document.getElementById('password').value = null
  // document.getElementById('field-password').setAttribute('value', passwordLama)
}

batalGanti.onclick = () => {
  inputPassword.style.display = "none";
  batalGanti.style.display = "none";
  batalGanti.style.justifyContent = "center";
  // document.getElementById('password').value = passwordLama
}
