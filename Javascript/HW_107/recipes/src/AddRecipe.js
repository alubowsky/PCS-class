import React, { Component } from 'react';
import { Link } from 'react-router-dom';

export default class AddRecipe extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            instructions: ''
        };
    }

    handleInputChange = (event) => {
        const target = event.target;
        const value = target.value;
        const name = target.name;

        this.setState({
            [name]: value
        });
    }

    render() {
        return (
            <div>
                <h2>Add Recipe</h2>
                <form>
                    <label>
                        Name:
                        <input name="name" value={this.state.name} onChange={this.handleInputChange} />
                    </label>
                    <br />
                    <label>
                        Instructions:
                        <input name="instructions" value={this.state.instructions} onChange={this.handleInputChange} />
                    </label>
                    <br />
                    <Link to={`/recipes/${this.state.name}/${this.state.instructions}`}>
                        <input type="submit" value="AddRecipe" />
                    </Link>
                </form>
            </div>
        );
    }
}
