const div_pergunta1 = document.getElementById('div_pergunta1');
const div_pergunta2 = document.getElementById('div_pergunta2');
const div_pergunta3 = document.getElementById('div_pergunta3');
const div_pergunta4 = document.getElementById('div_pergunta4');
const div_pergunta5 = document.getElementById('div_pergunta5');
const div_pergunta6 = document.getElementById('div_pergunta6');
const div_pergunta7 = document.getElementById('div_pergunta7');
const div_pergunta8 = document.getElementById('div_pergunta8');


// Obtenha os botões de rádio dentro da divs de pergunta
const radios_pergunta1 = div_pergunta1.querySelectorAll('input[type=radio]');
const radios_pergunta2 = div_pergunta2.querySelectorAll('input[type=radio]');
const radios_pergunta3 = div_pergunta3.querySelectorAll('input[type=radio]');
const radios_pergunta4 = div_pergunta4.querySelectorAll('input[type=radio]');
const radios_pergunta5 = div_pergunta5.querySelectorAll('input[type=radio]');
const radios_pergunta6 = div_pergunta6.querySelectorAll('input[type=radio]');
const radios_pergunta7 = div_pergunta7.querySelectorAll('input[type=radio]');
const radios_pergunta8 = div_pergunta8.querySelectorAll('input[type=radio]');


// Adicione um evento de clique para cada botão de rádio
radios_pergunta1.forEach(radio => {
  radio.addEventListener('click', () => {
    // Se o botão de rádio for selecionado
    if (radio.checked) {
      // Oculte a div atual usando fade-out
      div_pergunta1.style.opacity = 1;
      (function fadeOut() {
        if ((div_pergunta1.style.opacity -= .1) < 0) {
            div_pergunta1.style.display = 'none';
          // Mostre a próxima div usando fade-in
          div_pergunta2.style.display = 'block';
          div_pergunta2.style.opacity = 0;
          (function fadeIn() {
            var val = parseFloat(div_pergunta2.style.opacity);
            if (!((val += .1) > 1)) {
                div_pergunta2.style.opacity = val;
              requestAnimationFrame(fadeIn);
            }
          })();
        } else {
          requestAnimationFrame(fadeOut);
        }
      })();
    }
  });
});



// Adicione um evento de clique para cada botão de rádio
radios_pergunta2.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta2.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta2.style.opacity -= .1) < 0) {
            div_pergunta2.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_pergunta3.style.display = 'block';
            div_pergunta3.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_pergunta3.style.opacity);
              if (!((val += .1) > 1)) {
                  div_pergunta3.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });

// Adicione um evento de clique para cada botão de rádio
radios_pergunta3.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta3.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta3.style.opacity -= .1) < 0) {
            div_pergunta3.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_pergunta4.style.display = 'block';
            div_pergunta4.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_pergunta4.style.opacity);
              if (!((val += .1) > 1)) {
                div_pergunta4.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });

// Adicione um evento de clique para cada botão de rádio
radios_pergunta4.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta4.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta4.style.opacity -= .1) < 0) {
            div_pergunta4.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_pergunta5.style.display = 'block';
            div_pergunta5.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_pergunta5.style.opacity);
              if (!((val += .1) > 1)) {
                div_pergunta5.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });

// Adicione um evento de clique para cada botão de rádio
radios_pergunta5.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta5.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta5.style.opacity -= .1) < 0) {
            div_pergunta5.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_pergunta6.style.display = 'block';
            div_pergunta6.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_pergunta6.style.opacity);
              if (!((val += .1) > 1)) {
                div_pergunta6.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });

// Adicione um evento de clique para cada botão de rádio
radios_pergunta6.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta6.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta6.style.opacity -= .1) < 0) {
            div_pergunta6.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_pergunta7.style.display = 'block';
            div_pergunta7.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_pergunta7.style.opacity);
              if (!((val += .1) > 1)) {
                div_pergunta7.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });

// Adicione um evento de clique para cada botão de rádio
radios_pergunta7.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta7.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta7.style.opacity -= .1) < 0) {
            div_pergunta7.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_pergunta8.style.display = 'block';
            div_pergunta8.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_pergunta8.style.opacity);
              if (!((val += .1) > 1)) {
                div_pergunta8.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });


  // Adicione um evento de clique para cada botão de rádio
  radios_pergunta8.forEach(radio => {
    radio.addEventListener('click', () => {
      // Se o botão de rádio for selecionado
      if (radio.checked) {
        // Oculte a div atual usando fade-out
        div_pergunta8.style.opacity = 1;
        (function fadeOut() {
          if ((div_pergunta8.style.opacity -= .1) < 0) {
            div_pergunta8.style.display = 'none';
            // Mostre a próxima div usando fade-in
            div_submit.style.display = 'block';
            div_submit.style.opacity = 0;
            (function fadeIn() {
              var val = parseFloat(div_submit.style.opacity);
              if (!((val += .1) > 1)) {
                div_submit.style.opacity = val;
                requestAnimationFrame(fadeIn);
              }
            })();
          } else {
            requestAnimationFrame(fadeOut);
          }
        })();
      }
    });
  });