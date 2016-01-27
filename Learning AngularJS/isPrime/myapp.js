angular.module("myapp", [])
.controller("index", ["$scope", function ($scope) {
	$scope.value = 1;
	$scope.isPrime = function () {
		for(var i = 2; i < $scope.value; i++) {
			if($scope.value % i === 0) {
				$("#main_text").text("Not Prime");
				return false;
			}
		}
		if ($scope.value > 1) {
			$("#main_text").text("Prime!");
			return true; 
		}
	};
}]);
