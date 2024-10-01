function filterModels() {
    const brand = document.getElementById("brand").value;
    const modelSelect = document.getElementById("model");
    const allModels = [
        { brand: "maruti", model: "Maruti Swift" },
        { brand: "maruti", model: "Maruti Baleno" },
        { brand: "maruti", model: "Maruti 800" },
        { brand: "maruti", model: "Maruti Celerio" },
        { brand: "maruti", model: "Maruti Dzire" },
        { brand: "maruti", model: "Maruti Brezza" },
        { brand: "maruti", model: "Maruti S-Presso" },
        { brand: "hyundai", model: "Hyundai i20" },
        { brand: "hyundai", model: "Hyundai Creta" },
        { brand: "hyundai", model: "Hyundai Eon" },
        { brand: "hyundai", model: "Hyundai Santro" },
        { brand: "hyundai", model: "Hyundai i10" },
        { brand: "hyundai", model: "Hyundai Venue" },
        { brand: "tata", model: "Tata Nexon" },
        { brand: "tata", model: "Tata Tiago" },
        { brand: "tata", model: "Tata Punch" },
        { brand: "tata", model: "Tata Altroz" },
        { brand: "tata", model: "Tata Hexa" },
        { brand: "tata", model: "Tata Indica" },
        { brand: "mahindra", model: "Mahindra Thar" },
        { brand: "mahindra", model: "Mahindra XUV700" },
        { brand: "mahindra", model: "Mahindra Bolero" },
        { brand: "mahindra", model: "Mahindra XUV300" },
        { brand: "mahindra", model: "Mahindra Scorpio-N" }
    ];

    modelSelect.innerHTML = '<option value="">--Select a model--</option>';

    const filteredModels = allModels.filter(car => car.brand === brand);
    filteredModels.forEach(car => {
        const option = document.createElement("option");
        option.value = car.model.toLowerCase().replace(/\s/g, '-');
        option.textContent = car.model;
        modelSelect.appendChild(option);
    });
}

function toggleAdditionalFields(isEnabled) {
    const additionalFields = document.querySelectorAll(".additional-fields input, .additional-fields select");
    additionalFields.forEach(field => {
        field.disabled = !isEnabled;
        if (isEnabled) {
            field.classList.remove("disabled");
        } else {
            field.classList.add("disabled");
        }
    });
}

window.onload = function() {
    const pickupDropYes = document.getElementById("fyes");
    const pickupDropNo = document.getElementById("fno");
    const additionalFieldsContainer = document.getElementById("additionalFields");

    pickupDropYes.addEventListener("change", function() {
        if (this.checked) {
            toggleAdditionalFields(true);
            additionalFieldsContainer.style.display = "block";
        }
    });

    pickupDropNo.addEventListener("change", function() {
        if (this.checked) {
            toggleAdditionalFields(false);
            additionalFieldsContainer.style.display = "none";
        }
    });
};