import flats from './listeMembresAdmain.json'

class Welcome extends React.Component{
    render(){
        return(
            
            
  <li className="list-group-item list-group-item-dark">teste</li>
        );
    }

}
const domContainer = document.querySelector('#listeProjet');
 
//ReactDOM.render(<Questionnaire data=getData(test)/>, domContainer);
const getData = (name, json = true) => {
    const value = domContainer.getAttribute(`data-${name}`);
    return  value;
};

ReactDOM.render(<Welcome data={getData("select") }/>, document.getElementById('listeProjet'));






















 