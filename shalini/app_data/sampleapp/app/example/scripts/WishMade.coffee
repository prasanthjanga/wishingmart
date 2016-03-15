'use strict'

angular.module('wishingMartApp')
  .controller 'WishmadeCtrl', ($scope, $timeout) ->
    # Bind controller data
    do ->

    # Attach listeners

    $scope.GrantWishTap = ->
      steroids.modal.hide {}


    # Initialize controller
    do ->
      steroids.view.navigationBar.show ' '
