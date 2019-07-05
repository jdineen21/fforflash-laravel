import React from 'react';
import Autosuggest from 'react-autosuggest';

export default class SearchBox extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            query: ''
        };

        this.onChange = this.onChange.bind(this);
        this.handleKeyDown = this.handleKeyDown.bind(this);
    }
    
    onChange(e) {
        this.setState({ query: e.target.value });
        this.props.SearchBox(e.target.value);
    } 

    handleKeyDown(e) {
        if (e.key === 'Enter') {
            console.log('do validate');
        }
    }

    render() {
        return (
            <div>
                <input 
                    style={textInputStyle}
                    type="text" 
                    name="query"
                    placeholder="Search Champion"
                    className="textbox"
                    autoComplete="off"
                    value={this.state.query}
                    onChange={this.onChange}
                    onKeyDown={this.handleKeyDown}
                />
            </div>
        );
    }
}

const textInputStyle = {
    boxSizing: 'border-box',
    width: '440px',
    padding: '0.8em 2em',
    background: '#ffffff',
    border: '0px',
    color: '#000000',
    fontSize: '0.8em',
    borderRadius: '0.4em',
    outline: 'none',
}