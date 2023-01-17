<!doctype html>
<html lang="fr" class="theme-light">
<head>
  <meta charset="utf-8">
  <title>WeatherApp</title>

  <link rel="stylesheet" type="text/css" href="../src/assets/css/style.css" >
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="/src/assets/css/style.css" >
  
   <?php //include_once "../src/controllers/homeController.php" ?>  
    

</head>
<body>
<div class="container">
    <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    <!-- <button id="switch" onclick="toggleTheme()">Switch</button> -->
</div>
<section>
  <div>
    <form action="" method="get">
    <label for="city">City :</label>
    <input type="text" id="city" name="city" required>
    <button type="submit"> OK </button>
    <button onclick="getLocation()" class="selectButton">Give my position</button>
    </form>
    </div>
    <p class="dateOfCurrentDay"><?php echo date('l jS \of F Y h:i A'); ?></p>
    <div class="currentMeteo">
    <span> <img src="../src/assets/img/icon_snow.png" rel="icon"  alt="icone"> </span>
    <p class="sizeCurrentTemperature"> 26°C <p>
</div>
</section>
<section>
    <div class="weatherBy5hours">
    <?php for ($i = 0; $i < 5; $i++) 
    {
        echo " <div>
              <p> Now </p>
              <img class='sizeIcone' src='../src/assets/img/icon_rain.png' alt='icone'> <br>
                <img class='iconeSmaller' src='../src/assets/img/icon_humidite.png' alt='icone'>
                <p> 14% </p>
                <img class='iconeSmaller' src='../src/assets/img/icon_wind-face.png' alt='icone'>
                <p> 4 m/s <p>
                </div>";
    }?>    
    </div>
<script src="../views/home/showPosition.js"></script>
</section>
<section>    
    <div class="weatherByWeek">
    <?php
    for ($i = 0; $i < 7; $i++) {
        $nameday = date('l', strtotime("+$i days"));
        if ($i == 0) {
            $nameday = "Today";
        }
        echo " <div class='displayInLine'> 
              <div class='dateSize'>
                <p>";
                echo $nameday;
                echo "</p>
                </div>
                <img class='sizeIcone' src='../src/assets/img/icon_sun.png' alt='icone'>
                <img class='iconeSmaller' src='../src/assets/img/icon_humidite.png' alt='icone'>
                <p> 14% </p>
                <img class='iconeSmaller' src='../src/assets/img/icon_wind-face.png' alt='icone'>
                <p> 4 m/s <p>
                </div>";
}
?>
</div>
</section>
<div class="container">
        <h1></h1>
        <button id="switch" onclick="toggleTheme()">Switch</button>
    </div>
    <script>
        // function to set a given theme/color-scheme
    function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }

        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        };

        // Immediately invoked function to set the theme on initial load
   
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        };
    </script>

</body>
</html>