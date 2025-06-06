// Code animation et gestion d'evenement de click pour la foire aux questions
document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', function() {
    const faq = this.closest('.faq');
    faq.classList.toggle('open');
    // Optionnel : refermer les autres
    document.querySelectorAll('.faq').forEach(other => {
      if (other !== faq) other.classList.remove('open');
    });
  });
});
// Fin de l'animation et gestion d'evenement de click pour la foire aux questions

// Code pour le bouton de retour en haut de page
const backToTopBtn = document.getElementById('back-to-top');
backToTopBtn.addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
// fin du code pour le bouton de retour en haut de page
