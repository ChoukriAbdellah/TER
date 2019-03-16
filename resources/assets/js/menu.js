import React from 'react'
import ReactDOM from 'react-dom'

class Welcome extends   React.Component{
    render(){
        return(
            
            
 
    <div id="navigation" className="navbar navbar-default navbar-fixed-top">
    <div className="container">
      <div className="navbar-header">
        <button type="button" className="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span className="icon-bar"></span>
          <span className="icon-bar"></span>
          <span className="icon-bar"></span>
        </button>
        <a className="navbar-brand smothscroll" href="#home"><b>Estimation.com</b></a>
      </div>
      <div className="navbar-collapse collapse">
        <ul className="nav navbar-nav">
          <li className="active"><a href="#home" className="smothscroll">Accueil</a></li>
          <li><a href="#desc" className="smothscroll">Description</a></li>
          <li><a href="#showcase" className="smothscroll">Photos</a></li>
          <li><a href="connexion.html">Connexion</a></li>
          <li><a href="inscription.html">Inscription</a></li>
          <li><a href="#contact" className="smothscroll">Contact</a></li>
        </ul>
      </div>
      </div>
      </div>

        );
    }
}




const domContainer = document.querySelector('#menu');

ReactDOM.render(<Welcome/>, domContainer);



