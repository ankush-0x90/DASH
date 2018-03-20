/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 * @flow
 */
import React, { Component } from 'react';
import {
  Platform,
  StyleSheet,
  Text,
  View,
  Image,
  ImageBackground,
  WebView
} from 'react-native';

export default class App extends Component<> {
  render() {
    
    const resizeMode = 'center';
    const text = 'This is some text inlaid in an <Image />';

    return (
      /*  
      <View style={styles.wrapper}>
        <Text style={styles.welcomeText}>DASH</Text>
        <View >
            <Text > Hllo</Text>
        </View>
      </View>
        */
      <WebView
             source={{uri: 'http://{innetAddressOfTheHost}/hackathon/hack.dash.vhuman/'}}
             style={{marginTop: 0}}
      />
    );
  }
}

const styles = StyleSheet.create({
  wrapper: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#fff',
  },
  welcomeText: {
    color:'#c0392b',
    fontSize:35,
    fontWeight:'bold'
  }
});
