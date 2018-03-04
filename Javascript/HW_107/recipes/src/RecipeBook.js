import React, { Component } from 'react';
import RecipeList from './RecipeList';
import { Link } from 'react-router-dom';
export default class RecipeBook extends Component {
    constructor(props) {
        super(props);
        this.state = {
            recipes: [
                { name: 'Macaroni', instructions: 'Boil water, add macaroni', picture: 'macaroni.jpg' },
                { name: 'Eggs', instructions: 'Boil water, add eggs', picture: 'eggs.jpg' }
            ]
        };
    }

    addRecipe = (recipe) => {
        const recipes = [...this.state.recipes, recipe];
        this.setState({ recipes: recipes });
    }

    componentDidMount() {
        if (this.props.match.params.name) {
            const recipe = {
                name: this.props.match.params.name,
                instructions: this.props.match.params.instructions
            }
            this.addRecipe(recipe);
        }
    }

    render() {
        return (
            <div>
                Im a recipe book
                <RecipeList recipes={this.state.recipes} />
                <hr />
                <Link to="/addRecipe"> add Recipe</Link>
            </div>
        );
    }
}

