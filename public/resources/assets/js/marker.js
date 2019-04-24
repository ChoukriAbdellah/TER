import React from 'react';

class Marker extends React.Component{
    render(){

        return(
        <div className="marker">
        {
            this.props.text
        }

        </div>
        );
    }
}
export default Marker;