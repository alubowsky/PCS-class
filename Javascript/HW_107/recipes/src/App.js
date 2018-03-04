import React, { Component } from 'react';
import './App.css';
import Routes from './Routes';
import { Link } from 'react-router-dom';

class App extends Component {
  render() {
    return (
      <div>
        <nav>
          <Link to="/recipes">Recipes</Link>
        </nav>
        {Routes}
      </div>
    );
  }
}

export default App;
