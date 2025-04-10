<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category | Grocery Store</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="grid">
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Grocery Store</a>
            <div class="nav__menu" id="nav-menu">
                <?php
                    include("includes/menu.php");
                ?>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <section class="category__title-container">
            <h1 class="category__title">
                Add Category
            </h1>
        </section>
        <section class="error">
        <?php
            if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';
			}
								
			if(isset($_GET['ok']))
			{
				echo '<font color="blue">Category successfully added!</font>';
				echo '<br><br>';
			}
							
		?>
        </section>
        <section class="add_information-section">
            <form action="addcategory_process.php" method="post">
                <div class="add_information grid">
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                             Category Name
                        </h1>
                        <input type="text" name="category_name" id="" placeholder="category_name">
                    </div>
                    
                    <div class="add_information-box">
                        <h1 class="add_information-title">
                             Category Image
                        </h1>
                        <input type="text" name="category_image" id="" placeholder="category_image">
                    </div>
                    
                </div>
                <input type="submit" value="Add Category" class="button">
            </form>
        </section>

    </main>
    <footer class="footer">
        <div class="footer__container grid">
            <div class="footer__logo">
                <h1 class="footer__title">Grocery Store</h1>
                <span class="footer__subtitle">
                    Project by Shreyas, Rutuja & Sauhard.
                </span>
            </div>
            <div class="footer__about">
                <h1 class="footer__about-title">About</h1>
                <ul class="footer__links">
                    <li>
                        <a href="" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Contact</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Return Policy</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer__socials">
                <a href="https://github.com/" target="_blank" class="footer__social">
                    <i class="uil uil-github"></i>
                </a>
                <a href="https://www.linkedin.com/in//" target="_black" class="footer__social">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://www.instagram.com//" target="_black" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com/" target="_black" class="footer__social">
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
            <p class="footer__copy">&#169; </p>
        </div>
    </footer>
    <!-- Scroll Up -->

    <a href="" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!-- Javascript -->
    <script src="assets/js/main.js"></script>

</body>

</html>