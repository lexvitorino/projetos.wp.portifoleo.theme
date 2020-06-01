jQuery(window).on('load', function() {

    jQuery('.level-bar-inner').each(function() {
    
        var itemWidth = jQuery(this).data('level');
        
        jQuery(this).animate({
            width: itemWidth
        }, 800);
        
    });

});

jQuery(function () {
    function typeWriter(elemento) {
      clearInterval(textoTransition);
  
      const texto = textos[count % 2].trim();
      const textoArray = texto.split("");
  
      elemento.innerHTML = "";
      elemento.classList.add("is_visible");
  
      textoArray.forEach((letra, i) => {
        setTimeout(() => {
          elemento.innerHTML += letra;
          if (elemento.innerHTML === texto) {
              transitionWriter();
          }
        }, 240 * i);
      });
    }
  
    function transitionWriter() {
      textoTransition = setInterval(() => {
        count++;
        const texto = document.querySelector(".textoTransition");
        typeWriter(texto);
      }, 600);
    }
  
    let textoTransition;
    let count = 0;
  
    const textos = stextos.split(',');
  
    transitionWriter();
  });