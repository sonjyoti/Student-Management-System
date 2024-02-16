// Add event listeners to the radio buttons to trigger the function
document.getElementById('citizenYes').addEventListener('change', handleCitizenSelection);
document.getElementById('citizenNo').addEventListener('change', handleCitizenSelection);

// Function to handle the radio button selection
function handleCitizenSelection() {
    // Get the value of the selected radio button
    const citizenValue = document.querySelector('input[name="citizen"]:checked').value;

    // Get the State, District, and Pincode elements
    const stateSelect = document.getElementById('inputState');
    const districtSelect = document.getElementById('inputDistrict');
    const pincodeInput = document.getElementById('inputZip');

    // Check if the user selected "YES"
    if (citizenValue === 'YES') {
        // Enable the State, District, and Pincode fields
        stateSelect.removeAttribute('disabled');
        districtSelect.removeAttribute('disabled');
        pincodeInput.removeAttribute('disabled');
    } else {
        // Disable the State, District, and Pincode fields
        stateSelect.setAttribute('disabled', 'true');
        districtSelect.setAttribute('disabled', 'true');
        pincodeInput.setAttribute('disabled', 'true');
    }
}
