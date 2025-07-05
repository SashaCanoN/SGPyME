
  const slides = document.querySelectorAll('.slide');
  let index = 0;

  document.getElementById('flecha-izq').addEventListener('click', () => {
    slides[index].classList.remove('activo');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('activo');
  });

  document.getElementById('flecha-der').addEventListener('click', () => {
    slides[index].classList.remove('activo');
    index = (index + 1) % slides.length;
    slides[index].classList.add('activo');
  });