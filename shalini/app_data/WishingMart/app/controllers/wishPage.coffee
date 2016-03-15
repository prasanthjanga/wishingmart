'use strict'

angular.module('wishingMartApp')
  .controller 'WishpageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->
      $scope.Color = {}

      $scope.Color.value = '' # default value

      $scope.ProductName = {}

      $scope.ProductName.value = '' # default value

      $scope.Brand = {}

      $scope.Brand.value = '' # default value

      $scope.Country = {}

      $scope.Country.value = '' # default value

      $scope.Description = {}

      $scope.Description.value = '' # default value


    # Attach listeners

    $scope.MakeWishTap = ->
      WishMadeWebView = new steroids.views.WebView 'views/WishMade/index.html'
      steroids.modal.show { view: WishMadeWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
