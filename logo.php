<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="logo.css" rel="stylesheet">
</head>

<body>
    <div class="logoWrap">
        <img src="assets/img/logoani1.png" />
        <h2 class="typeText">OF COASTAL<span class="startTyper"></span></h2>
    </div>




    <script>
        $(function() {
        $(".startTyper").typed({
        strings: ["Hi, I'm Hitesh S Vikani, a software developer from Mumbai","This is CSS typing effect", "I think it's cool,isn't it?", "You can download files from github.com", "Have a good one!"],
        typeSpeed: 50, // typing speed
        backDelay: 100, // pause before backspacing
        loop: true, // loop on or off (true or false)
        loopCount: false, // number of loops, false = infinite
        });
        });
        </script>
</body>

</html>