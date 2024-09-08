<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f128e6cc29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact Form</title>
    <style>
        .error-modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    background-color: white;
    border-radius: 10px;
    text-align: center;
    padding: 20px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
    z-index: 1000;
}

.error-modal h2 {
    color: red;
}

.error-modal button {
    background-color: red;
    color: white;
    border: none;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
}

.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.error-border {
    border: 2px solid red;
}

.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px;
    display: none; 
}
.error-icon {
    font-size: 50px; 
    color: red; 
    display: block;
    margin: 0 auto 10px auto; 
}
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h2>Send us a Message</h2>
            <form action="process.php" method="post" id="contactForm">
                <div class="form-mess">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name">
                        <span class="error-message" id="nameError">Name is required</span>
                    </div>

                    &nbsp; &nbsp;

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                        <span class="error-message" id="emailError">Valid email is required</span>
                    </div>
                </div>

                <div class="form-mess">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Phone">
                        <span class="error-message" id="phoneError">Phone is required</span>
                    </div>

                    &nbsp; &nbsp;

                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company" placeholder="Company">
                        <span class="error-message" id="companyError">Company is required</span>
                    </div>
                </div>

                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Hi, do you have a moment to talk abo..."></textarea>
                <span class="error-message" id="messageError">Message is required</span>

                <div style="text-align: right;">
                    <button type="submit">Send</button>
                </div>
            </form>

            <!-- Error Modal -->
            <div class="overlay" id="overlay"></div>
            <div class="error-modal" id="errorModal">
                <h2>Face-plant!</h2>
                <i class="fa-regular fa-circle-xmark error-icon"></i>
                <p>Ooops, something went wrong.</p>
                <button id="tryAgain">Try again</button>
            </div>
        </div>

        <div class="contact-info" style="background-color: #161d6f; text-align: center;">
            <h2>Contact Information</h2>
            <div class="cont-info">
                <i class="fa-solid fa-location-dot icon"></i>
                <p>360 King Street Easterville Tennessee</p>
            </div>

            <div class="cont-info">
                <i class="fa-solid fa-mobile-screen icon"></i>
                <p>Phone: (800) 900-200</p>
            </div>

            <div class="cont-info">
                <i class="fa-solid fa-envelope-open-text icon"></i>
                <p>Email: info@example.com</p>
            </div>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/form-validation.js"></script>
</body>
</html>
