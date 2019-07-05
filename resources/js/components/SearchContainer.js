import React from 'react'
import ReactDOM from 'react-dom';
import SearchBox from './SearchBox';
import SearchDropDown from './SearchDropDown';

export default class SearchContainer extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            isLoaded: false,
            data: [],
            predicts: [],
        }

        this.SearchBox = this.SearchBox.bind(this);
    }

    SearchBox(query) {
        const inputValue = query.trim().toLowerCase();
        const inputLength = query.length;

        const predicts = inputLength === 0 ? []: this.state.data.filter(lang => lang.name.toLowerCase().slice(0, inputLength) === inputValue);
        
        this.setState({ predicts: predicts });
    }

    componentDidMount() {
        fetch('http://127.0.0.1:8000/api/search')
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
            <div className="searchbox_container">
                <SearchBox SearchBox={this.SearchBox} />
                <div className="dropdown_content">
                    <SearchDropDown  predicts={this.state.predicts} />
                </div>
            </div>
        )
    }
}

if (document.getElementById('searchbox')) {
    ReactDOM.render(<SearchContainer />, document.getElementById('searchbox'));
}