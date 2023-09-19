<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="dy.jpg" alt="Dr. Dy Patil Institute">
    <div class="container">
        <h2>Welcome To Dr. DY Patil Institute of Information and Technology Trip Form</h2>
        <p>Enter your details and submit the form to confirm your participation in the trip.</p>

        <form action="process_form.php" method="post">
            <input type="text" name="Name" id="Name" placeholder="Enter your name:" required>
            <input type="text" name="Age" id="Age" placeholder="Enter your age:" required>
            <input type="text" name="Roll" id="Roll" placeholder="Enter your Roll number:" required>
            <input type="email" name="Email" id="Email" placeholder="Enter your email:" required>
            <input type="tel" name="Phone" id="Phone" placeholder="Enter your number:" required>

            <textarea name="Other" id="Other" cols="30" rows="10" placeholder="Enter any other Information or query here"></textarea>

            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
