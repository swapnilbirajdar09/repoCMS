import React, { Component } from 'react';
import './App.css';
import Login from './components/login_form'
class App extends Component {
  constructor(props){
    super(props);
    this.state={

    }
  }

    componentWillMount() {

    }
  render() {

    return (
      <div className="App">

            <Login/>

      </div>
    );
  }
}

export default App;
