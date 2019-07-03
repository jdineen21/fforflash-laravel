import React from 'react'
import ReactDOM from 'react-dom';
import SearchBox from './SearchBox';
import SearchDropDown from './SearchDropDown';

export default class SearchContainer extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            query: ''
        };

        this.SearchBox = this.SearchBox.bind(this);
    }

    SearchBox(query) {
        const inputValue = query.trim().toLowerCase();
        const inputLength = query.length;
        
        console.log(inputLength === 0 ? [] : this.state.data.filter(lang =>
            lang.name.toLowerCase().slice(0, inputLength) === inputValue
        ));
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
            <div className="container">
                <SearchBox SearchBox={this.SearchBox} />
                {/* <SearchDropDown /> */}
            </div>
        )
    }
}

if (document.getElementById('searchbox')) {
    ReactDOM.render(<SearchContainer />, document.getElementById('searchbox'));
}