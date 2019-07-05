import React from 'react';

export default class SearchDropDown extends React.Component {
    constructor(props) {
        super(props);
    }

    handlePredicts() {
        console.log(this.props.predicts);
    }

    render() {
        return this.props.predicts.map((todo) => (
            <div style={listItemStyle}>
                <a href={"/champion/"+todo.key}>
                    <img style={imgStyle} src={"/datadragon/9.13.1/img/champion/"+todo.champId+".png"}/>
                    <p style={championNameStyle}>{ todo.name }</p>
                </a>
            </div>
        ));
    }
}

const listItemStyle = {
    padding: '0.4em 1em',
    height: '3em',
}

const imgStyle = {
    width: '30px',
    float: 'left',
    border: '0',
}

const championNameStyle = {
    float: 'left',
    color: '#000',
    margin: '0 0 0 20px',
    fontWeight: '600',
    fontSize: '1.5em',
}
