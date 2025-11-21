// scripts.js - slider and small app JS

document.addEventListener('DOMContentLoaded', function() {
  // Simple slider
  const slider = document.getElementById('roomSlider');
  if (slider) {
    const slidesWrap = slider.querySelector('.slides');
    const slides = Array.from(slidesWrap.children);
    const prevBtn = slider.querySelector('[data-action="prev"]');
    const nextBtn = slider.querySelector('[data-action="next"]');
    const dotsWrap = document.getElementById('sliderDots');

    let index = 0;

    function goTo(i) {
      index = (i + slides.length) % slides.length;
      slidesWrap.style.transform = `translateX(-${index * 100}%)`;
      updateDots();
    }

    function updateDots() {
      dotsWrap.innerHTML = '';
      slides.forEach((s, i) => {
        const btn = document.createElement('button');
        if (i === index) btn.classList.add('active');
        btn.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(btn);
      });
    }

    prevBtn?.addEventListener('click', () => goTo(index - 1));
    nextBtn?.addEventListener('click', () => goTo(index + 1));

    // auto rotate
    let auto = setInterval(() => goTo(index + 1), 5000);
    slider.addEventListener('mouseenter', () => clearInterval(auto));
    slider.addEventListener('mouseleave', () => auto = setInterval(() => goTo(index + 1), 5000));

    goTo(0);
  }

  // Dark mode toggle
  const darkToggle = document.getElementById('darkToggle');
  const root = document.documentElement;
  // apply saved preference
  if (localStorage.getItem('site-dark') === '1') document.documentElement.classList.add('dark');

  darkToggle?.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    const isDark = document.documentElement.classList.contains('dark');
    localStorage.setItem('site-dark', isDark ? '1' : '0');
  });
});
