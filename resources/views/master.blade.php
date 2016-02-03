<html lang="en" >
<head>
  <!-- Angular Material style sheet -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic'>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.4/angular-material.min.css">
</head>
<body ng-app="BlankApp" ng-cloak>
     <md-toolbar>
        <h2 layout-margin>
          <span style='font-weight: 100'>Watch n Learn</span>
        </h2>
     </md-toolbar>

  <!-- Angular Material requires Angular.js Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.4/angular-material.min.js"></script>

  <!-- Your application bootstrap  -->
  <script type="text/javascript">
    /**
     * You must include the dependency on 'ngMaterial'
     */
    angular
        .module('BlankApp', ['ngMaterial'])
        .controller('TestCtrl', function($scope) {
            $scope.name = 'Watch n Learn';
        });
  </script>

</body>
</html>
