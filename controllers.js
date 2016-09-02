angular.module('bluemazApp')

	.controller('HomepageController', ['$scope', '$stateParams', 'homeFactory', function($scope, $stateParams, homeFactory) {
	"use strict";
	
	 	$scope.paragraph = homeFactory.getContent().get({id:1});

	}])
	.controller('AboutpageController', ['$scope', '$stateParams', 'homeFactory', function($scope, $stateParams, homeFactory) {
	"use strict";
	
		$scope.paragraph = homeFactory.getContent().get({id:2});
	
	}])
	.controller('BlogpageController', ['$scope', '$stateParams', 'blogService', function($scope, $stateParams, blogService) {
	"use strict";

		$scope.blog = blogService.getBlogs().query();

	}])
	.controller('ProductpageController', ['$scope', '$stateParams', 'productService', function($scope, $stateParams, productService) {
	"use strict";

		$scope.product = productService.getProduct().query();
		
	}])

	;
	
	