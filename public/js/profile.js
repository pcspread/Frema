/**
 * ファイル選択を開く
 */
function openFile() {
    const btnNone = document.querySelector('.profile-image__click');
    const btnDisplay = document.querySelector('.profile-image__click-button');

    btnDisplay.addEventListener('click', function () {
        btnNone.click();
    });
}
openFile();