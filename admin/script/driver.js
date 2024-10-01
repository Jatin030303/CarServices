document.addEventListener("DOMContentLoaded", function() {
    const actionButtons = document.querySelectorAll('.action-button');

    actionButtons.forEach(button => {
        button.addEventListener('change', function() {
            const statusCell = this.parentNode.previousElementSibling;
            statusCell.textContent = this.value.charAt(0).toUpperCase() + this.value.slice(1);
        });
    });
});
function openAddDriverModal() {
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup-form').style.display = 'block';
}

function closeAddDriverModal() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup-form').style.display = 'none';
}

document.getElementById('overlay').addEventListener('click', closeAddDriverModal);

document.getElementById('add-driver-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('process_add_driver.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === 'success') {
            alert('Driver added successfully');
            location.reload();
        } else {
            alert('Error adding Driver');
        }
    })
    .catch(error => console.error('Error:', error));
    
    closeAddDriverModal();
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
document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');

deleteButtons.forEach(button => {
button.addEventListener('click', function() {
const id = this.getAttribute('data-id');
if (confirm('Are you sure you want to delete this driver?')) {
    fetch('delete_driver.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({ id: id })
    })
    .then(response => response.text())
    .then(data => {
        if (data === 'success') {
            alert('Driver deleted successfully.');
            location.reload();
        } else {
            alert('Error deleting driver: ' + data);
        }
    })
    .catch(error => console.error('Error:', error));
}
});
});
});