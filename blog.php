<div class="container">
	<div class="row row-content" ng-controller="BlogpageController">
		<div class="col-xs-12 col-sm-10 col-sm-offset-2" style="padding-top:70px;min-height:100px;"><h2 align=center>Blue Mazarine Blog</h2></div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-2" ng-repeat="blog in blog">
			<div style="padding:20px 0 50px 0;">    
			    <h3 align=center ng-bind-html="blog.title"></h3>
   			</div>
		<div ng-bind-html="blog.copy"></div>
		<div>
			<blockquote>
				<h5 class="clearfix">Links:</h5>
				<div ng-bind-html="blog.links"></div>
				<div ng-bind-html="blog.date"></div>
				<small>Published: <span ng-bind-html="blog.updated_date|date"></span></small>
			</blockquote>
		</div>
	 </div>
</div>