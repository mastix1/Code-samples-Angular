<?php 
session_start(); 
require_once '../../php/mysqlConnection.php';
require_once '../../php/mysqlResult.php';
$connection = new MysqlImprovedConnection("localhost", "bluemaz_u", "password", "bluemaz");
require_once '../../php/editor.php';
$cls = new editor("page_content", $connection); 

?>
<header class="jumbotron">
<!-- Main component for a primary marketing message or call to action -->
	<div class="container">
		<div class="row-header">
			<div>
				<p style="padding-top:20px;text-align:center;color:#6c491d;">contemporary handmade ceramics</p>
			</div>
			<div class="arrowDwn">
				<a href="#" class="dwnArr"><img src="images/arrow.png"></a>
			</div>
		</div>
	</div>
</header>

<div class="container" id="bm_content">
	<div class="row row-content" ng-controller="HomepageController">
		 <div class="col-xs-12 col-sm-10 col-sm-offset-2">
			<div style="padding:70px 0 50px 0;">         
			  <? if(isset($_SESSION['adminuser'])){ $edit = $cls->edit_button("title");  echo $edit; } ?>
			   <h2 align=center ng-bind-html="paragraph.title"></h2> 	
			</div>
			<? if(isset($_SESSION['adminuser'])){ $edit = $cls->edit_button("copy"); echo $edit; } ?>
			<div ng-bind-html="paragraph.copy"></div>
		</div>
		<? if(isset($_SESSION['adminuser'])){ $modal = $cls->display_data("{{paragraph.id}}"); echo $modal; } ?>
	</div>
</div>
