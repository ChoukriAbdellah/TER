import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import App from './App'




class Questionnaire extends Component{
    render(){
        return(
            <div id="questionnaire" className="row centered">
                
                <br />
                <br />
                <div className="wrapper fadeInDown zero-raduis">
                    <div id="formContent">
              
                        <div className="fadeIn first">
                         
                            
                            
                           <App/>
                        </div>

                    </div>
                </div>
            </div> 
                        
        );
    }
}
 export default Questionnaire;

const domContainer = document.querySelector('#listeProjet');
 
//ReactDOM.render(<Questionnaire data=getData(test)/>, domContainer);
const getData = (name, json = true) => {
    const value = domContainer.getAttribute(`data-${name}`);
    return  value;
};
//const element = React.createElement(App);



ReactDOM.render(<App data={getData("select") }/>, document.getElementById('listeProjet'));




