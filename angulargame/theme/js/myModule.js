var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Game", {
				templateUrl:"partials/Game.html",
				controller:"gameCtrl"
		})
		.when("/Exam", {
				templateUrl:"partials/Exam.html",
				controller:"examCtrl"
		})
		.when("/Game2", {
				templateUrl:"partials/memoryGame.html",
				controller:"gameCtrl"
		})
		.otherwise({
				templateUrl:"partials/main.html",
				controller:"mainCtrl"
		});
});

