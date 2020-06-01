jQuery(function () {
  function typeWriter(elemento) {
    clearInterval(textoTransition);

    const texto = textos[count % 2];
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

  const textos = ["Programador", "Freelancer"];

  transitionWriter();
});
