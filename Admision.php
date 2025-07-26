


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>

  
    <!-- custom css file link  -->

    <link rel="stylesheet" href="css/style.css">
   



</head>
<body>
    
<div class="container">

<header>

    <a href="#" class="logo">Smart<span>Study</span></a>
<h1 class="heading" >APPLY FOR Admission</h1>
   

</header>



<section class="contact">

<div class="image">
    <img src="images/contact-img.svg" alt="">
</div>

<form  id="admissionForm" action="db.php" method="POST">

    <div class="inputBox" >
     
    </div>
    <input type="hidden" name="form_type" value="admission">

    <input type="text" placeholder="name" class="box" name="name">
    <input type="email" placeholder="email" class="box" name="email">
    <input type="text" placeholder="address" class="box" name="address">
    <input type="text" placeholder="phone" class="box" name="phone">
    <input type="text" placeholder="course" class="box" name="course">
    <textarea placeholder="message" name="message" cols="30" rows="10"></textarea>

    <input type="submit" class="btn" value="Apply">

</form>

</section>


<section class="footer">
<div class="credit"> created by <span> SEU/IS/21/AL/041 And  SEU/IS/21/IC/054</span> | all rights reserved </div>

</section>

<!-- custom js file link -->
<script>
    document.getElementById("admissionForm").addEventListener("submit", function(e) {
        e.preventDefault(); // Stop form from submitting normally

        var formData = new FormData(this);

        fetch("db.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            if (result.trim() === "success") {
                alert("Saved successfully!");
                document.getElementById("admissionForm").reset(); // Clear form
            } else {
                alert("Submission failed. Please try again.");
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred while submitting the form.");
        });
    });
</script>