<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewpor t" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>ProjectX</title>
  <!-- Custom CSS -->
    <style>
        /* Add custom styles for cards*/
        .card {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            height:250px
        }
        .card:hover {
            box-shadow: 0 4px 8px 4px rgba(0, 0, 0, 0.2);

        }
         /* Set fixed height for card images */
        .card-img {
            height: 240px; 
			width:300px
            object-fit: cover;
        } 
    </style>
</head>
<body class='bg-light'>
	
	<?php include 'partials/header.php'; ?>
    <!--<h1>Hot Books!</h1>-->
	
    <?php include 'partials/corousel.php'; ?>
    <center class='mt-5 mb-5'>
		<h1>Thrifty Books!</h1>
    </center>
    <div class="container ">
        <div class="row mx-2">
            <?php
            $i = 0;
            include 'partials/dbconnect.php';
            #session_start();
            #$e_id = $_SESSION['uid'];
            $sql = "SELECT * FROM `postbook`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $bok_n = $row['b_name'];
                $og_pr = $row['og_pr'];
                $ex_pr = $row['ex_pr'];
                $time = $row['dt_creation'];
                $pic = $row['pic1'];
                $p_id = $row['p_id'];
                echo '
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="card mb-3 mx-2" style="width: 350px;">
						<div class="row no-gutters">
							<div class="col-md-4">
								<img src="project_x_copy/'.$pic.'" class="card-img" alt="..." width="500" height="250">
							</div>
							<div class="col-md-8">
								<div class="card-body">
								<h5 class="card-title"><a href="post.php?pid='.$p_id.'" class="text-dark">'.$bok_n.'</a></h5>
									<p class="card-text">Original Price: '.$og_pr .'</p>
									<p class="card-text">Expected Price: '.$ex_pr .'</p>
									<p class="card-text"><small class="text-muted">Last updated '.$time.'</small></p>
								</div>
							</div>
						</div>
					</div>
		        </div>';
            }
			?>
		</div>
	</div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs 12">
		<center>
			<br><br>
			<span class="h4" style="font-size: 36px;">All Thrifty Books Pass Our Quality Control Test</span><br><br>
			<span class="h4">Our books difference is not just low prices on used books; It’s a Quality Guarantee.</span><br><br>
			<p>Between saving books and shipping, a Thrifty Books staff member personally handles each and every volume. </p>
			<p>Like you, our team has very high standards. You should know exactly what to expect when your purchase arrives.</p><br>
			<br>
			<img src="img/qc-img.png" class="img-responsive" alt="Berry Lace Dress">
		</center>
</div>
			<?php include'partials/footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>