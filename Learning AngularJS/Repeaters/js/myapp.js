angular.module("myapp", [])
	.controller("index", ["$scope", function($scope) {
		$scope.projects = [
			{id: 1, name: "Using the ngClass Directive", description: "A Prime Number Detector",
			link: "http://bryceyoung.me/blog/learning-angularjs#prime", inAction: "https://s3-us-west-2.amazonaws.com/l5beauty-bryce/Post%20Source%20Code/Learning%20AngularJS/isPrime/isPrime.html", status: "Completed"},
			{id: 2, name: "Using the ngRepeat Directive", description: "You're looking at it",
			link: "http://bryceyoung.me/blog/learning-angularjs#ngRepeat", inAction: "https://s3-us-west-2.amazonaws.com/l5beauty-bryce/Post%20Source%20Code/Learning%20AngularJS/Repeaters/index.html", status: "In Progress"},
			{id: 3, name: "Using the ngShow Directive", description: "A Riddle Verifier",
			link: "http://bryceyoung.me/blog/learning-angularjs#ngShow", inAction: "https://s3-us-west-2.amazonaws.com/l5beauty-bryce/Post%20Source%20Code/Learning%20AngularJS/Visibility/visibility.html", status: "Completed"},
			{id: 4, name: "Using $watch to Update the View", description: "A Palindrome Maker",
			link: "http://bryceyoung.me/blog/learning-angularjs#watch", inAction: "https://s3-us-west-2.amazonaws.com/l5beauty-bryce/Post%20Source%20Code/Learning%20AngularJS/Watch/index.html", status: "Completed"}
		];
}]);