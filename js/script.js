function calculateSavings() {
    // Get the number of members from the input field
    var numMembers = document.getElementById("numMembers").value;

    // Ensure the input is a valid number
    if (isNaN(numMembers) || numMembers < 0) {
        alert("Please enter a valid number of members.");
        return;
    }

    // Calculate total savings
    var savingsPerMember = 148.00;
    var totalSavings = numMembers * savingsPerMember;

    // Display the total savings in the corresponding field
    document.getElementById("totalSavings").value = "$" + totalSavings.toFixed(2);
}

document.addEventListener('DOMContentLoaded', function () {
    var currentYear = new Date().getFullYear();
    document.getElementById('copyrightYear').textContent = currentYear;
});

