import React from 'react'
import ReactDom from 'react-dom'

export default class Form extends React.component {
    constructor() {
        super();
        this.state
        data:[]

    }
}
render ()
{
    return (

        <div className="container">
    <div className="row">
    <div className="col-md-6 col-md-offset-3">
    <div className="panel panel-primary">

    <div className="panel-heading">
    <h3 className="panel-title">Apply here</h3>
</div>

<div className="panel-body">



<div className="form-group">
    <label for="title">First Name</label>
<input type="text" className="form-control" name="title" placeholder="you're name ..."required>
</div>
<div className="form-group">
    <label for="title">Last Name</label>
<input type="text" className="form-control" name="title" placeholder="you're last name ..."required>
</div>
<div className="form-group">
    <label for="title">Email</label>
    <input type="text" className="form-control" name="title" placeholder="email@example.com ..."required>
</div>
<div className="form-group">
    <label for="title">subject</label>
    <input type="text" className="form-control" name="title" placeholder="subject ..."required>
</div>



<div className="form-group">
    <label for="body">Description</label>
    <textarea className="form-control" name="body" size="65" placeholder="write ur description ..." required=""></textarea>
    </div>
    <br>
    <div className="control">
    <a href="/forms/create"  className="btn btn-outline-primary">Publish</button>
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    )
}
if (document.getElementById('app')) {

    ReactDom.render( < create / >, document.getElementById('app')
)
}