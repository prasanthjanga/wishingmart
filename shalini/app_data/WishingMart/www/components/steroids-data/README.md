# Steroids Data [![Build Status](http://img.shields.io/travis/AppGyver/steroids-data.svg)](https://travis-ci.org/AppGyver/steroids-data)

Library for accessing cloud data in your Steroids application.

## Installation

Steroids Data is published on Bower.

    bower install steroids-data

## Development

Getting started:

    npm install

Running tests:

    grunt test

For a test-and-watch-for-changes loop, use:

    grunt dev

## Publishing to bower

Compile source to a Browserified Javascript bundle and add changes to git:

    grunt build && git commit -am "update dist"

Update version tags in:

    package.json
    bower.json

Tag git version:

    git commit -m "x.y.z" && git tag "vx.y.z"

Publish:

    git push origin master --tags
