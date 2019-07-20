import React from 'react';

export default class SearchDropDown extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        return this.props.predicts.map((predict, index) => (
            <div key={predict.key} className={(this.props.select === index) ? 'dropdown_row_select' : 'dropdown_row'}>
                <a href={"/champion/"+predict.key}>
                    <div>
                        <img src={"/datadragon/9.13.1/img/champion/"+predict.champId+".png"}/>
                        <p>{ predict.name }</p>   
                    </div>       
                </a>         
            </div> 
        ));
    }
}
