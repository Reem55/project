import React from 'react'
import ReactDom from 'react-dom'

export default class Form extends React.component {

    constructor() {
        super();
        this.state = {
            data: []
        }
    }

    componentWillMount() {
        let $this = this;

        axios.get('/api/users').then(resoponse => {
         $this.setState({
            data: response.data
        })
        }).catch(error => {
            console.log(error)
        })
    }
    render() {
        return (

            <div>
            <h2> Form</h2>
            <table  className = "table table-bordered">
            <thead>
            <tr>
            <th>First Name</th>
             <th>Last Name</th>
              <th>email</th>
            <th>subject</th>
        <th>descritpion</th>
            </tr>
            </thead>
            <tbody>
        {this.state.data.map((form, 1) = > ()

        < tr >
        < td > {first name} < /td>
        < td >{last name}</td>
        < td > johndoe@example.com < /td>
        < td > new chapter < /td>
        < td > hello < /td>
        < td > < ahref = ""
        className = "btn btn-primary" > Edit < /a> ||
            < a
        href = ""
        className = "btn btn-danger" > Delete < /a>
            < /td>
            < /tr>
    )
    })
            </tbody>
            </table>
            </div>


    )

    }
}

ReactDom.render(<Form/> document.getElementById('App'))