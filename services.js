angular.module('bluemazApp')

	.constant("baseURL", "http://localhost:8888/bluemazarine/php/api.php/")
	.service('homeFactory', ['$resource', 'baseURL', function($resource,baseURL) {
		"use strict";
		
		this.getContent = function(){
			return $resource(baseURL+"page_content/:id",null,  {'update':{method:'PUT' }});
		};
 	}])
 	.service('blogService', ['$resource', 'baseURL', function($resource, baseURL) {
		"use strict";
		
		this.getBlogs = function () {
			return $resource(baseURL+"blog_content/:id",null,  {'update':{method:'PUT' }});
		};
 	}])
 	.service('productService', ['$resource', 'baseURL', function($resource, baseURL) {
		"use strict";
		
		this.getProduct = function () {
			return $resource(baseURL+"product_content/:id",null,  {'update':{method:'PUT' }});
		};
 	}])
 	;
