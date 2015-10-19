<!DOCTYPE html>
<html>
<section class="nav">
    	<ul>
            <?php  
                if (basename($_SERVER['PHP_SELF']) == "./pendaftaran/index.php") {
                    ?> <li><a href="../index.php" title="Home">Home</a></li> <?php
                }
                else { ?>
			<li><a href="index.php" title="Home">Home</a><li> <?php } ?>
        	<li><a href="#" title="Menu 1">Menu 1</a></li>
            <li><a href="#" title="Menu 2">Menu 2</a></li>
            <li><a href="competitions.php" title="See what we have here!">Competitions</a></li>
            <li><a href="#" title="Menu 4">Menu 4</a></li>
        </ul>    
</section>
</html>