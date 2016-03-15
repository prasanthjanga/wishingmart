'use strict'

angular.module('wishingMartApp')
  .controller 'StartingpageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->

    # Attach listeners

    $scope.SignUpTap = ->
      RegisterPageWebView = new steroids.views.WebView 'views/RegisterPage/index.html'
      steroids.layers.push { view: RegisterPageWebView }

    $scope.LoginTap = ->
      LoginPageWebView = new steroids.views.WebView 'views/LoginPage/index.html'
      steroids.layers.push { view: LoginPageWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
