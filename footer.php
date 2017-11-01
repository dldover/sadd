			</div>
			<div id="footer">
				<p>&copy; SADD Inc. 2017</p> <br/>
				<p>[<a href="/phpmyadmin/" target="_blank">Admin</a> - 
				<a href="https://www.w3schools.com/php/" target="_blank">PHP</a> - 
				<a href="https://www.w3schools.com/sql/" target="_blank">SQL</a> - 
				<a href="https://www.w3schools.com/php/php_mysql_intro.asp" target="_blank">MySQL</a> - 
				<a href="https://purecss.io" target="_blank">PureCSS</a> - 
				<a href="https://devdocs.io" target="_blank">DevDocs</a></p> <br/>
				<p><?php dbstatus(); ?></p> <br/>
				<p><?php
				
				if(isset($_SESSION["LOGGED_IN"]))
				{
					echo "<a href=\"logout.php\">Logout</a>";
				}
				
				
				
				?></p>
			</div>
		</div>
	</body>
</html>