import React from 'react';
import ReactDOM from 'react-dom';

export default class Searchbox extends React.Component {
    // constructor() {
    //     super(props);
    //     this.state = {
    //         query: ''
    //     };
    // }
    
    // onChange = (e) => this.setState({ query: e.target.value });

    // _handleKeyDown = (e) => {
    //     if (e.key === 'Enter') {
    //     console.log('do validate');
    //     }
    // }

    render() {
        return (
            <input 
                style={textInputStyle}
                type="text" 
                name="query"
                placeholder="Search Champion"
                className="textbox"
                autoComplete="off"
                // value={this.state.query}
                // onChange={this.onChange}
                // onKeyDown={this._handleKeyDown}
            />
        );
    }
}

const textInputStyle = {
    width: '30em',
    padding: '0.8em 2em',
    background: '#ffffff',
    border: '0px',
    color: '#000000',
    fontSize: '0.8em',
    borderRadius: '0.4em',
    outline: 'none'
}

if (document.getElementById('searchbox')) {
    ReactDOM.render(<Searchbox />, document.getElementById('searchbox'));
}