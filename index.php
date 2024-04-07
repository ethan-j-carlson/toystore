<?php   										// Opening PHP tag
	
	// Include the database connection script
	require 'includes/database-connection.php';

	function getToy(PDO $pdo, string $id) {
		$sql = "SELECT * 
			FROM toy
			WHERE toynum= :id;";
		$toy = pdo($pdo, $sql, ['id' => $id])->fetch();
		return $toy;
	}

	$toys = [];
	for ($i = 1; $i <= 10; $i++){
		$toys[$i - 1] = getToy($pdo, str_pad(strval($i),4,'0',STR_PAD_LEFT));
	}	
// Closing PHP tag  ?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Toys R URI</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
	</head>

	<body>

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="Toy R URI Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Toy Catalog</a></li>
	      				<li><a href="about.php">About</a></li>
			        </ul>
			    </nav>
		   	</div>

		    <div class="header-right">
		    	<ul>
		    		<li><a href="order.php">Check Order</a></li>
		    	</ul>
		    </div>
		</header>

  		<main>
  			<section class="toy-catalog">

  				<div class="toy-card">
  					<!-- Create a hyperlink to toy.php page with toy number as parameter -->
  					<a href="toy.php?toynum=<?= $toys[0]['toynum'] ?>">

  						<!-- Display image of toy with its name as alt text -->
  						<img src="<?= $toys[0]['imgSrc'] ?>" alt="<?= $toys[0]['name'] ?>">
  					</a>

  					<!-- Display name of toy -->
  					<h2><?= $toys[0]['name'] ?></h2>

  					<!-- Display price of toy -->
  					<p>$<?= $toys[0]['price'] ?></p>
  				</div>

  				<div class="toy-card">
					<a href="toy.php?toynum=<?= $toys[1]['toynum'] ?>">
  						<img src="<?= $toys[1]['imgSrc'] ?>" alt="<?= $toys[1]['name'] ?>">
  					</a>
  					<h2><?= $toys[1]['name'] ?></h2>
  					<p>$<?= $toys[1]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[2]['toynum'] ?>">
  						<img src="<?= $toys[2]['imgSrc'] ?>" alt="<?= $toys[2]['name'] ?>">
  					</a>
  					<h2><?= $toys[2]['name'] ?></h2>
  					<p>$<?= $toys[2]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[3]['toynum'] ?>">
  						<img src="<?= $toys[3]['imgSrc'] ?>" alt="<?= $toys[3]['name'] ?>">
  					</a>
  					<h2><?= $toys[3]['name'] ?></h2>
  					<p>$<?= $toys[3]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[4]['toynum'] ?>">
  						<img src="<?= $toys[4]['imgSrc'] ?>" alt="<?= $toys[4]['name'] ?>">
  					</a>
  					<h2><?= $toys[4]['name'] ?></h2>
  					<p>$<?= $toys[4]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[5]['toynum'] ?>">
  						<img src="<?= $toys[5]['imgSrc'] ?>" alt="<?= $toys[5]['name'] ?>">
  					</a>
  					<h2><?= $toys[5]['name'] ?></h2>
  					<p>$<?= $toys[5]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[6]['toynum'] ?>">
  						<img src="<?= $toys[6]['imgSrc'] ?>" alt="<?= $toys[6]['name'] ?>">
  					</a>
  					<h2><?= $toys[6]['name'] ?></h2>
  					<p>$<?= $toys[6]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[7]['toynum'] ?>">
  						<img src="<?= $toys[7]['imgSrc'] ?>" alt="<?= $toys[7]['name'] ?>">
  					</a>
  					<h2><?= $toys[7]['name'] ?></h2>
  					<p>$<?= $toys[7]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[8]['toynum'] ?>">
  						<img src="<?= $toys[8]['imgSrc'] ?>" alt="<?= $toys[8]['name'] ?>">
  					</a>
  					<h2><?= $toys[8]['name'] ?></h2>
  					<p>$<?= $toys[8]['price'] ?></p>
				</div>
				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[9]['toynum'] ?>">
  						<img src="<?= $toys[9]['imgSrc'] ?>" alt="<?= $toys[9]['name'] ?>">
  					</a>
  					<h2><?= $toys[9]['name'] ?></h2>
  					<p>$<?= $toys[9]['price'] ?></p>
				</div>

  			</section>
  		</main>

	</body>
</html>



