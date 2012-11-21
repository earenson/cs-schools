<!DOCTYPE html>

<html>
<head>
    
    <title></title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
    <script src="libs/js/jquery.tools.min.js" type="text/javascript"></script>
    
    <!-- PDX CitySync App Core JS & CSS -->
    <script type="text/javascript" src="http://pdxcitysync.org/apps/citysync-app.js"></script>
    <link href="http://pdxcitysync.org/apps/citysync_styles.css" rel="stylesheet" type="text/css">
    
    <!-- The app's own CSS -->
    <link href="libs/css/style.css" rel="stylesheet" type="text/css">
    
    
</head>

<body>
    <?php
    
    /**
     * CitySync App: School Browser
     * Author: Eric Arenson
     * Version: 1.0
     */

    // PDXCitySync passes an application's context to it on load, allowing us to 
    // display content appropriate to placement on the page.

    $region = $_GET['region'];  

    switch($region){
    
        case('center'):
            include('views/center.php');
            break;
        case('sidebar'):
            include('views/side.php');
            break;
        case('full'):
            include('views/full.php');
            break;
    }
    
    ?>

<script type="text/javascript">
<<<<<<< HEAD
    
    CitySync.connect(function(){
        // Proceed with your app
=======

    // Authentication isn't yet enabled. Passing dummy values. 
    
    // Initialize the app
    var init = CitySync.init({
        appID:'1234',
        appURL:'pass'               
>>>>>>> 613d7f6a34fdc82f80f36dbf3087a5dcb1ddf2fb
    });
    
</script>

</body>
</html>
