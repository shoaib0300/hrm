// Function to handle the slider menu
function initializeSliderMenu() {
  const btnSlider = document.querySelector('.btn-slider-open');
  const menuSlider = document.querySelector('.menu-slider');
  const btnClose = document.querySelector('.btn-slider-close');
  
  const slider = document.createElement('div');
  slider.className = 'slider';
  
  if (menuSlider) {
    slider.appendChild(menuSlider);
    document.body.appendChild(slider);
  } else {
    console.error('Menu slider element not found');
    return;
  }

  btnSlider.addEventListener('click', function(event) {
    event.preventDefault();
    const isOpen = slider.classList.toggle('open');
    btnClose.style.display = isOpen ? 'block' : 'none';
  });

  // Close slider when clicking outside
  document.addEventListener('click', function(event) {
    if (!slider.contains(event.target) && !btnSlider.contains(event.target)) {
      slider.classList.remove('open');
      btnClose.style.display = 'none'; 
    }
  });

  if (btnClose) {
    btnClose.addEventListener('click', function(event) {
      event.preventDefault();
      slider.classList.remove('open');
    });
  }
}

// Function to handle the scroll-to-top button
function initializeScrollToTopButton() {
  const mybutton = document.getElementById("back-to-top");

  if (window.pageYOffset === 0) {
    mybutton.style.display = "none";
  }

  window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  };

  mybutton.addEventListener('click', function() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
  });
}

// Function to add a custom class to the first submit button
function addCustomClassToSubmitButton() {
  const firstSubmitDiv = document.querySelector('.submit');
  if (firstSubmitDiv) {
    firstSubmitDiv.classList.add('form-button');
  }
}

// Function to handle the project page modal
function loadProjectModal() {
 const modal = document.getElementById('project-modal');
  if (!modal) {
      console.error('Modal element not found');
      return;
  }

  const span = document.getElementsByClassName('close')[0];
  if (span) {
      span.onclick = function() {
          modal.style.display = 'none';
      };
  } else {
      console.error('Element with class "close" not found');
  }

  document.querySelectorAll('.card').forEach(function(card) {
      card.addEventListener('click', function() {
          const image = card.querySelector('.card-img-top').src;
          const title = card.querySelector('.card-title').innerHTML;
          const period = card.querySelector('.project-period').innerHTML;
          const list = card.querySelector('.project-list').innerHTML;
          const module = card.querySelector('.project-module').innerHTML;
          const detailsElement = card.querySelector('.project-details').innerHTML;

          document.getElementById('modal-image').src = image;
          document.getElementById('modal-title').innerHTML = title;
          document.getElementById('modal-period').innerHTML = period;
          document.getElementById('modal-list').innerHTML = list;
          document.getElementById('modal-module').innerHTML = module;
          document.getElementById('modal-details').innerHTML = detailsElement;

          modal.style.display = "block";
      });
  });

  window.onclick = function(event) {
      if (event.target === modal) {
          modal.style.display = 'none';
      }
  };
}

function scrollToButtonWithoutLoading() {
  const contactLink = document.querySelector('a[href="#contact-form"]');
  
  if (contactLink) {
    contactLink.addEventListener('click', function(event) {
      event.preventDefault();

      const form = document.getElementById('contact-form');

      if (form) {
        form.scrollIntoView({ behavior: 'smooth' });

        // Optionally, update the URL hash without reloading
        history.pushState(null, null, '#contact-form');
      }
    });
  }
};


window.onload = function() {
  initializeSliderMenu();
  initializeScrollToTopButton();
  addCustomClassToSubmitButton();
  scrollToButtonWithoutLoading();
};

document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('.projects')) {
        loadProjectModal();
    }
});