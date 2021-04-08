import * as React from 'react';
//import ReactDOM from 'react-dom';

class AddStorage extends React.Component  {
  constructor(props){
    super(props);
    this.state = {
        token: 'Bearer '+props.token,
        postId: null,
        idUser: props.idUser,
        nameStorage: props.nameStorage
      };
    }

   componentDidMount() {
        // Simple POST request with a JSON body using fetch
        const requestOptions = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json-patch+json', 'Authorization': this.state.token},
            body: JSON.stringify({ userId: this.state.idUser, storageName: this.state.nameStorage })
        };
        fetch('http://localhost:8080/api/Storage', requestOptions)
            .then(res => res.json())
            .then(data => this.setState({ postId: data.id }))
    }




    render(){

        return(
            <div id="addStorage">
                    Dodano  biblioteczkę o nazwie: {this.state.nameStorage}!
            </div>
        )
    }
}




export default AddStorage;