## TEAM DASH Project 
### Rajasthan Hackthon 4.0

### Project Documentation

### File Structure
1. hack.dash.android -> contains android files 
2. hack.dash.api     -> contains api (in PHP) to convert Natural Language to Sign Language
3. hack.dash.vhuman  -> contains AVATARS and Canvas webViews


#### Installation

The Project is based on 
- react-native
- php 
- html,css,js,jquery

#### Step 1. Setup Database and connect API to the database

- Requires XAMPP or equivallent server 

- Go to hack.dash.api/includes folder
- edit dbconnect.php file according to your need
- create New database ‘dash_hack’ 
- Import two sql tables from  hack.dash.api/includes/sql folder
- Verify dict_1 and dict_2 created inserted successfully.
### Step 2. Set Address Of The Host
- Connect mobile to react native development server 
- start xampp and update address of the server in app.js in hack.dash.android/dash folder

#### Step 2. For Android Environment
- Requirement NODEJS & npm
- install react-native-cli with adb device and SDK > 23.0.1

- go to hack.dash.android/dash 
- npm install
- react-native start    (to start metro bundler) (keep this running )
- react-native run-android  ( to power up the app)
 



