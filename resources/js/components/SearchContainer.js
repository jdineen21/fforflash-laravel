import React from 'react'
import ReactDOM from 'react-dom';
import Searchbox from './Searchbox';

export default class SearchContainer extends React.Component {
    render() {
        return (
            <div>
                <Searchbox />
            </div>
        )
    }
}

if (document.getElementById('searchbox')) {
    ReactDOM.render(<Searchbox />, document.getElementById('searchbox'));
}