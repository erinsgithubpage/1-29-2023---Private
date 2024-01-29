// Function to check the browser is Mozilla Firefox
function isFirefox() {
    return typeof InstallTrigger !== 'undefined' || navigator.userAgent.toLowerCase().includes('firefox');
}

// styles applied to Firefox
function applyFirefoxStyles() {
    var totalSavingsInput = document.getElementById('totalSavings');
    if (totalSavingsInput) {
        totalSavingsInput.style.fontSize = '25px';
    }
}

// Check if the browser is Firefox and then apply styles
if (isFirefox()) {
    applyFirefoxStyles();

    var style = document.createElement('style');
    style.innerHTML = `
        input#totalSavings[type="text"] {
            color: darkblue;
            font-size: 45px;
            max-width: 300px;
            text-align: center;
        }

        @media screen and (max-width: 1350px) and (min-width: 925px) {
            input#totalSavings[type="text"] {
                font-size: 25px; /* Adjust the font size as needed for smaller viewports */
            }
        }
        `;

if (isFirefox()) {
    applyFirefoxStyles();

    var style = document.createElement('style');
    style.innerHTML = `
        @media screen and (max-width: 767px) {
            input#totalSavings[type="text"] {
                font-size: 25px;
            }
        }
    `;
    document.head.appendChild(style);
    }
}

    
