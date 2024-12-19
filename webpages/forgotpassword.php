<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sign.css">
    <title>Forgot Password</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="../php/forgotpassword-handler.php" method="POST">
                <h1>Forgot Password</h1>
                <span><a href="../index.html">LocalBites</a></span>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit" name="submit">Submit</button>
                
                <!-- Display error or success messages -->
                <span class="error"><?php if (isset($_GET['error'])) { echo htmlspecialchars($_GET['error']); } ?></span>
                <span class="success"><?php if (isset($_GET['success'])) { echo htmlspecialchars($_GET['success']); } ?></span>
            </form>
        </div>
    </div>
</body>
</html>

