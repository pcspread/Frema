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
    const topUser = document.querySelector('.top-header__click.top-user');
    const topInvite = document.querySelector('.top-header__click.top-invite');
    const ownerUser = document.querySelector('.top-header__click.owner-user');
    const ownerInvite = document.querySelector('.top-header__click.owner-invite');
    const mail = document.querySelector('.top-header__click.mail');

    if (location.pathname === '/admin/top') {
        topUser.style.backgroundColor = '#CCFFCC';
    } else if (location.pathname === '/admin/top/invite') {
        topInvite.style.backgroundColor = '#CCFFCC';
    } else if (location.pathname === '/admin/mail') {
        mail.style.backgroundColor = '#CCFFCC';
    } else if (location.pathname === '/admin/owner') {
        ownerUser.style.backgroundColor = '#CCFFCC';
    } else if (location.pathname === '/admin/owner/invite') {
        ownerInvite.style.backgroundColor = '#CCFFCC';
    }
}
changeColor();

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