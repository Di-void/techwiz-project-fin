var app = angular.module("ThriftFashion", [ 'ngRoute', 'ngResource']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/', {
        title: 'ThriftFashion',
        templateUrl: '../Home.htm'
    })
    .when('/product/:id', {
        title: 'ThriftFashion',
        templateUrl: '../Product.htm'
    })
    .when('/products', {
        title: 'Products - ThriftFashion',
        templateUrl: '../Products.htm'
    })
    .when('/contact', {
        title: 'Contact - ThriftFashion',
        templateUrl: '../Contactus.htm'
    })
    .when('/checkout', {
        title: 'Checkout - ThriftFashion',
        templateUrl: '../cart.htm'
    })
    .otherwise({
        redirectTo: '/'
    });
});

// app.controller('namesCtrl', function($scope) {
//     $scope.names = [
//         'Jani',
//         'Carl',
//         'Margareth',
//         'Hege',
//         'Joe',
//         'Gustav',
//         'Birgit',
//         'Mary',
//         'Kai'
//     ];
// });

// app.controller('list', function($scope, $http){
// 	$http.get("products.json").then(function(response){
//         $scope.products = response.data.productList;
//     });
// });
// app.controller('listCtrl', function($scope, $http, $routeParams){
// 	$http.get("products.json").then(function(response){
//         $scope.product = response.data.productList[$routeParams.id].id;
//     });
// });
app.run([ '$rootScope', function($rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        $rootScope.title = current.$$route.title;
    });
}]);