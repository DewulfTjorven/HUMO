require('./css/reset.css');
require('./css/style.css');
require('./css/vars.css');
require('./css/nav.css');
require('./css/footer.css');
require('./css/longread.css');


{

  const init = () => {

    showNav();
    //korting();

  };

  // tonen van navigatie
  const showNav = () => {

    const burger = document.querySelector('.hamburger');
    const navigation = document.querySelector('.navigation__content');

    if (burger) {
      burger.addEventListener('click', function() {
        if (navigation.style.display === 'none') {
          navigation.style.display = 'block';

        }
        else if (navigation.style.display === '') {
          navigation.style.display = 'block';
        }
        else {
          navigation.style.display = 'none';
        }
      });
    }
  };



  /*

  const korting = () => {

    const kortingInput = document.querySelector('.storeValue');
    const btn = document.querySelector('.btn__korting');
    const kortingField = document.querySelector('.korting');
    const price = document.querySelector('.price');
    const quantity = document.querySelector('.quantity');
    const total = document.querySelector('.total');

    if (kortingInput) {
      btn.addEventListener('click', storeValue);

    }

    function storeValue() {
      if (kortingInput) {
        const code = kortingInput.value;
        localStorage.setItem('kortingscode', code);
      }
    }

    function getValue() {
      if (kortingField) {
        kortingField.innerHTML = localStorage.getItem('kortingscode');
      }
    }
    getValue();

    window.onload = function compareCode() {
      if (price && total && kortingField && quantity) {
        if (kortingField.value === 'HUMO20' && price.value === 12.95) {
          price.value = 1.49;
          total.innerHTML = quantity * price;

        }
      }
      compareCode();
    };


  };

*/

  init();

}
