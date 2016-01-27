angular.module("myapp", [])
	.controller("index", ["$scope", function($scope) {
		$scope.$watch("value", function (newValue) {
			$scope.product = newValue.split("").reverse().join("");
		});

	}]);