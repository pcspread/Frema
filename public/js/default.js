/**
 * コメントを非表示にする
 */
function noneComment() {
    const success = document.querySelector('.message-box__text.success');
    const danger = document.querySelector('.message-box__text.danger');

    setTimeout(function () {
        success.style.display = 'none';
    }, 4500);

    setTimeout(function () {
        danger.style.display = 'none';
    }, 4500);
}
noneComment();

/**
 * 上方へ移動するボタンの出現と消失
 */
function upperDisplay() {
    const upper = document.querySelector('.upper');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 0) {
            upper.style.display = 'block';
        } else {
            upper.style.display = 'none';
        }
    });
}
upperDisplay();