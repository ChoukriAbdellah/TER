import React from 'react';
import "./flat.css"



class Flat extends React.Component{
    handleClick= () => {
        this.props.handleClick(this.props.flat)
    }
    selectFlat = (flat) => {
        console.log(flat.name);
    }
    render(){
        
        const title=  this.props.flat[1];
        
         const style= {
             backgroundImage: `url('https://raw.githubusercontent.com/lewagon/flats-boilerplate/master/images/flat1.jpg')`
         };
        return(
            <div className="flat" onClick={this.handleClick}>
                <div className="flat-picture" 
                style= {style}>
                </div>
                <div
                 className="flat-title">
                {title}
                
               
                
                </div>
            </div>
        )
    }
}
export default Flat;