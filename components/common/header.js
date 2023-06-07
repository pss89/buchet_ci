import React, { Component } from 'react';
import ReactDOM from 'react-dom';
export default class Header extends Component {
    render() {
        return (
            <header>
                헤더
            </header>
        )
    }
}

ReactDOM.render(<Header />, document.getElementById('header'));