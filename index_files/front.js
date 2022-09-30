/* Vars */
$body = $('body');
$loading = $('#loading-spinner');

$front_content = $('#front_content');
$loadingCount = 0;

/* Loading */
function showLoading() {
    $loading.show();
    NProgress.start();
    $loadingCount++;
}

function hideLoading() {
    if ($loadingCount == 0) {
        $loading.hide();
        NProgress.done();
    } else if ($loadingCount > 0) {
        $loadingCount--;
        if ($loadingCount == 0) {
            $loading.hide();
            NProgress.done();
        }
    } else {
        $loading.hide();
        NProgress.done();
    }
}

/* On Ready */
$(document).ready(function () {
    hideLoading();
    $('[data-toggle="tooltip"]').tooltip()
});
