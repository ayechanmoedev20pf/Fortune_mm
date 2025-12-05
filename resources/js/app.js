import './bootstrap';
import '@tailwindplus/elements';
import 'flowbite';
import '../css/app.css';


document.addEventListener("DOMContentLoaded", () => {
  // fade-up
  const fadeUpItems = document.querySelectorAll('.fade-item')
  // fade-left
  const fadeLeftItems = document.querySelectorAll('.fade-item-left')

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // fade-up
        if (entry.target.classList.contains('fade-item')) {
          entry.target.classList.add('animate-fadeUp')
        }
        // fade-left
        if (entry.target.classList.contains('fade-item-left')) {
          entry.target.classList.add('animate-fadeLeft')
        }
        observer.unobserve(entry.target)
      }
    })
  })

  fadeUpItems.forEach(el => observer.observe(el))
  fadeLeftItems.forEach(el => observer.observe(el))
})

