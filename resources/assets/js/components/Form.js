import React from 'react'
import ReactDom from 'react-dom'

export default class Form extends React.component {
    constructor() {
        super();
        this.state
        data:[]

    }

    componentWilMount() {
        let $this = this;
        axios.get('api/users').then(response => {
            this.setstate({
            data: response.data
        })

        }).catch(error => {
            console.log(error)
        })
    }

    render() {
        return (
            <div className="col-sm-8 blog-main">
            <div className="col-sm-8 blog-main">
            <div className="blog-post">
            <div className="card">
            <div className="card-block">
            <h2 className="blog-post-title">
            <a href="forms/{{ $form->id }}">
            {this.state.data.map((form, 1) => {

            }
    )}
    </a>
        </h2>



        </div>
        </div>

    }
)}



    )

    }


if (document.getElementById('app')) {
    ReactDom.render( < Form/ > document.getElementById('App')
)
}