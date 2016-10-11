<!DOCTYPE html>

<html>
	<head>
		<title>Brave Frontier Fans</title>
		<meta charset="utf-8" />
		<link href="style.css" type="text/css" rel="stylesheet" />
		<style type="text/css">
			
			/* News */
			
			.news {
				margin-left: auto;
				margin-right: auto;
				float: left;
				width: 60%;
				background-color: Black;
				border-style: solid;
				border-color: White;
			}
			
			h1.news {
				color: White;
				border-style: none;
				float: left;
			}
			
			/* Menu */

			.menu {
				margin-left:auto;
				margin-right:auto;
				float: right;
				width: 20%;
				background-color: Black;
				border-style: solid;
				border-color: White;
			}
			
			.menuitems {
				float: left;
				clear: left;
			}
			
			h1.menu {
				color: White;
				border-style: none;
				float: left;
				clear: left;
			}
			
			h2.menu {
				color: White;
				border-style: none;
				float: left;
				clear: left;
				width: 100%;
			}
			
			/*News Section*/ 
			
			.newsSection {
				margin-top: 5px;
				margin-bottom: 5px;
				color: white;
				float: left;
				border-style: solid none;
				border-width: 1px;
				border-color: white;
				clear: left;
			}
			
			h2.newsSection {
				border-style: none;
			}
			
			h3.newsSection {
				border-style: none;
				clear: left;
			}
			
			p.newsSection {
				border-style: none;
				clear: left;
				width: 60%;
			}
			
			img.newsSection {
				border-style: none;
				float: right;
			}
		</style>
	</head>
	<body style="background-image:url(images/base.jpg)">
		<div class="banner">
			<img src="images/HomepageBanner.png" alt="Banner" class="banner"/>
		</div>
		<div class="news">
			<h1 class="news" style="text-decoration:underline;">Recent News</h1>
			<?php
				$files = scandir("articles/text/");
				$count = count($files)-2;
				for ($i=$count; $i>0; $i--)
				{
					print("<div class=\"newsSection\">");
					$file=fopen("articles/text/".$i.".txt","r");
					$content = fgets($file);
					$content2 = fgets($file);
					$content3= fgets($file);
					print("<h2 class=\"newsSection\">$content</h2>");
					print("<h3 class=\"newsSection\">$content2</h3>");
					print("<p class=\"newsSection\">$content3</p>");
					print("<img class=\"newsSection\" src=\"articles/images/".$i.".png\" alt=\"Article $i image\" />");
					print("</div>");
					fclose($file);
				}
			?>
			<!--<div class="newsSection">
				<h2 class="newsSection">WIP</h2>
				<h3 class="newsSection">April 23, 2015 (again)</h3>
				<p class="newsSection">Here's another fake article. Sorry, you won't be able to see this later on.</p>
				<img src="articleImages/GreatFalconZiz.png" alt="The best unit" class="newsSection" />
			</div>
			<div class="newsSection">
				<h2 class="newsSection">WIP</h2>
				<h3 class="newsSection">April 23, 2015</h3>
				<p class="newsSection">This section is currently WIP. In the meantime, enjoy this picture of Great Falcon Ziz that will (hopefully) align properly and all this extra text needed to make sure things align properly on my 1366x768 screen.</p>
				<p class="newsSection">Also, here's another paragraph for you awesome folks.</p>
				<img src="articleImages/GreatFalconZiz.png" alt="The best unit" class="newsSection" />
				<img src="articleImages/GreatFalconZiz.png" alt="The best unit" class="newsSection" />
			</div>-->
		</div>
		<div class="menu">
			<h1 class="menu" style="text-decoration:underline;">Menu</h1>
			<h2 class="menu">Site Links</h2>
			<div class="menuitems">
				<p><a href="fireTierlist.html">Tier Lists</a></p>
				<p><a href="damageCalculator.html">Damage Calculator</a></p>
			</div>
			<h2 class="menu">External Links</h2>
			<div class="menuitems">
				<p><a href="http://bravefrontierglobal.wikia.com/wiki/Brave_Frontier_Wiki">Offical Brave Frontier Wiki</a></p>
				<p><a href="http://forums.gumi.sg/forum/brave-frontier">Official Brave Frontier Forums</a></p>
				<p><a href="http://bravefrontierpros.tumblr.com/">BFPros</a></p>
				<p><a href="http://www.reddit.com/r/bravefrontier/">Brave Frontier Subreddit</a></p>
				<p><a href="http://appinvasion.com/forums/Brave-Frontier/">App Invasion - Brave Frontier</a></p>
				<p><a href="http://www.bravefrontierforum.net/">bravefrontierforum.net</a></p>
			</div>
		</div>
	</body>
</html>