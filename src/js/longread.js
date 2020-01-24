{



  const init = () => {

    function showNavigation () {

      const menu = document.querySelector('.menu');
      const nav = document.querySelector('.nav__menu');

      if (menu) {
        menu.addEventListener('click', function() {
          if (nav.style.display === 'none') {
            nav.style.display = 'block';

          }
          else if (nav.style.display === 'block') {
            nav.style.display = 'none';
          }
          else if (nav.style.display === '') {
            nav.style.display = 'block';
          }
          else {
            nav.style.display = 'none';
          }
        });
      }
    }

    showNavigation();


    function showHoofdstuk () {

      const hoofdstuk2 = document.querySelector('.hoofdstuk2');
      const btnHoofdstuk2 = document.querySelector('.hoofdstuk2__button');
      const hoofdstuk8 = document.querySelector('.hoofdstuk8');
      const btnHoofdstuk8 = document.querySelector('.hoofdstuk8__button');
      const hoofdstuk16 = document.querySelector('.hoofdstuk16');
      const btnHoofdstuk16 = document.querySelector('.hoofdstuk16__button');
      const volgende2 = document.querySelector('.volgende__hoofdstuk2');
      const volgende8 = document.querySelector('.volgende__hoofdstuk8');


      if (hoofdstuk2) {
        volgende2.addEventListener('click', function() {

          hoofdstuk2.style.display = 'none';
          hoofdstuk8.style.display = 'grid';

        });
      }

      if (hoofdstuk8) {
        volgende8.addEventListener('click', function() {

          hoofdstuk8.style.display = 'none';
          hoofdstuk16.style.display = 'grid';

        });
      }

      if (hoofdstuk2) {
        btnHoofdstuk2.addEventListener('click', function() {
          if (hoofdstuk2.style.display === 'none') {
            hoofdstuk2.style.display = 'grid';

          }
          else if (hoofdstuk2.style.display === '') {
            hoofdstuk2.style.display = 'grid';
          }
          hoofdstuk8.style.display = 'none';
          hoofdstuk16.style.display = 'none';


        });

      }

      if (hoofdstuk8) {
        btnHoofdstuk8.addEventListener('click', function() {
          if (hoofdstuk8.style.display === 'none') {
            hoofdstuk8.style.display = 'grid';
          }
          else if (hoofdstuk8.style.display === '') {
            hoofdstuk8.style.display = 'grid';
          }
          hoofdstuk2.style.display = 'none';
          hoofdstuk16.style.display = 'none';


        });

      }

      if (hoofdstuk16) {
        btnHoofdstuk16.addEventListener('click', function() {
          if (hoofdstuk16.style.display === 'none') {
            hoofdstuk16.style.display = 'grid';
          }
          else if (hoofdstuk16.style.display === '') {
            hoofdstuk16.style.display = 'grid';
          }
          hoofdstuk2.style.display = 'none';
          hoofdstuk8.style.display = 'none';

        });

      }

    }

    showHoofdstuk();




    window.onscroll = function() {
      scrollNav();
    };

    // Get the header
    const header = document.getElementById('myHeader');

    // Get the offset position of the navbar
    const sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function scrollNav() {
      if (window.pageYOffset > sticky) {
        header.classList.add('sticky');
      } else {
        header.classList.remove('sticky');
      }
    }

    const vaderInput = document.querySelector('.vader__input');
    const zoonInput = document.querySelector('.zoon__input');
    const btn = document.querySelector('.btn');
    const vaderFields = document.querySelectorAll('.vader__naam');
    const zoonFields = document.querySelectorAll('.zoon__naam');

    if (vaderInput.value === '' || zoonInput.value === '') {
      vaderFields.innerHTML = 'Vader';
      zoonFields.innerHTML = 'zoon';

    }

    if (vaderInput || zoonInput) {
      btn.addEventListener('click', storeValue);

    }

    function storeValue() {
      if (vaderInput || zoonInput) {
        const vaderName = vaderInput.value;
        const zoonName = zoonInput.value;
        localStorage.setItem('vadernaam', vaderName);
        localStorage.setItem('zoonnaam', zoonName);
        if (localStorage.getItem('vadernaam') === '') {
          localStorage.setItem('vadernaam', 'Vader');

        }
        if (localStorage.getItem('zoonnaam') === '') {
          localStorage.setItem('zoonnaam', 'Zoon');

        }
      }

      location.reload();

    }

    function getValue() {
      if (vaderFields || zoonFields) {
        vaderFields.innerHTML = localStorage.getItem('vadernaam');
        zoonFields.innerHTML = localStorage.getItem('zoonnaam');
      }
    }

    // loop om ieder element de localstorage te geven
    let i;
    for (i = 0;i < vaderFields.length;i ++) {
      vaderFields[i].innerHTML = localStorage.getItem('vadernaam');

    }

    let j;
    for (j = 0;j < zoonFields.length;j ++) {
      zoonFields[j].innerHTML = localStorage.getItem('zoonnaam');
    }

    getValue();




    /* eslint-disable */

    ScrollReveal().reveal('.longread__nav', {delay: 1500});
    ScrollReveal().reveal('.header__content', {delay: 1500});
    ScrollReveal().reveal('.summary__text', {delay: 500});
    ScrollReveal().reveal('.vader', {delay: 800});
    ScrollReveal().reveal('.zoon', {delay: 800});
    ScrollReveal().reveal('.name__input', {delay: 1000});
    ScrollReveal().reveal('.longread__title__h1', {delay: 1000});
    ScrollReveal().reveal('.roadmap', {delay: 1000});
    ScrollReveal().reveal('.grid__delay1', {delay: 1000});
    ScrollReveal().reveal('.grid__delay2', {delay: 1300});
    ScrollReveal().reveal('.grid__delay3', {delay: 1600});




  }


  if(document.querySelector(".longread__nav")){
    init();

  }

}
roadmap
