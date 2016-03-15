'use strict'

angular.module('wishingMartApp')
  .controller 'VerificationpageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->
      $scope.VerificationCode = {}

      $scope.VerificationCode.value = '' # default value


    # Attach listeners

    $scope.VerifyTap = ->
      UpdateProfileWebView = new steroids.views.WebView 'views/UpdateProfile/index.html'
      steroids.layers.push { view: UpdateProfileWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
