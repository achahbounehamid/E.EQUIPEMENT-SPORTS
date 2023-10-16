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
  });
  