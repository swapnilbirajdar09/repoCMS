import React, { Component } from 'react';
import '../App.css';

class CreateUserModal extends Component {
    constructor(props){
        super(props);
        this.state={
            password: '',
            type:'password',
        };
    }

    closeCreateUserModal() {

    }

    componentWillMount() {

    }

    handlePasswordChange(e) {
        // const { password } =  this.state;
        this.setState({
            password: e.target.value,
        })
    }

    showPassword() {
        const { type } =  this.state;
        if(type==='text') {
            this.setState({
                type:'password'
            })
        } else {
            this.setState({
                type:'text'
            })
        }

    }
    render() {
        const { showPassword,type } =  this.state;
        return (
            <div className="w3-modal create-user-modal-padding-top">
                <div className="create-user-modal w3-modal-content">
                    <div className="w3-container">
                        <div>
                            <h2 className="font-size"> Create User </h2>
                            <i className="fa fa-times w3-button w3-display-topright"
                               onClick={()=> this.closeCreateUserModal()}
                               aria-hidden="true"></i>
                        </div>
                        <div className=" w3l-form-group">
                            <label>User Name</label>
                            <div className="group">
                                <i className="fa fa-user"/>
                                <input
                                    type="text"
                                    className="form-control"
                                    placeholder="User Name"
                                    required="required"
                                    // onChange={(e)=> this.handleEmailChange(e)}
                                />
                            </div>
                        </div>
                        <div className=" w3l-form-group">
                            <label>Email</label>
                            <div className="group">
                                <i className="fa fa-envelope"/>
                                <input
                                    type="text"
                                    className="form-control"
                                    placeholder="Email Address"
                                    required="required"
                                    // onChange={(e)=> this.handleEmailChange(e)}

                                />
                            </div>
                        </div>
                        <div className=" w3l-form-group">
                            <label>Password</label>
                            <div className="group">
                                <i className="fa fa-unlock"/>
                                <input
                                    type={type}
                                    className="form-control"
                                    placeholder="Password"
                                    required="required"
                                    onChange={(e)=> this.handlePasswordChange(e)}
                                />
                                <i className="fa fa-eye"
                                   aria-hidden="true"
                                   onClick={()=>this.showPassword()}
                                />
                            </div>
                        </div>
                        <div className="flex">
                        <button className="create-user-modal-buttons" type="submit">Submit</button>
                        <button className="create-user-modal-buttons" type="submit">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default CreateUserModal;
