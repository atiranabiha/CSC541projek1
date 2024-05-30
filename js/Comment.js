function calculateBMI() {
    var height = document.getElementById("height").value;
    var weight = document.getElementById("weight").value;

    if (height > 0 && weight > 0) {
        var heightMeters = height / 100;
        var BMI = weight / (heightMeters * heightMeters);
        var result = document.getElementById("result");
        var comment = document.getElementById("comment");
        
        result.textContent = "Your BMI is " + BMI.toFixed(2);

        if (BMI < 18.5) {
            comment.textContent = "You are underweight.";
        } else if (BMI >= 18.5 && BMI < 24.9) {
            comment.textContent = "You have a normal weight.";
        } else if (BMI >= 25 && BMI < 29.9) {
            comment.textContent = "You are overweight.";
        } else {
            comment.textContent = "You are obese.";
        }
    } else {
        alert("Please enter valid height and weight values (positive numbers).");
		return;
    }
}