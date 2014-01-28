<?php
/*
Blocks of static HTML etc so we don't have to edit things multiple times, store header, navbar etc.
*/
$css = '<!-- CSS --><link type="text/css" rel="stylesheet" href="css/resetstylesheet.css"/>
	   <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/><!-- CSS -->';

$header = '<!-- Navigation bar -->
			<div id="header">
				<div id="navbar">  
					<nav>
						<table>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><a class="logo" href="index.php"><img src="images/logo.gif" width="190" height="105"></a></td>
			                    <td><a class="menu" href="project.php">the Project</a></td>
			                    <td><a class="menu" href="people.php">the People</a></td>
			                    <td><a class="menu" href="prototype.php">the Prototype</a></td>
			                    <td><a class="menu" href="press.php">the Press</a></td>
			                </tr>
			            </table>
			        </nav>
			    </div>
			    </div>';

$footer = '<!-- footer -->
			<div id="footer">
				<div class = "aboutButtons"><p>PDP</p></div>
				<div class = "aboutButtons"><p>Aalto University</p></div>
				<div class = "aboutButtons"><p>Design Factory</p></div>
				<a href="https://www.facebook.com"><img src="images/icons/facebookicon2.png"; height="80px"; width = "100px"/></a>
				<a href="https://www.facebook.com"><img src="images/icons/emailicon.png" ; height="100px"; width = "100px"/></a>
			</div>';
?>