import React, { Component } from 'react';
import './App.css';
import Recipe from './Recipe';

class App extends Component {
  recipes = [
    {
      name: 'hotdogs', details: ["Heat grill. Slide a long wooden skewer through the " +
        "entirety of your hot dog. Place hot dog on cutting board and, using a paring knife," +
        "cut into the hot dog at a slight angle. Turn hot dog and continue cutting until you reach" +
        "the other end. Carefully remove skewer from hot dog. Repeat with remaining dogs.",
        "Grill 8 minutes.",
        "Serve in buns with your favorite toppings."], id: 1
    },
    {
      name: 'hamburgers', details: ["Preheat an oven to 350 degrees F (175 degrees C)." +
        " Cover a baking sheet with aluminum foil and spray with cooking spray.",
      " Mix together the ground beef and onion soup mix in a large skillet; cook and stir over medium-high" +
      " heat until the beef is crumbly, evenly browned, and no longer pink. Drain and discard any excess " +
      " grease. Remove from heat. Stir the mayonnaise and Cheddar cheese into the ground beef mixture.",
      " Lay the bottoms of the dinner rolls on the prepared baking sheet. Spread the cheese and beef mixture" +
      " on the bottom half of each roll. Replace the tops. Cover with another sheet of aluminum foil sprayed" +
      " with cooking spray.",
      " Bake in the preheated oven until the burgers are heated through and cheese melts, about 30 minutes." +
      " Serve with sliced pickles."
      ], id: 2
    },
    {
      name: 'steak', details: [
        "Let steaks stand 30 minutes at room temperature.",
        "Sprinkle salt and pepper evenly over steaks. Heat a large cast-iron skillet over high heat. Add oil" +
        " to pan; swirl to coat. Add steaks to pan; cook 3 minutes on each side or until browned. Reduce heat" +
        " to medium-low; add margerine, thyme, and garlic to pan. Carefully grasp pan handle using an oven mitt or" +
        " folded dish towel. Tilt pan toward you so margerine pools; cook 1 1/2 minutes, basting steaks with" +
        " margerine constantly. Remove steaks from pan; cover loosely with foil. Let stand 10 minutes. Reserve" +
        " margerine mixture.",
        "Cut steak diagonally across grain into thin slices. Discard thyme and garlic; spoon reserved butter" +
        " mixture over steak."
      ],
      id: 3
    }
  ];
  render() {
    const RecipeComponents = this.recipes.map(recipe => <li key={recipe.id}><Recipe name={recipe.name} details={recipe.details} /></li>);
    return (
      <div className="App">
        <header className="App-header">
          <h1 className="App-title">Welcome to My Recipes</h1>
        </header>
        <ul>
          {RecipeComponents}
        </ul>
      </div>
    );
  }
}

export default App;
