<html>
<head>
    <meta charset="utf-8">
    <title>Feedback || OrderFood...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/FeedbackStyle.css">
</head>

<body><br><br>
    <div class="container">
        <h2 id="feed"><b><center>FEEDBACK</center></b></h2>
        <hr><br>

        <div class="star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>
            <form onsubmit="feedback()">
                <header></header>
                <div class="textarea">
                    <textarea cols="30" placeholder="Experience about the website..." required></textarea>
                </div><br>
                <div class="btn">
                    <button type="submit">SUBMIT</button>
                </div>
            </form><br>
            <a href="Home.php" id="back"><i class="far fa-hand-point-left"></i> Back to Home</a>
        </div>
    </div>

    <script>
        function feedback() {
            alert("Thanks for Rating us!");
        }
    </script>



</body>

</html>
<?php include('footer.php')?>