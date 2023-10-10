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