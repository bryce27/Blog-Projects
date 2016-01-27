angular.module("myapp", [])
	.controller("index", ["$scope", function ($scope) {
		$scope.isTyping1 = false;
		$scope.isCorrect = function () {
				if ($scope.value1 === "silence") {
					$scope.isTyping1 =false;
					return true;
				}
				else $scope.isTyping1 = true;
		};
		$scope.isCorrect2 = function () {
				if ($scope.value2 === "piano") {
					$scope.isTyping2 =false;
					return true;
				}
				else $scope.isTyping2 = true;
		};
		$scope.isCorrect3 = function () {
				if ($scope.value3 === "footsteps") {
					$scope.isTyping3 =false;
					return true;
				}
				else $scope.isTyping3 = true;
		};
		$scope.isCorrect4 = function () {
				if ($scope.value4 === "swims") {
					$scope.isTyping4 =false;
					return true;
				}
				else $scope.isTyping4 = true;
		};
		$scope.allCorrect = function () {
			if (($scope.value1 === "silence") && ($scope.value2 === "piano") && ($scope.value3 === "footsteps") && ($scope.value4 === "swims")){
				return true;
			}
		};
}]);