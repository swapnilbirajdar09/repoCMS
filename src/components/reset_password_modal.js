import React, { Component } from 'react';
import '../App.css';

class PasswordResetModal extends Component {
    constructor(props){
        super(props);
        this.state={
            newPasswordType: 'password',
            confirmPasswordType: 'password',
            newPassword: '',
            confirmNewPassword: '',

        };
        this.closePasswordResetModal=this.closePasswordResetModal.bind(this)
    }

    closePasswordResetModal() {
        const { openCloseResetasswordModal } = this.props;
        openCloseResetasswordModal();
    }

    handleNewPasswordChange(e) {
        // const { password } =  this.state;
        this.setState({
            newPassword: e.target.value,
        })
    }

    handleConfirmPasswordChange(e) {
        // const { password } =  this.state;
        this.setState({
            confirmNewPassword: e.target.value,
        })
    }

    showNewPassword() {
        const { newPasswordType } =  this.state;
        if(newPasswordType==='text') {
            this.setState({
                newPasswordType:'password'
            })
        } else {
            this.setState({
                newPasswordType:'text'
            })
        }
    }

    showConfirmPassword() {
        const { confirmPasswordType } =  this.state;
        if(confirmPasswordType==='text') {
            this.setState({
                confirmPasswordType:'password'
            })
        } else {
            this.setState({
                confirmPasswordType:'text'
            })
        }
    }

    componentWillMount() {

    }

    render() {
        const { confirmPasswordType, newPasswordType } = this.state;
        return (
            <div className="w3-modal">
                <div className="reset-password-modal w3-modal-content">
                    <div className="w3-container">
                        <div>
                            <h2 className="font-size"> Reset Your Password </h2>
                            <i className="fa fa-times w3-button w3-display-topright"
                               onClick={()=> this.closePasswordResetModal()}
                               aria-hidden="true"></i>
                        </div>
                        <div className=" w3l-form-group">
                            <label>New Password:</label>
                            <div className="group">
                                <i className="fa fa-unlock"/>
                                <input
                                    type={newPasswordType}
                                    className="form-control"
                                    placeholder="Password"
                                    required="required"
                                    onChange={(e)=> this.handleNewPasswordChange(e)}
                                />
                                <i className="fa fa-eye"
                                   aria-hidden="true"
                                   onClick={()=>this.showNewPassword()}
                                />
                            </div>
                        </div>
                        <div className=" w3l-form-group">
                            <label>Confirm New Password:</label>
                            <div className="group">
                                <i className="fa fa-unlock"/>
                                <input
                                    type={confirmPasswordType}
                                    className="form-control"
                                    placeholder="Password"
                                    required="required"
                                    onChange={(e)=> this.handleConfirmPasswordChange(e)}
                                />
                                <i className="fa fa-eye"
                                   aria-hidden="true"
                                   onClick={()=>this.showConfirmPassword()}
                                />
                            </div>
                        </div>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        );
    }
}

export default PasswordResetModal;
