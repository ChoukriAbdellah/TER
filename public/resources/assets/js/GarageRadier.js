import React, { Component } from 'react';


class GarageRadier extends Component {
	
	  constructor() {
		super()
		this.state={
		 showMe:false,
		 oui:'Oui'
		}

	  }
	operation() {
	  this.setState({
		showMe:!this.state.showMe
	  })

	  if(this.state.oui==="Oui") {
	  	this.setState({
		oui:'Non'
	  	})
	  }
	  else {
	  	this.setState({
			oui:'Oui'
		})
	  }
	}

	
	

	render() {
		return (
		<div>
			<nav>
				
					<div className="wideDiv">
						<a id='nano' href="#" onClick={()=>this.operation()}>{this.state.oui}</a>
					</div>
				
			</nav>
			{
			this.state.showMe?
			<div>
			{{ form_label(form.largeurFouille, "Quel est la largeur des fouilles ? ", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}													
														<div class="col-sm-9">
															{{ form_row(form.largeurFouille, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}           
														
														</div>
														
														{{ form_label(form.profondeurFouille, "Quel est la profondeur des fouilles ? ", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}													
														<div class="col-sm-9">
															{{ form_row(form.profondeurFouille, {'attr': {'class': 'form-control input-lg mb-md'}} ) }}           
														
														</div>
			</div>
			: null
			}
			
		</div>
		)
	}
}


export default GarageRadier;