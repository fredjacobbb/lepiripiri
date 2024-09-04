const btnOpen = document.getElementsByClassName('btn-open-menu')[0]
const btnClose = document.getElementsByClassName('btn-close-menu')[0]
const offsetCanvas = document.getElementsByClassName('offset-canvas')[0]

btnOpen.addEventListener('click', () => {
    btnClose.classList.remove('d-none');
    btnOpen.classList.add('d-none');
    offsetCanvas.classList.add('open');
})

btnClose.addEventListener('click', () => {
    btnOpen.classList.remove('d-none');
    btnClose.classList.add('d-none');
    offsetCanvas.classList.remove('open');
})

window.addEventListener('resize', () => {
    if (window.innerWidth > 550) {
        if(!offsetCanvas.checkVisibility()){
            offsetCanvas.classList.remove('open')
            btnOpen.classList.remove('d-none');
            btnClose.classList.add('d-none');
        }
    }
})