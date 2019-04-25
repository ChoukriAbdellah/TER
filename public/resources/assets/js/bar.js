import React, { Component } from 'react';




class Bar extends  Component{


    render(){

        return(
            <div className="container">
               
            <h1>salut</h1>
                </div>

        );
    }


    }

export default Bar;
const domContainer = document.querySelector('#listeProjet');
 
//ReactDOM.render(<Questionnaire data=getData(test)/>, domContainer);
const getData = (name, json = true) => {
    const value = domContainer.getAttribute(`data-${name}`);
    return  value;
};

ReactDOM.render(<App data={getData("select") }/>, document.getElementById('listeProjet'));