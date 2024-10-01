document.addEventListener("DOMContentLoaded", function () {
    // Get the buttons and dialogs
    const adminBtn = document.getElementById('admin-btn');
    const optionsDialog = document.getElementById('options-dialog');
    const optionsCloseBtn = document.getElementById('options-close-btn');
    const myAccountBtn = document.getElementById('my-account-btn');
    const logoutBtn = document.getElementById('logout-btn');
    const accountDialog = document.getElementById('account-dialog');
    const accountCloseBtn = document.getElementById('account-close-btn');

    // Show options dialog when admin button is clicked
    adminBtn.addEventListener('click', function () {
        optionsDialog.style.display = 'block';
    });

    // Close options dialog
    optionsCloseBtn.addEventListener('click', function () {
        optionsDialog.style.display = 'none';
    });
    // Logout button handler
    logoutBtn.addEventListener('click', function () {
        window.location.href = 'logout.php';
    });
});