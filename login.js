document.addEventListener('DOMContentLoaded', function () {
    // Código de login.js aquí
    const divElement = document.querySelector('.modeLo');
    const iconoSVG = document.getElementById('iconoluna');
    const emailInput = document.getElementById('emailLogin');
    const passInput = document.getElementById('passLogin');
    const registerButt = document.getElementById('buttonRegister');
    const titleLo = document.getElementById('titleLogin');
  
    let isDarkMode = false;
  
    divElement.addEventListener('click', () => {
      if (!isDarkMode) {
        
        document.body.style.backgroundColor = 'hsl(260, 8%, 15%)';
        titleLo.style.color = 'white';
        emailInput.style.backgroundColor = 'hsl(260, 8%, 15%)';
        passInput.style.backgroundColor = 'hsl(260, 8%, 15%)';
        registerButt.style.backgroundColor = 'hsl(260, 8%, 15%)';
        iconoSVG.setAttribute('class', 'bi bi-sun');
      } else {
        
        document.body.style.backgroundColor = 'white';
        titleLo.style.color = 'black';
        emailInput.style.backgroundColor = 'white';
        passInput.style.backgroundColor = 'white'; 
        registerButt.style.backgroundColor = 'white';
        
      }
  
      isDarkMode = !isDarkMode; 
    });
  });