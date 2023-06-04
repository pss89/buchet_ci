import React, { Component } from 'react';
import ReactDOM from 'react-dom';
export default class App extends Component {
    render() {
        return (
            <div>
                <h1>Hello World From React!!!!!!</h1>
                <p>변경해봄ㄴㄴㄴㄴㄴ!!</p>
            </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'));