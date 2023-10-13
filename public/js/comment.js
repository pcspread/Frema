/**
 * チェックボックスの選択内容の設定
 */
function checkboxSet() {
    const input = document.querySelector('.purchase-record__input');
    const checkbox = document.querySelector('.purchase-record__checkbox.new');

    if (input.value === '設定されていません') {
        checkbox.checked = true;
    }
}
checkboxSet();