document.addEventListener("DOMContentLoaded", (event) => {

    // DOT ANIM -----------------------------------------------------------------

    const cartButtons = document.querySelectorAll('.cart-button');

    cartButtons.forEach(button => button.addEventListener('click', cartClick));

    function cartClick() {
        let button = this;
        button.classList.add('clicked');
    }

    // ZOOM APPEND -----------------------------------------------------------------

    const card = document.querySelectorAll('#card');

    for (let i = 0; i < card.length; i++) {
        card[i].addEventListener('click', () => {

            const container = document.querySelectorAll('.zoom-container');
            const layer = document.getElementById('layer');
            container[i].classList.add('zoom-append');
            layer.classList.add('layer');

            layer.addEventListener('click', () => {
                container[i].classList.remove('zoom-append');
                layer.classList.remove('layer');
            })
        })
    }
});

// FILTER APPEND -----------------------------------------------------------------

document.getElementById('filter-button').addEventListener('click', () => {
    const container = document.getElementById('filter-container');
    layer(container, 'filter-append');
});

// LAYER FUNC -----------------------------------------------------------------

function layer(container, append) {

    const layer = document.getElementById('layer');
    container.classList.add(append);
    layer.classList.add('layer');
    document.body.classList.add('scrollbar');

    layer.addEventListener('click', () => {
        container.classList.remove(append);
        layer.classList.remove('layer');
        document.body.classList.remove('scrollbar');
    })
};