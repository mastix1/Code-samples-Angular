<?php 
session_start(); 
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
			  <? if(isset($_SESSION['adminuser'])){ 
			  		echo'<p align="center"><button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-pencil"></span> EDIT</button></p>';
			   } ?>
			   <h2 align=center ng-bind-html="paragraph.title"></h2> 	
			</div>
			<? if(isset($_SESSION['adminuser'])){ 
				echo'<p align="center"><button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-pencil"></span> EDIT</button></p>';
			 } ?>
			<div ng-bind-html="paragraph.copy"></div>
		</div>
	</div>
</div>
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit content </h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="index.php" class="form-inline">
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" rows="12">{{paragraph.title}}</textarea>
						</div>
						<div class="col-sm-12">
							<button type="submit" class="btn btn-info btn-sm">Save</button>
							<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

