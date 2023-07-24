document.addEventListener('DOMContentLoaded', function () {
    
    const divElement = document.querySelector('.modeRe');
    const iconoSVG = document.getElementById('iconoluna');
    const emailInput = document.getElementById('emailRe');
    const passInput = document.getElementById('passRe');
    const registerButt = document.getElementById('inicio');
    const titleLo = document.getElementById('titleRegister');
    const subRegist = document.getElementById('subRegister');
    const alreadyRe = document.getElementById('alreadyRe');

    let isDarkMode = false;
  
    divElement.addEventListener('click', () => {
      if (!isDarkMode) {
        
        document.body.style.backgroundColor = 'hsl(260, 8%, 15%)';
        titleLo.style.color = 'white';
        subRegist.style.color = 'white';
        emailInput.style.backgroundColor = 'hsl(260, 8%, 15%)';
        passInput.style.backgroundColor = 'hsl(260, 8%, 15%)';
        registerButt.style.backgroundColor = 'hsl(260, 8%, 15%)';
        
        iconoSVG.setAttribute('class', 'bi bi-sun');
      } else {
        
        document.body.style.backgroundColor = 'white';
        titleLo.style.color = 'black';
        subRegist.style.color = 'black';
        emailInput.style.backgroundColor = 'white';
        passInput.style.backgroundColor = 'white'; 
        registerButt.style.backgroundColor = 'white';
        
      }
  
      isDarkMode = !isDarkMode; 
    });
  });