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
            <div className="dropdown_row">
                <a href={"/champion/"+todo.key}>
                    <div>
                        <img src={"/datadragon/9.13.1/img/champion/"+todo.champId+".png"}/>
                        <p>{ todo.name }</p>   
                    </div>       
                </a>         
            </div> 
        ));
    }
}
