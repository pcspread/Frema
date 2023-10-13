/**
 * ボタンを変色させる
 */
function changeColor() {
    const recommend = document.querySelector('.select-item.recommend');
    const purchase = document.querySelector('.select-item.purchase');

    if (location.pathname === '/mypage') {
        recommend.style.color = '#FF3333';
    } else if (location.pathname === '/mypage/purchase') {
        purchase.style.color = '#FF3333';
    }
}
changeColor();