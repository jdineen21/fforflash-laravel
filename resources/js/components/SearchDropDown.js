import React from 'react';

export default class SearchDropDown extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            predicts: [],
        };

        //this.predicts = this.predicts.bind(this);
    }

    handlePredicts() {
        console.log(this.props.predicts);
    }

    render() {
        //console.log(this.props.predicts);
        return this.props.predicts.map((todo) => (
            <div style={containerStyle}>
                <ul style={listStyle}>
                    <li style={listItemStyle}>
                        <img style={imgStyle} src={"/datadragon/9.13.1/img/champion/"+todo.champId+".png"}/>
                        <p style={championNameStyle}>{ todo.name }</p>
                    </li>
                </ul>
            </div>
        ));
    }
}

const containerStyle = {
    boxSizing: 'border-box',
    width: '440px',
    background: '#ffffff',
    borderRadius: '0.2em',
    marginTop: '-5px',
    position: 'relative',
    left: '0',
}

const listStyle = {
    boxSizing: 'border-box',
    display: 'inline-block',
    width: '440px',
    margin: '0',
    
}

const listItemStyle = {
    padding: '0.4em 1em',
}

const imgStyle = {
    width: '30px',
    float: 'left',
    border: '0',
}

const championNameStyle = {
    display: 'inline-block',
    float: 'left',
    color: '#000',
    margin: '0 0 0 20px',
    fontWeight: '600',
    fontSize: '1.5em',
}
