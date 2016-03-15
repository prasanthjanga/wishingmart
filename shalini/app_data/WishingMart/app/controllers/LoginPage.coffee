'use strict'

angular.module('wishingMartApp')
  .controller 'LoginpageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->
      $scope.Email = {}

      $scope.Email.value = '' # default value

      $scope.password = {}

      $scope.password.value = '' # default value


    # Attach listeners

    $scope.LoginTap = ->
      VerificationPageWebView = new steroids.views.WebView 'views/VerificationPage/index.html'
      steroids.layers.push { view: VerificationPageWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
