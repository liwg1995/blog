<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="../resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../resources/css/invalid.css" type="text/css" media="screen" />
<script type="text/javascript" src="../resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="../resources/scripts/facebox.js"></script>
<script type="text/javascript" src="../resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="../resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="../resources/scripts/jquery.date.js"></script>
<style type="text/css">
	body {
		background-image:none;
	}
</style>
<script type="text/javascript">
	function deleteMenu() {
		$("#menuList").submit();
	}
</script>
</head>
<body>
<?php
	include_once '../common/conn.php';
?>
  <!-- End #sidebar -->
  <div id="main-content" style="margin:0px;padding:0px;">
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Menu List</h3>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        <form id="menuList" action="deleteMenu.php" method="post">
          <table>
            <thead>
              <tr>
                <th>Type</th>
                <th>Code</th>
                <th>Name(Chinese)</th>
                <th>Name(English)</th>
                <th>Name(German)</th>
                <th>Price</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="pagination"> 
                  <?php 
					// 获取当前页数
					if(isset($_GET['page']) ){
						$page = intval( $_GET['page'] );
					}
					else{
						$page = 1;
					} 
					// 每页数量
					$page_size = 10; 
					// 获取总数据量
					$sql = "select count(*) from menu";
					$result = mysql_query($sql);
					$row = mysql_fetch_row($result);
					$amount = $row[0]; 
					//mysql_close($link);
					// 记算总共有多少页
					if($amount){
						//如果总数据量小于$pageSize，那么只有一页
						if($amount < $page_size ) { 
							$page_count = 1; 
						} 
						if( $amount % $page_size ) { //取总数据量除以每页数的余数
							$page_count = (int)($amount / $page_size) + 1; //如果有余数，则页数等于总数据量除以每页数的结果取整再加一
						} else{
							$page_count = $amount / $page_size; //如果没有余数，则页数等于总数据量除以每页数的结果
						}
					} else{
						$page_count = 0;
					}
					
					for ($i = 1; $i <= $page_count; $i++) {
						if ($page == $i) {
							echo '<a href="listMenu.php?page='.$i.'" class="number current" title="'.$i.'">'.$i.'</a>';
						} else {
							echo '<a href="listMenu.php?page='.$i.'" class="number" title="'.$i.'">'.$i.'</a>';
						}
					}
                  ?>
                  </div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody>
            <?php 
            	$sql = sprintf("select t2.name_de as type_name,t1.id, t1.code,t1.name_cn,t1.name_en,t1.name_de,t1.price from menu t1 inner join menu_type t2 on t1.type_id=t2.id order by t1.type_id asc limit ". ($page-1)*$page_size.", $page_size");
				$result = mysql_query($sql);
				while ($rs = mysql_fetch_object($result)) {
	            	echo '<tr>';
	            	echo '<td>';
	            	echo $rs->type_name;
	            	echo '</td>';
	            	echo '<td>';
	            	echo $rs->code;
	            	echo '</td>';
	            	echo '<td>';
	            	echo $rs->name_cn;
	            	echo '</td>';
	            	echo '<td>';
	            	echo $rs->name_en;
	            	echo '</td>';
	            	echo '<td>';
	            	echo $rs->name_de;
	            	echo '</td>';
	            	echo '<td>';
	            	echo $rs->price.'€';
	            	echo '</td>';
	            	echo '<td>';
	            	echo '<a href="deleteMenu.php?ids='.$rs->id.'" title="Delete"><img src="../resources/images/icons/cross.png" alt="Delete" /></a>';
	            	echo '</td>';
	            	echo '</tr>';
				}
				mysql_close($link);
            ?>
            </tbody>
          </table>
          </form>
        </div>
      </div>
      <!-- End .content-box-content -->
    </div>
  </div>
  <!-- End #main-content -->
</body>
</html>