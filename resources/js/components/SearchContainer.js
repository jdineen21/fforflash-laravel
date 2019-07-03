import React from 'react'
import ReactDOM from 'react-dom';
import SearchBox from './SearchBox';
import SearchDropDown from './SearchDropDown';

export default class SearchContainer extends React.Component {
    constructor(props) {
        super(props);
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
                <SearchBox />
                {/* <SearchDropDown /> */}
            </div>
        )
    }
}

if (document.getElementById('searchbox')) {
    ReactDOM.render(<SearchContainer />, document.getElementById('searchbox'));
}