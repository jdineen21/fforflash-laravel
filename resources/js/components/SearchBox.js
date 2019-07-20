import React from 'react';

export default class SearchBox extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            query: '',
            select: -1,
        };
        this.onChange = this.onChange.bind(this);
        this.handleKeyDown = this.handleKeyDown.bind(this);
    }
    
    onChange(e) {
        this.setState({ query: e.target.value });
        this.setState({ select: -1 });
        this.props.onQueryChange(e.target.value);
    }

    handleKeyDown(e) {
        if (e.key === 'Enter') {
            if (this.state.select === -1) {
                window.location = "/champion/"+this.props.predicts[0].key;
            }
            else {
                window.location = "/champion/"+this.props.predicts[this.state.select].key;
            }
        }
        if (e.keyCode === 38) {
            if (0 < this.state.select) {
                this.setState({ select: this.state.select-=1 });
                this.setState({ query: this.props.predicts[this.state.select].name });
                this.props.onSelectChange(this.state.select);
                e.preventDefault();
            }
        }
        if (e.keyCode === 40) {
            if (this.state.select < this.props.predicts.length-1) {
                this.setState({ select: this.state.select+=1 });
                this.setState({ query: this.props.predicts[this.state.select].name });
                this.props.onSelectChange(this.state.select);
                e.preventDefault();
            }
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