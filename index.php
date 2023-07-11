<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yopaz - Email Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Yopaz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 company-info d-flex align-items-center">
                <div>
                    <h2 class="text-danger font-weight-bold display-4">Hello! We are Yopaz</h2>
                    <h4 class="text-center font-weight-bold">Dream It, Build It, Live It.</h4>
                </div>
            </div>

            <div class="col-md-6 contact-form">
                <?php if(isset($_GET["sent"]) && $_GET["sent"] == "true"): ?>
                    <div class="alert alert-success text-center">
                        Thank you for your feedback! We appreciate your response.
                    </div>
                <?php endif; ?>

                <h4 class="text-center">Contact Us</h4>

                <form action="send.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="send" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-6 d-flex">
                <div class="company-image">
                    <img src="image/123.jpg" alt="Company Image" style="max-width: 100%;">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="company-details">
                    <h2 class="text-center font-weight-bold">About Us</h2>
                    <p>Yopaz Co., Ltd. is an offshore company with a mission to connect Japan, a country facing a shortage of IT workforce, and Vietnam, a country with a high unemployment rate and low labor costs. 
                        Through this, we not only make significant contributions to addressing social issues in both countries but also provide high-quality services to humanity.
                        In the era of digital transformation (DX), offshore outsourcing, due to the scarcity of IT talent and high labor costs, has become one of the most popular methods, as indicated by the survey conducted by オフショア開発.com.

                        However, this approach has limitations in terms of product quality management, communication, and more. By identifying, analyzing problems, and finding solutions, we always strive to provide customers with services that exceed their expectations.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2 class="font-weight-bold">Explore Our Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">                  
                        <h5 class="card-title">Human Resources</h5>
                        <p class="card-text">We have a highly skilled workforce that is professionally trained and experienced in the field of Information Technology.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Development and Operations</h5>
                        <p class="card-text">We provide professional services in application development, website development, and system operations, ensuring performance and stability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Collaboration</h5>
                    <p class="card-text">We foster strong and sustainable collaboration with customers, partners, and developers to achieve the best outcomes.</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <footer class="bg-light text-center py-3">
        <p>© 2023 Yopaz. All rights reserved.</p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
