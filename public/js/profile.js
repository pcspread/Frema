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

/**
 * 選択されたファイルを表示する
 */
function fileView() {
    const input = document.querySelector('.profile-image__click');
    const image = document.querySelector('.profile-image__instance');

    input.addEventListener('change', function () {
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                image.src = e.target.result;
            }

            reader.readAsDataURL(file);
        } else {
            image.src = 'https://dummyimage.com/100x100/000/0011ff';
        }
    });
}
fileView();