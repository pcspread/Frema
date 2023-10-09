/**
 * ファイル選択を開く
 */
function openFile() {
    const btnNone = document.querySelector('.sell-image__click');
    const btnDisplay = document.querySelector('.sell-image__click-button');

    btnDisplay.addEventListener('click', function () {
        btnNone.click();
    });
}
openFile();