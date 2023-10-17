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
var prevButton = document.querySelector('.prev-button');
var nextButton = document.querySelector('.next-button');
var slideContainer = document.querySelector('.slider-container');
var cardWrappers = document.querySelectorAll('home-page');

// Définissez une variable pour suivre l'index du slide actif
var currentIndex = 0;
var numVisibleCards = 3;

// Ajoutez des écouteurs d'événements pour les boutons "Précédent" et "Suivant"
prevButton.addEventListener('click', function() {
  if (currentIndex > 0) {
    currentIndex--;
    slideContainer.style.transform = 'translateX(' + (-currentIndex * 100 / numVisibleCards) + '%)';
  }
});

nextButton.addEventListener('click', function() {
  var numSlides = cardWrappers.length;
  if (currentIndex < numSlides - numVisibleCards) {
    currentIndex++;
    slideContainer.style.transform = 'translateX(' + (-currentIndex * 100 / numVisibleCards) + '%)';
  }
});
  });
