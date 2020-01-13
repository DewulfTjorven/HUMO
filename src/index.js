require('./css/reset.css');
require('./css/style.css');
require('./css/vars.css');
require('./css/nav.css');
require('./css/footer.css');

{
  const init = () => {

    const burger = document.querySelector('.hamburger');
    const navigation = document.querySelector('.navigation__content');

    // if statement to check if element exists -> no error
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

  init();
}
