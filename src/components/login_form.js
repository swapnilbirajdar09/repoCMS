import React, { Component, Fragment } from 'react';
import PasswordForgotModal from './forgotpassword_modal.js';
// import CreateUserModal from './create_user.js';
// import PasswordResetModal from './reset_password_modal'
import CreateContentModal from './addcontent'
import '../App.css';

class Login extends Component {
    constructor(props){
        super(props);
        this.state={
            showForgotPasswordModal : false,
            emailAddress: '',
            password: '',
            type:'password',
        };
        this.openCloseForgotPasswordModal= this.openCloseForgotPasswordModal.bind(this);
    }

    openCloseForgotPasswordModal() {
        const { showForgotPasswordModal } =  this.state;
        this.setState({
            showForgotPasswordModal: !showForgotPasswordModal
        })
    }

    handleEmailChange(e) {
        // const { emailAddress } =  this.state;
        this.setState({
            emailAddress: e.target.value,
        })
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

    componentWillMount() {

    }

    render() {
        const { showForgotPasswordModal, type } = this.state;
        return (
            <Fragment>
            <div className=" w3l-login-form">
                <h2>Login Here</h2>
                <form action="#" method="POST">

                    <div className=" w3l-form-group">
                        <label>Email Address:</label>
                        <div className="group">
                            <i className="fa fa-envelope"/>
                            <input
                                type="text"
                                className="form-control"
                                placeholder="Email Address"
                                required="required"
                                onChange={(e)=> this.handleEmailChange(e)}

                            />
                        </div>
                    </div>
                    <div className=" w3l-form-group">
                        <label>Password:</label>
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
                    <button type="submit">Login</button>
                    <div className="">
                        <p className="w3-center" onClick={()=> this.openCloseForgotPasswordModal()}>Forgot Password?</p>
                    </div>
                </form>
            </div>
                {
                    showForgotPasswordModal?
                        <PasswordForgotModal
                            openCloseForgotPasswordModal={this.openCloseForgotPasswordModal}/>:
                        null
                }
            </Fragment>
        );
    }
}

export default Login;
