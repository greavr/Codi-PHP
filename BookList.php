<?php
	function BookList(){
		global $db_found;
		$AllBookLists = array();
		$AllChapterLists = array();
		
		if ($db_found) {
			$SQL = "SELECT * FROM books";
			$result = mysql_query($SQL) or die(mysql_error());
			
			while ($db_field = mysql_fetch_assoc($result)) {
				$AllBookLists[$db_field['bid']] = $db_field['bookname'];
			}
		}
		else {
			echo "<h4>Database Not Found</h4>";
			echo mysql_error($db_found); 
			mysql_close($db_handle);
		
		}
		$output = "<div id='BookList'>\n";
		$output .= "<h2>Books / Chapters</h2>\n";
		$output .= "<ul>\n";
		foreach($AllBookLists as $key => $value)
		{
			$output .=	"<li>$value</li>\n";
		}
		$output .= "</ul>\n";
		$output .= "</div>\n";
		
		$output .= "<div id='PagesList'>";
		$output .= "<h2>Pages</h2>";
		return $output;
	}
?>