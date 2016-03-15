'use strict'

angular.module('wishingMartApp')
  .controller 'RegisterpageCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->
      $scope.fn_field0 = {}

      $scope.fn_field0.value = '' # default value

      $scope.Email = {}

      $scope.Email.value = '' # default value

      $scope.ln_field1 = {}

      $scope.ln_field1.value = '' # default value

      $scope.Country = {}

      $scope.Country.value = '' # default value

      $scope.confirmPswd = {}

      $scope.confirmPswd.value = '' # default value

      $scope.pswrd = {}

      $scope.pswrd.value = '' # default value


    # Attach listeners

    $scope.fn_field0Tap = ->
      if steroids.data.storage.property("dataKey").get() is "\"\""
        steroids.data.storage.property("").set("myDataValue")

    $scope.RegisterTap = ->
      VerificationPageWebView = new steroids.views.WebView 'views/VerificationPage/index.html'
      steroids.layers.push { view: VerificationPageWebView }


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '

      angular.element(document.body).bind "touchmove", (e) -> e.preventDefault()
