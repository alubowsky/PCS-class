import React, { Component } from 'react';


export default class Recipe extends Component {
    constructor(props) {
        super(props);
        this.name = props.name;
        this.detailElements = props.details.map((d, i) => <li key={i}>{d}</li>);
        this.state = { rN: "" };
        this.show = true;
    }

    handleClick = (e, name) => {
        e.preventDefault();
        this.setState({ rN: name });
    }

    getDetails = (name) => {
        if (!this.show) {
            this.show = true;
            if (name === this.state.rN) {
                return this.detailElements;
            }
            console.log("!");
        }
        else {
            this.show = false;
            console.log("y");
        }
    }

    render() {
        return (
            <div>
                <h2><a href="" onClick={(e) => this.handleClick(e, this.name)}> {this.name}</a></h2>
                <h3>{this.getDetails(this.name)}</h3>
            </div>
        );
    }
}