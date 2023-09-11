const scrollIndicator = document.querySelector('.scroll-indicator');


window.addEventListener('scroll', ()=>{
    let windowHeight = window.innerHeight;
    let maxScrollableHeight = document.documentElement.scrollHeight-windowHeight;
    scrollIndicator.style.width = `${(window.scrollY/maxScrollableHeight)*100}%`;
})
