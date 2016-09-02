angular.module('bluemazApp', ['ui.router','ngSanitize','ngResource'])

.config(function($stateProvider, $urlRouterProvider) {
	"use strict";
        $stateProvider
        	  // route for the home page
        	.state('app', {
                url:'/',
                views: {
                    'header': {
                        templateUrl : 'views/header.php'
                    },
                    'content': {
                        templateUrl: 'views/home.php',
                        controller  : 'HomepageController'
                    },
                    'footer': {
                        templateUrl : 'views/footer.php'
                    }
                }
            })
            // route for the about page
            .state('app.about', {
            	url: 'about',
            	views: { 
            		'content@': {
            			templateUrl: 'views/about.php',
            			controller: 'AboutpageController' 
            		}
            	}
            })
             // route for the contact page
            .state('app.contact', {
            	url: 'contact',
            	views: { 
            		'content@': {
            			templateUrl: 'views/contact.php',
            		}
            	}
            })	
            // route for the product page
            .state('app.product', {
            	url: 'product',
            	views: { 
            		'content@': {
            			templateUrl: 'views/product.php',
            			controller: 'ProductpageController' 
            		}
            	}
            })
            // route for the blog page
            .state('app.blog', {
            	url: 'blog',
            	views: { 
            		'content@': {
            			templateUrl: 'views/blog.php',
            			controller: 'BlogpageController' 
            		}
            	}
            });
            $urlRouterProvider.otherwise('/');			
        })
            
            
