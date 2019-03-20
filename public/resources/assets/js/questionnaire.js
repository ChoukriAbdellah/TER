
import ReactDOM from 'react-dom';

import React, { Component } from 'react';
import TodoList from './TodoList'


class Questionnaire extends Component{
    render(){
        return(
            <div id="questionnaire" className="row centered">
                <h1>
                    Questionnaire
                </h1>

                <br />
                <br />
                <div className="wrapper fadeInDown zero-raduis">
                    <div id="formContent">
              
                        <div className="fadeIn first">
                            <h2 className="my-5">Répondez aux questions suivantes : </h2> 
                            <br/>
                            <br/>
                            <TodoList/>
                        </div>

                    </div>
                </div>
            </div>
                        
        );
    }
}
 export default Questionnaire;

const domContainer = document.querySelector('#questionnaire');

ReactDOM.render(<Questionnaire/>, domContainer);<br />
           