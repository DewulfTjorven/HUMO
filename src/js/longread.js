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


    ScrollReveal().reveal('.longread__btn', {delay: 1000});
    ScrollReveal().reveal('.summary__text', {delay: 500});
    ScrollReveal().reveal('.vader', {delay: 800});
    ScrollReveal().reveal('.zoon', {delay: 800});
    ScrollReveal().reveal('.name__input', {delay: 1000});
    ScrollReveal().reveal('.chapter1__wrapper', {delay: 1500});
    ScrollReveal().reveal('.longread__title__h1', {delay: 1000});




  };


  if(document.querySelector(".longread__nav")){
    init();

  }

}
