import React, { Component } from 'react';
import RecipeList from './RecipeList';

export default class RecipeBook extends Component {
   
    render() {
        return (
            <div>
                Im a recipe book
                <RecipeList />
            </div>
        );
    }
}

