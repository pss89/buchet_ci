import React, { Component } from 'react';
import ReactDOM from 'react-dom';
export default class Footer extends Component {
    render() {
        return (
            <footer>
                풋터
            </footer>
        )
    }
}

ReactDOM.render(<Footer />, document.getElementById('footer'));