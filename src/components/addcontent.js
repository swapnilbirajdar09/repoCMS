import React, { Component } from 'react';
import '../App.css';

class CreateContentModal extends Component {
    constructor(props){
        super(props);
        this.state={
            openCloseDropDown: false,
        };
    }

    closeCreateUserModal() {

    }

    componentWillMount() {

    }

    openCloseDropDown() {
        const { openCloseDropDown }=this.state;
        this.setState({
            openCloseDropDown:!openCloseDropDown,
        })
    }

    render() {
        const { openCloseDropDown }=this.state;
        return (
            <div className="w3-modal create-user-modal-padding-top">
                <div className="create-user-modal w3-modal-content">
                    <div className="w3-container">
                        <div>
                            <h2 className="font-size"> Add content </h2>
                            <i className="fa fa-times w3-button w3-display-topright"
                               onClick={()=> this.closeCreateUserModal()}
                               aria-hidden="true"></i>
                        </div>
                        <div className=" w3l-form-group">
                            <label>Title</label>
                            <div className="group">
                                <input
                                    type="text"
                                    className="form-control"
                                    placeholder="User Name"
                                    required="required"
                                    // onChange={(e)=> this.handleEmailChange(e)}
                                />
                            </div>
                        </div>
                        <div className="w3l-form-group">
                            <div className="">
                                <button onClick={()=> this.openCloseDropDown()}>select content Type
                                    <i className="fa fa-caret-down" aria-hidden="true"></i>
                                </button>
                            </div>
                            {
                                openCloseDropDown ?
                                    <ul>
                                        <li className="dropdown">video</li>
                                        <li className="dropdown">article</li>
                                    </ul>:
                                    null
                            }
                        </div>
                        <div className=" w3l-form-group">
                            <label>Cover Photo</label>
                            <div className="group">

                            </div>
                        </div>
                        <div>
                            <p>rte</p>
                            <p>video link</p>
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

export default CreateContentModal;
