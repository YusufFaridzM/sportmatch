<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Sport</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #222;
            color: white;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
            font-size: 2.5em;
        }

        /* Navbar */
        /* Navbar */
        .navbar {
            display: flex;
            justify-content: center; /* Centers the navbar content */
            align-items: center;
            background-color: #EFF6E0;
            padding: 20px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .navbar .logo {
            position: absolute;
            left: 20px; /* Keeps the logo on the left */
            font-size: 1.5em;
        }


        /* Card Container */
        .card-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 40px auto;
            gap: 10px;
            flex-wrap: nowrap;
            max-width: 100vw;
            padding: 0 10px;
            box-sizing: border-box;
        }

        /* Individual Card */
        .card {
            background-color: white;
            border-radius: 20px;
            width: 200px;
            height: 350px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .card img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
            z-index: 1;
        }

        .sport-name {
            position: absolute;
            bottom: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            color: black;
            font-weight: bold;
            font-size: 1.2em;
            padding: 8px 12px;
            border-radius: 8px;
            z-index: 2;
        }

        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Sports</div>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <h1>CHOOSE YOUR SPORT</h1>
    <div class="card-container">
        <div class="card">
            <img src="https://via.placeholder.com/250x400">
            <a href="/badminton" class="sport-name">Badminton</a>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x400" alt="Futsal">
            <a href="/futsal" class="sport-name">Futsal</a>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x400" alt="Volly">
            <a href="/volly" class="sport-name">Volly</a>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x400" alt="Tennis">
            <a href="/tennis" class="sport-name">Tennis</a>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/250x400" alt="Football">
            <a href="/football" class="sport-name highlight">Football</a>
        </div>
    </div>
</body>
</html>
