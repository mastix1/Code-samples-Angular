<div class="viewDetails modal fade" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Teapot with tower</h4>
			</div>
			<div class="modal-body">
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
					</ol>
					
					<!-- WRAPPER FOR SLIDES -->
					<div class="carousel-inner" role="listbox">
						 
						 <div class="item active">
						 	 <img class="img-responsive" src="images/teapot1.jpg" alt="Teapot with tower">
						 </div>
						 
						 <div class="item">
						 	 <img class="img-responsive" src="images/fish-teapot.jpg" alt="Teapot with tower">
						 </div>
						 
            		</div>
            		

            		<!-- Controls -->
					<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<div class="btn-group" id="carouselButtons">
						<button class="btn btn-danger btn-xs" id="carousel-pause">
							<span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
						</button>
						<button class="btn btn-danger btn-xs" id="carousel-play">
							<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
						</button>
					</div>
            	</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row row-content" ng-controller="ProductpageController">
		<h2 align=center style="margin-top:75px;">Shop</h2>
		<p align="center">Vivamus sit amet mauris nec arcu plac erat luctus vitae viverra elit.</p> 
 
		<div class="row row-content" ng-repeat="product in product">
			<div class="col-xs-12 col-sm-10 col-sm-offset-2">
				<div class="col-sm-5 ">
					<a data-toggle="modal" data-target="viewDetails"><img class="img-responsive img-rounded" src="images/{{product.img1}}"></a>
				</div>
				<div class="col-sm-5 productData">
					<p class="lead" ng-bind-html="product.name"></p>
					<p ng-bind-html="product.description"></p>
					<p ng-bind-html="product.dimensions"></p>
					<p ng-bind-html="product.price"></p>
					<p><a data-toggle="modal" data-target=".viewDetails">View more detail photos</a></p>
					<p><button>ADD TO CART</button></p>
				</div>
			</div>
		</div>
	<div class="col-xs-12 col-sm-10 col-sm-offset-2 ">
		<div class="row row-content">
			<p id="categories">
				View by category:
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> PLATES</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> TEAPOTS</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> MUGS</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> CUPS</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> OCEAN</a>
			</p>  
			<p id="claytype">
				View by clay type:
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> PORCELAIN</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> DARK CLAY</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> OTHER</a>
			</p> 
			<p id="graphics">
				View by graphic style:
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> DIRECT DRAWING</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> IMAGE TRANSFER</a>
				<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> DECALS</a>
			</p>
		</div>  
	</div>
		<!-- 
	<div class="row-content">
			<div class="col-xs-12 col-sm-3">
				<a href="#"><img class="img-responsive img-rounded" src="images/shell-mug.jpg"></a>
			</div>
			<div class="col-xs-12 col-sm-9 productData">
				<p class="lead">Shell Mug</p>
				<p>Vivamus sit amet mauris nec arcu placerat luctus vitae viverra elit.</p>
				<p>Dimensions: 3IN x 3IN x 6IN</p>
				<p>Price: $55.00</p>
				<p><a href="#">View more detail photos</a></p>
				<p><button>ADD TO CART</button></p>
			</div>
		</div>
	 -->
	</div>
</div>