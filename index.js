const fileImg = document.querySelectorAll('.file-img');
const overlay = document.querySelector('.overlay');
const imgZoomIn = document.querySelector('.img-zoom-in');

fileImg.forEach((img)=>{
    img.addEventListener('click', (e)=>{
        overlay.classList.remove('hidden');
        imgZoomIn.classList.remove('hidden');
        const imgSrc = e.currentTarget.src;
        imgZoomIn.innerHTML = `<img src="${imgSrc}" alt="">`;
    })
})

overlay.addEventListener('click', ()=>{
    overlay.classList.add('hidden');
    imgZoomIn.classList.add('hidden');
})

imgZoomIn.addEventListener('click', ()=>{
    overlay.classList.add('hidden');
    imgZoomIn.classList.add('hidden');
})