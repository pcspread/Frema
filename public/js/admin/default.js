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
 * ボタンを変色させる
 */
function changeColor() {
    const user = document.querySelector('.top-header__click.user');
    const invite = document.querySelector('.top-header__click.invite');
    const mail = document.querySelector('.top-header__click.mail');

    if (location.pathname === '/admin/top') {
        user.style.backgroundColor = '#CCFFCC';
    } else if (location.pathname === '/admin/top/invite') {
        invite.style.backgroundColor = '#CCFFCC';
    } else if (location.pathname === '/admin/mail') {
        mail.style.backgroundColor = '#CCFFCC';
    }
}
changeColor();