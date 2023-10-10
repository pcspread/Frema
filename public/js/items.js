/**
 * 商品を検索する
 */
function searchItems() {
    const input = document.querySelector('.header-search__input');
    const items = document.querySelectorAll('.item-link');

    input.addEventListener('change', function () {
        items.forEach(item => {
            if (!item.textContent.includes(input.value)) {
                item.parentNode.remove();
            }
        });
    });
}
searchItems();