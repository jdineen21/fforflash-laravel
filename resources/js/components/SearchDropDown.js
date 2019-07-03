import React from 'react';

export default class SearchDropDown extends React.Component {
    render() {
        return (
            <div style={containerStyle}>
                <ul style={listStyle}>
                    <li style={listItemStyle}>
                        <img style={imgStyle} src="/datadragon/9.13.1/img/champion/Galio.png"/>
                        <p style={championNameStyle}>Galio</p>
                    </li>
                </ul>
            </div>
        )
    }
}

const containerStyle = {
    boxSizing: 'border-box',
    width: '440px',
    background: '#ffffff',
    borderRadius: '0.2em',
    marginTop: '-5px',
    position: 'relative',
}

const listStyle = {
    boxSizing: 'border-box',
    display: 'inline-block',
    width: '440px',
    position: 'relative',
}

const listItemStyle = {
    padding: '0.4em 1em',
    position: 'relative',
}

const imgStyle = {
    width: '30px',
    float: 'left',
    border: '0',
    position: 'relative',
}

const championNameStyle = {
    display: 'inline-block',
    float: 'left',
    color: '#000',
    margin: '0 0 0 20px',
    fontWeight: '600',
    fontSize: '1.5em',
    position: 'relative',
}
