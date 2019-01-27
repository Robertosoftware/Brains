app.run(function($rootScope){
		$rootScope.msg= 'demkcwmkmcm';
});

app.controller("examCtrl", function($scope){
	$scope.username= 'rbonillaibarra';
	$scope.headline= 'Exam ' + $scope.username ;
	$scope.msg= 'You are on page ' + $scope.headline + ' for the exam page' ;
	$scope.user = 'Roberto';
    $scope.email = 'username@hochschule-hof.de';
    $scope.name = 'Roberto';
    $scope.email = '@hochschule-hof.de';
	$scope.lastname = 'Bonilla';
	$scope.ms = ' ';
	$scope.myFunc = function (){
		$scope.ms = 'The information have been collected';
	};
});
app.controller("mainCtrl", function($scope){
	//$scope.msg='Main. It is much better than Nothing';
});
app.controller('gameCtrl', function($scope) {
});