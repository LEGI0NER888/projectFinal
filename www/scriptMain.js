/* slider */

const images = document.querySelectorAll('.slider-img');
const controlls = document.querySelectorAll('.controls');

let imageIndex = 0;


function show(index) {
    images[imageIndex].classList.remove('active');
    images[index].classList.add('active');
    imageIndex = index;

   
}

controlls.forEach((e) => {
    e.addEventListener('click', () => {
        if (event.target.classList.contains('prev-button')) {
            let index = imageIndex - 1;
            
            if (index < 0 ) {
                index = images.length - 1;
               
            }

            show(index);
        } else if (event.target.classList.contains('next-button')) {
            let index = imageIndex + 1;
            
            if (index >= images.length ) {
                index = 0;
                
            }
            show(index);
        }
    })
})

show(imageIndex);