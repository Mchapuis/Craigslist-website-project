<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My Listings</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
</body>

<?php include 'header.html' ?>
<div class="container"><div class="page-header">
        <h1>My Listings</h1>
    </div>
    <ul class="nav nav-tabs">
        <li id="active_listings_tab" class="active"><a href="#">Active</a></li>
        <li id="expired_listings_tab"><a href="#">Expired</a></li>
    </ul>

    <div id="active_litsings">
    </div>

    <div id="expired_listings">
    </div>
</div>
</body>

<script>
    $( document ).ready(function() {
    $('#nav-new-listings').removeClass('active');
    $('#nav-browse-listings').removeClass('active');
    $('#nav-my-listings').addClass('active');

    $("#active_listings_tab").click(function(event){
        $('#expired_listings_tab').removeClass('active');
        $('#active_listings_tab').addClass('active');
    });

    $("#expired_listings_tab").click(function(event){
        $('#expired_listings_tab').addClass('active');
        $('#active_listings_tab').removeClass('active');
    });
    });
</script>
</html>