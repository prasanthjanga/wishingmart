'use strict'

angular.module('wishingMartApp')
  .controller 'IntropageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->
      $scope.picture_field0 = {}

      steroids.data.storage.property('').values.onValue (v) ->
        $timeout ->
          $scope.picture_field0.url = v


    # Attach listeners

    $scope.picture_field0Tap = ->
      RegisterPageWebView = new steroids.views.WebView 'views/RegisterPage/index.html'
      steroids.layers.push { view: RegisterPageWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '
