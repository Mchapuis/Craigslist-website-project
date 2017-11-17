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
<div class="container">
    <div class="page-header"><h1>New Listings</h1></div>

<!--    A listing contains:-->
<!--    Title-->
<!--    Description-->
<!--    Price-->
<!--    Category-->
<!--    SubCategory-->
<!--    EndDate-->
<!--    Phone-->
<!--    Image-->

    <form>
        <div style="width:60%">
            <div class="form-group">
                <label for="titleInput">Title</label>
                <input type="text" class="form-control" id="titleInput" name="newTitle">
            </div>

            <div class="form-group">
                <label for="descriptionText">Description</label>
                <textarea class="form-control" id="descriptionText" rows="3" style="resize:none;" name="newDescription"></textarea>
            </div>

            <div class="form-group">
                <label for="priceInput">Price</label>
                <input type="number" class="form-control" id="priceInput" name="newPrice">
            </div>

            <div class="form-group">
                <label for="categoryInput">Category</label>
                <select class="form-control" id="categoryInput" name="newCategory">
                    <option value="buyandsell">Buy and Sell</option>
                    <option value="services">Services</option>
                    <option value="rent">Rent</option>
                    <option value="custom">CUSTOM!!</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subCategoryInput">Sub Category</label>
                <select class="form-control" id="subCategoryInput" name="newSubCategory">
                    <option id="sub1" value="clothing">Clothing</option>
                    <option id="sub2" value="books">Books</option>
                    <option id="sub3" value="electronics">Electronics</option>
                    <option id="sub4" value="musicalInstruments">Musical Instruments</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phoneInput">Phone Number</label>
                <input type="number" class="form-control" id="phoneInput" name="newPhone">
            </div>

            <div class="form-group">
                <label for="imageInput">Photo</label>
                <input type="file" class="form-control-file" id="imageInput" aria-describedby="fileHelp" name="newImage">
                <small id="fileHelp" class="form-text text-muted">Choose a photo that best represents the product</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
</body>

<script>
    $( document ).ready(function() {
        $('#nav-new-listing').addClass('active');
        $('#nav-browse-listings').removeClass('active');
        $('#nav-my-listings').removeClass('active');
    });

    $('#categoryInput').on('change', function() {
        if($('#categoryInput').val() === 'buyandsell'){
            $('#sub1').attr("value", "clothing")
            $('#sub1').html('Something');
            $('#sub2').attr("value", "book")
            $('#sub2').html('Books');
            $('#sub3').attr("value", "electronics")
            $('#sub3').html('Electronics');
            $('#sub4').attr("value", "musicalInstruments")
            $('#sub4').html('Musical Instruments');
        }

        if($('#categoryInput').val() === 'services'){
            $('#sub1').attr("value", "tutors")
            $('#sub1').html('Tutors');
            $('#sub2').attr("value", "eventPlanners")
            $('#sub2').html('Event Planners');
            $('#sub3').attr("value", "photographers")
            $('#sub3').html('Photographers');
            $('#sub4').attr("value", "personalTrainers")
            $('#sub4').html('Personal Trainers');
        }

        if($('#categoryInput').val() === 'rent'){
            $('#sub1').attr("value", "electronics")
            $('#sub1').html('Electronics');
            $('#sub2').attr("value", "cars")
            $('#sub2').html('Cars');
            $('#sub3').attr("value", "apartments")
            $('#sub3').html('Apartments');
            $('#sub4').attr("value", "weddingDresses")
            $('#sub4').html('Wedding Dresses');
        }

        if($('#categoryInput').val() === 'custom'){
            $('#sub1').attr("value", "1")
            $('#sub1').html('1');
            $('#sub2').attr("value", "2")
            $('#sub2').html('2');
            $('#sub3').attr("value", "3")
            $('#sub3').html('3');
            $('#sub4').attr("value", "4")
            $('#sub4').html('4');
        }



    });

</script>
</html>