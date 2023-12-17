<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Customization</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>

<?php
// Process form data on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process data from each step
    $step1Data = $_POST["step1"] ?? '';
    $step2Data = $_POST["step2"] ?? '';
    $step3Data = $_POST["step3"] ?? '';
    $step4Data = $_POST["step4"] ?? '';
    $step5Data = $_POST["step5"] ?? '';

    // Handle the data as needed
    // You may want to store it in a database or perform other actions
    // For now, we'll just print the data for demonstration purposes
    echo "<h2>Customization Summary:</h2>";
    echo "<p>Step 1: $step1Data</p>";
    echo "<p>Step 2: $step2Data</p>";
    echo "<p>Step 3: $step3Data</p>";
    echo "<p>Step 4: $step4Data</p>";
    echo "<p>Step 5: $step5Data</p>";
    exit(); // Stop further execution
}
?>

<form id="customizationForm" method="post" action="">
    <div id="step1" class="step">
        <h2>Step 1: Choose Brand</h2>
        <select name="step1">
            <option value="J1sHigh" data-image="img/">Jordan 1 Highs</option>
            <option value="NB550" data-image="img.jpg">New balance 550</option>
            <div id="colorImages" class="color-images">
            <img src="" alt="Selected Color" id="selectedImage" class="selected-image">
        </div>
        <button type="button" onclick="nextStep('step2')">Next</button>
    </div>
        </select>
    </div>

    <div id="step2" class="step">
        <h2>Step 2: Choose Colorway</h2>
        <select name="step2">
            <option value="3mix" data-image="img.jpg">3mix</option>
            <option value="mimosa" data-image="img.jpg">MiMoSa</option>
            <option value="schoolmealclub" data-image="img.jpg">SchoolMealClub</option>
            <div id="colorImages" class="color-images">
            <img src="" alt="Selected Color" id="selectedImage" class="selected-image">
        </div>
        <button type="button" onclick="nextStep('step3')">Next</button>
    </div>
        </select>
    </div>

    <div id="step3" class="step">
        <h2>Step 3: Choose Customizations</h2>
        <select name="step3">
            <option value="3mixcust" data-image="img.jpg">3mix</option>
            <option value="mimosacust" data-image="img.jpg">MiMosa</option>
            <option value="schoolmealclubcust" data-image="img.jpg">SchoolMealClub</option>
            <div id="colorImages" class="color-images">
            <img src="" alt="Selected Color" id="selectedImage" class="selected-image">
        </div>
        <button type="button" onclick="nextStep('step3')">Next</button>
    </div>
        </select>
    </div>

    <div id="step4" class="step">
        <h2>Step 4: Choose Size</h2>
        <select name="step4">
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
        </select>
        <button type="button" onclick="nextStep('step5')">Next</button>
    </div>

    <div id="step5" class="step">
        <h2>Step 5: Review and Submit</h2>
        <input type="text" name="step5" placeholder="Review your customization">
        <button type="submit">Submit</button>
    </div>
</form>

<script>
    function nextStep(stepId) {
        var currentStep = document.getElementById(stepId);
        currentStep.style.display = "none";

        var nextStep = document.getElementById(stepId.substr(0, 5) + (parseInt(stepId.charAt(5)) + 1));
        if (nextStep) {
            nextStep.style.display = "block";
        } else {
            document.getElementById("customizationForm").submit();
        }
    }

    function updateImage() {
        var colorSelect = document.getElementById("colorSelect");
        var selectedColor = colorSelect.options[colorSelect.selectedIndex];
        var colorImages = document.getElementById("colorImages");
        var selectedImage = document.getElementById("selectedImage");

        if (selectedColor && selectedColor.dataset.image) {
            selectedImage.src = selectedColor.dataset.image;
            colorImages.style.display = "block";
        } else {
            colorImages.style.display = "none";
        }
    }
</script>

</body>
</html>
