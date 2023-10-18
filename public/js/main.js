document.addEventListener("DOMContentLoaded", function () {
    // Sélectionnez le menu burger et la liste des catégories
    const burgerMenu = document.querySelector('.logo-burger');
    const categoriesList = document.querySelector('.categorie');
  
    // Ajoutez un gestionnaire d'événements pour le clic sur le menu burger
    burgerMenu.addEventListener('click', () => {
      // Vérifiez si la liste des catégories a la classe "active"
      if (categoriesList.classList.contains('active')) {
        // Si elle a la classe "active", supprimez-la pour la masquer
        categoriesList.classList.remove('active');
      } else {
        // Sinon, ajoutez la classe "active" pour l'afficher
        categoriesList.classList.add('active');
      }
    });


  // Sélectionnez les éléments du DOM
  new Glider(document.querySelector('.glider'), {
    slidesToScroll: 1,
    slidesToShow: 5.5,
    draggable: true,
    dots: '.dots',
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    },
    responsive: [
      {
        // screens greater than >= 775px
        breakpoint: 1200,
        settings: {
          // Set to `auto` and provide item width to adjust to viewport
          slidesToShow: 4,
          slidesToScroll: 2,
        }
      },{
        // screens greater than >= 1024px
        breakpoint: 900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
       
        }
      }
    ]
  });
  });
