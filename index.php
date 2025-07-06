<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\xampp\htdocs\contactForm\style.css">
    <title>contact form</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            color: #fff;
        }

        h1 {
            font-size: 2.5em;
            color: #00d4ff;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
            text-shadow: 2px 2px 10px rgba(0, 212, 255, 0.5);
            letter-spacing: 1.5px;
            font-weight: bold;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff;
            }

            to {
                text-shadow: 0 0 20px #00f0ff, 0 0 30px #00f0ff;
            }
        }

        form {
            background: #1e1e2f;
            padding: 10px;
            border-radius: 15px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
            animation: fadeIn 1s ease forwards;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #2a2a40;
            color: #fff;
            font-size: 1em;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            background-color: #33334d;
            box-shadow: 0 0 5px #00d4ff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #00d4ff;
            color: #000;
            font-size: 1.1em;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background: #00b4cc;
            transform: scale(1.02);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            form {
                padding: 20px;
                margin: 10px;
            }
        }
    </style>
</head>

<body>
    <h1>Contact Us</h1>
    <form action="submit.php" method="post">
        <div class="form-group">
            <label for="name">Your full name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Your message</label>
            <textarea name="message" id="message" rows="5" required></textarea>
        </div>
        <button type="submit">Send the message</button>
    </form>
</body>

</html>