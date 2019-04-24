import React, { Component } from 'react';
import './App.css';
import Flat from './flat'
import './flat.css'
import flats from './listeProjetsAdmin.json'


class App extends Component {
  constructor(props){
    super(props);
    this.state={
      flats:flats,
      allFlats: flats,
      selectFlat: null,
      search:""
      
  };
}

handleSearch=(event) =>{
  this.setState({
    search: event.target.value,
    flats: this.state.allFlats.filter((flat) => new RegExp(event.target.value,"i").exec(flat[1]))
  });
}
  selectFlat=(flat) => {
    this.setState({
      
      selectFlat: flat
    })
  }
  infosUser(){
       
    if(this.state.selectFlat){
    return(<div className="infos" id="info">
      <strong>Informations</strong>
      <legend><span className="number"><strong>Projet: </strong>{this.state.selectFlat[1]}</span></legend>
      <legend><span className="number"><strong>User: </strong>{this.state.selectFlat[2]}</span></legend>
    </div>
    
    
      
      );}
    }

  render() {
    
    
    return (
      
      <div className="App">
        <div className="main">
          <div className="search">
          {this.infosUser()}
          <input 
          type="text"
          placeholder="search"
          value={this.state.search}
          onChange={this.handleSearch}
          
          />
          
            
          


          
          </div> 
          <div className="flats">
         
          {
            this.state.flats.map((elem) =>{
              return <Flat 
              key={elem}
              flat={elem}
              handleClick={this.selectFlat }
              
              
              />
            }
            )} 
            

          
          
        
         </div>
        </div>
        
        </div>
      
      
    );
  }
}


export default App;