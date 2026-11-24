<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" >
        <title>Roy Biesheuvel</title>
    </head>
    <body>
        <?php
           if (basename($_SERVER['PHP_SELF']) == "index.php") {
            $headerClass = "hero-header";
           } else {
            $headerClass = "";
           }
        ?>
        <div class="container sticky-header <?php echo $headerClass; ?>">
            <div class="header"> 
                <a href="index.php">
    <img src="logo.jpg" class="logo">
</a>
                <nav> 
                    <ul> 
                        <li>
                            <a href="over.mij.php">over mij</a>
                            
                                <ul class="dropdown"> 
                                    <li>
                                        <a href="hobbies.php">hobby's</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="projecten">
                                <a href="Mijn.projecten.php">projecten</a>
                                <ul class="dropdown">
                                    <li>
                                    <a href="Mijn.projecten.php">Mijn projecten</a>
                                    </li>
                                </ul> 
                                
                        </li>
                    </ul>
                </nav>
            </div>
        </div>