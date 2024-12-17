<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal Rival Finder</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #EFF6E0;
        }

        header .logo {
            display: flex;
            align-items: center;
            flex: 1;
        }

        header .logo img {
            width: 40px;
            height: 40px;
        }

        header nav {
            display: flex;
            justify-content: center;
            flex: 2;
        }

        header nav a {
            color: #000000;
            text-decoration: none;
            margin: 0 15px;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        header .filter {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        header .filter img {
            width: 30px;
            height: 30px;
            cursor: pointer;
        }

        .hero {
            position: relative;
            text-align: center;
            height: 100vh;
            background-color: #ff0066;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            width: 60%;
            margin: 0 auto;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .hero-content h1 {
            font-size: 6em;
            margin: 0;
        
        }

        .hero-content p {
            font-size: 1.2em;
            margin: 10px 0 20px;
            line-height: 1.8;
            text-align: center;
        }

        .hero-content .explore-btn {
            padding: 10px 20px;
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            font-size: 1em;
            border-radius: 10px;
            cursor: pointer;
            text-transform: uppercase;
            animation: fadeIn 3s ease-in-out;
        }

        .hero-content .explore-btn:hover {
            background: #fff;
            color: #000;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media screen and (max-width: 768px) {
            .hero-content {
                width: 80%;
            }

            .hero-content h1 {
                font-size: 2.5em;
            }

            .hero-content p {
                font-size: 1em;
            }

            .hero-content .explore-btn {
                font-size: 0.9em;
                padding: 8px 16px;
        
            }
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .search-bar input {
            padding: 10px;
            margin: 0 5px;
            border: 1px solid #555;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 10px 15px;
            border: none;
            background-color: #ff0066;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #cc0052;
        }

        .cards {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 0 20px;
        }

        .match {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ff0066;
            border-radius: 10px;
            padding: 20px;
            position: relative;
        }

        .vs {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
            margin: 0 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo-placeholder.png" alt="Logo">
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Sport</a>
            <a href="#">Feature</a>
            <a href="#">About Us</a>
        </nav>
        <div class="filter">
            <img src="filter-icon-placeholder.png" alt="Filter">
        </div>
    </header>

    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>FUTSAL</h1>
            <p>Bergabunglah dengan komunitas futsal terbaik.<br>
               Temukan rival tangguh, asah kemampuanmu,<br>
               dan nikmati pengalaman pertandingan yang seru.</p>
            <button class="explore-btn">Explore</button>
        </div>
    </div>

    <div class="container">
        <h1>Find Your Rival</h1>
        <div class="search-bar">
            <input type="text" placeholder="Lokasi">
            <input type="text" placeholder="Waktu">
            <button>Search</button>
        </div>

        <div class="cards">
            <div class="match">
                <div class="team">Futsal</div>
                <div class="vs">VS</div>
                <div class="team">Team B</div>
            </div>
            <div class="match">
                <div class="team">Team C</div>
                <div class="vs">VS</div>
                <div class="team">Team D</div>
            </div>
        </div>
    </div>
</body>
</html>
