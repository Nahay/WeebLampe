const select = document.querySelectorAll('#form-select');
const tdPrice = document.querySelectorAll('#td-price');
const spanPrice = document.querySelectorAll('#span-price');


for (let i = 0; i < select.length; i++) {
    select[i].addEventListener('change', () => {

        let selected = parseInt(select[i].options[select[i].selectedIndex].value);
        let price = parseFloat(spanPrice[i].innerHTML);
        tdPrice[i].innerHTML = price*selected + " €";

    })
}