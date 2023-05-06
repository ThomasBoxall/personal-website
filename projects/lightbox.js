const gallery = document.querySelector('.project-image-gallery');
const lightbox = document.querySelector('.lightbox');
const close = document.querySelector('.close');
// const lightboxImg = lightbox.querySelector('img');
gallery.addEventListener('click', function (event) {
    event.preventDefault();
    // lightbox.style.display = 'flex';
    lightbox.classList = "lightbox lightbox-show";
    let lightboxImg = document.createElement('img');
    lightboxImg.id = "lightboxImg"
    lightboxImg.src = event.target.src || event.target.parentNode.href;
    lightbox.appendChild(lightboxImg);
});
close.addEventListener('click', function () {
    // lightbox.style.display = 'none';
    lightbox.classList = "lightbox lightbox-hide"
    lightbox.removeChild(lightboxImg);
});

// adapted from https://www.tutorialspoint.com/how-to-create-image-lightbox-gallery-using-html-css-and-javascript