



    // FAQ Accordion Functionality
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');

      question.addEventListener('click', () => {
        // Fermer les autres items
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('active');
          }
        });

        // Toggle l'item actuel
        item.classList.toggle('active');
      });
    });


      
    // Gestion du filtre collapsible
    const filterToggle = document.getElementById('filterToggle');
    const filterContent = document.getElementById('filterContent');

    filterToggle.addEventListener('click', function() {
      filterContent.classList.toggle('expanded');
      filterToggle.classList.toggle('active');
    });
  



