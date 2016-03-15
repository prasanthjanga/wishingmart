

module.exports =

  #See styling options for tabs and other native components in app/common/native-styles/ios.css or app/common/native-styles/android.css
  tabs: [
    {
      title: "Wish"
      id:"index"
      location: "example#getting-started"  
    }
    {
      title: "Grant"
      id: "settings"
      location: "GrantingPage#index" 
    }
    {
      title: "Shop"
      id: "internet"
      location: "Shopping#index" 
    }
    {
      title: "Profile"
      id: "internet"
      location: "Dashboard#index" 
    }
  ]

  rootView:
    location: "example#getting-started"

  preloads: [
    {
      id: "learn-more"
      location: "LoginPage#index"
    }
    {
      id: "using-the-scanner"
      location: "RegisterPage#index"
    }
  ] 

  # drawers:
  #   left:
  #     id: "leftDrawer"
  #     location: "example#drawer"
  #     showOnAppLoad: false
  #   options:
  #     animation: "swingingDoor"
  #
  # initialView:
  #   id: "initialView"
  #   location: "example#initial-view"
