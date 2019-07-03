import React from 'react';

export default class Searchbox extends React.Component {
    
    constructor(props) {
        super(props);
        this.state = {query: ''};

        this.onChange = this.onChange.bind(this);
        this.handleKeyDown = this.handleKeyDown.bind(this);
    }
    
    onChange(e) {
        this.setState({ query: e.target.value });
    } 

    handleKeyDown(e) {
        if (e.key === 'Enter') {
        console.log('do validate');
        }
    }

    componentDidMount() {
        fetch('http://192.168.0.44:8000/api/search')
            .then(response => response.json())
            .then(data => {
            this.setState({
                isLoaded: true,
                data: data,
            })
        });
    }

    render() {
        return (
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