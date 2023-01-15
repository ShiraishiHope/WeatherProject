<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>WeatherApp</title>
  <link rel="stylesheet" type="text/css" href="../src/assets/css/style.css" >
  
   <?php //include_once "../src/controllers/homeController.php" ?>  
    

</head>
<body>
<section>
    <form action="" method="get">
    <label for="city">City :</label>
    <input type="text" id="city" name="city" required>
    <button type="submit"> OK </button>
    <button onclick="getLocation()">my position</button>
    </form>
    

    <p><?php echo date('l jS \of F Y h:i A'); ?></p>
    <span> <img class=imgnow src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png" rel="icon"  alt="icone"> </span>
    <p> 26°C <p>
</section>
    <div class="section1">
        <div>
            <p> Now </p>
            <img src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png" 
             alt="icone"> <br>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/850/850785.png"  alt="icone">
            <p> 14% </p>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/172/172922.png"  alt="icone">
            <p> 4 m/s <p>
        </div>
        <div>
            <p> Now </p>
            <img src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png"  alt="icone"> <br>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/850/850785.png" x alt="icone">
            <p> 14% </p>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/172/172922.png"  alt="icone">
            <p> 4 m/s <p>
        </div>
        <div>
            <p> Now </p>
            <img src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png"  alt="icone"> <br>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/850/850785.png"  alt="icone">
            <p> 14% </p>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/172/172922.png"  alt="icone">
            <p> 4 m/s <p>
        </div>
        <div>
            <p> Now </p>
            <img src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png"  alt="icone"> <br>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/850/850785.png"  alt="icone">
            <p> 14% </p>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/172/172922.png"  alt="icone">
            <p> 4 m/s <p>
        </div>
        <div>
            <p> Now </p>
            <img src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-3-2682848_90785.png" alt="icone"> <br>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/850/850785.png" alt="icone">
            <p> 14% </p>
            <img class="imgsmaller" src="https://cdn-icons-png.flaticon.com/512/172/172922.png"  alt="icone">
            <p> 4 m/s <p>
        </div>
    </div>
    <script src="showPosition.js"></script>
</body>
</html>