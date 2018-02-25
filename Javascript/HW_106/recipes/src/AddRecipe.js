import React, { Component } from 'react';

export default class AddRecipe extends Component {
  constructor(props) {
    super(props);
    this.state = {
      name: '',
      instructions: ''
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    const target = event.target;
    const value = target.value;
    const name = target.name;
    this.setState({
      [name]: value
    });
  }

  handleSubmit(event) {
    const recipe = { name: this.state.name, instructions: this.state.instructions, pic: "none" };
    this.props.addRecipe(recipe);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Name:
          <input type="text" name="name" value={this.state.name} onChange={this.handleChange} />
        </label>
        <label>
          Instructions:
          <input type="text" name="instructions" value={this.state.instructions} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}