(() => {
   const faqElements = document.querySelectorAll('.faq-title');

   Array.from(faqElements).forEach(element => {
       const faqContent = element.parentNode.querySelector('.faq-content');

       element.addEventListener('click', () => {
           faqContent && faqContent.classList.toggle('hidden')
       })
   })
})()
