document.addEventListener("DOMContentLoaded", function() {
    const actionButtons = document.querySelectorAll('.action-button');

    actionButtons.forEach(button => {
        button.addEventListener('change', function() {
            const statusCell = this.parentNode.previousElementSibling;
            statusCell.textContent = this.value.charAt(0).toUpperCase() + this.value.slice(1);
        });
    });
});
function openAddMechanicModal() {
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup-form').style.display = 'block';
}

function closeAddMechanicModal() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup-form').style.display = 'none';
}

document.getElementById('overlay').addEventListener('click', closeAddMechanicModal);

document.getElementById('add-mechanic-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('add_mechanic.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === 'success') {
            alert('Mechanic added successfully');
            location.reload();
        } else {
            alert('Error adding mechanic');
        }
    })
    .catch(error => console.error('Error:', error));
    
    closeAddMechanicModal();
});

document.addEventListener("DOMContentLoaded", function() {
    const actionButtons = document.querySelectorAll('.action-button');

    actionButtons.forEach(button => {
        button.addEventListener('change', function() {
            const statusCell = this.parentNode.previousElementSibling;
            statusCell.textContent = this.value.charAt(0).toUpperCase() + this.value.slice(1);
        });
    });
});