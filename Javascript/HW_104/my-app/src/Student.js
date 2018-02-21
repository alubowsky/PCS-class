import React, { Component } from 'react';
import './Student.css';

export default class Student extends Component {

    constructor(props) {
        super(props);

        this.name = props.name;
        this.grades = this.props.grades.map((grade) =>
            <li>{grade}</li>
        );
    }

    render() {
        return (
            <div className='Student'>
                <h1>Im Student {this.name}</h1>
                <h2>These are my grades: </h2>
                <ul>
                    {this.grades}
                </ul>
            </div>
        );
    }
}
