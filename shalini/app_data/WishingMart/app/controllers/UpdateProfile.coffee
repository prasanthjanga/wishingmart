'use strict'

angular.module('wishingMartApp')
  .controller 'UpdateprofileCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->
      $scope.UserName = {}

      $scope.UserName.value = '' # default value


    # Attach listeners

    $scope.UpdateTap = ->
      LandingPageWebView = new steroids.views.WebView 'views/LandingPage/index.html'
      steroids.layers.push { view: LandingPageWebView }

    $scope.SkipTap = ->
      LandingPageWebView = new steroids.views.WebView 'views/LandingPage/index.html'
      steroids.layers.push { view: LandingPageWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
