<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>swipeleft demo</title>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<h3>Swipe the red rectangle in the right direction to change side</h3>
<div style="background: red; border: 1px solid red;width: 30px;height:30px;" class="box"></div>

<script>
    $(function(){
        // Bind the swipeleftHandler callback function to the swipe event on div.box
        $( "div.box" ).on( "swiperight", swipeleftHandler );

        // Callback function references the event target and adds the 'swipeleft' class to it
        function swipeleftHandler( event ){
            $.mobile.changePage( "nextSlide.php", { reverse: true, transition: "slide", changeHash: false });
            console.log("Swipe Right");
        }
    });
</script>

</body>
</html>