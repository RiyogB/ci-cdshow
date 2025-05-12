<?php
// Check for 'env' query parameter
$env = isset($_GET['env']) ? $_GET['env'] : 'default';

// Default background color
$backgroundColor = "#fffff";  // Default is white

// Set the color based on the 'env' query parameter
if ($env == "development") {
    $backgroundColor = "#3498db";  // Blue
} elseif ($env == "staging") {
    $backgroundColor = "#f39c12";  // Orange
} elseif ($env == "production") {
    $backgroundColor = "#2ecc71";  // Green
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive PHP Page</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?php echo $backgroundColor; ?>;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            text-align: center;
            transition: background-color 0.5s ease-in-out;
        }

        h1 {
            font-size: 3.5em;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeInUp 1s ease-in-out;
        }

        p {
            font-size: 1.3em;
            margin-bottom: 40px;
            animation: fadeInUp 1.2s ease-in-out;
            line-height: 1.5;
            color: rgba(255, 255, 255, 0.85);
        }

        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            margin-top: 50px;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .form-container {
            margin-top: 30px;
            animation: fadeInUp 1.4s ease-in-out;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #fff;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 1.1em;
            margin-bottom: 25px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #f39c12;
            outline: none;
        }

        button {
            background-color: #f39c12;
            color: #fff;
            padding: 12px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e67e22;
        }

        /* Keyframe Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            p {
                font-size: 1em;
            }

            .container {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My  PHP Page</h1>
        <p>Change the background color dynamically by appending <code>?env=development</code>, <code>?env=staging</code>, or <code>?env=production</code> to the URL.</p>
        
        <div class="form-container">
            <form action="submit_form.php" method="POST">
                <label for="name">Enter your name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

