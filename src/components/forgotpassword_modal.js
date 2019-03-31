import React, { Component } from 'react';
import '../App.css';

class PasswordForgotModal extends Component {
    constructor(props){
        super(props);
        this.state={
        };
        this.closePasswordForgotModal=this.closePasswordForgotModal.bind(this)
    }

    closePasswordForgotModal() {
        const { openCloseForgotPasswordModal } = this.props;
        openCloseForgotPasswordModal();
    }

    componentWillMount() {

    }

    render() {
        return (
            <div className="w3-modal">
                <div className="forgot-password-modal w3-modal-content">
                    <div className="w3-container">
                        <div>
                            <h2 className="font-size"> Forgot Password ?</h2>
                            <i className="fa fa-times w3-button w3-display-topright"
                               onClick={()=> this.closePasswordForgotModal()}
                               aria-hidden="true"></i>
                        </div>
                        <div className=" w3l-form-group">
                            <label>Email Address:</label>
                            <div className="group">
                                <i className="fa fa-envelope"/>
                                <input
                                    type="text"
                                    className="form-control"
                                    placeholder="Email Address"
                                    required="required"
                                />
                            </div>
                        </div>
                        <button type="submit">Reset Password</button>
                    </div>
                </div>
            </div>
        );
    }
}

export default PasswordForgotModal;
