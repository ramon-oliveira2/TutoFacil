const menuDown = document.querySelectorAll('.main__btn');

menuDown.forEach(item => {
    item.addEventListener('click', scrollToIdOnclick);
});

function scrollToIdOnclick(event) {
    const element = event.target;
    const idn = element.getAttribute('id'); 
    window.scroll({
        top : 1680,
        behavior: "smooth",
    });
}