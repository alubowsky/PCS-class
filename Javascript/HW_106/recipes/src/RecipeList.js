import React, { Component } from 'react';
import Recipe from './Recipe';
import PropTypes from 'prop-types';
import AddRecipe from './AddRecipe';

export default class RecipeList extends Component {
    constructor(props) {
        super(props);
        this.state = {
            recipes: [
                { name: 'Macaroni', instructions: 'Boil water, add macaroni', picture: 'macaroni.jpg' },
                { name: 'Eggs', instructions: 'Boil water, add eggs', picture: 'eggs.jpg' }
            ]
        };
    }

    addRecipe = recipe => {
        this.setState({ recipes: [...this.state.recipes, recipe] });
        console.log(this.state.recipes);
    }

    selectRecipe(recipe) {
        this.setState({ selectedRecipe: recipe })
    }

    render() {
        const recipes = this.state.recipes.map(recipe => (
            < li key={recipe.name} onClick={this.selectRecipe.bind(this, recipe)} >
                {recipe.name}
                {console.log(recipe.name)}
            </li >
        ));
        const selectedRecipe = this.state.selectedRecipe ? <Recipe recipe={this.state.selectedRecipe} /> : null;

        return (
            <div>
                <ul>
                    {recipes}
                </ul>
                <AddRecipe addRecipe={this.addRecipe} />
                {selectedRecipe}
            </div>
        );
    }
}

RecipeList.propTypes = {
    recipes: PropTypes.array,
};

