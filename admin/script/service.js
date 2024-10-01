document.addEventListener('DOMContentLoaded', function() {
    fetch('fetch_userdata.php')
        .then(response => response.json())
        .then(data => {
            let tableBody = document.getElementById('userdata-table');
            data.forEach(user => {
                let row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.number}</td>
                    <td>${user.brand}</td>
                    <td>${user.model}</td>
                    <td>${user.service_type}</td>
                    <td>${user.state}</td>
                    <td>${user.city}</td>   
                    <td>${user.date}</td>            
                    <td>${user.pickup_drop}</td>
                    
                    <td>${user.address}</td>
                    <td>${user.pincode}</td>
                    <td>${user.flat_number}</td>
                    <td>${user.registration_no}</td>
                    <td>${user.odometer}</td>
                    <td>${user.service_requirement}</td>
                    <td>${user.additional_requirement}</td>
                  
                  <td class="status">${user.status}</td>
                  <td>
                        <select  class='action-button' onchange="updateStatus(${user.id}, this.value, this)">
                            <option value="Pending" ${user.status === 'Pending' ? 'selected' : ''}>Pending</option>
                            <option value="On Process" ${user.status === 'On Process' ? 'selected' : ''}>On Process</option>
                            <option value="Completed" ${user.status === 'Completed' ? 'selected' : ''}>Completed</option>
                        </select>
                    </td>
                    
                    <td>
<select class='action-button' onchange="updateTimeSlot(${user.id}, this.value, this)">
<option value="">Select Slot</option>
    <option value="9.00">9.00 AM - 9:30 AM</option>
    <option value="9.30">9:30 AM - 10:00 AM</option>
    <option value="10.00">10:00 AM - 10:30 AM</option>
    <option value="10.30">10:30 AM - 11:00 AM</option>
    <option value="11.00">11:00 AM - 11:30 AM</option>
    <option value="11.30">11:30 AM - 12:00 PM</option>
    <option value="12.00">12:00 PM - 12:30 PM</option>
    <option value="12.30">12:30 PM - 1:00 PM</option>
    <option value="2.00">2:00 PM - 2:30 PM</option>
    <option value="2.30">2:30 PM - 3:00 PM</option>
    <option value="3.00">3:00 PM - 3:30 PM</option>
    <option value="3.30"> 3:30 PM - 4:00 PM</option>
    <option value="Full">Today Fully Booked</option>
    <!-- Add more options for other time slots as needed -->
</select>
<td>
<form action="delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this record?');">
    <input type="hidden" name="deleteid" value="${user.id}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>

                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

function updateTimeSlot(id, timeSlot, selectElement) {
    console.log('Updating time slot for ID:', id, 'to', timeSlot); // Log to verify parameters
    // Here you can send an AJAX request to update the time slot in the database
    // Add your code to update the time slot here
}

function updateStatus(id, status, selectElement) {
    console.log('Updating status for ID:', id, 'to', status); // Log to verify parameters
    fetch('update_status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            id: id,
            status: status,
        }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Response:', data); // Log server response
        if (data.success) {
            console.log('Status updated successfully.');
            // Update the status cell in the same row
            let row = selectElement.closest('tr');
            let statusCell = row.querySelector('.status');
            statusCell.textContent = status;
        } else {
            console.error('Failed to update status:', data.error);
        }
    })
    .catch(error => console.error('Error updating status:', error));
}
