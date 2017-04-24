<?php
	include_once 'common/conn.php';
?>

<div id="sidebar">
<iframe width="420" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=5"></iframe>
	<ul>
		<li>
			<div id="search" >

				<form method="get" action="news_search.php">
					<div>
			

						<input type="text" name="s" id="search-text" value="" />
						<input type="submit" id="search-submit"   value="搜索" />
					</div>
				</form>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</li>
		<li>
			<h2>博客类型</h2>
			<ul>
			<?php
				$sql = "select * from news_type";
				$result = mysql_query($sql);
				while ($rs = mysql_fetch_object($result)) {
					echo '<li>';
					echo '<a href="news_list.php?news_type_id='.$rs->id.'">'.$rs->name.'</a>';
					echo '</li>';
				}
			?>
			</ul>
		</li>
	</ul>
</div>
