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

/**
 * ボタンを変色させる
 */
function changeColor() {
    const recommend = document.querySelector('.select-item.recommend');
    const favorite = document.querySelector('.select-item.favorite');

    if (location.pathname === '/') {
        recommend.style.color = '#FF3333';
    } else if (location.pathname === '/favorite') {
        favorite.style.color = '#FF3333';
    }
}
changeColor();