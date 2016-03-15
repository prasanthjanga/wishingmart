'use strict'

angular.module('wishingMartApp')
  .controller 'LandingpageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->

    # Attach listeners

    $scope.WishTap = ->
      wishPageWebView = new steroids.views.WebView 'views/wishPage/index.html'
      steroids.layers.push { view: wishPageWebView }

    $scope.GrantTap = ->
      GrantingPageWebView = new steroids.views.WebView 'views/GrantingPage/index.html'
      steroids.layers.push { view: GrantingPageWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
