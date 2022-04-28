<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/compressed.js"></script>
    <link href="logo.css" rel="stylesheet">
</head>

<body>
    <div class="logoWrap">
        <img src="assets/img/logoani1.png" />
        <h2 class="typeText">OF COASTAL <span class="startTyper"></span></h2>
    </div>




    <script>
        $(function() {
        $(".startTyper").typed({
        strings: ["GEORGIA","JACKSONVILLE"],
        typeSpeed: 250, // typing speed
        backDelay: 200, // pause before backspacing
        loop: true, // loop on or off (true or false)
        loopCount: false, // number of loops, false = infinite
        });
        });
        </script>
</body>

</html>