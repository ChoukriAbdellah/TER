import React, { Component } from 'react';
import question from './questions';
import Bar from './bar'




class TodoList extends Component{
    constructor(){
        super();
        this.state={
            userInput:'',
            item:[],
            question,
            reponses:[],
            repAndQ: [],
            num:0,
            numArbre:0,
            arbre:[]

        };
    }
    onChange(event){
        this.setState({
            userInput: event.target.value
        });
    }
    addTodo(event){
    event.preventDefault();
    this.fonciton1();
    this.setState({
        userInput: '',
        num: this.state.num +1,
        item: [...this.state.item, this.state.question[this.state.num]],
        reponses: [...this.state.reponses, this.state.userInput],
        repAndQ: [...this.state.repAndQ,this.state.question[this.state.num], this.state.userInput]

        
    });

    }
 
    deleteItem(key) {
        var filteredItems = this.state.repAndQ.filter(function (item) {
          return (item.key !== key);
        });
       
        this.setState({
          repAndQ: filteredItems
        });
      }
      

    myRender(){
       
        if(this.state.num===0){
        return(
            <div className="form-check">
            <input className="form-check-input" 
            type="radio"
             name="typeSol"
              id="exampleRadios1"
               value="Viabilisation" 
               onChange={this.onChange.bind(this)}
               />
               <label>ARGILEUX</label>
              <p></p>
              <input className="form-check-input" 
            type="radio"
             name="typeSol"
              id="exampleRadios2"
               value="Etude du sol" 
               onChange={this.onChange.bind(this)}
               />
               <label>CALCAIRE</label>
            <label className="form-check-label" forhtml="exampleRadios1">
             
            </label>

            <p></p>
              <input className="form-check-input" 
            type="radio"
             name="typeSol"
              id="exampleRadios2"
               value="Etude du sol" 
               onChange={this.onChange.bind(this)}
               />
               <label>HUMIFÈRE</label>
            <label className="form-check-label" forhtml="exampleRadios1">
             
            </label>
            <p></p>
              <input className="form-check-input" 
            type="radio"
             name="typeSol"
              id="exampleRadios2"
               value="Etude du sol" 
               onChange={this.onChange.bind(this)}
               />
               <label>LIMONEUX</label>
            <label className="form-check-label" forhtml="exampleRadios1">
             
            </label>

            <p></p>
              <input className="form-check-input" 
            type="radio"
             name="typeSol"
              id="exampleRadios2"
               value="Etude du sol" 
               onChange={this.onChange.bind(this)}
               />
               <label>SABLEUX</label>
            <label className="form-check-label" forhtml="exampleRadios1">
             
            </label>

          </div>
            
            


        );
        }
        if(this.state.num===1){
            
            return(
                <div className="contact100-form-radio m-t-15">
                <input
                 className="input100" 
                 type="number" 
                 name="phone"
                  placeholder="nombre d'arbre"
                  onChange={this.onChange.bind(this)}
                  value={this.state.userInput}
                  >
            </input>
            </div>
                
                
    
            );
            }
            

	if(this.state.num===2){
        return(
	<div className="contact100-form-radio m-t-15">
                <label>type de l'arbre</label>
                            <input
                             className="input100" 
                             type="text" 
                             name="phone"
                              placeholder="exemple: grand"
                              onChange={this.onChange.bind(this)}
                              value={this.state.userInput}
                              >
						</input>
                       
                        </div>
                        );
}	
if(this.state.num===3){
    return(
<div className="form-check">
<label>taille de l'arbre</label>
                            <input
                             className="input100" 
                             type="number" 
                             name="phone"
                              placeholder="en m"
                              onChange={this.onChange.bind(this)}
                              value={this.state.userInput}
                              >
						</input>
              </div>
                    );
}	
if(this.state.num===4){
    return(
<div className="form-check">

                            <input
                             className="input100" 
                             type="number" 
                             name="phone"
                              placeholder="en m"
                              onChange={this.onChange.bind(this)}
                              value={this.state.userInput}
                              >
						</input>
              </div>
                    );
}

        
    }    
  


   
      
    renderTodo(){
        return this.state.repAndQ.map((t) => {
            return(
                <div role="alert">
                <boutton  className="alert-link">{t}</boutton>
                <br/>
              </div>
              
            );
        

        });
    }
    typeBouton(){
        {
            if(this.state.num!==4){
            return(
             <button 
             onClick={this.addTodo.bind(this)
            }
             className="btn btn-primary"
             >Suivant
             </button>
            );
            }
         
            if(this.state.num===4){
            
                return(
              <input
              className="form-check-input"
              type="submit"
              value="Envoyer"
              >
              
              </input>
                );
            }
         
    }
}


fonciton1(event){
    if(this.state.num===1)
   this.setState({
       numArbre: this.state.userInput
   });

}

    render(){
        return(

            <div>
              
               
                <Bar grosOeuvre={this.state.num*20}  />

                


                <div className="list-group">
             
                {this.renderTodo()}
                   
                    
                    
                </div>    
                <form  action="questionnaire.html" className="form-form-row align-items-center" method="GET">
                
                
                <legend><span className="number">{this.state.num}</span>{this.state.question[this.state.num]}</legend>
  
                   {this.myRender()}
                   

                   {this.typeBouton()}
                    
                    
                    
                </form>
               

                
                
            </div>
        );
    }
}
export default TodoList ;
