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
            <div className="input_container">
                <input 
                    type="text" 
                    name="query"
                    placeholder="Search Champion"
                    autoComplete="off"
                    value={this.state.query}
                    onChange={this.onChange}
                    onKeyDown={this.handleKeyDown}
                />
            </div>
        );
    }
}