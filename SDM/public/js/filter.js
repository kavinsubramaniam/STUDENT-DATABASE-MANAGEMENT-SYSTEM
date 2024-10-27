
document.getElementById('copyEmails').addEventListener('click', function() {
    // Get all the rows from the table body
    const rows = document.querySelectorAll('#studentsTable tbody tr');
    let emails = [];

    // Loop through each row and get the email (assuming it's in the fifth column)
    rows.forEach(row => {
        const emailCell = row.cells[4]; // Index 4 is the fifth cell (Email)
        if (emailCell) {
            emails.push(emailCell.innerText); // Collect email addresses
        }
    });

    // Join the emails into a single string, separated by commas
    const emailString = emails.join(', ');

    // Copy the emails to the clipboard
    navigator.clipboard.writeText(emailString).then(() => {
        alert('Emails copied to clipboard!'); // Optional success message
    }).catch(err => {
        console.error('Error copying emails: ', err); // Handle errors
    });
});








// Open and close modal functionality
const filterModal = document.getElementById("filterModal");
const openFilterBtn = document.getElementById("openFilterBtn");
const closeFilterBtn = document.getElementById("closeFilterBtn");

// Open the filter modal when the button is clicked
openFilterBtn.onclick = function () {
    filterModal.style.display = "flex";
};

// Close the filter modal when the close button is clicked
closeFilterBtn.onclick = function () {
    filterModal.style.display = "none";
};

// Close the modal when clicking outside the content area
window.onclick = function (event) {
    if (event.target === filterModal) {
        filterModal.style.display = "none";
    }
};

//##############################################################################################

// To keep track of selected columns and whether to exclude them
let selectedColumns = [];
let excludeColumns = false;

// Function to filter columns based on the search input
function filterColumns() {
    const searchTerm = document.getElementById("search").value.toLowerCase();
    const columns = document.querySelectorAll("#available-fields div");

    columns.forEach((column) => {
        const label = column.textContent.toLowerCase();
        if (label.includes(searchTerm)) {
            column.style.display = "";
        } else {
            column.style.display = "none";
        }
    });
}
console.log(selectedColumns);
// Function to handle column selection and display in the 'Selected Columns' section
function selectColumn(checkbox) {
    const columnValue = checkbox.value;
    const selectedColumnsContainer =
        document.getElementById("selected-columns");

    if (checkbox.checked) {
        selectedColumns.push(columnValue);
        const selectedColumnDiv = document.createElement("div");
        console.log(columnValue);
        selectedColumnDiv.setAttribute("id", `selected-${columnValue}`);
        // selectedColumnDiv.innerHTML = `<label>${columnValue} <input type="text" name="${columnValue}_constraint" placeholder="Constraint"></label>`;
        selectedColumnDiv.innerHTML = `<div>
    <div class="dynamically_added_column">${columnValue}</div> 
    <span onclick="selectedColumnRemove('${columnValue}')" class="close">&times;</span>
</div>`;
        selectedColumnsContainer.appendChild(selectedColumnDiv);
        console.log(selectedColumns);
    } else {
        const columnToRemove = document.getElementById(
            `selected-${columnValue}`
        );
        selectedColumnsContainer.removeChild(columnToRemove);
        selectedColumns = selectedColumns.filter((data) => data != columnValue);
        console.log(selectedColumns);
    }
    console.log(selectedColumns);

    updateConstraintsArea();
}

function selectedColumnRemove(columnValue) {
    console.log(columnValue);
    const selectedColumnsContainer =
        document.getElementById("selected-columns");
        const checkbox = document.getElementById(columnValue);
        checkbox.checked = false;
    const columnToRemove = document.getElementById(`selected-${columnValue}`);
    selectedColumnsContainer.removeChild(columnToRemove);
    selectedColumns = selectedColumns.filter((data) => data != columnValue);
    console.log(selectedColumns);
    updateConstraintsArea();
}

// Function to update constraints area when columns are selected
function updateConstraintsArea() {
    const constraintsArea = document.getElementById("constraints-area");
    constraintsArea.innerHTML = "";

    selectedColumns.forEach((column) => {
        const constrainElement = document.createElement("div");
        constrainElement.setAttribute("class", "constraint");
        constrainElement.innerHTML = `${column} : <input type="text" name="${column}_constraint" placeholder="Enter constraint for ${column}" style="width:100%;">`;
        constraintsArea.appendChild(constrainElement);
    });
}

// Function to toggle exclusion mode
function toggleExclude() {
    excludeColumns = document.getElementById("exclude").checked;
}

// Submit the selected columns and constraints via an AJAX request
function submitSelectedColumns() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    console.log(csrfToken); // Check if the token is being fetched correctly

    const constraints = {};
    console.log("hihiofhs");

    selectedColumns.forEach((column) => {
        const constraintValue = document.querySelector(
            `input[name='${column}_constraint']`
        ).value;
        constraints[column] = constraintValue;
    });
    console.log(constraints);
    // Sending data using AJAX request
    fetch('/dashboard/submit_columns', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json' // Specify content type
        },
        body: JSON.stringify({
            selectedColumns: selectedColumns,
            constraints: constraints, // Convert form data to an object
        }),
    })
    .then(response => {
        console.log('Data received:', response);
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json(); // Parse JSON response
    })
    .then(data => {
        console.log('Data received:', data); // Log the received data
    
        const studentsTableBody = document.querySelector('#studentsTable tbody');
    
        if (!studentsTableBody) {
            console.error('Table body not found');
            return; // Exit if tbody is not found
        }
    
        studentsTableBody.innerHTML = ''; // Clear existing rows
    
        // Populate the table with new data
        if (Array.isArray(data)) { // Check if data is an array
            data.forEach(student => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${student.id}</td>
                    <td>${student.student_name}</td>
                    <td>${student.enrolment_no}</td>
                    <td>${student.department}</td> <!-- Updated from 'CSBS' to dynamic branch name -->
                    <td>${student.student_email_id}</td> <!-- Updated from hardcoded email -->
                    <td>${student.year}</td> <!-- Assuming 'year' refers to the academic year -->
                    <td>${student.student_mobile_no}</td> <!-- Updated from hardcoded mobile number -->
                    
                    <!-- Add more fields as needed -->
                `;
                studentsTableBody.appendChild(row);
            });
        } else {
            console.error('Expected an array but got:', data);
        }
    })
    .catch(error => console.error('Error:', error));
    filterModal.style.display = "none";
}
