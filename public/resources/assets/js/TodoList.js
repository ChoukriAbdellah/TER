import React, { Component } from 'react';
import question from './questions';
import Welcome from './Welcome';






class TodoList extends Component{
    constructor(){
        super();
        this.state={
            userInput:'',
            item:[],
            question,
            reponses:[],
            repAndQ: [],
            num:0

        };
    }
    onChange(event){
        this.setState({
            userInput: event.target.value
        });
    }
    addTodo(event){
    event.preventDefault();
    this.setState({
        userInput: '',
        num: this.state.num +1,
        item: [...this.state.item, this.state.question[this.state.num]],
        reponses: [...this.state.reponses, this.state.userInput],
        repAndQ: [...this.state.repAndQ,this.state.question[this.state.num], this.state.userInput]

        
    });

    }
    renderForm(e,rep){
        if(e===0){
            console.log(e+" e et rep  "+rep)
        return(
            
            <input 
            type="hidden"
             name="q0"
              
               value={rep}
               
               />
               
              
            
            


        );
        }
        if(e===1){
            return(
               
                <input className="form-check-input" 
                type="hidden"
                 name="1"
                  
                   value={rep} 
                   
                   />
                  
              
                
                
    
            );
            }
            

	if(e===2){
        return(
	
                            <input
                              
                             type="hidden" 
                             name="2"
                             
                            value={rep}
                              >
						</input>
                        
                        );
}	
if(e===3){
    return(
                <input 
                type="hidden"
                 name="3"
                   value={rep} 
                   />
                  
                    );
}
if(e===4){
    return(
                <input 
                type="hidden"
                 name="4"
                   value={rep} 
                   />
                  
                    );


    }    
}


    myRender(){
        if(this.state.num===0){
        return(
            <div className="form-check">
            <input className="form-check-input" 
            type="checkbox"
             name="exampleRadios"
              id="exampleRadios1"
               value="Viabilisation" 
               onChange={this.onChange.bind(this)}
               />
               <label>Viabilisation</label>
              <p></p>
              <input className="form-check-input" 
            type="checkbox"
             name="exampleRadios2"
              id="exampleRadios2"
               value="Etude du sol" 
               onChange={this.onChange.bind(this)}
               />
               <label>Etude du sol</label>
            <label className="form-check-label" forhtml="exampleRadios1">
             
            </label>
          </div>
            
            


        );
        }
        if(this.state.num===1){
            return(
                <div className="form-check">
                <input className="form-check-input" 
                type="radio"
                 name="exampleRadios3"
                  id="exampleRadios3"
                   value="Toiture plate" 
                   onChange={this.onChange.bind(this)}
                   />
                   <label>Toiture plate</label>
                  <p></p>
                  <input className="form-check-input" 
                type="radio"
                 name="exampleRadios4"
                  id="exampleRadios4"
                   value="Toiture inclinée" 
                   onChange={this.onChange.bind(this)}
                   />
                   <label>Toiture inclinée</label>
                <label className="form-check-label" forhtml="exampleRadios1">
                 
                </label>
              </div>
                
                
    
            );
            }
            

	if(this.state.num===3){
        return(
	<div className="contact100-form-radio m-t-15">
                            <input
                             className="input100" 
                             type="number" 
                             name="phone"
                              placeholder="En m²"
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
                <input className="form-check-input" 
                type="radio"
                 name="exampleRadios5"
                  id="exampleRadios5"
                   value="Toiture plate" 
                   onChange={this.onChange.bind(this)}
                   />
                   <label>Traditionelle</label>
                  <p></p>
                  <input className="form-check-input" 
                type="radio"
                 name="exampleRadios6"
                  id="exampleRadios6"
                   value="Contemporain" 
                   onChange={this.onChange.bind(this)}
                   />
                   <label>Contemporain</label>
                <label className="form-check-label" forhtml="exampleRadios1">
                 
                </label>
                <p></p>
                  <input className="form-check-input" 
                type="radio"
                 name="exampleRadios7"
                  id="exampleRadios7"
                   value="je ne sais pas" 
                   onChange={this.onChange.bind(this)}
                   />
                   <label>je ne sais pas</label>
                <label className="form-check-label" forhtml="exampleRadios1">
                 
                </label>
                <input 
                type="hidden"
                 name="3"
                   value={this.state.reponses[3]} 
                   />
              </div>
                    );
}	

        else{
return(
    <input value={this.state.userInput} 
                    type="texte"
                     placeholder="entrez votre réponse"
                     onChange={this.onChange.bind(this)}
                     className="form-control mb-2"
                     />
);
        }
    }    
  


   
      
    renderTodo(){
        return this.state.repAndQ.map((t) => {
            return(
                <div role="alert">
                <a  className="alert-link">{t}</a>
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
             onClick={this.addTodo.bind(this)}
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
 fonction(x){
     
    
     return(
                    this.renderForm(x,this.state.reponses[x])
     );
     
 
}
 fonc(){
     

    for (var i=0; i < this.state.num;i++){
        this.fonction(i);
        //console.log(i+"   "+this.state.reponses[i]);
      }
     
 
}
    render(){
        return(
            <div>
               
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
