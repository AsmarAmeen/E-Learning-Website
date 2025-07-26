


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js"></script>

</head>
<body>
    
<div class="container">

<header>

    <a href="#" class="logo">Smart<span>Study</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="course.php">course</a>
        <a href="teacher.php">teacher</a>
     
        <a href="review.php">review</a>
        <a href="contact.php">contact</a>
        <a href="Admision.php">Admission</a>
    </nav>

</header>

<h1 class="heading">contact us</h1>

<!-- contact section  -->

<section class="contact">

<div class="image">
    <img src="images/contact-img.svg" alt="">
</div>

<form id="contactForm" action="db.php" method="POST" >
    <div class="inputBox">
        <input type="hidden" name="form_type" value="contact">

        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email" required>
    </div>
    <input type="text" name="subject" placeholder="subject" class="box" required>
    <textarea name="message" placeholder="message" cols="30" rows="10" required></textarea>
    <input type="submit" class="btn" value="send">
</form>




</section>


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Whether you're looking to enhance academic skills, prepare for competitive exams, or learn new professional abilities, Smart Academy provides the right resources and support to help you succeed.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">home</a>
            <a href="course.php">course</a>
            <a href="teacher.php">teacher</a>
          
            <a href="review.php">review</a>
            <a href="contact.php">contact</a>
            <a href="Admision.php">Admission</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-phone"></i> +94 778539681 </p>
            <p> <i class="fas fa-envelope"></i> studysmart@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> srilanka,colombo 9</p>
        </div>

    </div>

    <div class="credit"> created by <span> SEU/IS/21/AL/041 And  SEU/IS/21/IC/054 </span> | all rights reserved </div>

</section>

</div>






<!-- custom js file link -->
<script >
   
        document.getElementById("contactForm").addEventListener("submit", function(e) {
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
                    document.getElementById("contactForm").reset(); // Clear form
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



</body>
    </html>
