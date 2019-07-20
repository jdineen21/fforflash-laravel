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

        this.onQueryChange = this.onQueryChange.bind(this);
        this.onSelectChange = this.onSelectChange.bind(this);
    }

    onQueryChange(query) {
        const inputValue = query.trim().toLowerCase();
        const inputLength = query.length;

        const predicts = inputLength === 0 ? []: this.state.data.filter(data => data.name.toLowerCase().slice(0, inputLength) === inputValue);

        predicts.sort((a, b) => (a.name > b.name) ? 1 : -1);

        this.setState({ predicts: predicts });
    }

    onSelectChange(select) {
        this.setState({ select: select });
    }

    componentDidMount() {
        fetch('/api/search')
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
                <SearchBox 
                    onQueryChange={this.onQueryChange}
                    onSelectChange={this.onSelectChange}
                    predicts={this.state.predicts}
                />
                <div className="dropdown_content">
                    <SearchDropDown 
                        predicts={this.state.predicts}
                        select={this.state.select}
                    />
                </div>
            </div>
        )
    }
}

if (document.getElementById('searchbox')) {
    ReactDOM.render(<SearchContainer />, document.getElementById('searchbox'));
}